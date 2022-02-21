<?php 

if (isset($_POST['create'])) {
	include "../conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	$stud_id = validate($_POST['id']);
	$firstname = validate($_POST['fname']);
	$middlename = validate($_POST['mname']);
	$lastname = validate($_POST['lname']);
	$age = validate($_POST['age']);
	$email = validate($_POST['email']);
	$address = validate($_POST['address']);
	$number = validate($_POST['contactno']);
	$birthday = validate($_POST['birthday']);
	$mothersname = validate($_POST['mothersname']);
	$fathersname = validate($_POST['fathersname']);

	$user_data = 'id='.$stud_id. 'fname='.$firstname. 'mname='.$middlename.'lname='.$lastname. 'age='.$age. 'email='.$email. 'address='.$address. 'contactno='.$number. 'birthday='.$birthday. 'mothersname='.$mothersname. 'fathersname='.$fathersname;

	if (empty($firstname)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else {

       $sql = "INSERT INTO `student_profile` (`id`, `fname`, `mname`, `lname`, `age`, `email`, `address`, `contactno`, `birthday`, `mothersname`, `fathersname`) 
               VALUES('$stud_id', '$firstname','$middlename','$lastname','$age','$email','$address','$number','$birthday','$mothersname','$fathersname')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
