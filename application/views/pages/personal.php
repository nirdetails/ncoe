<h2><?= $title; ?></h2>
<h2>Personal Details Form</h2>
  <form action="/action_page.php">
  <div class="form-group">
      <label for="fullname">Name in Full: </label>
      <input type="text" class="form-control" id="fullname" placeholder="Enter your full name" name="fullname">
    </div>
    <div class="form-group">
      <label for="initials">Name with Initials: </label>
      <input type="text" class="form-control" id="initials" placeholder="Enter your name with Initials" name="initials">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth: </label>
      <input type="date" class="form-control" id="dob"  name="dob">
    </div>
    <div class="form-group">
      <label for="address">Permanent Address: </label>
      <input type="textarea" class="form-control" id="address1" placeholder="Enter your address- line01" name="address1"><br>
      <input type="text" class="form-control" id="address1" placeholder="Enter your address- line02" name="address1"><br>
      <input type="text" class="form-control" id="address1" placeholder="Enter your address- line03" name="address1"><br>
      <input type="text" class="form-control" id="address1" placeholder="Enter your address- line04" name="address1"><br>
    </div>
    <div class="form-group">
      <label for="district">Recendent District Name and Number: </label>
      <select class="form-control" id="district" name="district" required>
                        <option value="0" selected disabled>Select a District</option>
                                                  <option value="16">D16 - Ampara</option>
                                                  <option value="20">D20 - Anuradhapura</option>
                                                  <option value="22">D22 - Badulla</option>
                                                  <option value="15">D15 - Batticaloa</option>
                                                  <option value="01">D01 - Colombo</option>
                                                  <option value="07">D07 - Galle</option>
                                                  <option value="02">D02 - Gampaha</option>
                                                  <option value="09">D09 - Hambantota</option>
                                                  <option value="10">D10 - Jaffna</option>
                                                  <option value="03">D03 - Kaluthara</option>
                                                  <option value="04">D04 - Kandy</option>
                                                  <option value="25">D25 - Kegalle</option>
                                                  <option value="11">D11 - Kilinochchi</option>
                                                  <option value="18">D18 - Kurunegala</option>
                                                  <option value="12">D12 - Mannar</option>
                                                  <option value="05">D05 - Matale</option>
                                                  <option value="08">D08 - Matara</option>
                                                  <option value="23">D23 - Monaragala</option>
                                                  <option value="14">D14 - Mullaitivu</option>
                                                  <option value="06">D06 - Nuwara Eliya</option>
                                                  <option value="21">D21 - Polonnaruwa</option>
                                                  <option value="19">D19 - Puttalam</option>
                                                  <option value="24">D24 - Ratnapura</option>
                                                  <option value="17">D17 - Trincomalee</option>
                                                  <option value="13">D13 - Vavuniya</option>
                                              </select>
    </div>
   
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
             <label for="nic">NIC Number: </label>
             <input type="text" class="form-control" id="nic" placeholder="Enter your NIC" name="nic">
           </div>
        </div>

        <div class="col-sm-6">  
            <div class="form-group">
                <label for="gender">Gender: </label><BR>
                <label class="radio-inline">
                <input type="radio" name="optradio">Male
                </label>
                <label class="radio-inline">
                <input type="radio" name="optradio">Female
                </label>
            </div>
         </div>

    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
                <label for="title">Title: </label>
                <input type="text" class="form-control" id="title" placeholder="Mr/Mrs/Miss/Rev.." name="title">
             </div>
        </div>
        <div class="col-sm-6">   
            <div class="form-group">          
                <label for="ethnicity">Ethnicity: </label>
                <input type="text" class="form-control" id="ethnicity" placeholder="Enter your Ethnicity" name="district">      
             </div>
        </div>
    </div>


    <label>Contact Details:</label><br>       
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> 
               <label for="mobile">Mobile: </label>
                <input type="text" class="form-control" id="mobile" placeholder="0700000000" name="mobile">
            </div>
        </div>
        <div class="col-sm-6">  
            <div class="form-group">           
                <label for="home">Home: </label>
                <input type="text" class="form-control" id="home" placeholder="0000000000" name="home"> 
            </div>     
        </div>
    </div>

    <div class="form-group">            
            <label for="home">Email: </label>
            <input type="email" class="form-control" id="email" placeholder="abc@gmail.com" name="email">             
    </div>
    <button type="submit" name="btnprv" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Previous</button>

    <button type="submit" name="btnnext" class="btn btn-info"><span  class="glyphicon glyphicon-arrow-right"></span> Next </button>

</form>

