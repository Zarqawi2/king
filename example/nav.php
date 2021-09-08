<?php
    include'config.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>King</title>
    <link href="./asset/bootstrap.min.css"rel="stylesheet"><!--bootstrap-->
    <link rel="Stylesheet"href="style.css">
    <link href="./asset/bootstrap.min.js"rel="stylesheet">
    <link href="./img/svg/king.svg"rel="icon">
  
    <style>
      @font-face {
  font-family: "Rabar_035";
  src: url("Rabar_035.ttf"); 
}
body {
  font-family: 'Rabar_035';
}
    </style>
    
</head>
<body>


<nav class="navbar navbar-expand-lg container mt-2 mb-5 p-0 navbar-light bg-light"id="navbar_top"style="border-radius:10px;width:95%">
            <a class="navbar-brand" href="#"><img src="./img/svg/king.svg"width="50px"></a>
            <span class="navbar-brand">King</span>

            <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
            <li class="nav-item   ">
            <a class="nav-link active px-2 " href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link px-2" href="login.php">Login</a>
           </li><?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
             echo '
           <li class="nav-item">
             <a class="nav-link px-2" href="?logout">Logout</a>
           </li>  ';
           }?>  
              </ul>
            <p class="text-secondary  m-0  px-2"><?php getrow('visitors');?> : Visitor</p><!-- aw getrow a functiona ka lanaw config drust krawa-->
    <form class="d-flex "action="<?php echo $_SERVER['PHP_SELF'];?>"method="GET">
      <input class="form-control text-center mx-1"name="search" type="search" placeholder=" گەڕان بەپێی ناو یان تەمەن" >
      <button class="btn btn-outline-primary mx-2 " type="submit">گەڕان</button>
    </form>
  </div>
   </nav>


<!--amana bo eshkrdni js-->
<script src="./asset/jquery-3.4.1.slim.min.js"></script><!--bo modal abe am scriptana bnusit agadarba jqwery lasarawa bet-->
<script src="./asset/popper.min.js"> </script>
<script src="./asset/bootstrap.js"></script>
<script src="./asset/bootstrap.min.js"> </script>


</body>
</html>