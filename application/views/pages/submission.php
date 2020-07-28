<script>
function myFunction() {
  alert("Your Application is submitted. Thank you!");
}
</script>

  <h2><?= $title; ?></h2>
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
