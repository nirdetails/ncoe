<h2>Dashboard</h2>

<form action="" method="POST">
    NIC Number: 
    <input type="text" name="nicu" id="nicu">
    <input type="submit" value="Submit" name="nicsubmit">
<br><br>
</form>
<?php
    $correct = 0;
    if(isset($_POST['nicsubmit'])){
        $nicu = $_POST['nicu'];

        if($nicu == '940670136v'){
            echo $this->db->count_all('stuents');
            // var_dump($correct);
            echo " Total Records";
        }
    }
?>