<?php 

function check_login($con){
    if(isset($_SESSION['ID'])){
        $Id = $_SESSION['ID'];
        $sql = "select * from admin where ID = '$Id' limit 1";

        $res  = mysqli_query($con,$sql);
            if($res && mysqli_num_rows($res) > 0){
                $admin_data  = mysqli_fetch_assoc($res);
                return $admin_data ;
            }
        }
    

    
    header("Location: adminLogin.php");
    die;
}


function random_num($length){
    $text = "";
    if($length<5){
        $length = 5 ;
    }

    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++) { 
        $text .= rand(0,9);
    }

    return $text ;
}

?>