<?php session_destroy(); ?>
<br>
<div class="row" style="text-align: center;">
    <div class="col-sm-6">
        <h3>Create New Application</h3>
        <div class="col-sm-12">
        <br>
        &nbsp;
        </div>
        <div class="form-group">  
            <div style="text-align :center;">
                <a href="alresults" class="btn btn-primary btn-lg" style="width: 80%; padding: 10px;"><b>A/L Year 2019/2020 </b><br>&nbsp;<br></a>
            </div> 
        </div>
        <div class="form-group"> 
            <div style="text-align: center;">
                <a href="prirvenaal" class="btn btn-primary btn-lg" style="width: 80%; padding: 10px;">A/L Year 2018 or Previous Years<br>&nbsp;<br></a>
            </div>      
        </div>
    </div>
    <div class="col-sm-6">
        <h3>Edit an Existing Application</h3>
        <div class="col-sm-12">
        <br>
        &nbsp;
        </div>
        <form action="<?php echo site_url(); ?>editrec/index" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="row" style="margin: auto; text-align:center;">
                <div class="col-sm-2">&nbsp;</div>
                <div class="col-sm-8" style="background-color: #ddffff; padding: 20px; width: 100%">
                <span style="color: red;"><?php echo validation_errors(); ?></span>
                    Enter A/L Index Number
                    <input class="form-control" type="text" name="alindex" id="alindex" style="width: 100%;"><br>
                    <input type="submit" class="btn btn-warning" style="width: 100%;" value="Edit Application">
                    <br>&nbsp;
                </div>
                <div class="col-sm-2">&nbsp;</div>
            </div>
        </form>
    </div>
</div>
</div>
<div class="row" style="height: 80%">
  &nbsp;
</div>
<br>
<footer class="footer">
    <div class="container">
        <span><h4>©2020 Data Management Branch, Ministry of Education, Sri Lanka.</h4></span>
    </div>
</footer>