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

        if($nicu == '51cf5c2191583047b40cadaae85477a2'){
            echo "<h3>Record Summery</h3>";
            //Get total non clergy 
            echo $this->db->count_all('al_pirivena'); 
            echo " Total <b>Clergy</b> Records <br>";
            
            echo $this->db->count_all('stuents');
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