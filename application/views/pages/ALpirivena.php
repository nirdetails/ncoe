<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('Alpirivena/checkalres'); ?>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="index">A\L year:</label>
                <!-- <input type="text" class="form-control" id="alyear" placeholder="Enter your A\L year" name="alyear"> -->
                <select class="form-control" id="alyear" placeholder="Enter your A\L year" name="alyear">
                    <option value="">SELECT</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                </select>
            </div>
        </div>
        

        
        <!-- <div style="text-align:center">
            <button style="margin-top:10px; margin-left:300px" type="submit" class="btn btn-info">Submit</button>
        </div> -->
        
    </div>
   
   
    <h2>A/L Results</h2>
    <div class="row">
    <div class="col-sm-3">
                <div class="form-group">
                    <label for="index">A\L index:</label>
                    <input type="text" class="form-control" id="index" placeholder="Enter your A\L index" name="index">
                </div>
    </div>
    <div class="col-sm-3">
            <div class="form-group">
                <label for="stream">Stream</label>
                <div class="form-group">
                <select name="stream" class="form-control" id="stream">
                    <option id="" selected>STREAM</option>
                    <option value="1">MATHS</option>
                    <option value="2">BIO SCIENCE</option>
                    <option value="3">COMMERCE</option>
                    <option value="4">ARTS</option>
                    <option value="5">TECHNOLOGY</option>
                    <option value="6">COMMON</option>
                </select>
                </div>
                 <br>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="index">Medium</label>
                <!-- <input type="text" class="form-control" id="medium" placeholder="Medium" name="medium"> -->
                <select name="medium" class="form-control" id="medium">
                    <option id="" selected>Medium</option>
                    <option value="1">Sinhala</option>
                    <option value="2">Tamil</option>
                    <option value="3">English</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label for="attempt">Attempt</label>
                <div class="form-group">
                <select name="attempt" class="form-control" id="attempt">
                    <option id="" selected>Attempt</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                </div>
                 <br>
            </div>
        </div>
</div>

  <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="index">Subject Number</label>
                <input type="text" class="form-control" id="subjectnumber1" placeholder="Subject Number" name="subjectnumber1">
            </div>
        </div>
        <div class="col-sm-4">
                <div class="form-group">
                    <label for="index">Subject Name</label>
                    <input type="text" class="form-control" id="subjectname1" placeholder="Subject Name" name="subjectname1">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <label for="index">Grade</label>
                    <input type="text" class="form-control" id="grade1" placeholder="Grade" name="grade1">
                </div>
                 <br>
            </div>
        </div>

        
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber2" placeholder="Subject Number" name="subjectnumber2">
            </div>
        </div>
        <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname2" placeholder="Subject Name" name="subjectname2">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" id="grade2" placeholder="Grade" name="grade2">
                </div>
                 <br>
            </div>
        </div>

        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="medium2" placeholder="Medium" name="medium2">
                </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber3" placeholder="Subject Number" name="subjectnumber3">
            </div>
        </div>
        <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname3" placeholder="Subject Name" name="subjectname3">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" id="grade3" placeholder="Grade" name="grade3">
                </div>
                 <br>
            </div>
        </div>

        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="medium3" placeholder="Medium" name="medium3">
                </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber4" placeholder="Subject Number" name="subjectnumber4">
            </div>
        </div>
        <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname4" placeholder="Subject Name" name="subjectname4">
                </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" id="grade4" placeholder="Grade" name="grade4">
                </div>
                 <br>
            </div>
        </div>

        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="medium4" placeholder="Medium" name="medium4">
                </div>
        </div> -->
    </div>
    <div class="row">
    <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" id="gentst" placeholder="General Test Marks" name="gentst">
                </div>
                 <br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" id="zscore" placeholder="Z-score" name="zscore">
                </div>
                 <br>
            </div>
        </div>
    </div>

    <div style="text-align:center">
        <button style="margin-top:25px; margin-left:15px" type="submit" class="btn btn-info">Submit</button>
    </div>

  
</form>
<script src="<?php echo site_url(); ?>assets/js/alpir.js"></script>