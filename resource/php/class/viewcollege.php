<?php
class viewcollege extends config {
    public function showusercollege(){
        $user = new User();
        $nameUser = $user->data()->name;
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_accounts` WHERE `name` = '$nameUser'";
        $data= $con->prepare($sql);
        $data->execute();
        $results = $data->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($results as $result) {
            echo "<div class='msgs'>";
            echo "<strong><p class='sent'>$result[colleges]</p></strong>";
            echo "<strong><p class='sent'>$result[username]</p></strong>";
            echo "</div>";
        } 
        }
      }
?>