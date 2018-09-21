<?php
   require_once("db/uxconnection.php");
   require_once("db/Sessions.php");
?>
<?php
    function Redirect_to($New_Location){
        header("Location:" .$New_Location);
             exit;
        }
    function Login_Attempt($Username,$Password){
         global $conn;
         $ViewQuery = "SELECT * FROM registration
         WHERE username ='$Username' AND password = '$Password'"; 
         $Execute = $conn->query($ViewQuery);   
         if($admin = mysqli_fetch_assoc($Execute)){
             return $admin;
         }else{
             return null;
         }
    }
    function login(){
        if(isset($_SESSION["User_Id"])){
            return true;
        }
    }
    function Confirm_Login(){
       if(!login()){
           $_SESSION["ErrorMessage"]= "Login Required";
           Redirect_to(index.php);
       }


    }

?>