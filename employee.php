<!-- <?php session_star();?> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
              <?php
                if(isset($_SESSION["error"])) {
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);

                }
                
                ?>
                <h1>Add New Employee </h1>
                <form action="handle Employee.php" Imethod = "POST"class="border p-3 my-5">
                    <div class="mb-3">
                        <label for="">Employee Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Employee Email</label>
                        <input type="email" name="email" class="form-control">
                    </div> 
                    <div class="mb-3">
                    <input type="submit" class="form-control" value="save">
                    </div>
                </form>
            </div>    
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>