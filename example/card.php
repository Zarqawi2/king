<!-- Modal  henawmanata naw whilaka bo awai har cardek w modali xoi habet-->
<!-- Modal -->
<div class="modal fade" id="post<?php echo clear($row['id']);?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">

      <div class="col-12 bg-white p-3 m-auto  mt-5  "style="border-radius:10px;"><!--am basha bo insert krdn-->
<?php  if(isset($_POST['add'])){?><p class="text-center text-danger"><?php echo $error['result'];?></p><?php }?><!--bo error nishan dan-->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST" enctype="multipart/form-data"><!--ama bo awaya ka formaka bzanet file tedaya-->
    <input type="text"name="id"class="form-control mt-2"value="<?php echo clear($row['id']);?>"hidden><!--value nrxi naw data base nishan ada -->
        <input type="text"name="name"class="form-control mt-2"value="<?php echo clear($row['names']);?>"><!--value nrxi naw data base nishan ada -->
        <input type="text"name="age"class="form-control mt-2"value="<?php echo clear($row['age']);?>">
        <input type="text"name="dep"class="form-control mt-2"value="<?php echo clear($row['dep']);?>">
        <input type="text"name="phone"class="form-control mt-2"value="<?php echo clear($row['phone']);?>">
        <input type="text"name="details"class="form-control mt-2"value="<?php echo clear($row['details']);?>">
        <input type="file"name="file"class="form-control mt-2">
        <p class="text-danger small  text-center m-1"> هەڵبژێری xammp ئاگاداربە ئەبێ وێنەکە لەناو فۆلدەری</p>
        <button class="btn btn-outline-success btn-lg w-auto  mt-2"name="update">گۆڕین</button>
        <button type="button" class="btn btn-outline-danger btn-lg w-auto mt-2 " data-dismiss="modal">داخستنەوە</button>
    </form>
</div>
      </div>
    </div>
  </div>
</div>

<div class="card m-2 bg-light p-2 " style="width: 25rem;border-radius:15px">
  <img class="img-responsive center-block d-block mx-auto " src="img/svg/<?php echo $row['photo'];?>"style="width:200px"><!--hamw datakan la yak colomn-->
  <div class="card-body"><!--aw src abe har lawe wena halbzhere-->
   <h5 class="card-title text-center text-danger"><?php echo $row['names'];?> : ناو  </h5><!--lajayati title ba nawi dataka nishan bdat baw shewaya-->
   <div class="d-flex justify-content-center "><!--bo xstna nawrasti cardaka buttonakan-->
   <a href="view.php?postid=<?php echo clear($row['id']);?>" class="btn btn-outline-info mx-1">view</a>

  <?php if(isset($_SESSION['admin'])){?>
  <a href="index.php?delete=<?php echo clear($row['id']);?>" class="btn btn-outline-danger  mx-1 ">Delete</a><!---bo awai bzani id chanda aw php ya -->
  <span data-toggle="modal" data-target="#post<?php echo clear($row['id']);?>" class="btn btn-outline-success mx-1 "><img src="./img/pencil.svg"width="30px"></span>
  <?php }?>
  <!--ama buttton updata-->
    <!--chon la idyaka post drawa peii abe lanaw dta-targetish haman code bo bnusitawa-->
    <!--am data toggle w data targeta he modalakaya wak id yak yan linkek waaya -->
</div><!---bo awai bzani id chanda aw php ya -->
</div>
</div>