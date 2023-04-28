<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/g5_classrec/resource/php/class/core/init.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
</head>
<body>
        <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
          <a class="navbar-brand " href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/header.png" height="70" class="d-inline-block align-top"
              alt="mdb logo"><h3 class="ib">
          </a>
             <h6 class="text-primary"><b>Connect. Friends. Leisure.</b></h6>
        </nav>
           <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-8 ">



                    <form class="text-center border border-light p-5 shadow puff-in-center" action="" method="post" >
                    <p class="h4 mb-4 text-primary"><img src="resource/img/header2.png" width="auto" height="75" alt="">Login in</p>
                    <?php logd();?>
                    <input type="text" id="username" class="form-control mb-4" name="username" placeholder="Enter Username" required>
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Enter Password" name ="password" required>
                    <div class="d-flex justify-content-around">
                    </div>
                    <input type =hidden name="token" value="<?php echo Token::generate(); ?>">
                    <input  type="submit"  class="btn btn-primary btn-block my-4"value="Login"/>
                    </form>


                    <footer id="sticky-footer" class="py-4 bg-primary text-white fixed-bottom slide-in-right">
                      <div class="container text-center">
                          <div class="row">
                              <div class="col col-sm-5 text-left">
                                  <small>Copyright &copy;Centro Escolar University     Office of the Registrar 2019</small>
                              </div>
                              <div class="col text-right">
                                  <small>Created by: Reymart Bolasoc</small>
                              </div>
                          </div>
                      </div>
                </div>
            </div>
          </div>
        </footer>
        <script src="vendor/js/jquery.js"></script>
        <script src="vendor/js/popper.js"></script>
        <script src="vendor/js/bootstrap.min.js"></script>
    </body>
    </html>
