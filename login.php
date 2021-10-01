
<?php
   ob_start();
   session_start();
?>
<html lang = "en">

   <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   </head>

   <body>
         <?php
            $msg = '';
            if (isset($_POST['login']) && isset($_POST['password'])) {
               if ($_POST['login'] !== 'test' && $_POST['password'] !== '1234') {
                   $msg = 'Wrong username or password';
               } else {
                   $_SESSION['valid'] = true;
                   header("Location: page.php");
               }
            }
         ?>
         <div class="container">
             <div class="row">
                 <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
                     <div class="mb-3">
                         <label for="Login" class="form-label" >Login</label>
                         <input type="text"  name = "login" class="form-control" placeholder="test" id="Login"">

                     </div>
                     <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Password</label>
                         <input type="password" name="password" class="form-control" placeholder="1234" id="exampleInputPassword1">
                     </div>


                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
             </div>
         </div>

   </body>
</html>