
<table class="table">
    <th >
        
    </th>
    <?php 
    foreach($students as $student){
        // print_r($student);
        echo '<tr>';
        echo '<td>'.$student['ALindex'].'</td>';
        echo '<td>'.$student['OLindex1'];
        echo '<td>'.$student['OLindex2'];
        echo '<td>'.$student['OLindex3'];
        echo '<td>'.$student['fullname'];
        echo '<td>'.$student['namewithinitials'];
        echo '<td>'.$student['dob'];
        echo '<td>'.$student['Resdistrict'];
        echo '<td>'.$student['NIC'];
        echo '<td>'.$student['Gender'];
        echo '<td>'.$student['email'];
        echo '<td>'.$student['created_at'];
        echo '<td>'.$student['Ethnicity'];
        echo '<td>'.$student['Title'];
        echo '<td>'.$student['sripadancoe'];
        echo '<td>'.$student['stateworker'].'</td>';
        echo '</tr>';
    } 
    ?>
</table>