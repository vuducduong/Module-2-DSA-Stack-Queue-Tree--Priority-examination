<?php
include_once "Patient.php";
include_once "Queue.php";

$patient = new Queue();
$patient->addPatient(Smith,5);
$patient->addPatient(Jones,4);
$patient->addPatient(Fehrenbach,6);
$patient->addPatient(Brown,1);
$patient->addPatient(Ingram,1);

$patient->sort();
echo "<pre>";
print_r($patient->toString());
echo "<pre>";
print_r($patient->dequeue());
echo "<pre>";
print_r($patient->toString());



