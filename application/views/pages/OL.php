<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</style>
  
</head>
<body>

<div class="container">
  <h2></h2>
  <form name="olform" action="/action_page.php">
  <div class="form-group">
      <label for="attempts">How many attempts?</label>
      <select name="sel1" class="form-control" id="sel1">
        <option id="def" selected>ATTEMPTS</option>
        <option id="1">1</option>
        <option id="2">2</option>
        <option id="3">3</option>
      </select>
      <br>
    
  <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="index1" placeholder="Enter your  1st index " name="index1" style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="index2" placeholder="Enter your 2nd index" name="index2"  style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="index3" placeholder="Enter your 3rd index" name="index3" style="display :none">
    </div>

    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>
<?php include "footer.php" ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/ol.js">
<script>
ALERT("111");
</script>

