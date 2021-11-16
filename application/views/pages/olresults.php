<div class="mb-5">
	<h2><?= $title; ?></h2>
</div>

<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>
<?php 
$olsubnames = array( 
      '40' => 'Music (Oriental)',
      '11' => 'Buddhism' ,
      '41' => 'Music (Western)',
      '12' => 'Saivaner'	,
      '42' => 'Music (Carnatic)',
      '14' => 'Catholicism	'		,
      '43' => 'Art',
      '15' => 'Christianity'			,
      '44' => 'Dancing (Orintal)',
      '16' => 'Islam' ,
      '45' => 'Dancing (Bharata)',
      '21' => 'Sinhala Language & Literature' ,
      '46' => 'Appreciation of English literary Texts',
      '22' => 'tamil Language & Literature'	,
      '47' => 'Appreciation of Sinhala literary Texts',
      '31' => 'English Language'			,
      '48' => 'Appreciation of Tamil Literary Texts',
      '32' => 'Mathematics'			,
      '49' => 'appreciation of Arabic Literary Texts',
      '33' => 'History	'		,
      '50' => 'Drama and Theatre (Sinhala)',
      '34' => 'Science	'		,
      '51' => 'Drama and Theatre (Tamil)',
      '60' => 'Business & Accounting Studies' 			,
      '52' => 'Drama and Theatre (English)',
      '61' => 'Geography',
      '80' => 'Information & Communication Technology',
      '62' => 'Civil Education'	,
      '81' => 'Agriculture & Food Technology',
      '63' => 'Entrepreneurship Studies'	,
      '82' => 'Aquatic bioresources Technology',
      '64' => 'Second Language (Sinhala)',
      '84' => 'Art & Crafts',
      '65' => 'Second Language (Tamil)',
      '85' => 'Home Economics',
      '66' => 'Pali	',
      '86' => 'Health & Physical Education',
      '67' => 'Sanskrit',
      '87' => 'Communication & Media Studies',
      '68' => 'French',
      '88' => 'Design & Construction Technology',
      '69' => 'German'	,
      '89' => 'Design & Mechanical Technology',
      '70' => 'Hindi',
      '90' => 'Design, Electrical &  Electronic Technology',
      '71' => 'Japanese',
      '92' => 'Electronic Writing & Shorthand (Sinhala)',
      '72' => 'Arabic	',
      '93' => 'Electronic Writing & Shorthand (Tamil)',
      '73' => 'korean',
      '94' => 'Electronic Writing & Shorthand (English)',
      '74' => 'Chinese' ,
      '75' => 'Russian'); 
  ?>
