<?php
include_once 'reservationsMapper.php';
include_once 'messages.php';

if (isset($_POST['btn-contact'])) {
    $messages = new MessagesLogic($_POST);
    $messages->insertData();
}

class MessagesLogic
{
    private $emri;
    private $mbiemri;
    private $email;
    private $mesazhi;
    public function __construct($formData)
    {
        $this->emri = $formData['emri'];
        $this->mbiemri = $formData['mbiemri'];
        $this->email = $formData['email'];
        $this->mesazhi = $formData['mesazhi'];
    }
    public function insertData()
    {
        if ($this->variablesNotDefinedWell($this->emri, $this->mbiemri, $this->email, $this->mesazhi)) {
            header("Location:../reservation.php");
        } else {
            $mapper = new reservationsMapper();
            $mapper->insertMessage($this->emri, $this->mbiemri, $this->email, $this->mesazhi);
            header("Location:../index.php");
        }
    }
    private function variablesNotDefinedWell($emri, $mbiemri, $email, $mesazhi)
    {
        if (empty($emri) || empty($mbiemri || empty($email) || empty($mesazhi))) {
            return true;
        }
        return false;
    }
}
