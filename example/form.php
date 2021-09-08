<?php
include'nav.php';
include'delete.php';
require'insert.php';

?>
<br>
<br>
<br>
<br>

    <div class=" bg-light p-3 m-auto container  shadow  col-sm-8 col-md-8 col-lg-5  "style="border-radius:10px;"><!--am basha bo insert krdn-->
<?php  if(isset($_POST['add'])){?><p class="text-center text-danger"><?php echo $error['result'];?></p><?php }?><!--bo error nishan dan-->
    <form action=""method="POST" enctype="multipart/form-data"><!--ama bo awaya ka formaka bzanet file tedaya-->
        <input type="text"name="name"class="form-control mt-2"placeholder="ناو">
        <input type="text"name="age"class="form-control mt-2"placeholder="تەمەن">
        <input type="text"name="dep"class="form-control mt-2"placeholder="بەش">
        <input type="text"name="phone"class="form-control mt-2"placeholder="مووبایل">
        <input type="text"name="details"class="form-control mt-2"placeholder="زانیاری کەسی">
        <input type="file"name="file"class="form-control mt-2">
        <p class="text-danger small  text-center m-1"> هەڵبژێری xammp ئاگاداربە ئەبێ وێنەکە لەناو فۆلدەری</p>
        <button class="btn btn-outline-success w-100 mt-1"name="add">Add</button>
    </form>
</div>
