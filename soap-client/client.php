<?php
ini_set('soap.wsdl_cache_ttl', 1);// Imposta una durata della cache
require 'Book.php';
// ini_set('soap.wsdl_cache_enabled', 0);
//ini_set('soap.wsdl_cache_ttl', 900);
// ini_set('default_socket_timeout', 15);

// http://localhost/soap-client/client.php

// argomento 1 il path del file WSDL é da remoto.
// argomento 2 valori da richiedere.
// http://localhost/soap-server/file/books.wsdl
//  'http://localhost/soap-server/file?WSDL',
$client = new SoapClient(
        'http://localhost/soap-server/file/books.wsdl',
        array(
                'classmap' => array('book' => "Book"),
        )
);

// restituisce una lista di tutte le funzioni all' interno del file SOAP
var_dump($client->__getFunctions());



### richiamiamo la funzione getBook definita nel file WSDL:
// > <wsdl:operation name="getBook">
 $book = $client->getBook(1);  echo $book;
 $autore = $client->getAutore(1);  echo $autore;
// var_dump($response->enc_value);



//  $book = $response->enc_value;
//  var_dump($book);

// var_dump($client->__getFunctions());
// extension=soap
