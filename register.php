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
   <link rel="stylesheet" href="resource\css\register.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <body>

         <div class="container mt-4 puff-in-center">
             <div class="row">
                 <div class="col-12">
                   <br />
                   <br />
                 </div>
            </div>
            <?php
                vald();
            ?>
            <div class="register">
              <form class="form"  method="post">
                <div class="title text-center col-12">Welcome,<br><span>sign up to continue</span></div>
                <table class="table ">
                    <tr>
                        <!-- <td> -->
                            <div class="row justify-content-center m-3">
                                <div class="col-md-4">
                                  <input type="text" placeholder="Username" name="username" class=" form-group input">
                                </div>
                                  <div class="form-group col-md-4">
                                  <input type="password" placeholder="Password" name="password" class="input">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="input" name="ConfirmPassword" id="ConfirmPassword" value ="<?php echo input::get('ConfirmPassword');?>"placeholder="Confirm Password" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-md-4">
                                  <input class="input"  type = "text" name="fullName" id="fullName" placeholder="FullName" value ="<?php echo input::get('fullName');?>"/required>
                                </div>
                                  <div class= " form-group col-md-4">
                                    <select id="College" class="input" name="College[]" class="selectpicker  " data-live-search="true"  required>
                                      <option selected>College/Department</option> <?php $view->collegeSP2();?>
                                    </select>
                                  </div>
                                  <div class=" form-group col-md-4">
                                    <input class="input" placeholder="Email Address" type = "text" name="email" id="email" value ="<?php echo input::get('email');?>"/required>
                                    <input type="hidden"class="input" name ="Token" value="<?php echo Token::generate();?>" />
                                  </div>
                                  <div class="form-group col-4">
                                      <select id="role" class="input" name="Role[]" class="selectpicker" data-live-search="true"   /required>
                                        <option selected>Role</option> <?php $view->roleSP2();?>
                                    </select>
                                  </div>
                                  <div class="row justify-content-center ">
                                    <div class="form-group col-md-4" >
                                      <label  >&nbsp;</label>
                                      <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                      <input class="button-confirm input" type="submit" value="Register" />
                                    </div>
                              </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                    </form>
                  </div>
 </body>

     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
