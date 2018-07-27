<!DOCTYPE html>

<html>

<head>

    <title>Select Api</title>

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

                  <button onclick="addSel()" type="submit" class="btn btn-default">Add Select</button>

                  <button onclick="canSel()" type="submit" class="btn btn-default">Cancel Select</button>

                  <button onclick="addWhere()" type="submit" class="btn btn-default">Add Where</button>

                  <button onclick="canWhere()" type="submit" class="btn btn-default">Cancel Where</button>

            </div>                

            <br><br>                                            

            <div class="col-md-12">

                <form action="select_former.php" method="post">

                  <div class="form-group" id="fName">

                    <label for="fName">Function Name</label>

                    <input type="text" name="fName">

                  </div>

                  <div class="form-group" id="select">

                    <label for="select">Select</label>

                    <input type="text" name="select[]">

                  </div>

                  <div class="form-group" id="where">

                    <label for="where">Where</label>

                    <input type="text" name="where[]">

                  </div>

<!--                   <div class="form-group" id="equal">

                    <label for="equal">Equal To</label>

                    <input type="text" name="equal[]">

                  </div>

 -->               <button type="submit" class="btn btn-primary">Submit</button>

                </form>

            </div>

        </div>

    </div>    

</body>

    <script type="text/javascript">

        function addSel() {

            $("#select").append("<input type='text' name='select[]'>");

        }

        function canSel() {

            $("#select input").last().remove();

        }

        function addWhere() {

            $("#where").append("<input type='text' name='where[]'>");

            // $("#equal").append("<input type='text' name='equal[]'>");

        }

        function canWhere() {

            $("#where input").last().remove();

            // $("#equal input").last().remove();

        }

    </script>

</html>


