<?php
require 'vendor/autoload.php';
// http://localhost/test/

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'

// Send an asynchronous request.
/* 
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="container">
  <form action="logged.php" method="POST">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<form method="get" action="pag/test.php">
	
		<!-- <select name='consegna' multiple="multiple"> -->
		<select name='consegna[]' multiple="multiple">
			<option value=1>option1</option>";
			<option value=2>option2</option>";
			<option value=3>option3</option>";
		</select>

		<input type='submit'>
	</form>

</div>
<script src="app.js"></script>
</body>
</html>

<?php
/*
die( $ );
die( '' );
var_dump( $ );
echo '<pre>';print_r( $ );
if ( isset( $ )) { var_dump( $ ); echo '<pre>';print_r( $ ); die(); }
*/

/*
$test = "";
if ( is_null( $var )) {$test .= "null, ";}
if ( isset( $var )) { $test .= "settata, "; }
if ( !$var ) {$test .= "false, ";} 
if ( empty( $var )) {$test .= "empty, ";}
if ( $var == 0) {$test .= "0(NOTstrict), ";}
if ( $var === 0) {$test .= "0(strict), ";}
echo $test;
*/
/*
if(nomeValuta == "dollaro") { // chiamata AJAX 

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      
      if(parseFloat(this.responseText) > 0){
        const cambio = parseFloat(this.responseText);
        document.getElementById("cambio").value = cambio;
      }
      else
        alert('Attenzione: Non e\' stato possibile recuperare il valore di cambio. Inserirlo manualmente.'); 	
    }
  };
    xmlhttp.open("GET","USD.php?dataValuta="+dataValuta ,true);
    xmlhttp.send();
  } else { // chiamata AJAX 

    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    } else {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {


        if(parseFloat(this.responseText) > 0){
        const cambio = parseFloat(this.responseText);
        document.getElementById("cambio").value = cambio;
        }
        else {
          alert('Attenzione: Non e\' stato possibile recuperare il valore di cambio. Inserirlo manualmente.'); 
        }
      }
    };
    xmlhttp.open("GET","GBP.php?dataValuta="+dataValuta ,true);
    xmlhttp.send();
  }
  */
  // </DM>

?>