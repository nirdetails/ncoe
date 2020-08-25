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
                    <option value="1">Physical Science</option>
                    <option value="2">Biological Science</option>
                    <option value="3">Commerce</option>
                    <option value="4">Arts</option>
                    <option value="5">Technology</option>
                    <option value="6">Common</option>
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
        
        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <label for="index">Subject Name</label>
                    <input type="text" class="form-control" id="subjectname1" placeholder="Subject Name" name="subjectname1">
                </div>
        </div> -->
        <div class="col-sm-6">
            <div class="form-group">
                <label for="index">Subject Number</label>
                <input type="text" class="form-control" id="subjectnumber1" placeholder="Subject Number" name="subjectnumber1">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-group">
                    <label for="index">Grade</label>
                    <select class="form-control" id="grade1" placeholder="Grade" name="grade1">
                        <option value="0" selected disabled>Select your Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="S">S</option>
                        <option value="F">F</option>
                        <option value="+">+</option>
                        <option value="X">X</option>
                        <option value="N">N</option>
                    </select>
                </div>
                 <br>
            </div>
        </div>     
</div>

<div class="row">
        
        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname2" placeholder="Subject Name" name="subjectname2">
                </div>
        </div> -->
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber2" placeholder="Subject Number" name="subjectnumber2">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-group">
                    <select class="form-control" id="grade2" placeholder="Grade" name="grade2">
                        <option value="0" selected disabled>Select your Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="S">S</option>
                        <option value="F">F</option>
                        <option value="+">+</option>
                        <option value="X">X</option>
                        <option value="N">N</option>
                    </select>
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
        
        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname3" placeholder="Subject Name" name="subjectname3">
                </div>
        </div> -->
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber3" placeholder="Subject Number" name="subjectnumber3">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-group">
                    <select class="form-control" id="grade3" placeholder="Grade" name="grade3">
                        <option value="0" selected disabled>Select your Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="S">S</option>
                        <option value="F">F</option>
                        <option value="+">+</option>
                        <option value="X">X</option>
                        <option value="N">N</option>
                    </select>
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
    <!-- <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber4" placeholder="Subject Number" name="subjectnumber4">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <div class="form-group">
                    <select class="form-control" id="grade4" placeholder="Grade" name="grade4">
                        <option value="0" selected disabled>Select your Grade</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="S">S</option>
                        <option value="F">F</option>
                        <option value="+">+</option>
                        <option value="X">X</option>
                        <option value="N">N</option>
                    </select>
                </div>
                 <br>
            </div>
        </div>
    </div> -->
    <hr>
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
    
    <div class="col-sm-4">
        <div class="form-group">
            <div class="form-group">
                <input type="text" class="form-control" id="git" placeholder="GIT marks" name="git">
            </div>
            <br>
        </div>
    </div>
</div>
<div style="text-align:center">
    <button style="margin-top:25px; margin-left:15px" type="submit" class="btn btn-info">Submit</button>
