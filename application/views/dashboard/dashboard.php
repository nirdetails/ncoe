<h2>Dashboard</h2>

<form action="" method="POST">
    Enter password: 
    <input type="password" name="nicu" id="nicu">
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

            echo "<table border = 1 >
                        <tr> 
                            <td>District</td> 
                            <td>Count</td>
                        </tr>";
            echo "<tr><td>Ampara</td><td>";
                $this->db->where('Resdistrict','16');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Anuradhapura</td><td>";
                $this->db->where('Resdistrict','20');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Badulla</td><td>";
                $this->db->where('Resdistrict','22');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Batticaloa</td><td>";
                $this->db->where('Resdistrict','15');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Colombo</td><td>";
                $this->db->where('Resdistrict','01');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Galle</td><td>";
                $this->db->where('Resdistrict','07');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Gampaha</td><td>";
                $this->db->where('Resdistrict','02');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Hambantota</td><td>";
                $this->db->where('Resdistrict','09');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Jaffna</td><td>";
                $this->db->where('Resdistrict','10');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Kaluthara</td><td>";
                $this->db->where('Resdistrict','03');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Kandy</td><td>";
                $this->db->where('Resdistrict','04');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Kegalle</td><td>";
                $this->db->where('Resdistrict','25');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Kilinochchi</td><td>";
                $this->db->where('Resdistrict','11');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Kurunegala</td><td>";
                $this->db->where('Resdistrict','18');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Mannar</td><td>";
                $this->db->where('Resdistrict','12');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Matale</td><td>";
                $this->db->where('Resdistrict','05');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Matara</td><td>";
                $this->db->where('Resdistrict','08');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Monaragala</td><td>";
                $this->db->where('Resdistrict','23');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Mullaitivu</td><td>";
                $this->db->where('Resdistrict','14');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Nuwara Eliya</td><td>";
                $this->db->where('Resdistrict','06');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Polonnaruwa</td><td>";
                $this->db->where('Resdistrict','21');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Puttalam</td><td>";
                $this->db->where('Resdistrict','19');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Ratnapura</td><td>";
                $this->db->where('Resdistrict','24');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Trincomalee</td><td>";
                $this->db->where('Resdistrict','17');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "<tr><td>Vavuniya</td><td>";
                $this->db->where('Resdistrict','13');
            echo $this->db->count_all_results('stuents');       
            echo "</td>";
            echo "</tr></table>";
                // mysqli_fetch_array($query);
?>
            <br><br>
            <div class="row" style="padding-left: 10px;">
                <!-- <a class="btn btn-primary" href="<?php echo site_url(); ?>/dashboard/view/records">View records</a> -->
            </div>
<?php
        }
    }
?>