<h2>Dashboard</h2>

<form action="" method="POST">
    Enter password: 
    <input type="text" name="nicu" id="nicu">
    <input type="submit" value="Submit" name="nicsubmit">
<br><br>
</form>
<!-- <form action="<?php //echo site_url(); ?>editrec/index" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<div class="row" style="margin: auto; text-align:center;">
    <div class="col-sm-4">&nbsp;</div>
    <div class="col-sm-4" style="border: 5px solid green; padding: 10px;">
    <span style="color: red;"><?php //echo validation_errors(); ?></span>
        Enter A/L Index Number
        <input class="form-control" type="text" name="alindex" id="alindex" style="width: 100%;"><br>
        <input type="submit" class="btn btn-warning" style="width: 100%;" value="Edit my records">
    </div>
    <div class="col-sm-4">&nbsp;</div>
</div>
</form> -->
<?php
    $correct = 0;
    if(isset($_POST['nicsubmit'])){
        $nicu = $_POST['nicu'];

        $nicu = md5($nicu);

        if($nicu == '3d9f019e3c044cd98ed6ef78ae8bbc38'){
            echo $this->db->count_all('stuents');
            // var_dump($correct);
            echo " Total Records";
?>
            <br><br>
            <div class="row" style="padding-left: 10px;">
                <!-- <a class="btn btn-primary" href="<?php echo site_url(); ?>/dashboard/view/records">View records</a> -->
            </div>
<?php
        }
    }
?>