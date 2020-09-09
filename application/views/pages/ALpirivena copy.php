<?php include ('header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>A/L Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    } */
   
</style>
</head>
<body>

<div class="container">
  <h2></h2>
  <form action="/action_page.php">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="index">Attempt:</label>
                <input type="text" class="form-control" id="index" placeholder="Enter your attempt" title="1st attempt, 2nd attempt, 3rd attempt" name="index">
            </div>
        </div>
        <div class="col-sm-4">
                <div class="form-group">
                    <label for="index">A\L index:</label>
                    <input type="text" class="form-control" id="index" placeholder="Enter your A\L year" name="index">
                </div>
        </div>

        <div class="col-sm-4">
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
        </div>
        <div style="text-align:center">
            <button style="margin-top:10px; margin-left:300px" type="submit" class="btn btn-info">Submit</button>
        </div>
        <br>
        
    </div>
   
      
    <h2 style="text-align:center">A/L Results</h2><br>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="index">Medium:</label>
                <input type="text" class="form-control" id="medium" placeholder="Enter your medium" title="Sinhal, Tamil, English" name="medium">
            </div>
        </div>
        <div class="col-sm-4">
                <div class="form-group">
                    <label for="index">General Test:</label>
                    <input type="text" class="form-control" id="generaltest" placeholder="Enter the general test marks " name="generaltest">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="stream">Z-Core:</label>
                <input type="text" class="form-control" id="zcore" placeholder="Enter your z-core" name="zcore">

                 <br>
            </div>
        </div>

  <div class="row">
    <div class="col-sm-6">
                <div class="form-group">
                    <label for="index" style="margin-left:150px">Subject Name</label>
                    <input type="text" style="margin-left:100px" class="form-control" id="subjectname" placeholder="Subject Name" name="index">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <label for="index" style="margin-left:150px">Grade</label>
                    <input type="text" style="margin-left:100px" class="form-control" id="grade" placeholder="Grade" name="index">
                </div>
                 <br>
            </div>
        </div>
   </div>

    <div class="row">
        <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control"  style="margin-left:100px" id="subjectname" placeholder="Subject Name" name="index">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control"  style="margin-left:100px" id="grade" placeholder="Grade" name="index">
                </div>
                 <br>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control"  style="margin-left:100px" id="subjectname" placeholder="Subject Name" name="index">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control"  style="margin-left:100px" id="grade" placeholder="Grade" name="index">
                </div>
                 <br>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control"  style="margin-left:100px" id="subjectname" placeholder="Subject Name" name="index">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control"  style="margin-left:100px" id="grade" placeholder="Grade" name="index">
                </div>
                 <br>
            </div>
        </div>

    </div>
    
    <div style="text-align:center">
            <button style="margin-top:10px; margin-left:300px" type="submit" class="btn btn-info">Submit</button>
    </div>
  </form>
</div>


</body>
</html>
<?php include ('footer.php')?>