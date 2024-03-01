function handlePusherLogic(data) {
    try {
        let antrian = parseInt(data.antrian);
        if (data.kategoriAntrian === "umum") {
            document.getElementById("jumlahAntrianUmum").innerText = antrian;
            let nomorDipanggil = parseInt(
                document.getElementById("nomorDipanggilUmum").innerText
            );
            let sisa = antrian - nomorDipanggil;
            document.getElementById("nomorDipanggilUmum").innerText =
                nomorDipanggil;
            document.getElementById("sisaUmum").innerText = sisa;
        } else {
            document.getElementById("jumlahAntrianPrioritas").innerText =
                antrian;
            let nomorDipanggil = parseInt(
                document.getElementById("nomorDipanggilPrioritas").innerText
            );
            let sisa = antrian - nomorDipanggil;
            document.getElementById("nomorDipanggilPrioritas").innerText =
                nomorDipanggil;
            document.getElementById("sisaPrioritas").innerText = sisa;
        }
    } catch (e) {
        alert(e);
    }
}

// Common Pusher initialization code
Pusher.logToConsole = true;
var pusher = new Pusher("38b82fc40272e7396e5a", {
    cluster: "ap1",
});

var channel; // Declare the channel variable

// Check if the current URL contains the specified type
var currentUrl = window.location.href;

if (currentUrl.includes("/ptsp/call/show/umum_dan_keuangan")) {
    channel = pusher.subscribe("umum_dan_keuangan-channel");
} else if (currentUrl.includes("/ptsp/call/show/hukum")) {
    channel = pusher.subscribe("hukum-channel");
} else if (currentUrl.includes("/ptsp/call/show/phi")) {
    channel = pusher.subscribe("phi-channel");
} else if (currentUrl.includes("/ptsp/call/show/tipikor")) {
    channel = pusher.subscribe("tipikor-channel");
} else if (currentUrl.includes("/ptsp/call/show/pidana")) {
    channel = pusher.subscribe("pidana-channel");
} else if (currentUrl.includes("/ptsp/call/show/perdata")) {
    channel = pusher.subscribe("perdata-channel");
}

// Bind the event for the determined channel
channel.bind("antrian-updated", function (data) {
    handlePusherLogic(data);
});

