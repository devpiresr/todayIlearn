<?php

use Alura\Pdo\Domain\Model\Student;
use DateTimeImmutable;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student(null, 'Gabriel Pires', new DateTimeImmutable('1999-06-24'));

$sqlInsert = "INSERT INTO students (name, birth_date)
    VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert)); 
