<!DOCTYPE html>
<!--
Created by Shak
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel=="stylesheet" type="text/css" href="desktop.css"/>
        
        
        <title>Learnit4mMe | Learning starts from here</title>
      </head>
    
    <body>
        
        
       <div class="signup">
            
           <form id="rege" name="register" method="POST" action="connect.php">
                        
                <input type="text" id="f_name" name="f_name" maxlength="30" size="27" placeholder="First name"
                       value="<?php 
                       echo isset($_POST['f_name']);?>"/>
                       
                
                <br/><br/>
                <input type="text" id="l_name" name="l_name" maxlength="30" size="27" placeholder="Last name"
                       value ="<?php
                       echo isset($_POST['l_name']);?>"/>
                
                
                <br/><br/>
                <input type="text" id="email_id" name="email_id" maxlength="30" size="27" placeholder="Email-id(optional)"
                       value="<?php
                       echo isset($_POST['email_id']);?>"/>
                <br/><br/>
                <select id="country" name="country">
                    <option value="India" <?php if(isset($_POST['country'])=='India')
                        echo 'SELECTED';?>>India</option>
                 </select>
                <br/><br/>
                 <span id="isd_code">+91</span>
                   
                   
                <input type="text" id="mobile_no" name="mobile_no" maxlength="30" size="27" placeholder="Mobile no."
                       value="<?php
                       echo isset($_POST['mobile_no']);?>"/>
                
                
                <br/><br/>
                <input type="password" id="pswd" name="pswd" maxlength="30" size="27" placeholder="Password"
                       value="<?php
                       echo isset($_POST['pswd']);?>"/>
                
                
                <br/><br/>
                <input type="password" id="pswd_c" maxlength="30" size="27" placeholder="Re-type password"
                       value="<?php
                       echo isset($_POST['pswd_c']);?>"/>
                
                
                <br/><br/>
                <select id="gender" name="gender">
                    <option value="Female" <?php if (isset($_POST['gender'])=='Female')
                        echo 'SELECTED';?>>Female</option>
                    <option value="Male" <?php if (isset($_POST['gender'])=='Male')
                        echo 'SELECTED';?>>Male</option>
                    <option value="Other" <?php if(isset($_POST['gender'])=='Other')
                        echo 'SELECTED';?>>Other</option>
                </select>
                
                
                <br/><br/>
                
                
                <select id="birth_date" name="birth_date">
                    <option value="1" <?php if(isset($_POST['birth_date'])=='1')
                        echo 'SELECTED';?>>1</option>
                    <option value="2" <?php if(isset($_POST['birth_date'])=='2')
                        echo 'SELECTED';?>>2</option>
                    <option value="3" <?php if(isset($_POST['birth_date'])=='3')
                        echo 'SELECTED';?>>3</option>    
                    <option value="4" <?php if(isset($_POST['birth_date'])=='4')
                        echo 'SELECTED';?>>4</option>
                    <option value="5"<?php if(isset($_POST['birth_date'])=='5')
                        echo 'SELECTED';?>>5</option>
                    <option value="6" <?php if(isset($_POST['birth_date'])=='6')
                         echo 'SELECTED';?>>6</option>
                    <option value="7" <?php if(isset($_POST['birth_date'])=='7')
                        echo 'SELECTED';?>>7</option>
                    <option value="8" <?php if(isset($_POST['birth_date'])=='8')
                        echo 'SELECTED';?>>8</option>
                    <option value="9" <?php if(isset($_POST['birth_date'])=='9')
                        echo 'SELECTED';?>>9</option>
                    <option value="10" <?php if(isset($_POST['birth_date'])=='10')
                        echo 'SELECTED';?>>10</option>
                    <option value="11" <?php if(isset($_POST['birth_date'])=='11')
                        echo 'SELECTED';?>>11</option>
                    <option value="12" <?php if(isset($_POST['birth_date'])=='12')
                        echo 'SELECTED';?>>12</option>
                    <option value="13" <?php if(isset($_POST['birth_date'])=='13')
                        echo 'SELECTED';?>>13</option>
                    <option value="14"<?php if(isset($_POST['birth_date'])=='14')
                        echo 'SELECTED';?>>14</option>
                    <option value="15" <?php if(isset($_POST['birth_date'])=='15')
                        echo 'SELECTED';?>>15</option>
                    <option value="16" <?php if(isset($_POST['birth_date'])=='16')
                        echo 'SELECTED';?>>16</option>
                    <option value="17" <?php if(isset($_POST['birth_date'])=='17')
                            echo 'SELECTED';?>>17</option>
                    <option value="18" <?php if(isset($_POST['birth_date'])=='18')
                        echo 'SELECTED';?>>18</option>
                    <option value="19"<?php if(isset($_POST['birth_date'])=='19')
                        echo 'SELECTED';?>>19</option>
                    <option value="20" <?php if(isset($_POST['birth_date'])=='20')
                        echo 'SELECTED';?>>20</option>
                    <option value="21" <?php if(isset($_POST['birth_date'])=='21')
                        echo 'SELECTED';?>>21</option>
                    <option value="22"<?php if(isset($_POST['birth_date'])=='22')
                        echo 'SELECTED';?>>22</option>
                    <option value="23" <?php if(isset($_POST['birth_date'])=='23')
                        echo 'SELECTED';?>>23</option>
                    <option value="24" <?php if(isset($_POST['birth_date'])=='24')
                        echo 'SELECTED';?>>24</option>
                    <option value="25" <?php if(isset($_POST['birth_date'])=='25')
                        echo 'SELECTED';?>>25</option>
                    <option value="26"<?php if(isset($_POST['birth_date'])=='26')
                        echo 'SELECTED';?>>26</option>
                    <option value="27"<?php if(isset($_POST['birth_date'])=='27')
                        echo 'SELECTED';?>>27</option>
                    <option value="28"<?php if(isset($_POST['birth_date'])=='28')
                        echo 'SELECTED'?>>28</option>
                    <option value="29" <?php if(isset($_POST['birth_date'])=='29')
                        echo 'SELECTED';?>>29</option>
                    <option value="30" <?php if(isset($_POST['birth_date'])=='30')
                        echo 'SELECTED';?>>30</option>
                    <option value="31"<?php if(isset($_POST['birth_date'])=='31')
                        echo 'SELECTED';?> >31</option>
                   </select>
                
                <select id="birth_month" name="birth_month">
                    <option value="1" <?php if(isset($_POST['birth_month'])=='Jan')
                            echo'SELECTED';?>>Jan</option>
                    <option value="2" <?php if(isset($_POST['birth_month'])=='Feb')
                        echo 'SELECTED';?>>Feb</option>
                    <option value="3" <?php if(isset($_POST['birth_month'])=='Mar')
                        echo 'SELECTED';?>>Mar</option>
                    <option value="4" <?php if(isset($_POST['birth_month'])=='Apr')
                            echo 'SELECTED';?>>Apr</option>
                    <option value="5" <?php if(isset($_POST['birth_month'])=='May')
                        echo 'SELECTED';?>>May</option>
                    <option value="6" <?php if(isset($_POST['birth_month'])=='Jun')
                        echo 'SELECTED';?>>Jun</option>
                    <option value="7" <?php if(isset($_POST['birth_month'])=='Jul')
                        echo 'SELECTED';?>>Jul</option>
                    <option value="8" <?php if(isset($_POST['birth_month'])=='Aug')
                        echo 'SELECTED';?>>Aug</option>
                    <option value="9" <?php if(isset($_POST['birth_month'])=='Sep')
                        echo 'SELECTED';?>>Sep</option>
                    <option value="10" <?php if(isset($_POST['birth_month'])=='Oct')
                        echo 'SELECTED';?>>Oct</option>
                    <option value="11" <?php if(isset($_POST['birth_month'])=='Nov')
                        echo 'SELECTED';?>>Nov</option>
                    <option value="12" <?php if(isset($_POST['birth_month'])=='Dec')
                        echo 'SELECTED';?>>Dec</option>
                </select>
                
                
                
                <select id="birth_year" name="birth_year">
                    <option value ="1965" <?php if(isset($_POST['birth_year'])=='1965')
                     echo 'SELECTED';?>>1965</option>
                    <option value ="1966"<?php if(isset($_POST['birth_year'])=='1966')
                     echo 'SELECTED';?>>1966</option>
                    <option value ="1967" <?php if(isset($_POST['birth_year'])=='1967')
                     echo 'SELECTED';?>>1967</option>
                    <option value ="1968" <?php if(isset($_POST['birth_year'])=='1968')
                     echo 'SELECTED';?>>1968</option>
                    <option value ="1969" <?php if(isset($_POST['birth_year'])=='1969')
                     echo 'SELECTED';?>>1969</option>
                    <option value ="1970" <?php if(isset($_POST['birth_year'])=='1970')
                     echo 'SELECTED';?>>1970</option>
                    <option value ="1971" <?php if(isset($_POST['birth_year'])=='1971')
                     echo 'SELECTED';?>>1971</option>
                    <option value ="1972" <?php if(isset($_POST['birth_year'])=='1972')
                     echo 'SELECTED';?>>1972</option>
                    <option value ="1973" <?php if(isset($_POST['birth_year'])=='1973')
                     echo 'SELECTED';?>>1973</option>
                    <option value ="1974" <?php if(isset($_POST['birth_year'])=='1974')
                     echo 'SELECTED';?>>1974</option>
                    <option value ="1975" <?php if(isset($_POST['birth_year'])=='1975')
                     echo 'SELECTED';?>>1975</option>
                    <option value ="1976"  <?php if(isset($_POST['birth_year'])=='1976')
                     echo 'SELECTED';?>>1976</option>
                    <option value ="1977"  <?php if(isset($_POST['birth_year'])=='1977')
                     echo 'SELECTED';?>>1977</option>
                    <option value ="1978"  <?php if(isset($_POST['birth_year'])=='1978')
                     echo 'SELECTED';?>>1978</option>
                    <option  value ="1979"  <?php if(isset($_POST['birth_year'])=='1979')
                     echo 'SELECTED';?>>1979</option>
                    <option value ="1980"  <?php if(isset($_POST['birth_year'])=='1980')
                     echo 'SELECTED';?>>1980 </option>
                    <option  value ="1981" <?php if(isset($_POST['birth_year'])=='1981')
                     echo 'SELECTED';?>>1981</option>
                    <option  value ="1982" <?php if(isset($_POST['birth_year'])=='1982')
                     echo 'SELECTED';?>>1982</option>
                    <option value ="1983"  <?php if(isset($_POST['birth_year'])=='1983')
                     echo 'SELECTED';?>>1983</option>
                    <option  value ="1984" <?php if(isset($_POST['birth_year'])=='1984')
                     echo 'SELECTED';?>>1984</option>
                    <option value ="1985"  <?php if(isset($_POST['birth_year'])=='1985')
                     echo 'SELECTED';?>>1985</option>
                    <option  value ="1986" <?php if(isset($_POST['birth_year'])=='1986')
                     echo 'SELECTED';?>>1986</option>
                    <option  value ="1987" <?php if(isset($_POST['birth_year'])=='1987')
                     echo 'SELECTED';?>>1987</option>
                    <option  value ="1988" <?php if(isset($_POST['birth_year'])=='1988')
                     echo 'SELECTED';?>>1988</option>
                    <option  value ="1989" <?php if(isset($_POST['birth_year'])=='1989')
                     echo 'SELECTED';?>>1989</option>
                    <option  value ="1990" <?php if(isset($_POST['birth_year'])=='1990')
                     echo 'SELECTED';?>>1990</option>
                    <option  value ="1991" <?php if(isset($_POST['birth_year'])=='1991')
                     echo 'SELECTED';?>>1991</option>
                    <option  value ="1992" <?php if(isset($_POST['birth_year'])=='1992')
                     echo 'SELECTED';?>>1992</option>
                    <option  value ="1993" <?php if(isset($_POST['birth_year'])=='1993')
                     echo 'SELECTED';?>>1993</option>
                    <option  value ="1994" <?php if(isset($_POST['birth_year'])=='1994')
                     echo 'SELECTED';?>>1994</option>
                    <option value ="1995"  <?php if(isset($_POST['birth_year'])=='1995')
                     echo 'SELECTED';?>>1995</option>
                    <option  value ="1996" <?php if(isset($_POST['birth_year'])=='1996')
                     echo 'SELECTED';?>>1996</option>
                    <option  value ="1997" <?php if(isset($_POST['birth_year'])=='1997')
                     echo 'SELECTED';?>>1997</option>
                    <option  value ="1998" <?php if(isset($_POST['birth_year'])=='1998')
                     echo 'SELECTED';?>>1998</option>
                    <option  value ="1999" <?php if(isset($_POST['birth_year'])=='1999')
                     echo 'SELECTED';?>>1999</option>
                    <option  value ="2000" <?php if(isset($_POST['birth_year'])=='2000')
                     echo 'SELECTED';?>>2000</option>
                    
                    </select>
               <br/><br/>
               
               <select id="city" name="city">
                    <option value="Patna" <?php if (isset($_POST['city'])=='{Patna')
                        echo 'SELECTED';?>>Patna</option>
                    <option value="Patna Central School" <?php if (isset($_POST['edu_place'])=='Patna Central School')
                        echo 'SELECTED';?>>Patna Central School</option>
                    <option value="IIT-Kharagpur" <?php if(isset($_POST['edu_place'])=='IIT-Kharagpur')
                        echo 'SELECTED';?>>IIT-Kharagpur</option>
                    <option value="Xavier School" <?php if(isset($_POST['edu_place'])=='Xavier School')
                        echo 'SELECTED';?>>Xavier School</option>
                    <option value="IIM-Ahmedabad" <?php if(isset($_POST['edu_place'])=='IIM-Ahmedabad')
                        echo 'SELECTED';?>>IIM-Ahmedabad</option>
                </select>
               
               <br/><br/>
                
               <select id="edu_place" name="edu_place">
                    <option value="Delhi Public School" <?php if (isset($_POST['edu_place'])=='Delhi Public School')
                        echo 'SELECTED';?>>Delhi Public School</option>
                    <option value="Patna Central School" <?php if (isset($_POST['edu_place'])=='Patna Central School')
                        echo 'SELECTED';?>>Patna Central School</option>
                    <option value="IIT-Kharagpur" <?php if(isset($_POST['edu_place'])=='IIT-Kharagpur')
                        echo 'SELECTED';?>>IIT-Kharagpur</option>
                    <option value="Xavier School" <?php if(isset($_POST['edu_place'])=='Xavier School')
                        echo 'SELECTED';?>>Xavier School</option>
                    <option value="IIM-Ahmedabad" <?php if(isset($_POST['edu_place'])=='IIM-Ahmedabad')
                        echo 'SELECTED';?>>IIM-Ahmedabad</option>
                </select>
                
                
                <br/><br/>
                
                <label>Add Details of Guardian</label>
                <br/><br/>
