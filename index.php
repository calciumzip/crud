<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Sign Up</h4><hr><br>
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
		           value="<?php if(isset($_GET['id']))
		                           echo($_GET['id']); ?>" 
		           placeholder="Enter School ID">
		   </div>

		   <div class="form-group">
		     <label for="fname">First Name</label>
		     <input type="fname" 
		           class="form-control" 
		           id="fname" 
		           name="fname" 
		           value="<?php if(isset($_GET['fname']))
		                           echo($_GET['fname']); ?>" 
		           placeholder="Enter First Name">
		   </div>

           <div class="form-group">
		     <label for="mname">Middle Name</label>
		     <input type="mname" 
		           class="form-control" 
		           id="mname" 
		           name="mname" 
		           value="<?php if(isset($_GET['mname']))
		                           echo($_GET['mname']); ?>" 
		           placeholder="Enter Middle Name">
		   </div>

           <div class="form-group">
		     <label for="lname">Last Name</label>
		     <input type="lname" 
		           class="form-control" 
		           id="lname" 
		           name="lname" 
		           value="<?php if(isset($_GET['lname']))
		                           echo($_GET['lname']); ?>" 
		           placeholder="Enter Last Name">
		   </div>

           <div class="form-group">
		     <label for="age">Age</label>
		     <input type="age" 
		           class="form-control" 
		           id="age" 
		           name="age" 
		           value="<?php if(isset($_GET['age']))
		                           echo($_GET['age']); ?>" 
		           placeholder="Enter Age">
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enter email">
		   </div>

           <div class="form-group">
		     <label for="address">Address</label>
		     <input type="address" 
		           class="form-control" 
		           id="address" 
		           name="address" 
		           value="<?php if(isset($_GET['address']))
		                           echo($_GET['address']); ?>" 
		           placeholder="Street No. Barangay, City">
		   </div>

           <div class="form-group">
		     <label for="contactno">Contact No. </label>
		     <input type="contactno" 
		           class="form-control" 
		           id="contactno" 
		           name="contactno" 
		           value="<?php if(isset($_GET['contactno']))
		                           echo($_GET['contactno']); ?>" 
		           placeholder="+63">
		   </div>

           
           <div class="form-group">
		     <label for="birthday">Birthday </label>
		     <input type="birthday" 
		           class="form-control" 
		           id="birthday" 
		           name="birthday" 
		           value="<?php if(isset($_GET['birthday']))
		                           echo($_GET['birthday']); ?>" 
		           placeholder="Month/Day/Year">
		   </div>
           
           <div class="form-group">
		     <label for="mothersname">Mother's Name </label>
		     <input type="mothersname" 
		           class="form-control" 
		           id="mothersname" 
		           name="mothersname" 
		           value="<?php if(isset($_GET['mothersname']))
		                           echo($_GET['mothersname']); ?>" 
		           placeholder="Mother's Name">
		   </div>

           <div class="form-group">
		     <label for="fathersname">Father's Name </label>
		     <input type="fathersname" 
		           class="form-control" 
		           id="fathersname" 
		           name="fathersname" 
		           value="<?php if(isset($_GET['fathersname']))
		                           echo($_GET['fathersname']); ?>" 
		           placeholder="Father's Name">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
