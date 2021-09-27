<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NCoE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <style>
	
	body{
		background: #aaa;
	}
	.container{
		background: #fff;
		padding: 10px;
		margin-top: 10px;
		border-radius: 10px;
        max-width: 700px;
        
    }
    #button1{
        border: none;
        color: white;
        padding: 35px 35px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left:200px;
        margin-bottom: 50px;
        margin-top: 100px;
        
    }
    #button2{
        border: none;
        color: white;
        padding: 35px 56px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left:200px;
        margin-bottom: 100px;
        
    }
</style>
</head>
<body>

<div class="container">
  <h2></h2>
  <form action="/action_page.php">
    <button type="submit" id="button1" class="btn btn-primary" >Pirivena Education</button><br>
    <button type="submit" id="button2" class="btn btn-primary" >Other Students</button>
  </form>
</div>

</body>
</html>
