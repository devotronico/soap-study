<?php
$hostname = "";
$username = "";
$password = "";

$conn = new mysqli("localhost", "root", "", "db_sicurezza");
if($conn->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn->set_charset("utf8mb4");
/*
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

} 
*/

## campi tabella login del Gestionale
### id          int(11)	                        [Primaria][AUTO_INCREMENT]
### username	text        utf8mb4_unicode_ci
### password	text        utf8mb4_unicode_ci	
### dash	    text        utf8mb4_unicode_ci	



## campi tabella login di Daniele
### id	        int(11)				            [Primaria][AUTO_INCREMENT]
### username	varchar(32)	utf8mb4_unicode_ci	
### password	varchar(32)	utf8mb4_unicode_ci	

## charset info
### [stackoverflow](https://stackoverflow.com/questions/51278467/mysql-collation-utf8mb4-unicode-ci-vs-utf8mb4-default)


# Sicurezza
# [sql-injection](https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection)
## in php.ini
### percorsao file php.ini: C:\xampp\php\php.ini
### cercare e settare la riga default_charset 
### es.: default_charset = "utf-8"

## in phpadmin:
### in Operazioni:
### settare Codifica caratteri a utf8mb4_unicode_ci

