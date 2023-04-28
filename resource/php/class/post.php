<?php
class post extends config{
  public $statuses;


  public function __construct($statuses){
    $this->statuses= $statuses;
  }

  public function uploadFiles(){

    $con = $this->con();
    $sql = "INSERT INTO `tbl_post`(`post`) VALUES ('$this->statuses')";
    $data = $con->prepare($sql);

    if($data->execute()){
      return true;
    }else {
      return false;
    }
  }
}
?>