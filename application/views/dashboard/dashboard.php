<h2>Dashboard</h2>

<form action="" method="POST">
    Enter password: 
    <input type="text" name="nicu" id="nicu">
    <input type="submit" value="Submit" name="nicsubmit">
<br><br>
</form>

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
                <a class="btn btn-primary" href="<?php echo site_url(); ?>/dashboard/view/records">View records</a>
            </div>
<?php
        }
    }
?>