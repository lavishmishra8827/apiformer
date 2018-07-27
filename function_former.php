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

			    <li class="active"><a data-toggle="pill" href="#home">Insert</a></li>

			    <li><a data-toggle="pill" href="#menu1">Select</a></li>

			    <li><a data-toggle="pill" href="#menu2">Update</a></li>

			    <li><a data-toggle="pill" href="#menu3">Delete</a></li>

			  </ul>

			  

			  <div class="tab-content">

			    <div id="home" class="tab-pane fade in active">

			      <h3>Create</h3>

			       <button onclick="addIns()" type="submit" class="btn btn-default">Add Insert</button>

				  <button onclick="canIns()" type="submit" class="btn btn-default">Cancel Insert</button>



				<form action="functions/insert/insert_former.php" method="post">

				  <div class="form-group" id="fName">

				    <label for="fName">Function Name</label>

					<input type="text" name="fName" required="true">

				  </div>

				  <div class="form-group" id="insert">

				    <label for="insert">Insert</label>

					<input type="text" name="insert[]" required="true">

				  </div>

				  <button type="submit" class="btn btn-primary">Insert</button>

				</form>

			    </div>





			    <div id="menu1" class="tab-pane fade">

			      <h3>Select</h3>

					<div class="col-md-6 col-md-offset-3">

						  <button onclick="addSel()" type="submit" class="btn btn-default">Add Select</button>

						  <button onclick="canSel()" type="submit" class="btn btn-default">Cancel Select</button>

						  <button onclick="addWhere()" type="submit" class="btn btn-default">Add Where</button>

						  <button onclick="canWhere()" type="submit" class="btn btn-default">Cancel Where</button>

					</div>				

					<br><br>											

				<div class="col-md-12">

					<form action="functions/select/select_former.php" method="post">

					  <div class="form-group" id="fName">

					    <label for="fName">Function Name</label>

						<input type="text" name="fName" required="true">

					  </div>

					  <div class="form-group" id="select">

					    <label for="select">Select</label>

						<input type="text" name="select[]" required="true">

					  </div>

					  <div class="form-group" id="where">

					    <label for="where">Where</label>

						<input type="text" name="where[]" required="true">

					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>

					</form>

				</div>

	    </div>





			    <div id="menu2" class="tab-pane fade">

			      <h3>Update</h3>

					<div class="col-md-6 col-md-offset-3">

						  <button onclick="addEdUp()" type="submit" class="btn btn-default">Add Data to be Appended</button>

						  <button onclick="canEdUp()" type="submit" class="btn btn-default">Cancel Data to be Appended</button>

						  <button onclick="addUp()" type="submit" class="btn btn-default">Add Data to be updated</button>

						  <button onclick="canUp()" type="submit" class="btn btn-default">Cancel Data to be updated</button>

						  <button onclick="addUpWhere()" type="submit" class="btn btn-default">Add Where</button>

						  <button onclick="canUpWhere()" type="submit" class="btn btn-default">Cancel Where</button>

					</div>				

					<br><br>											

				<div class="col-md-12">

					<form action="functions/update/update_former.php" method="post">

					  <div class="form-group" id="fName">

					    <label for="fName">Function Name</label>

						<input type="text" name="fName" required="true">

					  </div>

					  <div class="form-group" id="extraupdata">

					    <label for="extradata">Data to be Appended</label>

						<input type="text" name="extradata[]" required="true">

					  </div>

					  <div class="form-group" id="update">

					    <label for="update">Update</label>

						<input type="text" name="update[]" required="true">

					  </div>

					  <div class="form-group" id="upwhere">

					    <label for="upwhere">Where</label>

						<input type="text" name="where[]" required="true">

					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>

					</form>

				</div>



			    </div>

			    <div id="menu3" class="tab-pane fade">

			      <h3>Delete</h3>

					<div class="col-md-6 col-md-offset-3">

						  <button onclick="addEd()" type="submit" class="btn btn-default">Add Data to be Appended</button>

						  <button onclick="canEd()" type="submit" class="btn btn-default">Cancel Data to be Appended</button>

						  <button onclick="addDelWhere()" type="submit" class="btn btn-default">Add Where</button>

						  <button onclick="canDelWhere()" type="submit" class="btn btn-default">Cancel Where</button>

					</div>				

					<br><br>											

				<div class="col-md-12">

					<form action="functions/delete/delete_former.php" method="post">

					  <div class="form-group" id="fName">

					    <label for="fName">Function Name</label>

						<input type="text" name="fName" required="true">

					  </div>

					  <div class="form-group" id="extradata">

					    <label for="extradata">Data to be Appended</label>

						<input type="text" name="extradata[]" required="true">

					  </div>

					  <div class="form-group" id="delwhere">

					    <label for="delwhere">Where</label>

						<input type="text" name="where[]" required="true">

					  </div>

					  <button type="submit" class="btn btn-primary">Submit</button>

					</form>

				</div>

			    </div>

			  </div>

			</div>

								

			</div>

		</div>

	</div>	

</body>

	<script type="text/javascript">

		var select_i=1;

		var insert_i=1;

		var update_i=1;

		var delete_i=1;

		var select_where_i=1;

		var update_where_i=1;

		var delete_where_i=1;

		var up_ed_i=1;

		function addIns() {

			insert_i++;

			$("#insert").append("<input type='text' name='insert[]' required='true'>");

		}



		function canIns() {



			if (insert_i<2) {



			} else {

				insert_i--;

			$("#insert input").last().remove();

		}

		}



		function addSel() {

			select_i++;

			$("#select").append("<input type='text' name='select[] required='true''>");

		}



		function canSel() {

			if (select_i<2) {



			} else {

				select_i--;

			$("#select input").last().remove();

		}

		}



		function addWhere() {

			select_where_i++;

			$("#where").append("<input type='text' name='where[] required='true''>");

			// $("#equal").append("<input type='text' name='equal[] required='true''>");

		}



		function canWhere() {

			if (select_where_i<2) {



			} else {

				select_where_i--;

			$("#where input").last().remove();

			}

		}

		function addEd() {

			delete_i++;

			$("#extradata").append("<input type='text' name='extradata[] required='true''>");

		}



		function canEd() {

			if (delete_i<2) {



			} else {

				delete_i--;

			$("#extradata input").last().remove();

		}

		}



		function addDelWhere() {

			delete_where_i++;

			$("#delwhere").append("<input type='text' name='where[] required='true''>");

			// $("#equal").append("<input type='text' name='equal[] required='true''>");

		}



		function canDelWhere() {

			if (delete_where_i<2) {



			} else {

				delete_where_i--;

			$("#delwhere input").last().remove();

			}

		}

		function addEdUp() {

			up_ed_i++;

			$("#extraupdata").append("<input type='text' name='extradata[] required='true''>");

		}



		function canEdUp() {

			if (up_ed_i<2) {



			} else {

				up_ed_i--;

			$("#extraupdata input").last().remove();

		}

		}



		function addUp() {

			update_i++;

			$("#update").append("<input type='text' name='update[] required='true''>");

		}



		function canUp() {

			if (update_i<2) {



			} else {

				update_i--;

			$("#update input").last().remove();

		}

		}



		function addUpWhere() {

			update_where_i++;

			$("#upwhere").append("<input type='text' name='where[] required='true''>");

			// $("#equal").append("<input type='text' name='equal[] required='true''>");

		}



		function canUpWhere() {

			if (update_where_i<2) {



			} else {

				update_where_i--;

			$("#upwhere input").last().remove();

			}

		}



	</script>



</html>

