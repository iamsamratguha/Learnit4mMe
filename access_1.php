<?php

class access_1 extends password
{
    public $f_name;
    public $m_name;
    public $l_name;
    public $email_id;
    public $country;
    public $city;
    public $state;
    public $pin;
    public $mobile_no;
    public $pswd;
    public $gender;
    public $birth_date;
    public $birth_month;
    public $birth_year;
    public $user_desc;
    public $g_f_name;
    public $g_l_name;
    public $g_mobile_no;
    public $relationship;
    
    function set_value($f_name,$l_name,$email_id,$country,$mobile_no,$pswd,$gender,$birth_date,$birth_month,$birth_year,$g_f_name,$g_l_name,$g_mobile_no,$relationship)
    {
        $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->email_id=$email_id;
        $this->country=$country;
        $this->mobile_no=$mobile_no;
        $this->pswd->password_generate($pswd)=$pswd;
        $this->gender=$gender;
        $this->birth_date=$birth_date;
        $this->birth_month=$birth_month;
        $this->birth_year=$birth_year;
        $this->g_f_name=$g_f_name;
        $this->g_l_name=$g_l_name;
        $this->g_mobile_no=$g_mobile_no;
        $this->relationship=$relationship;        
    }
    
    
    
    
}
?>
