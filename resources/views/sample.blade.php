<html>
	<head>
		<title>PAAWER!</title>

		<style>
		.sample-style{
			text-align: center;
			color: #636b6f;
			padding: 2 20px;
			font-size: 13px;
		}

		.border{

			border: 3px solid #66d3ff;
			border-radius: 12px;
		}

		.border-button{

			border-radius: 19px;
			box-shadow: 2px;
			background-color: #7cd5f9;
		}

		</style>



	</head>


	<body>
		<h1 align='middle'>SAMPLE FORM</h1>
		<div align ='middle'>
		<form id ='form-moto' action="/create" method="post">
				<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				Firstname:<br>
				<input type="text" name="firstname" id="fname" class="sample-style border">
				<br><br>
				Last Name:<br>
				<input type="text" name="lastname" id="lname" class="sample-style border">
				<br><br>
				<input type="submit" value="Sumbit" class="border-button">
		</form>
	</div>

	</body>

</html>