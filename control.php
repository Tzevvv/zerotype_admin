<?php
include('connect.php');
class hello{

  public function contact_mail( $name, $email, $subject	,$message ){
        global $conn;

        // $ngaysinh=$day."_".$month."_".$year;


               $sql = "INSERT INTO `contact`( `name`, `email`, `subject`, `noidung`)
                       VALUES('$name','$email', '$subject', '$message')";
               $run = mysqli_query($conn,$sql);
               return $run;


    }


    public function commnet_insert( $conten){
                global $conn;
                 $sql = "INSERT INTO `comment`(`conten`) VALUES ('$conten')";
                 $run = mysqli_query($conn,$sql);

                 return $run;
                 if ($run) {
                
                 }

    }

    public function select_commnet(){
      global $conn;
      $sql="SELECT `id`, `conten` FROM `comment` ";
      $run=mysqli_query($conn,$sql);
      $data=array();
      while ($row=mysqli_fetch_array($run)) {
        $data[]=$row;
      }
      return $data;
    }

  // INSERT-------------------------------



    // SELECT-----------------------------------

  public function select_new(){
    global $conn;
    $sql="select * from new";
    $run=mysqli_query($conn,$sql);
    $data=array();

    while ($row=mysqli_fetch_array($run)) {
      $data[]=$row;
    }
    return $data;
  }
  public function select_features(){
    global $conn;
    $sql="select * from features";
    $run=mysqli_query($conn,$sql);
    $data=array();

    while ($row=mysqli_fetch_array($run)) {
      $data[]=$row;
    }
    return $data;
  }

  public function select_home(){
    global $conn;
    $sql="select * from home";
    $run=mysqli_query($conn,$sql);
    $data=array();

    while ($row=mysqli_fetch_array($run)) {
      $data[]=$row;
    }
    return $data;
  }



  public function select_about(){
    global $conn;
    $sql="select * from about";
    $run=mysqli_query($conn,$sql);
    $data=array();

    while ($row=mysqli_fetch_array($run)) {
      $data[]=$row;
    }
    return $data;
  }





  //UPDATE------------------------------------------------



  //DELETE------------------------------------------------


  //LIST----------------------------------------------------
  public function list_new($id) {
      global $conn;
      $sql = "select * from new where id='$id'";
      $run = mysqli_query($conn,$sql);
      $data = array();
      while($row = mysqli_fetch_array($run)) {
          $data[]=$row;
      }
      return $data;
  }
  public function list_features() {
      global $conn;
      $sql = "select * from features";
      $run = mysqli_query($conn,$sql);
      $data = array();
      while($row = mysqli_fetch_array($run)) {
          $data[]=$row;
      }
      return $data;
  }


  public function list_about() {
      global $conn;
      $sql = "select * from about";
      $run = mysqli_query($conn,$sql);
      $data = array();
      while($row = mysqli_fetch_array($run)) {
          $data[]=$row;
      }
      return $data;
  }
}
