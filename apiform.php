<!DOCTYPE html>

<html>

<head>

    <title>API Former</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <h2>API Former</h2>             

            </div>

            <div class="col-md-8 col-md-offset-2">

                <form action="apiformer.php" method="post">

                  <div class="form-group">

                    <label for="table1">Main Table</label>

                    <input type="text" name="table1">

                  </div>

                  <div class="form-group">

                    <label for="table1">History Table</label>

                    <input type="text" name="table2">

                  </div>

                  <div class="form-group">

                    <label for="controller_name">Controller Name</label>

                    <input type="text" name="controller_name">

                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>

                </form>

                

            </div>

        </div>

    </div>

</body>

</html>
