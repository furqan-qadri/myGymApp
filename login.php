
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Login2.css" >
    <title>Log-in</title>
    <script src="valid.js"></script>
</head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                  <div class="col-lg-5">
                    <img src="Logo.jpg" class="img-fluid" alt="">
                  </div>
                         <div class="col-lg-7 px-5 pt-5">
                             <h1 class="font-weight-bold py-3"> Trainees GYM</h1>
                            <form method="POST" name="formLogin" action="check.php" onSubmit="return validation()" >
                                <div class="form-row">
                                  <div class="col-lg-7">
                                     <input type="email" placeholder="Email Address" name="Email" id="Email" class="form-control my-3 p-4">
                                  </div>
                                </d`iv>
                                     <div class="form-row">
                                         <div class="col-lg-7">
                                            <input type="password" placeholder="Enter Password" name="Password" id="Password" class="form-control my-3 p-4">
                                         </div>
                                     </div> 
                                            <div class="form-row">
                                                <div class="col-lg-7">
                                                   <button type="submit"  class="btn mt-3 mb-5">Login</button>
                                                </div>
                                            </div>
                                                <a href="#">Forget password ?</a> 
                                              <p>Do not have account? <a href="#">Register now</a></p>
                                          
                             </form>
                 </div>
             </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>