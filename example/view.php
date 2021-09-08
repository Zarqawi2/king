<?php
    include'nav.php'; 
  
?>

<?php
    $postid=clear($_GET['postid']);
    $query=mysqli_query($con,"SELECT * FROM `name` WHERE `id`='$postid'");
    while($row=mysqli_fetch_assoc($query)){?><!--lera php akaitawa bo awai dobara datakan nishan bdatawa-->
  <div class="row justify-content-center mx-2 ">
   <div class="card  bg-light pt-1 " style="width: 25rem;border-radius:15px">
  <img class="img-responsive center-block d-block mx-auto" src="img/svg/<?php echo $row['photo'];?>"style="width:200px"><!--hamw datakan la yak colomn-->
  <div class="card-body">
    <h5 class="card-title text-center mb-1 text-secondary">  <?php echo $row['names'];?> : ناو </h5><!--lajayati title ba nawi dataka nishan bdat baw shewaya-->
    <h5 class="card-text text-center  mb-1  text-secondary">  <?php echo $row['age'];?> : تەمەن  </h5><!--datakani price-->
    <h5 class="card-text text-center text-secondary">  <?php echo $row['dep'];?> : بەش  </h5>
    <h5 class="text-center text-secondary my-2"><?php echo $row['phone']; ?> : مووبایل</h5>
    <h5 class="card-text text-center text-warning "> <?php echo $row['details'];?></h5><!--datakani price--><!--datakani price-->
    <div class="d-flex justify-content-center "><!--bo xstna nawrasti cardaka buttonakan-->
    <a href="index.php?postid=<?php echo $row['id'];?>" class="btn btn-outline-info mx-1">Back</a>
</div><!---bo awai bzani id chanda aw php ya -->
  </div>
</div>
  </div>
<?php }?><!--leraash php da axaitawa-->

