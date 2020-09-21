<?php
require_once 'config.php';

 // define variables and set to empty values
    $dish_name = $image = $ingrediants = $price = $margin = "";
     
	 
	function test_input($data) {
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}

	if (isset($_POST['upload'])) {

		$dish_name = test_input($_POST["dishname"]);

		$image = $_FILES['fileToUpload']['name'];
	  	$target = "images/".basename($image);

	    $ingrediants = test_input($_POST["ingrediants"]);
	    $price = test_input($_POST["price"]);
	    $margin = test_input($_POST["margin"]);
	  	
	  	
	  	$sql = "INSERT INTO menu (dish_name, image, ingrediants, price, margin) VALUES ('$dish_name', '$image', '$ingrediants', '$price', '$margin')";
	  	// execute query
	  	mysqli_query($conn, $sql);

	  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	  		echo "Image uploaded successfully";
	  	}else{
	  		echo "Failed to upload image";
	  	}
	  }

	  $result = mysqli_query($conn, "SELECT * FROM menu");

?>