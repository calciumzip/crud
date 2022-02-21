<?php 

if (isset($_GET['id'])) {
	include "conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM `student_profile` WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
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
    
	

       $sql = "UPDATE `student_profile` 
                SET id='$stud_id', fname='$fname', mname='$mname', lname='$lname', age='$age', email='$email', address='$address', contactno='number', birthday='$birthday', mothersname='$mothersname', fathersname='fathersname' WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	
}else {
	header("Location: read.php");
}
?>
