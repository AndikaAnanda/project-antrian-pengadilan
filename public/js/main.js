// Include feather Icons Library
feather.replace();

// Call the queues
const panggilAntrian = async (category, type, calledNumber, repeat) => {
    try {
        if (!repeat) {
            await fetch(`/ptsp/call/update/${category}/${type}`)
        }
        let ticketNumber = calledNumber + 1
        let ticketLetter
        let counterNumber
        let audios = []
        switch (type) {
            case 'umum_dan_keuangan':
                ticketLetter = 'A';
                counterNumber = '1';
                break;
            case 'hukum':
                ticketLetter = 'B';
                counterNumber = '2';
                break;
            case 'phi':
                ticketLetter = 'C';
                counterNumber = '3';
                break;
            case 'tipikor':
                ticketLetter = 'D';
                counterNumber = '4';
                break;
            case 'pidana':
                ticketLetter = 'E';
                counterNumber = '5';
                break;
            case 'perdata':
                ticketLetter = 'F';
                counterNumber = '6';
                break;
            default:
                break;
        }
        
        if (category === 'umum') {
            if (ticketNumber >= 12 && ticketNumber <= 19) {
                let unitNumber = ticketNumber % 10
                playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', `/audio/${ticketLetter}.wav`, `/audio/${unitNumber}.wav`, `/audio/belas.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
            } else if (ticketNumber >= 20 && ticketNumber <= 99) {
                let tensNumber = Math.floor(ticketNumber / 10)
                let unitNumber = ticketNumber % 10
                if (unitNumber === 0) {
                    playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', `/audio/${ticketLetter}.wav`, `/audio/${tensNumber}.wav`, `/audio/puluh.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
                } else {
                    playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', `/audio/${ticketLetter}.wav`, `/audio/${tensNumber}.wav`, `/audio/puluh.wav`, `/audio/${unitNumber}.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
                }
            } 
            else {
                playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', `/audio/${ticketLetter}.wav`, `/audio/${ticketNumber}.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
            }
        } else if (category === 'prioritas') {
            if (ticketNumber >= 12 && ticketNumber <= 19) {
                let unitNumber = ticketNumber % 10
                playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', '/audio/P.wav', `/audio/${ticketLetter}.wav`, `/audio/${unitNumber}.wav`, `/audio/belas.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
            } else if (ticketNumber >= 20 && ticketNumber <= 99) {
                let tensNumber = Math.floor(ticketNumber / 10)
                let unitNumber = ticketNumber % 10
                if (unitNumber === 0) {
                    playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', '/audio/P.wav', `/audio/${ticketLetter}.wav`, `/audio/${tensNumber}.wav`, `/audio/puluh.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
                } else {
                    playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', '/audio/P.wav', `/audio/${ticketLetter}.wav`, `/audio/${tensNumber}.wav`, `/audio/puluh.wav`, `/audio/${unitNumber}.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
                }
            } 
            else {
                playAudioSequentially(['/audio/_ding.wav', '/audio/_noantrian.wav', '/audio/P.wav', `/audio/${ticketLetter}.wav`, `/audio/${ticketNumber}.wav`, '/audio/loket.wav', `/audio/${counterNumber}.wav`]);
            }
        }
    } catch (error) {
        console.log(error);
    }
}

const playAudioSequentially = async (audioUrls) => {
    for (const url of audioUrls) {
        await playAudio(url);
    }
    // All audios have been played, reload the location
    location.reload();
}

const playAudio = (src) => {
    return new Promise(resolve => {
        const audio = new Audio(src);
        audio.onended = resolve;
        audio.play();
    });
}