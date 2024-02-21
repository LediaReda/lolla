<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handle-calculator.php" method="POST">
                    <div class="mb-3">
                        <label for=""> Number One </label>
                        <input type= "number" name="number1" class="form-control">
                    </div>  
                    <div class="mb-3"> 
                        <label for=""> Number TWO </label>
                        <input type= "number" name="number2" class="form-control">
                    </div>    
                    <div class="mb-3"> 
                        <label for=""> Operator </label>
                        <input type= "text" name="operation" class="form-control">
                    </div>       
                    <div class="mb-3"> 
                        <input type= "submit" value="calc" class="form-control bg-primry">
                    </div>
                </form>

            </div> 
        </div>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>         

</html>