<div class="row">
<?php if( $olresults1 != ""){foreach($olresults1 as $olresult1): ?>
<?php //$_SESSION['olindex1'] = $olresult1["OL_index"]; ?>
    <div class="container1" id="con1">    
      <div class= "col-sm-4">
      <h4>1st Attempt</h4><br>
      <table class="table" style="width: 100%">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
            if (!array_key_exists($olresult1['sub1'], $olsubnames)) {
              echo '<td>'. $olresult1['sub1'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub1']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade1']; ?></td>
          </tr>      
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub2'], $olsubnames)) {
              echo '<td>'. $olresult1['sub2'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub2']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade2']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub3'], $olsubnames)) {
              echo '<td>'. $olresult1['sub3'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub3']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade3']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub4'], $olsubnames)) {
              echo '<td>'. $olresult1['sub4'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub4']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade4']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub5'], $olsubnames)) {
              echo '<td>'. $olresult1['sub5'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub5']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade5']; ?></td>
          </tr>      
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub6'], $olsubnames)) {
              echo '<td>'. $olresult1['sub6'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub6']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade6']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub7'], $olsubnames)) {
              echo '<td>'. $olresult1['sub7'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub7']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade7']; ?></td>
          </tr>  
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub8'], $olsubnames)) {
              echo '<td>'. $olresult1['sub8'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub8']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade8']; ?></td>
          </tr>  
          <tr>
          <?php 
            if (!array_key_exists($olresult1['sub9'], $olsubnames)) {
              echo '<td>'. $olresult1['sub9'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult1['sub9']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult1['grade9']; ?></td>
          </tr>    
        </tbody>
      </table>
    </div>      
    </div>
  <?php endforeach;} ?>

  <?php if( $olresults2 != ""){foreach($olresults2 as $olresult2): ?>
  <?php //$_SESSION['olindex2'] = $olresult2["OL_index"]; ?>
    <div class="container2" id="con2">
    <div class= "col-sm-4">
    <h4>2nd Attempt</h4><br>
      <table class="table"  style="width: 100%">
      <thead>
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub1'], $olsubnames)) {
              echo '<td>'. $olresult2['sub1'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub1']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade1']; ?></td>
          </tr>    
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub2'], $olsubnames)) {
              echo '<td>'. $olresult2['sub2'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub2']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade2']; ?></td>
          </tr>      
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub3'], $olsubnames)) {
              echo '<td>'. $olresult2['sub3'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub3']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade3']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub4'], $olsubnames)) {
              echo '<td>'. $olresult2['sub4'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub4']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade4']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub5'], $olsubnames)) {
              echo '<td>'. $olresult2['sub5'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub5']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade5']; ?></td>
          </tr>      
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub6'], $olsubnames)) {
              echo '<td>'. $olresult2['sub6'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub6']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade6']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub7'], $olsubnames)) {
              echo '<td>'. $olresult2['sub7'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub7']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade7']; ?></td>
          </tr>  
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub8'], $olsubnames)) {
              echo '<td>'. $olresult2['sub8'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub8']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade8']; ?></td>
          </tr>  
          <tr>
          <?php 
            if (!array_key_exists($olresult2['sub9'], $olsubnames)) {
              echo '<td>'. $olresult2['sub9'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult2['sub9']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult2['grade9']; ?></td>
          </tr>     

        </tbody>
      </table>
      </div>
    </div>
  <?php endforeach;} ?>
  
  <?php if( $olresults3 != ""){foreach($olresults3 as $olresult3): ?>
  <?php //$_SESSION['olindex3'] = $olresult3["OL_index"]; ?>
    <div class="container3" id="con3">
      <div class= "col-sm-4">
      <h4>3rd Attempt</h4><br>
      <table class="table"  style="width:100%">
        <thead>
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
          </tr>
        </thead>
        <tbody>
        <tr>
        <?php 
            if (!array_key_exists($olresult3['sub1'], $olsubnames)) {
              echo '<td>'. $olresult3['sub1'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub1']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade1']; ?></td>
          </tr>      
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub2'], $olsubnames)) {
              echo '<td>'. $olresult3['sub2'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub2']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade2']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub3'], $olsubnames)) {
              echo '<td>'. $olresult3['sub3'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub3']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade3']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub4'], $olsubnames)) {
              echo '<td>'. $olresult3['sub4'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub4']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade4']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub5'], $olsubnames)) {
              echo '<td>'. $olresult3['sub5'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub5']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade5']; ?></td>
          </tr>      
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub6'], $olsubnames)) {
              echo '<td>'. $olresult3['sub6'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub6']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade6']; ?></td>
          </tr>
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub7'], $olsubnames)) {
              echo '<td>'. $olresult3['sub7'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub7']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade7']; ?></td>
          </tr>  
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub8'], $olsubnames)) {
              echo '<td>'. $olresult3['sub8'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub8']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade8']; ?></td>
          </tr>  
          <tr>
          <?php 
            if (!array_key_exists($olresult3['sub9'], $olsubnames)) {
              echo '<td>'. $olresult3['sub9'].'</td>';
            }else{
              foreach($olsubnames as $key => $value){
                if($key == $olresult3['sub9']){
                  echo "<td>". $value ."</td>";
                }
              }
            } ?>
            <td><?php echo $olresult3['grade9']; ?></td>
          </tr>   
        <?php endforeach;} ?>
        </tbody>
      </table>
      </div>
      <a class="btn btn-primary" href="<?php echo site_url(); ?>/sripada">Next</a>
    </div>
   
  <!-- </div> -->

  <br>
  <br>
</div>  
</div>
<br>
<!-- <footer class="footer">
    <div class="container">
        <span><h4>©2020 Data Management Branch, Ministry of Education, Sri Lanka.</h4></span>
    </div>
</footer> -->
<?php //var_dump($_SESSION); ?> 
<?php //$this->session->unset_userdata('alindex', 'olindex1', 'olindex2', 'olindex3') ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/ol.js">

