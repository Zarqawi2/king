<?php
    include"nav.php";
?>

<?php 
if(isset($_POST['adminlogin'])){
    $username=clear($_POST['username']);//username wata nawe input username
    $password=clear($_POST['password']);

    if(empty($username) || empty($password)){
        $error['result']="تکایە خۆت زۆڵ مەکە و خانەکان پڕبکەوە";
    }else{

        $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
        if(mysqli_num_rows($query)==1){
            while($row=mysqli_fetch_assoc($query)){// am kawanana zor mushkilan agadarba !
            session_start();
            $_SESSION['admin']=$row['id'];
            $_SESSION['username']=$row['username'];
        }header("location:index.php");
    }else{
       $error['result']="! وشەی نهێنی یان یوزەرنەیم هەلەیە  ";
}
}       
}
?>

<?php 
if(isset($_POST['userlogin'])){
    $username=clear($_POST['username']);//username wata nawe input username
    $password=clear($_POST['password']);

    if(empty($username) || empty($password)){
        $error['result']="تکایە خۆت زۆڵ مەکە و خانەکان پڕبکەوە";
    }else{

        $query=mysqli_query($con,"SELECT * FROM `userlogin` WHERE `username`='$username' AND `password`='$password'");
        if(mysqli_num_rows($query)==1){
            while($row=mysqli_fetch_assoc($query)){// am kawanana zor mushkilan agadarba !
            session_start();
            $_SESSION['user']=$row['id'];
            $_SESSION['username']=$row['username'];
        }header("location:index.php");
    }else{
        $error['result']="  user & 123: ئەم یوزەرە لەگەل ئەم پاسۆردە بنوسە ";
      
}
}       
}
?>
<br>
<br>
<div class="container text-center col-lg-6   p-5 bg-light"style="border-radius:10px">
<?php if(isset($_POST['adminlogin']) || isset($_POST['userlogin'])){?> <p class="text-danger"><?php echo $error['result'];?> </p> <?php }?>
<img src="./img/svg/question-mark.svg"width="100px"class="userbtn m-2"title="user">
<img src="./img/svg/pin.svg"width="100px"class="adminbtn m-2"title="admin">
<div class="row justify-content-center ">

    
    <form action="login.php"method="POST" class="admin col-lg-6 col-sm bg-white d-none"style="border-radius:10px"><!--2 form drust akai bo 2 usaraka-->
    <input type="text"name="username"class="form-control form-control-lg m-2 "placeholder="Username">
    <input type="password"name="password"class="form-control form-control-lg m-2 "placeholder="Password">
    <button name="adminlogin" class="btn btn btn-outline-warning  m-2 w-100">Login</button>
    </form>
   

    <form action="login.php"method="POST" class="user col-lg-6 col-sm bg-white d-none"style="border-radius:10px"><!--2 form drust akai bo 2 usaraka-->
    <input type="text"name="username"class="form-control form-control-lg m-2 "placeholder="Username">
    <input type="password"name="password"class="form-control form-control-lg m-2 "placeholder="Password">
    <button name="userlogin" class="btn btn btn-outline-danger  m-2 w-100">Login</button>
    </form>
   
      
 </div>   
</div>
<script>
    $(document).ready(function(){
        $(".userbtn").on("click" , function(){
 
        $(".user").removeClass('d-none');
        $(".admin").addClass('d-none');
        
    })
    $(".adminbtn").on("click",function(){
        $(".admin").removeClass('d-none');
        $(".user").addClass('d-none');
    })

    })
    
</script>