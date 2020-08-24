<h2><?= $title; ?></h2><br>
<?php $olsubnames = array( '040' => 'Music (Oriental)','011' => 'Buddhism' ,'041' => 'Music (Western)','012' => 'Saivaner'	,'042' => 'Music (Carnatic)','014' => 'Catholicism	'		,'043' => 'Art','015' => 'Christianity'			,'044' => 'Dancing (Orintal)','016' => 'Islam' ,'045' => 'Dancing (Bharata)','021' => 'Sinhala Language & Literature' ,'046' => 'Appreciation of English literary Texts','022' => 'tamil Language & Literature'	,'047' => 'Appreciation of Sinhala literary Texts','031' => 'English Language'			,'048' => 'Appreciation of Tamil Literary Texts','032' => 'Mathematics'			,'049' => 'appreciation of Arabic Literary Texts','033' => 'History	'		,'050' => 'Drama and Theatre (Sinhala)','034' => 'Science	'		,'051' => 'Drama and Theatre (Tamil)','060' => 'Business & Accounting Studies' 			,'052' => 'Drama and Theatre (English)','061' => 'Geography','080' => 'Information & Communication Technology','062' => 'Civil Education'	,'081' => 'Agriculture & Food Technology','063' => 'Entrepreneurship Studies'	,'082' => 'Aquatic bioresources Technology','064' => 'Second Language (Sinhala)','084' => 'Art & Crafts','065' => 'Second Language (Tamil)','085' => 'Home Economics','066' => 'Pali	','086' => 'Health & Physical Education','067' => 'Sanskrit','087' => 'Communication & Media Studies','068' => 'French','088' => 'Design & Construction Technology','069' => 'German'	,'089' => 'Design & Mechanical Technology','070' => 'Hindi','090' => 'Design, Electrical &  Electronic Technology','071' => 'Japanese','092' => 'Electronic Writing & Shorthand (Sinhala)','072' => 'Arabic	','093' => 'Electronic Writing & Shorthand (Tamil)','073' => 'korean','094' => 'Electronic Writing & Shorthand (English)','074' => 'Chinese' ,'075' => 'Russian'); ?>
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

<?php //var_dump($_SESSION); ?> 
<?php //$this->session->unset_userdata('alindex', 'olindex1', 'olindex2', 'olindex3') ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/ol.js">

