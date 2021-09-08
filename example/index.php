<?php
    include'nav.php';      //am keywordana bo bang krdni filakani tra ka codi tedaya w kam krdanwai alozi codakana
    include'delete.php';
    require'insert.php';
    include'search.php';
?>
<div <?php if(isset($_SESSION['user']) || isset($_SESSION['admin'])){ echo' class="text-center  p-3 m-auto    mt-2  "style="border-radius:10px;">
 <a href="form.php" class="btn btn-outline-success m-2 text-center">ADD</a>
</div>'; }?>
<!--am codanai xwara cardn ka ba bootstrap drust krawan -->
<div class="row justify-content-center  m-2"><!--bootstrap-->
<?php 
if(isset($_POST['update']) && isset($_SESSION['admin'])){// update krdn
  $id=clear($_POST['id']);
  $name=clear($_POST['name']);//clear functiona la config drust krawa bo kam krdnawai code xss w sql injection
  $age=clear($_POST['age']);
  $details=clear($_POST['details']);//haman code inserta balam ama bo updata
  $dep=clear($_POST['dep']);
  $phone=clear($_POST['phone']);

$query=mysqli_query($con,"UPDATE `name` SET `names`='$name',`age`='$age',`dep`='$dep',`phone`='$phone',`details`='$details'WHERE `id`='$id'");
if($query){
  header("location:index.php?success");
}
//awa syntx update
}
$query=mysqli_query($con,"select * from `name`");//bo pishandani datakan lanaw cardaka
    while($row=mysqli_fetch_assoc($query)){

      include'card.php';// boawai cardakan dwbara nabnawa
}
?><!--alera php daaxaitawa baw shewaya bo awai lanaw kardaka dwbara bbetawa-->
</div>