// Call the queues
const panggilAntrian = async (category, type, calledNumber, repeat) => {
    try {
        if (!repeat) {
            await fetch(`/pengadilan/public/ptsp/call/update/${category}/${type}`);
        }
        let ticketNumber = calledNumber + 1;
        let ticketLetter;
        let counterNumber;
        let audios = [];
        switch (type) {
            case "umum_dan_keuangan":
                ticketLetter = "A";
                counterNumber = "1";
                break;
            case "hukum":
                ticketLetter = "B";
                counterNumber = "2";
                break;
            case "phi":
                ticketLetter = "C";
                counterNumber = "3";
                break;
            case "tipikor":
                ticketLetter = "D";
                counterNumber = "4";
                break;
            case "pidana":
                ticketLetter = "E";
                counterNumber = "5";
                break;
            case "perdata":
                ticketLetter = "F";
                counterNumber = "6";
                break;
            default:
                break;
        }

        if (category === "umum") {
            if (ticketNumber >= 12 && ticketNumber <= 19) {
                let unitNumber = ticketNumber % 10;
                playAudioSequentially([
                    "/pengadilan/public/audio/_ding.wav",
                    "/pengadilan/public/audio/_noantrian.wav",
                    `/pengadilan/public/audio/${ticketLetter}.wav`,
                    `/pengadilan/public/audio/${unitNumber}.wav`,
                    `/pengadilan/public/audio/belas.wav`,
                    "/pengadilan/public/audio/loket.wav",
                    `/pengadilan/public/audio/${counterNumber}.wav`,
                ]);
            } else if (ticketNumber >= 20 && ticketNumber <= 99) {
                let tensNumber = Math.floor(ticketNumber / 10);
                let unitNumber = ticketNumber % 10;
                if (unitNumber === 0) {
                    playAudioSequentially([
                        "/pengadilan/public/audio/_ding.wav",
                        "/pengadilan/public/audio/_noantrian.wav",
                        `/pengadilan/public/audio/${ticketLetter}.wav`,
                        `/pengadilan/public/audio/${tensNumber}.wav`,
                        `/pengadilan/public/audio/puluh.wav`,
                        "/pengadilan/public/audio/loket.wav",
                        `/pengadilan/public/audio/${counterNumber}.wav`,
                    ]);
                } else {
                    playAudioSequentially([
                        "/pengadilan/public/audio/_ding.wav",
                        "/pengadilan/public/audio/_noantrian.wav",
                        `/pengadilan/public/audio/${ticketLetter}.wav`,
                        `/pengadilan/public/audio/${tensNumber}.wav`,
                        `/pengadilan/public/audio/puluh.wav`,
                        `/pengadilan/public/audio/${unitNumber}.wav`,
                        "/pengadilan/public/audio/loket.wav",
                        `/pengadilan/public/audio/${counterNumber}.wav`,
                    ]);
                }
            } else {
                playAudioSequentially([
                    "/pengadilan/public/audio/_ding.wav",
                    "/pengadilan/public/audio/_noantrian.wav",
                    `/pengadilan/public/audio/${ticketLetter}.wav`,
                    `/pengadilan/public/audio/${ticketNumber}.wav`,
                    "/pengadilan/public/audio/loket.wav",
                    `/pengadilan/public/audio/${counterNumber}.wav`,
                ]);
            }
        } else if (category === "prioritas") {
            if (ticketNumber >= 12 && ticketNumber <= 19) {
                let unitNumber = ticketNumber % 10;
                playAudioSequentially([
                    "/pengadilan/public/audio/_ding.wav",
                    "/pengadilan/public/audio/_noantrian.wav",
                    "/pengadilan/public/audio/P.wav",
                    `/pengadilan/public/audio/${ticketLetter}.wav`,
                    `/pengadilan/public/audio/${unitNumber}.wav`,
                    `/pengadilan/public/audio/belas.wav`,
                    "/pengadilan/public/audio/loket.wav",
                    `/pengadilan/public/audio/${counterNumber}.wav`,
                ]);
            } else if (ticketNumber >= 20 && ticketNumber <= 99) {
                let tensNumber = Math.floor(ticketNumber / 10);
                let unitNumber = ticketNumber % 10;
                if (unitNumber === 0) {
                    playAudioSequentially([
                        "/pengadilan/public/audio/_ding.wav",
                        "/pengadilan/public/audio/_noantrian.wav",
                        "/pengadilan/public/audio/P.wav",
                        `/pengadilan/public/audio/${ticketLetter}.wav`,
                        `/pengadilan/public/audio/${tensNumber}.wav`,
                        `/pengadilan/public/audio/puluh.wav`,
                        "/pengadilan/public/audio/loket.wav",
                        `/pengadilan/public/audio/${counterNumber}.wav`,
                    ]);
                } else {
                    playAudioSequentially([
                        "/pengadilan/public/audio/_ding.wav",
                        "/pengadilan/public/audio/_noantrian.wav",
                        "/pengadilan/public/audio/P.wav",
                        `/pengadilan/public/audio/${ticketLetter}.wav`,
                        `/pengadilan/public/audio/${tensNumber}.wav`,
                        `/pengadilan/public/audio/puluh.wav`,
                        `/pengadilan/public/audio/${unitNumber}.wav`,
                        "/pengadilan/public/audio/loket.wav",
                        `/pengadilan/public/audio/${counterNumber}.wav`,
                    ]);
                }
            } else {
                playAudioSequentially([
                    "/pengadilan/public/audio/_ding.wav",
                    "/pengadilan/public/audio/_noantrian.wav",
                    "/pengadilan/public/audio/P.wav",
                    `/pengadilan/public/audio/${ticketLetter}.wav`,
                    `/pengadilan/public/audio/${ticketNumber}.wav`,
                    "/pengadilan/public/audio/loket.wav",
                    `/pengadilan/public/audio/${counterNumber}.wav`,
                ]);
            }
        }
    } catch (error) {
        console.log(error);
    }
};

const playAudioSequentially = async (audioUrls) => {
    for (const url of audioUrls) {
        await playAudio(url);
    }
    // All audios have been played, reload the location
    location.reload();
};

const playAudio = (src) => {
    return new Promise((resolve) => {
        const audio = new Audio(src);
        audio.onended = resolve;
        audio.play();
    });
};
