<?php include "php/Update.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/Update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
            <div class="form-group">
		     <label for="id">School ID</label>
		     <input type="id" 
		           class="form-control" 
		           id="id" 
		           name="id" 
		           value="<?=$row['id'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="fname">First Name</label>
		     <input type="fname" 
		           class="form-control" 
		           id="fname" 
		           name="fname" 
		           value="<?=$row['fname'] ?>" >
		   </div>

           <div class="form-group">
		     <label for="mname">Middle Name</label>
		     <input type="mname" 
		           class="form-control" 
		           id="mname" 
		           name="mname" 
		           value="<?=$row['mname'] ?>" >
		   </div>

           <div class="form-group">
		     <label for="lname">Last Name</label>
		     <input type="lname" 
		           class="form-control" 
		           id="lname" 
		           name="lname" 
		           value="<?=$row['lname'] ?>" >
		   </div>

           <div class="form-group">
		     <label for="age">Age</label>
		     <input type="age" 
		           class="form-control" 
		           id="age" 
		           name="age" 
		           value="<?=$row['age'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

           <div class="form-group">
		     <label for="address">Address</label>
		     <input type="address" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?=$row['address'] ?>" >
		   </div>

           <div class="form-group">
		     <label for="contactno">Contact No. </label>
		     <input type="contactno" 
		           class="form-control" 
		           id="contactno" 
		           name="contactno" 
		           value="<?=$row['contactno'] ?>" >
		   </div>

           
           <div class="form-group">
		     <label for="birthday">Birthday </label>
		     <input type="birthday" 
		           class="form-control" 
		           id="birthday" 
		           name="birthday" 
		           value="<?=$row['birthday'] ?>" >
		   </div>
           
           <div class="form-group">
		     <label for="mothersname">Mother's Name </label>
		     <input type="mothersname" 
		           class="form-control" 
		           id="mothersname" 
		           name="mothersname" 
		           value="<?=$row['mothersname'] ?>" >
		   </div>

           <div class="form-group">
		     <label for="fathersname">Father's Name </label>
		     <input type="fathersname" 
		           class="form-control" 
		           id="fathersname" 
		           name="fathersname" 
		           value="<?=$row['fathersname'] ?>" >
		   </div>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="Update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>