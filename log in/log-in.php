<!DOCTYPE html>
<html>
<head>
  <title>Login form</title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="container">
        <?php
      $useradmin = array(
          array(
                'username' => 'admin',
                'password' => 'pass1234',
                'usertype' => 'Admin'
                 ),
          array(
               'username' => 'renan',
               'password' => 'pass1234',
               'usertype' => 'Admin'
                ),
         array(
               'username' => 'pepito',
               'password' => 'manaloto',
                'usertype' => 'Content Manager'
                 ),
          array(
               'username' => 'juan',
               'password' => 'delacruz',
                'usertype' => 'Content Manager'
                 ),
         array(
               'username' => 'pedro',
               'password' => 'penduko',
               'usertype' => 'System User'
                 ),
                  );                        
                  ?>
               <?php
                   
                    if(isset($_POST['button'])){ ?>
                                
                              
                         <?php 
                            $drpadmin = $_POST['drpadmin'];
                            $textname = $_POST['textname'];
                             $textpass = $_POST['textpass']; 


                          if ($drpadmin == $useradmin[0]['usertype'] and $textname == $useradmin[0]['username'] and $textpass == $useradmin[0]['password'])
                             echo "<div class='alert alert-success ' role='alert'>
                                 <center><h2>  VALID: $textname<h2></center>
                                             </div>";
                       elseif  ($drpadmin == $useradmin[1]['usertype'] and $textname == $useradmin[1]['username'] and $textpass == $useradmin[1]['password'])
                              echo "<div class='alert alert-success ' role='alert'>
                                   <center><h2>Log-in success<h2></center>
                                             </div>";
                        elseif ($drpadmin == $useradmin[2]['usertype'] and $textname == $useradmin[2]['username'] and $textpass == $useradmin[2]['password'])
                               echo "<div class='alert alert-success ' role='alert'>
                                    <center><h2>Log-in successe<h2></center>
                                             </div>";
                        elseif ($drpadmin == $useradmin[3]['usertype'] and $textname == $useradmin[3]['username'] and $textpass == $useradmin[3]['password'])
                               echo "<div class='alert alert-success ' role='alert'>
                                    <center><h2>Log-in success<h2></center>
                                             </div>";
                        elseif  ($drpadmin == $useradmin[4]['usertype'] and $textname == $useradmin[4]['username'] and $textpass == $useradmin[4]['password'])
                               echo "<div class='center alert alert-success' role='alert'>
                                     <center><h4>Log-in success<h4></center>
                                              </div>";
                       else
                              echo "<div class='center alert alert-danger' role='alert'>
                        <center><h4> Invalid: Username/ Password  <h4></center>
                           </div>";
      ?> 
  <?php } ?>
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3 class="alan">Sign In</h3>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="input-group form-group">

            <div>
              <select name="drpadmin" id="drpadmin" class="form-control mb-3">
                <option value="Admin">Admin</option>
                <option value="Content Manager">Content Manager</option>
                <option value="System User">System User</option>
              </select> 
            </div>

              <div class="input-group form-group">
              <input type="textname" name="textname" class="form-control" placeholder="username">
            </div>

          <div class="input-group form-group">
            <input type="password" class="form-control" name="textpass" placeholder="password">
          </div>

          <div class="form-group">
            <input type="submit"name="button" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>
    </div>
    </div>
   </div>
  </body>
</html> 