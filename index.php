<?php
require "dbh.inc.php";
require "dao/BookDAO.php";
require __DIR__ . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);


$dbh = new Dbh();
$pdo = $dbh->connect();
$bookDAO = new BookDAO($pdo);
$books = $bookDAO->read();
echo $twig->render('books.html.twig', ['books' => $books]);
