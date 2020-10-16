<?php
include_once "Patient.php";

class Queue
{
    private $list;

    public function __construct()
    {
        $this->list = array();
    }

    public function addPatient($name, $code)
    {
        $patient = new Patient($name, $code);
        array_push($this->list, $patient);
    }

    public function sort()
    {
        function mysort($a, $b)
        {
            if ($a->code == $b->code) return 1;
            return ($a->code > $b->code) ? 1 : -1;
        }

        usort($this->list,"mysort");

    }
    public function dequeue(){
        $curent = array();
        $result = array_shift($this->list);
        array_push($curent,$result);
        return $curent;
    }
    public function toString(){
        return $this->list;
    }


}
