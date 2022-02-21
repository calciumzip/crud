<?php include 'php/Read.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Read</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Middle Name</th>
			      <th scope="col">Last Name</th>
                  <th scope="col">Age</th>
			      <th scope="col">Email</th>
			      <th scope="col">Address</th>
			      <th scope="col">Contact No.</th>
                  <th scope="col">Birthday</th>
			      <th scope="col">Mother's Name</th>
                  <th scope="col">Father's Name</th>
                  
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
                  <td><?=$rows['id']?></td>
                  <td><?=$rows['fname']?></td>
                  <td><?=$rows['mname']?></td>
                  <td><?=$rows['lname']?></td>
                  <td><?=$rows['age']?></td>
                  <td><?=$rows['email']?></td>
                  <td><?=$rows['address']?></td>
                  <td><?=$rows['contactno']?></td>
                  <td><?=$rows['birthday']?></td>
                  <td><?=$rows['mothersname']?></td>
                  <td><?php echo $rows['fathersname']; ?></td>
			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
</body>
</html>

