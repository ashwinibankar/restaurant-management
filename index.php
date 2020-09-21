<html>
<head>
	<title>Menu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<h1>Database entries</h1>
	<?php
	    while ($row = mysqli_fetch_array($result)) {
	      	echo "<img src='images/".$row['image']."' >";    
	    }
	 ?>

    <h2>form to upload data</h2>

    <form action="menu.php" method="POST" enctype="multipart/form-data"> 
    	Dish name: <input type="text" name="dishname"> <br> 
    	Image: <input type="file" name="fileToUpload" id="fileToUpload"> <br>
    	ingrediants : <input type="text" name="ingrediants"> <br>
    	price: <input type="number" name="price"> <br>
    	margin: <input type="number" name="margin"> <br>

        <button type="submit" name="upload">POST</button>

    </form>
</body>
</html>