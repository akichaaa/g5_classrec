<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/g5_classrec/resource/php/class/core/init.php';
$view = new view;
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
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <body>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
		<defs>
			<linearGradient id="bg">
				<stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
				<stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
				<stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
			</linearGradient>
			<path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
		</defs>
		<g>
			<use xlink:href='#wave' opacity=".3">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="10s"
          calcMode="spline"
          values="270 230; -334 180; 270 230"
          keyTimes="0; .5; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacity=".6">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="8s"
          calcMode="spline"
          values="-270 230;243 220;-270 230"
          keyTimes="0; .6; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacty=".9">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="6s"
          calcMode="spline"
          values="0 230;-140 200;0 230"
          keyTimes="0; .4; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
		</g>
	</svg>
        <nav class="navbar navbar-dark bg-lorenz shadow-sm slide-in-left">
        <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
            <img src="resource/img/header.png" height="70" class="d-inline-block align-top"
            alt="mdb logo"><h3 class="ib">
        </a>
        <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0"><i class="fas fa-home home-col"></i></a>
        
        </nav>

        <div class="container mt-4 puff-in-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-light">Register New Student Records Assistant</h1>
                </div>
        </div>
        <?php
            vald();
        ?>
        <form action="" method="post">
            <table class="table ">
                <tr>
                    <td>
                        <div class="row justify-content-center">
                            <div class="form-group col-4">
                                <label for = "username" class="text-light"> Username:</label>
                                <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo input::get('username');?>" autocomplete="off" required />
                            </div>
                            <div class="form-group col-4">
                                <label for = "password" class="text-light"> Password:</label>
                                <input type="password" class="form-control" name="password" id="password" value ="<?php echo input::get('password');?>" autocomplete="off"required/>
                            </div>
                            <div class="form-group col-4">
                                <label for = "ConfirmPassword" class="text-light"> Confirm Password:</label>
                                <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>" autocomplete="off"required/>
                            </div>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row justify-content-center">
                            <div class="form-group col-4">
                                <label for = "fullName" class="text-light"> Full Name</label>
                                <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo input::get('fullName');?>"/required>
                            </div>
                            <div class="form-group col-4">
                                <label for="College" class="text-light">College/s to handle</label>
                                    <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                    <?php $view->collegeSP2();?>
                                    </select>
                            </div>
                            <div class="form-group col-4">
                                <label for = "email" class="text-light"> Email Address</label>
                                <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                            </div>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="row justify-content-center">
                            <div class="form-group col-7">
                                <label  >&nbsp;</label>
                            <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                <input type="submit" class="custom-btn btn-3" value="Register New SRA" class=" form-control btn btn-primary" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            </form>
        </div>

<footer id="sticky-footer" class="py-4 bg-none text-white-50 fixed-bottom  slide-in-right">
<div class="container text-center">
    <div class="row">
        <div class="col col-sm-5 text-left text-light">
            <small>Copyright &copy;ShiksM3dIA     BSIT-1A 2023</small>
        </div>
        <div class="col text-right text-light">
            <small>Created by: Bruno, Fuentes, Garcia x2, Salcedo, De Guzman, Cruz, Usi, Nuccup, Trayfalgar, Palo, Glodo, Bustos, Siva</small>
        </div>
    </div>
</div>
</footer>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
