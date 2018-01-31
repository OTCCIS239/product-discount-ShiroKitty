<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <title>Discount Calculator</title>
    </head>
    <body>
        <div class="container" style="height: 100vh;">
            <div class="row align-items-center" style="height: 100%;">
                <div class="col-sm"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header" id="cHead">
                            Discount Calculator
                        </div>        
                        <div class="card-body" id="cBody">
                            <form action="discount.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="description" placeholder="Description"></br>
                                    <input type="text" class="form-control" name="list_price" placeholder="List Price"><br>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="discount_percent" placeholder="Discount Amount">
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span><br>
                                        </div>
                                    </div>
                                    <div id="button">
                                        <input type="submit" class="btn btn-dark" value="Submit"><br>
                                    </div>  
                                </div>

                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>