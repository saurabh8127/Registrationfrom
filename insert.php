<?php
include 'insert_p.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="row">
				<h2 style="color: blue;">FORM</h2>
			</div>

			<div class="form-row">
				<div class="form-group col-md-6">
					First Name: <input type="text" name="fn" id="fn" placeholder="First Name" class="form-control">
				</div>
				<div class="form-group col-md-6">
					Last Name: <input type="text" name="ln" id="ln" placeholder="Last Name" class="form-control">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Email</label>
					<input type="email" class="form-control" placeholder="Enter email id" name="mail" id="email">
				</div>
				<div class="form-group col-md-6">
					<label for="inputEmail4">Mobile no.</label>
					<input type="number" class="form-control" placeholder="Enter mobile number" name="mob" id="mnum">
				</div>
				
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Date of birth</label>
					<input type="date" class="form-control" placeholder="Enter email id" name="dob" id="dob">
				</div>
				<div class="row">
					<div class="form-group form-check col-md-6">
						Gender:  <br><input type="radio" class="form-check-input" name="gender" value="Male">Male<br>
						<input type="radio" class="form-check-input " name="gender" value="Female">Female

					</div>

					<div class="form-group col-md-6">
						<label>Designation</label>
						<select  class="form-control" name="des">
							<option selected>--Select religion--</option>
							<option>HR</option>
							<option>back end developer</option>
							<option>frent end devloper</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-8">
						<label>Hobbies</label>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobbies" value="book" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								book
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="Games" name="hobbies" id="flexCheckChecked" >
							<label class="form-check-label" for="flexCheckChecked">
								Games
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="Travelling" name="hobbies" id="flexCheckChecked" >
							<label class="form-check-label" for="flexCheckChecked">
								Travelling
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="Music" name="hobbies" id="flexCheckChecked" >
							<label class="form-check-label" for="flexCheckChecked">
								Music
							</label>
						</div>
					</div>
				</div>
				<input type="submit" name="sub" class="btn btn-primary btn-block">

			</form>
		</body>
		</html>