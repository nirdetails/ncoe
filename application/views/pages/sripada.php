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
  <form action="/action_page.php">
    <div class="form-group">
      <label for="index1" id="label1" title=" National College of Education">Are you applying for Sripada NCoE?</label>
      <select name="sri1"  id="l1" height="4">
         <option id="def1" selected>SELECT</option>
        <option id="yes">Yes</option>
        <option id="no">No</option>
    </select>
    </div>
    <br>
   
    <div class="form-group">
    <label for="index2" id="label2" name="state" style="display :none">Are your parents are State Workers?</label>
      <select name="sri2"  id="l2" height="4" style="display :none">
         <option id="def2" selected>SELECT</option>
        <option id="yes2">Yes</option>
        <option id="no2">No</option>
        </select>
      <br>

    </div>
    
  
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/sripada.js">

