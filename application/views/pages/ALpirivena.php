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
        
        <div class="col-sm-4">
                <div class="form-group">
                    <label for="index">Subject Name</label>
                    <input type="text" class="form-control" id="subjectname1" placeholder="Subject Name" name="subjectname1">
                </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="index">Subject Number</label>
                <input type="text" class="form-control" id="subjectnumber1" placeholder="Subject Number" name="subjectnumber1">
            </div>
        </div>
        <div class="col-sm-4">
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
        
        <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname2" placeholder="Subject Name" name="subjectname2">
                </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber2" placeholder="Subject Number" name="subjectnumber2">
            </div>
        </div>
        <div class="col-sm-4">
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
        
        <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname3" placeholder="Subject Name" name="subjectname3">
                </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber3" placeholder="Subject Number" name="subjectnumber3">
            </div>
        </div>
        <div class="col-sm-4">
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
    <div class="row">
        
        <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="subjectname4" placeholder="Subject Name" name="subjectname4">
                </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <input type="text" class="form-control" id="subjectnumber4" placeholder="Subject Number" name="subjectnumber4">
            </div>
        </div>
        <div class="col-sm-4">
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

        <!-- <div class="col-sm-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="medium4" placeholder="Medium" name="medium4">
                </div>
        </div> -->
    </div>
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
    <tr>
        <td>Accountancy</td>
        <td>01</td>
    </tr>
    <tr>
        <td>Aesthetics  appreciation</td>
        <td>02</td>
    </tr> 
    <tr>
        <td>Agricultural Science</td>
        <td>03</td>
    </tr>
    <tr>
        <td>Agro Science For Advanced Level</td>
        <td>04</td>
    </tr>
    <tr>
        <td>Agro Technology</td>
        <td>05</td>
    </tr>
    <tr>
        <td>Aluminum Fabrication Studies</td>
        <td>06</td>
    </tr>
    <tr>
        <td>Applied English and communication skills</td>
        <td>07</td>
    </tr>
    <tr>
        <td>Applied Horticultural Studies</td>
        <td>08</td>
    </tr>
    <tr>
        <td>Aquatic Resource Studies</td>
        <td>09</td>
    </tr>
    <tr>
        <td>Arabic</td>
        <td>10</td>
    </tr>
    <tr>
        <td>Art</td>
        <td>11</td>
    </tr>
    <tr>
        <td>Art & Designing</td>
        <td>12</td>
    </tr>
    <tr>
        <td>Arts & Crafts</td>
        <td>13</td>
    </tr>
    <tr>
        <td>Automobile Studies</td>
        <td>14</td>
    </tr>
    <tr>
        <td>Bio Resource Technology </td>
        <td>15</td>
    </tr>
    <tr>
        <td>Bio Science</td>
        <td>16</td>
    </tr>
    <tr>
        <td>Bio System Technology</td>
        <td>17</td>
    </tr>
    <tr>
        <td>Buddhism </td>
        <td>18</td>
    </tr>
    <tr>
        <td>Buddhist Civilization</td>
        <td>19</td>
    </tr>
    <tr>
        <td>Business Statistics </td>
        <td>20</td>
    </tr>
    <tr>
        <td>Business Studies</td>
        <td>21</td>
    </tr>
    <tr>
        <td>Career guidance programs</td>
        <td>22</td>
    </tr>
    <tr>
        <td>Carnatic Music </td>
        <td>23</td>
    </tr>
    <tr>
        <td>Chemistry </td>
        <td>24</td>
    </tr>
    <tr>
        <td>Child Psychology & Care</td>
        <td>25</td>
    </tr>
    <tr>
        <td>Chinese</td>
        <td>26</td>
    </tr>
    <tr>
        <td>Christian Civilization</td>
        <td>27</td>
    </tr>
    <tr>
        <td>Christianity</td>
        <td>28</td>
    </tr>
    <tr>
        <td>Civil Technology</td>
        <td>29</td>
    </tr>
    <tr>
        <td>Combined Mathematics</td>
        <td>30</td>
    </tr>
    <tr>
        <td>Communication & Media Studies</td>
        <td>31</td>
    </tr>
    <tr>
        <td>Communication & Media Studies</td>
        <td>32</td>
    </tr>
    <tr>
        <td>Construction Studies</td>
        <td>33</td>
    </tr>
    <tr>
        <td>Dancing - Bharatha</td>
        <td>34</td>
    </tr>
    <tr>
        <td>Dancing - Indigeneous</td>
        <td>35</td>
    </tr>
    <tr>
        <td>Drama & Theatre</td>
        <td>36</td>
    </tr>
    <tr>
        <td>Economics</td>
        <td>37</td>
    </tr>
    <tr>
        <td>Electrical and Electronic Studies</td>
        <td>38</td>
    </tr>
    <tr>
        <td>Electrical, Electronic & Information Technology</td>
        <td>39</td>
    </tr>
    <tr>
        <td>Engineering Technology </td>
        <td>40</td>
    </tr>
    <tr>
        <td>English</td>
        <td>41</td>
    </tr>
    <tr>
        <td>Entrepreneurial skills</td>
        <td>42</td>
    </tr>
    <tr>
        <td>Environment Studies</td>
        <td>43</td>
    </tr>
    <tr>
        <td>Event Management</td>
        <td>44</td>
    </tr>
    <tr>
        <td>Fashion Designing</td>
        <td>45</td>
    </tr>
    <tr>
        <td>First Language (Sinhala or Tamil)</td>
        <td>46</td>
    </tr>
    <tr>
        <td>Food Processing Studies</td>
        <td>47</td>
    </tr>
    <tr>
        <td>Food Technology</td>
        <td>48</td>
    </tr>
    <tr>
        <td>French</td>
        <td>49</td>
    </tr>
    <tr>
        <td>General English</td>
        <td>50</td>
    </tr>
    <tr>
        <td>General Information  Technology</td>
        <td>51</td>
    </tr>
    <tr>
        <td>Geography</td>
        <td>52</td>
    </tr>
    <tr>
        <td>German</td>
        <td>53</td>
    </tr>
    <tr>
        <td>Graphic Design </td>
        <td>54</td>
    </tr>
    <tr>
        <td>Greek &Roman Civilization</td>
        <td>55</td>
    </tr>
    <tr>
        <td>Health &Social Care</td>
        <td>56</td>
    </tr>
    <tr>
        <td>Health and life skills needed for social well-being </td>
        <td>57</td>
    </tr>
    <tr>
        <td>Higher Mathematics</td>
        <td>58</td>
    </tr>
    <tr>
        <td>Hindi</td>
        <td>59</td>
    </tr>
    <tr>
        <td>Hindu Civilization</td>
        <td>60</td>
    </tr>
    <tr>
        <td>Hinduism</td>
        <td>61</td>
    </tr>
    <tr>
        <td>History of (India,Modern World,Europe)</td>
        <td>62</td>
    </tr>
    <tr>
        <td>History of Ceylon</td>
        <td>63</td>
    </tr>
    <tr>
        <td>Home Economics</td>
        <td>64</td>
    </tr>
    <tr>
        <td>Information & Communication Technology</td>
        <td>65</td>
    </tr>
    <tr>
        <td>Information and communication technology skills </td>
        <td>66</td>
    </tr>
    <tr>
        <td>Interior Designing</td>
        <td>67</td>
    </tr>
    <tr>
        <td>Islam</td>
        <td>68</td>
    </tr>
    <tr>
        <td>Islamic Civilization</td>
        <td>69</td>
    </tr>
    <tr>
        <td>Japanese</td>
        <td>70</td>
    </tr>
    <tr>
        <td>Landscaping</td>
        <td>71</td>
    </tr>
    <tr>
        <td>Livestock Product Studies</td>
        <td>72</td>
    </tr>
    <tr>
        <td>Logic & Scientific Method</td>
        <td>73</td>
    </tr>
    <tr>
        <td>Malay </td>
        <td>74</td>
    </tr>
    <tr>
        <td>Mathematics</td>
        <td>75</td>
    </tr>
    <tr>
        <td>Mechanical Technology </td>
        <td>76</td>
    </tr>
    <tr>
        <td>Metal Fabrication Studies</td>
        <td>77</td>
    </tr>
    <tr>
        <td>Music - Eastern</td>
        <td>78</td>
    </tr>
    <tr>
        <td>Other English medium subjects</td>
        <td>79</td>
    </tr>
    <tr>
        <td>Other Subjects</td>
        <td>80</td>
    </tr>
    <tr>
        <td>Paly</td>
        <td>81</td>
    </tr>
    <tr>
        <td>Performing Arts</td>
        <td>82</td>
    </tr>
    <tr>
        <td>Physical Education & sports</td>
        <td>83</td>
    </tr>
    <tr>
        <td>Physics </td>
        <td>84</td>
    </tr>
    <tr>
        <td>Plantation product Studies </td>
        <td>85</td>
    </tr>
    <tr>
        <td>Political Science</td>
        <td>86</td>
    </tr>
    <tr>
        <td>Russian</td>
        <td>87</td>
    </tr>
    <tr>
        <td>Sanskrit </td>
        <td>88</td>
    </tr>
    <tr>
        <td>Science For Technology </td>
        <td>89</td>
    </tr>
    <tr>
        <td>Sinhala</td>
        <td>90</td>
    </tr>
    <tr>
        <td>Skills related to citizenship </td>
        <td>91</td>
    </tr>
    <tr>
        <td>Software design</td>
        <td>92</td>
    </tr>
    <tr>
        <td>Sports and other curriculum activities </td>
        <td>93</td>
    </tr>
    <tr>
        <td>Tamil</td>
        <td>94</td>
    </tr>
    <tr>
        <td>Textile & Apparel Studies </td>
        <td>95</td>
    </tr>
    <tr>
        <td>Tourism & Hospitality</td>
        <td>96</td>
    </tr>
    <tr>
        <td>Web design</td>
        <td>97</td>
    </tr>
    <tr>
        <td>Western Music</td>
        <td>98</td>
    </tr>
</table>
</div>
&nbsp;

</form>
<script src="<?php echo site_url(); ?>assets/js/alpir.js"></script>