<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Declaration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   -->
<style>
<?php include ('form/form.css')?>
	/* body{
		background: #aaa;
	}
	.container{
		background: #fff;
		padding: 10px;
		margin-top: 10px;
		border-radius: 10px;
		max-width: 700px;
  }
  .button{

  } */
</style>
<script>
function myFunction() {
  alert("Your Application is submitted. Thank you!");
}
</script>

</head>
<body>

<div class="container">
  <h2></h2>
  <form action="/action_page.php">
    

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
                <div style="text-align :left">
                  <button style= "padding:20px;font-size:20px" type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Recheck</button>
                </div>      
         </div>
        </div>
        <div class="col-sm-6">   
            <div class="form-group">  
               <div style="text-align :right">
                  <button style= "padding:20px;font-size:20px" type="submit" name="btnnext" class="btn btn-info" onClick ="myFunction()"><span  class="glyphicon glyphicon-arrow-right"></span> Submit </button>
               </div> 
             </div>
        </div>
    </div>

    <p style="text-align :center"><b>Download your application here:</b></br></br>
        <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-save-file"></span> Save File 
        </a>
      </p> 



  </form>
</div>

</body>
</html>
<?php include "footer.php"?>