<!DOCTYPE html>
<html lang="en">
<head>
  <title>A/L Index</title>
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
  <form action="/action_page.php">
    <div class="form-group">
      <label for="index">A\L index number:</label>
      <input type="text" class="form-control" id="index" placeholder="Enter your A\L index number" name="index">
    </div>
    <div class="form-group">
      <label for="stream">Stream</label>
      <div class="form-group">
      <select name="sel1" class="form-control" id="sel1">
         <option id="maths" selected>STREAM</option>
        <option id="maths">MATHS</option>
        <option id="bio">BIO SCIENCE</option>
        <option id="commerce">COMMERCE</option>
        <option id="arts">ARTS</option>
        <option id="tech">TECHNOLOGY</option>
        <option id="comm">COMMON</option>
      </select>
      </div>
      <br>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>
