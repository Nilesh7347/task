<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<title>Exam </title>
</head>
<body>
<div class="container">
	<div class="row justify-content-md-center">
		<div id="basic_details">
			<form method="post" action="<?php echo base_url()?>welcome/user_basic_details" enctype="multipart/form-data" class="form-horizontal">
				
				<h1> Accept the user's basic details.</h1> 
				<br>
				<div class="form-group">
					<label class="control-label col-md-4">
						First Name
					</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="first_name" id="first_name" required>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-4">
						Last Name
					</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="last_name" id="last_name" required>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-4">
						Age 
					</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="age" id="age" required>
					</div>
				</div>
				
				<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<input type="submit" class="btn btn-success"  name="submit" value="Save">
							<input type="button" class="btn btn-info"  name="prev" id="prev1" value="Prev">
							<input type="button" class="btn btn-info"  name="next" id="next1" value="Next">
						</div>
						<div class="col-md-4"></div>
				</div>
		   </form>
		</div>

			<div id="con_detail" style="display: none;">				
				
				<form method="post" action="<?php echo base_url()?>welcome/user_contact_details" enctype="multipart/form-data" class="form-horizontal">
				
				<h1> Accept the user's contact details.</h1> 
				<br>
				<div class="form-group">
					<label class="control-label col-md-4">
						Email 
					</label>
					<div class="col-md-8">
						<input type="email" class="form-control" name="email" id="email" required>
						<input type="hidden" name="id" value="<?php echo @$data; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-4">
						Contact Number
					</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="contact_number" id="contact_number" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<input type="submit" class="btn btn-success" name="submit" value="Save">
						<input type="button" class="btn btn-info"  name="prev" id="prev2" value="Prev">
						<input type="button" class="btn btn-info"  name="next" id="next2" value="Next">
					</div>
					<div class="col-md-4"></div>
				</div>
				</div>
			</form>
			</div>
		
	</div>
</div>
	
<script>
	$('#con_detail').hide();
	$('#prev2').on('click', function(){
		$('#basic_details').show();
		$('#con_detail').hide(); 
	});
	$('#next1').on('click', function(){
		$('#con_detail').show();
		$('#basic_details').hide();
	});
</script>

</body>
</html>