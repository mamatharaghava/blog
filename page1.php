<html>
	<head>
		<link href="dist/css/bootstrap.css" rel="stylesheet">
		<script src="dist/js/jquery.min.js"></script>
		<script src="dist/js/bootstrap.js"></script>
		<title>Contact Form</title>
		
	</head>
	<body>
		<div class="container"><br>
			<!--header starts-->
				<div class="row">
					<div class="col-sm-4" style="height:150px;width:33.33%;">
						<a href="#" class="btn btn-info btn-lg">
							<h1><span class="glyphicon glyphicon-envelope"></span></h1> For any Queries please SMS us
						</a>
					</div>
					<div class="col-sm-4" style="height:150px;width:33.33%;">
						<a href="#" class="btn btn-info btn-lg">
							<h1><span class="glyphicon glyphicon-earphone"></span></h1>Call us on our toll free number
						</a>
					</div>
					<div class="col-sm-4" style="height:150px;width:33.33%;">
						 <a href="#" class="btn btn-info btn-lg">
							<h1><span class="glyphicon glyphicon-phone"></span></h1>Provide ur Number for verification
						</a>
					</div>
				</div>
			<!--header ends-->
			<div class="row">
				<div class="col-sm-7">
					<h3>Please Fill Out this Field, We will get back to you soon</h3><br>
					<form action="#" method="post" class="form-group">
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-3"><label>Name</label></div>
							<div class="col-sm-5"><input type="text" placeholder="Enter Name" class="form-control"required><br></div>
							
						</div>
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-3"><label>Email</label></div>
							<div class="col-sm-5"><input type="text" placeholder="Enter Email" class="form-control"required><br></div>
						</div>
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-3"><label>Mobile</label></div>
							<div class="col-sm-5"><input type="text" placeholder="Enter Mobile" class="form-control"required><br></div>
						</div>
						<div class="row">
							<div class="col-sm-2"></div>
							<div class="col-sm-3"><label>Message</label></div>
							<div class="col-sm-5"><textarea type="text" placeholder="Enter Mobile" class="form-control"required></textarea><br></div>
						</div>
						<div class="row">
							<div class="col-sm-5"></div>
							<div class="col-sm-2"><button class="btn btn-danger" action="clear">Clear</button></div>
							<div class="col-sm-2"><button class="btn btn-success" action="clear">Send</button></div>
						</div>
						
					</form>
				</div>
				<div class="col-sm-5">
					<form class="form-group">
						 <fieldset>
							  <legend>Present Address:</legend>
						
							  <label>Name:</label>&emsp;&emsp;&emsp;<input type="text"><br>
							  <label>DoorNo:</label>&emsp;&emsp;<input type="text"><br>
							  <label>Street</label>&emsp;&emsp;&emsp;&nbsp;<input type="text"><br>
							  <label>City</label>&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text">
						 </fieldset>
					</form>
					<form class="form-group">
						 <fieldset>
							  <legend>Permanent Address:</legend>
						
							  <label>Name:</label>&emsp;&emsp;&emsp;<input type="text"><br>
							  <label>DoorNo:</label>&emsp;&emsp;<input type="text"><br>
							  <label>Street</label>&emsp;&emsp;&emsp;&nbsp;<input type="text"><br>
							  <label>City</label>&emsp;&emsp;&emsp;&emsp;&nbsp;<input type="text">
						 </fieldset>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>