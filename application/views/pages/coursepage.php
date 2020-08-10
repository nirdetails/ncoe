<style> 
input:checked {
  height: 50px;
  width: 50px;
}
</style>
<div id="result" style="background: yellow;"></div>
  <h2>Course Table</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Course Number</th>
        <th>Course Name</th>
        <!-- <th>Medium</th> -->
        <th>Select Field</th>
        <th>Preference Order</th>
      </tr>
    </thead>
    <?php foreach($courses as $course): ?>
    <?php $i = 1; ?>
    <tbody>
      <tr>
        <td><?= $course['course_no'] ?></td>
        <td><a href="<?php echo base_url('/course/'.$course['course_no']); ?>"><?= $course['name'] ?></a></td>
        <!-- <td><?php //echo $course['medium']; ?></td> -->
        <div style="text-align : center">
        <!-- <td><input id="checkbox<?php //echo $i ?>" type="checkbox" name="checkbox"> Select</td></div> -->
        <!-- <td>
          <select name="sel1" class="form-control" id="sel<?php echo $i; ?>" style= "display :none">
                <option id="def" selected>Select</option>
                <option id="1">1</option>
                <option id="2">2</option>
                <option id="3">3</option>
          </select>
        </td> -->
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    
    
    </tbody>
</table>
<a class="btn btn-primary" href="<?php echo site_url(); ?>/personal">Next</a> 
<script src="<?php echo site_url(); ?>assets/js/coursepage.js">
