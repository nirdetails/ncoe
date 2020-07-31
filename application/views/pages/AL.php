<h2><?= $title; ?></h2>
<?php // echo validation_errors(); ?>
<?php echo form_open_multipart('alresults/checkalres'); ?>
  <div class="form-group">
    <label for="index">A\L index number:</label>
    <input type="text" class="form-control" id="index" placeholder="Enter your A\L index number" name="index">
  </div>
  <div class="form-group">
    <label for="stream">Stream</label>
    <div class="form-group">
    <select name="sel1" class="form-control" id="sel1">
        <option id="maths" selected>STREAM</option>
        <option id="maths">BIOLOGICAL SCIENCE STREAM - 1</option>
        <option id="bio">PHYSICAL SCIENCE STREAM - 2</option>
        <option id="commerce">COMMERCE - 3</option>
        <option id="arts">ARTS - 4</option>
        <option id="tech">TECHNOLOGY - 5</option>
        <option id="comm">OTHER - 6</option>
      </select>
    </div>
    <br>
  </div>
  
  <button type="submit" class="btn btn-info">Submit</button>

</form>
