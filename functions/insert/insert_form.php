<!DOCTYPE html>

<html>

<head>

	<title>Make Api</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col-md-10 col-md-offset-2">

			  <ul class="nav nav-pills">

			    <li class="active"><a data-toggle="pill" href="#home">Create</a></li>

			    <li><a data-toggle="pill" href="#menu1">Read</a></li>

			    <li><a data-toggle="pill" href="#menu2">Update</a></li>

			    <li><a data-toggle="pill" href="#menu3">Delete</a></li>

			  </ul>

			  

			  <div class="tab-content">

			    <div id="home" class="tab-pane fade in active">

			      <h3>Create</h3>

			       <button onclick="addIns()" type="submit" class="btn btn-default">Add Insert</button>

				  <button onclick="canIns()" type="submit" class="btn btn-default">Cancel Insert</button>



				<form action="insert_former.php" method="post">

				  <div class="form-group" id="fName">

				    <label for="fName">Function Name</label>

					<input type="text" name="fName" required="true">

				  </div>

				  <div class="form-group" id="insert">

				    <label for="insert">Select</label>

					<input type="text" name="insert[]" required="true">

				  </div>

				  <button type="submit" class="btn btn-primary">Insert</button>

				</form>

			    </div>

			    <div id="menu1" class="tab-pane fade">

			      <h3>Read</h3>

			      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

			    </div>

			    <div id="menu2" class="tab-pane fade">

			      <h3>Update</h3>

			      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>

			    </div>

			    <div id="menu3" class="tab-pane fade">

			      <h3>Delete</h3>

			      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

			    </div>

			  </div>

			</div>

								

			</div>

		</div>

	</div>	

</body>

	<script type="text/javascript">

		var i=1;

		function addIns() {

			i++;

			$("#insert").append("<input type='text' name='insert[]' required='true'>");

		}



		function canIns() {



			if (i<2) {



			} else {

				i--;

			$("#insert input").last().remove();

		}

		}

	</script>



</html>


