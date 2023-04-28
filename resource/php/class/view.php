<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/g5_classrec/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
                  echo 'success';
                }
        }

        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

        public function getnames(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                echo "<div class='firstAnimation text-light'><div class='secondAnimation'><div class='card'>";
                echo profilePicu();
                echo "<h3>";
                echo $data['username'] ;
                echo "</h3>";
                echo "<h5 class='coldesc'>";
                echo  $data['colleges'];
                echo "</h5>";
                echo "</div></div></div>";
                

            }
        }
}
