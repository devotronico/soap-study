<?php
// http://localhost/soap-server/server.php
// http://localhost/soap-server/file/books.wsdl
/**
 * È importante disabilitare la cache WSDL come mostrato durante il tempo di sviluppo,
 * altrimenti eventuali modifiche WSDL sul server potrebbero non avere effetto sul client
 */
ini_set("soap.wsdl_cache_enabled","0"); // importante disabilitare la cache WSDL
require 'Book.php';
// classmap mappa la classe Book
// La classe Book è mappata nel nodo <xsd:complexType name="book">
$server = new SoapServer("http://localhost/soap-server/file/books.wsdl", [
  'classmap' => [
      'book' => 'Book',
  ]
]);

// $server->addFunction('getBook'); // http://php.net/manual/en/soapserver.addfunction.php
$server->addFunction(['getBook', 'getAutore']); // http://php.net/manual/en/soapserver.addfunction.php
$server->handle();


// echo '<pre>';print_r( $server );

// la funzione getBook è mappata nel nodo: <wsdl:operation name="getBook">
function getBook($bookId)
{
  
    //simulazione di una ricerca. In un caso reale probabilmente faremo
    //una query sul database per restituire l'oggetto
    $book = new Book();
    $book->name = 'The Lord of the Rings';
    $book->year = 2017;
    return $book->name;
}

function getAutore($autoreId)
{
    return 'Doe';
}


// getBook(1);

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
?>