<input type="text" id="g_f_name" name="g_f_name" maxlength="30" size="27" placeholder="First name"
                       value="<?php 
                       echo isset($_POST['g_f_name']);?>"/>
                       
                
                <br/><br/>
<input type="text" id="g_l_name" name="g_l_name" maxlength="30" size="27" placeholder="Last name"
                       value ="<?php
                       echo isset($_POST['g_l_name']);?>"/>
                
                <br/><br/>
                <span id="isd_code">+91</span>
                   
                   
                <input type="text" id="g_mobile_no" name="g_mobile_no" maxlength="30" size="27" placeholder="Mobile no."
                       value="<?php
                       echo isset($_POST['mobile_no']);?>"/>

                <br/><br/>
                <span>Relationship:</span>
                <select id="relationship" name="relationship">
                    <option value="Mother" <?php if (isset($_POST['relationship'])=='Mother')
                        echo 'SELECTED';?>>Mother</option>
                    <option value="Father" <?php if (isset($_POST['relationship'])=='Father')
                        echo 'SELECTED';?>>Father</option>
                    <option value="Other" <?php if(isset($_POST['relationship'])=='Other')
                        echo 'SELECTED';?>>Other</option>
                </select>
                
                <br/><br/>
                
                <script type="text/javascript" src="script/jquery.js"></script>            
                <script type="text/javascript" src="script/new.js"></script>
                
                
                    
            </form>
            
        </div>
    </body>
    
</html>