</div>
<br><br>
<h3  style="text-align:center">Subject List</h3>
<div class="table" style=" font-size:small;">
<table style="width: 100%;">
    <tr>
        <th>Subject Name</th>
        <th>Subject Number </th>
    </tr>
    <tr><td>1</td>	<td>Physics</td></tr>			
    <tr><td>2</td>	<td>Chemistry</td></td></tr>			
    <tr><td>7</td>	<td>Mathematics</td></td></tr>			
    <tr><td>8</td>	<td>Agricultural Science</td></td></tr>			
    <tr><td>9</td>	<td>Biology</td></td>	</tr>		
    <tr><td>10</td>	<td>Combind Mathematics</td></td></tr>			
    <tr><td>11</td>	<td>Higher Mathematics</td></td></tr>			
    <tr><td>12</td>	<td>Common General Test	</td></td></tr>		
    <tr><td>13</td>	<td>General English</td></td>	</tr>	
    <tr><td>14</td>	<td>Civil Technology</td></td></tr>			
    <tr><td>15</td>	<td>Mechanical Technology</td></td>	</tr>		
    <tr><td>16</td>	<td>Eletrical,Electronic and Information Technology	</td></td></tr>		
    <tr><td>17</td>	<td>Food Technology</td></td>	</tr>		
    <tr><td>18</td>	<td>Agro Technology	</td></td></tr>		
    <tr><td>19</td>	<td>Bio- Resource Technology</td></td></tr>			
    <tr><td>20</td>	<td>Information & Communication Technology</td></tr>			
    <tr><td>21</td>	<td>Economics</td></td>		</tr>	
    <tr><td>22</td>	<td>Geography</td></td></tr>			
    <tr><td>23</td>	<td>Political Science</td></td>	</tr>		
    <tr><td>24</td>	<td>Logic and Scientific Method	</td></td>	</tr>	
    <tr><td>25 A</td><td>History of India</td></tr>			
    <tr><td>25 B</td><td>History of Europe</td></tr>			
    <tr><td>25 C</td><td>History of Modern world	</td>	</tr>	
    <tr><td>28</td><td>Home Economics	</td>	</tr>	
    <tr><td>29</td><td>Communication & Media Studies</td></tr>			
    <tr><td>31</td><td>Business Statistics	</td>	</tr>	
    <tr><td>32</td><td>Business Studies</td></tr>			
    <tr><td>33</td><td>Accounting	</td></tr>		
    <tr><td>41</td><td>Buddhism</td>		</tr>	
    <tr><td>42</td><td>Hinduism</td></tr>			
    <tr><td>43</td><td>Christianity</td>	</tr>		
    <tr><td>44</td><td>Islam	</td>	</tr>		
    <tr><td>45</td><td>Buddhist Civilization</td></tr>
    <tr><td>46</td><td>Hindu Civilization</td></tr>
    <tr><td>47</td><td>Islam Civilization</td></tr>
    <tr><td>48</td><td>Greek & Rooman Civilization</td></tr>
    <tr><td>49</td><td>Christian Civilization</td></tr>
    <tr><td>51</td><td>Art</td></tr>
    <tr><td>52 A</td><td>Dancing (Indigenous  -Kandyan)</td></tr>
    <tr><td>52 B</td><td>Dancing (Indigenous  -Low country)</td></tr>
    <tr><td>52 C</td><td>Dancing (Indigenous Sabaragamu)</td></tr>
    <tr><td>53</td><td>Dancing (Bharata)</td></tr>
    <tr><td>54</td><td>Oriental Music</td></tr>
    <tr><td>55</td><td>Carnatic Music</td></tr>
    <tr><td>56</td><td>Western Music</td></tr>
    <tr><td>57</td><td>Drama and Theatre (Sinhala)</td></tr>
    <tr><td>58</td><td>Drama and Theatre (Tamil)</td></tr>
    <tr><td>59</td><td>Drama and Theatre (English)</td></tr>
    <tr><td>65</td><td>Engineering Technology</td></tr>
    <tr><td>66</td><td>Bio Systems Technology</td></tr>
    <tr><td>67</td><td>Science fot Technology</td></tr>
    <tr><td>71</td><td>Sinhala</td></tr>
    <tr><td>72</td><td>Tamil</td></tr>
    <tr><td>73</td><td>English</td></tr>
    <tr><td>74</td><td>pali</td></tr>
    <tr><td>75</td><td>Sanskrit</td></tr>
    <tr><td>78</td><td>Arabic</td></tr>
    <tr><td>79</td><td>Malay</td></tr>
    <tr><td>81</td><td>French</td></tr>
    <tr><td>82</td><td>German</td></tr>
    <tr><td>83</td><td>Russian</td></tr>
    <tr><td>84</td><td>Hindi</td></tr>
    <tr><td>86</td><td>Chinese</td></tr>
    <tr><td>87</td><td>Japanese</td></tr>
</table>
</div>
&nbsp;

</form>
<script src="<?php echo site_url(); ?>assets/js/alpir.js"></script>