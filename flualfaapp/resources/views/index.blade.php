@extends('layouts.main')

@section('title', 'Captura de Áudio')

@section('content')

<audio id="player" controls></audio>

<a id="download">Download</a>
<button id="start">Start</button>
<button id="stop">Stop</button>

<script>

  const player = document.getElementById('player');
  const downloadLink = document.getElementById('download');
  const stopButton = document.getElementById('stop');
  const startBUtton = document.getElementById('start')

  handleSucess = (stream) => {
    const options = {mimeType: 'audio/webm'};
    const mediaRecorder = new MediaRecorder(stream, options);

    startBUtton.addEventListener('click', _ => {
      console.log('start record')
      mediaRecorder.start();
    });

    const audioChunks = [];

    mediaRecorder.addEventListener("dataavailable", event => {
      audioChunks.pop();
      audioChunks.push(event.data);
    });

    mediaRecorder.addEventListener("stop", () => {
      console.log('create audio Blocb object')
      const audioBlob = new Blob(audioChunks);
      const audioUrl = URL.createObjectURL(audioBlob);

      const audio = new Audio(audioUrl);
      player.src = audioUrl
    });

    mediaRecorder.addEventListener('stop', () => {
      downloadLink.href = URL.createObjectURL(new Blob(audioChunks));
      downloadLink.download = 'acetest.wav';
    })

    stopButton.addEventListener('click', _ => {
        console.log('stop record')
        mediaRecorder.stop();
    });
  }

  navigator.mediaDevices.getUserMedia({ audio: true })
  .then(handleSucess);

</script>

    
@endsection
