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
		max-width: 800px;
	}
</style>
</head>
<body>

<div class="container">
  <h2>Personal Details Form</h2>
  <form action="/action_page.php">
  <div class="form-group">
      <label for="fullname">Name in Full: </label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="fullname">
    </div>
    <div class="form-group">
      <label for="initials">Name with Initials: </label>
      <input type="text" class="form-control" id="initials" placeholder="Enter your name with Initials" name="initials">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth: </label>
      <input type="date" class="form-control" id="dob"  name="dob">
    </div>
    <div class="form-group">
      <label for="address">Permanent Address: </label>
      <input type="textarea" class="form-control" id="address1" placeholder="Enter your address- line01" name="address1"><br>
      <input type="text" class="form-control" id="address1" placeholder="Enter your address- line02" name="address1"><br>
      <input type="text" class="form-control" id="address1" placeholder="Enter your address- line03" name="address1"><br>
      <input type="text" class="form-control" id="address1" placeholder="Enter your address- line04" name="address1"><br>
    </div>
    <div class="form-group">
      <label for="district">Recendent District Name and Number: </label>
      <input type="text" class="form-control" id="district" placeholder="Enter your district name and number" name="district">
    </div>
   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
             <label for="nic">NIC Number: </label>
             <input type="text" class="form-control" id="nic" placeholder="Enter your NIC" name="nic">
           </div>
        </div>

        <div class="col-sm-6">  
            <div class="form-group">
                <label for="gender">Gender: </label><BR>
                <label class="radio-inline">
                <input type="radio" name="optradio">Male
                </label>
                <label class="radio-inline">
                <input type="radio" name="optradio">Female
                </label>
            </div>
         </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
                <label for="title">Title: </label>
                <input type="text" class="form-control" id="title" placeholder="Mr/Mrs/Miss/Rev.." name="title">
             </div>
        </div>
        <div class="col-sm-6">   
            <div class="form-group">          
                <label for="ethnicity">Ethnicity: </label>
                <input type="text" class="form-control" id="ethnicity" placeholder="Enter your Ethnicity" name="district">      
             </div>
        </div>
    </div>


    <label>Contact Details:</label><br>       
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
               <label for="mobile">Mobile: </label>
                <input type="text" class="form-control" id="mobile" placeholder="0700000000" name="mobile">
            </div>
        </div>
        <div class="col-sm-6">  
            <div class="form-group">           
                <label for="home">Home: </label>
                <input type="text" class="form-control" id="home" placeholder="0000000000" name="home"> 
            </div>     
        </div>
    </div>

    <div class="form-group">            
            <label for="home">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email">             
    </div>
    <button type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Previous</button>

    <button type="submit" name="btnnext" class="btn btn-info"><span  class="glyphicon glyphicon-arrow-right"></span> Next </button>







  </form>
</div>
</body>
</html>
