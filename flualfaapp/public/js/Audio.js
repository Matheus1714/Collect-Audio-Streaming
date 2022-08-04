const player = document.getElementById('player');
const downloadLink = document.getElementById('download');
const stopButton = document.getElementById('stop');
const startButton = document.getElementById('start')

handleSucess = (stream) => {
    const options = { mimeType: 'audio/webm' };
    const mediaRecorder = new MediaRecorder(stream, options);

    startButton.addEventListener('click', _ => {
        mediaRecorder.start();
        startButton.disabled = true
        stopButton.disabled = false
    });

    const audioChunks = [];

    mediaRecorder.addEventListener("dataavailable", event => {
        audioChunks.pop();
        audioChunks.push(event.data);
    });

    mediaRecorder.addEventListener("stop", () => {
        const audioBlob = new Blob(audioChunks);
        const audioUrl = URL.createObjectURL(audioBlob);

        const audio = new Audio(audioUrl);
        player.src = audioUrl

        const xhr = new XMLHttpRequest();
        xhr.onload = (e) =>{
            if(this.readyState === 4) {
                console.log("Server returned: ",e.target.responseText);
            }
        }

        let fd = new FormData()
        fd.append('audioData', audioBlob)
        xhr.open("POST", "", true)
        xhr.send(fd)

        startButton.disabled = false
        stopButton.disabled = true
    });

    mediaRecorder.addEventListener('stop', () => {
        downloadLink.href = URL.createObjectURL(new Blob(audioChunks));
        downloadLink.download = 'acetest.wav';
    })

    stopButton.addEventListener('click', _ => {
        mediaRecorder.stop();
    });
}

navigator.mediaDevices.getUserMedia({ audio: true })
    .then(handleSucess);
