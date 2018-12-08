<title>Encrypt</title>
@extends('layouts.app')

@section('content')
  <script src="js/crypto-js/src/core.js"></script>
  <script src="js/crypto-js/src/sha256.js"></script>
  <h1>Encrypt</h1>
  <input type="text" id="name" name="" value="">
  <input type="text" id="vote" name="" value="">
  <p>Hash of the vote:</p>
  <p id="voteplace"></p>
  <script type="text/javascript">
    function testSHA(person, voted) {
      var timestamp = Date.now();
      var x = CryptoJS.SHA256(person + voted) ;
      document.getElementById("voteplace").innerHTML = x;
    }
  </script>
  <button type="button" onclick="testSHA(id.value, vote.value)" name="button">try it</button>

@endsection
