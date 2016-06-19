 <?php
 
require 'access.php';
require 'password.php';
require 'access_1.php';

$new_user=new access_1();
$mysqli=new access();
$mysqli->setter();
$mysqli->check_connection();
$mysqli->check_db_connection();


if(isset($_POST['sign_up']))
{
    if((!empty($_POST['f_name']))&&(!empty($_POST['l_name']))&&
            (!empty($_POST['email_id']))&&(!empty($_POST['country']))
            &&(!empty($_POST['mobile_no']))&&
            (!empty($_POST['pswd']))&&((!empty($_POST['gender']))
                    &&(!empty($_POST['birth_date']))&&(!empty($_POST['birth_month']))
                    &&(!empty($_POST['birth_year']))&&(!empty($_POST['city']))&&(!empty($_POST['edu_place']))
                    &&(!empty($_POST['birth_year']))&&(!empty($_POST['g_f_name']))&&(!empty($_POST['g_l_name']))
                    &&(!empty($_POST['g_mobile_no']))&&(!empty($_POST['relationship']))))
    {
        $new_user->set_value($this->f_name=$_POST['f_name'],$this->l_name=$_POST['l_name'],$this->email_id=$_POST['email_id'],
         $this->country=$_POST['country'],$this->mobile_no=$_POST['mobile_no'],$this->pswd=$_POST['pswd'],
          $this->gender=$_POST['gender'],$this->birth_date=$_POST['birth_date'],$this->birth_month=$_POST['birth_month'],$this->birth_year=$_POST['birth_year'],
          $this->g_f_name=$_POST['g_f_name'],$this->g_l_name=$_POST['g_l_name'],$this->g_mobile_no=$_POST['g_mobile_no'],$this->relationship=$_POST['relationship']);
        //$f_name=$_POST['f_name'];
        //echo "f_name found";
        //$l_name=$_POST['l_name'];
        //echo 'l_name found'; 
        //$email_id=$_POST['email_id'];
        //echo 'email found'; 
        //$country=$_POST['country'];
        //echo 'country found'; 
        //$mobile_no=$_POST['mobile_no'];
        //echo 'mobile no found'; 
        $this->pswd->password_generate($pswd)=$this->pswd;
        //$pswd= password($pswd);
        //echo 'password found'; 
        //$gender=$_POST['gender'];
        //echo 'gender found'; 
        //$birth_date=$_POST['birth_date'];
        //echo 'birth date found'; 
        //$birth_month=$_POST['birth_month'];
        //echo 'birth month found'; 
        //$birth_year=$_POST['birth_year'];
        //echo 'birth year found';  
        
        //$_POST[f_name]=$f_name;
    
    $query= "INSERT INTO user(f_name, l_name, email_id, country, mobile_no, password, gender, 
            birth_date,birth_month,birth_year,g_f_name,g_l_name,g_mobile_no, relationship) VALUES ('$this->f_name','$this->l_name',
            '$this->email_id','$this->country','$this->mobile_no','$this->pswd',
             '$this->gender','$this->birth_date','$this->birth_month','$this->birth_year','$this->g_f_name','$this->g_l_name', '$this->g_mobile_no','$this->relationship')";
    
    $resultset=$this->mysqli->query($query) or die("Execution of query failed". error_reporting());
              }
}
                  
echo 'User entered';


//header("location:/garnerbox/signup.php");

?>