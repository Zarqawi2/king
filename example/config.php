<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="fllower";//nawi database =fllower w nawi table=name

    $con=mysqli_connect($host,$user,$password,$db);
    if(!$con){
        die("connection failed".mysqli_connect_errno());

    }
   session_start();
    function clear($data){// bo kurt krdnawai virablakan katek atawe la xss w sql injection biparezit tanha clear anusitawa la peshyan
        global $con;
        $data=mysqli_real_escape_string($con,htmlspecialchars($data));
        return $data;

    }
    
    function getrow($condition){// bo ip nishandan la nav bar
        global $con;
        $query=mysqli_query($con,"SELECT * FROM $condition");
        echo mysqli_num_rows($query);
    }

    $ip=$_SERVER['REMOTE_ADDR']; // ama bo zanini ipya ka sardani webpage akan w nishani bdat
    $query=mysqli_query($con,"SELECT * FROM `visitors` WHERE `ip`='$ip'");
    if(mysqli_num_rows($query)==0){
        $query=mysqli_query($con,"INSERT INTO `visitors`(`ip`) VALUES('$ip')");
    }


    if(isset($_SESSION['admin'])){
        $admin=$_SESSION['admin'];
    }else if(isset($_SESSION['userlogin'])){
        $userid=$_SESSION['userlogin'];
    }
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
        unset($admin);
        unset($userid);
        header("location:index.php");
    }

    

    

    
?>