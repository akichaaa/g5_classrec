<?php

class config{
    private $user = 'bsit3567_group5';
    private $password = 'group5';
    public $pdo = null;

    public function con(){
        try {
            $this->pdo = new PDO('mysql:local=109.106.254.194:3307;dbname=bsit3567_g5_classrec', $this->user, $this->password);
            } catch (PDOException $e) {
                die($e->getMessage());
        }
        return $this->pdo;

    }
}

 ?>
