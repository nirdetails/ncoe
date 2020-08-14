<h2><?= $title; ?></h2>
<?php foreach($alresults as $alresult): ?>
<h4>Index Number : <?php echo $alresult['AL_index']; ?></h4>
<?php //$_SESSION['alindex'] = $alresult['AL_index']; ?>
  <table class="table">
    
      <?php // var_dump($_SESSION); ?>
    <thead>
      <tr>
        <th>Attempt</th>
        <th>Medium</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Subject</th>
        <th>Grade</th>
        <th>Gen. Test marks</th>
        <th>Z-score</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $alresult['attempt'] ?></td>
        <td><?php echo $alresult['medium'] ?></td>
        <td><?php echo $alresult['sub1'] ?></td>
        <td><?php echo $alresult['grade1'] ?></td>
        <td><?php echo $alresult['sub2'] ?></td>
        <td><?php echo $alresult['grade2'] ?></td>
        <td><?php echo $alresult['sub3'] ?></td>
        <td><?php echo $alresult['grade3'] ?></td>
        <td><?php echo $alresult['sub4'] ?></td>
        <td><?php echo $alresult['grade4'] ?></td>
        <td><?php echo $alresult['gentst'] ?></td>
        <td><?php echo $alresult['zscore'] ?></td>
      </tr>      
    </tbody>
  </table>
  <?php endforeach; ?>
  <div style="text-align:right">
  <a class="btn btn-primary" href="<?php echo site_url(); ?>/olresults">Next</a>  
  <!-- <button  type="submit" name="btnnext" class="btn btn-info"><span  class="glyphicon glyphicon-arrow-right"></span> Next </button> -->
  </div>



