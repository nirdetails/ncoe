<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('alresults/checkalres'); ?>
  <div class="form-group">
    <label for="index">A\L index number: <span style="color:red">* </span></label>
    <input type="text" class="form-control" id="index" placeholder="Enter your A\L index number" name="index">
  </div>
  <div class="form-group">
    <label for="git">GIT Marks: </label>
    <input type="text" class="form-control" id="git" name="git" placeholder="Enter the GIT marks">
  </div>
  <!-- <div class="form-group">
    <label for="stream">Stream</label>
    <div class="form-group">
      <select name="sel1" class="form-control" id="sel1">
        <option id="" selected>STREAM</option>
        <option id="maths">MATHS</option>
        <option id="bio">BIO SCIENCE</option>
        <option id="commerce">COMMERCE</option>
        <option id="arts">ARTS</option>
        <option id="tech">TECHNOLOGY</option>
        <option id="comm">COMMON</option>
      </select>
    </div> -->
    <!-- <br>
  </div> -->
  
  <button type="submit" class="btn btn-info">Submit</button>

</form>
