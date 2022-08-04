@extends('layouts.main')

@section('title', 'Captura de Áudio')

@section('content')

<div class="content">
  <div class="card">
    <div class="title content">
      <p>Collect Audio</p>
    </div>
    <div class="player content">
      <audio id="player" controls></audio>
    </div>
    <div class="controls">
      <div class="button-start content">
        <button id="start">Start Record</button>
      </div>
      <div class="button-stop content">
        <button id="stop" disabled>Stop Record</button>
      </div>
      <div class="link content">
        <a id="download">Download</a>
      </div>
      <div class="send content">
        <button id="send">Send To Server</button>
      </div>
    </div>
  </div>
</div>

<script src="js/Audio.js"></script>
    
@endsection
