// Include feather Icons Library
feather.replace();


// Panggil Antrian
const panggilAntrian = async (category, type) => {
    try {
        const response = await fetch(`/ptsp/call/update/${category}/${type}`)
        // const newValue = await response.text()
        playAudio('/audio/_noantrian.wav')

        await new Promise(resolve => setTimeout(resolve, 2000))
        location.reload();
    } catch (error) {
        console.log(error)
    }
}

const playAudio = (src) => {
    const audio = new Audio(src)
    audio.play()
}