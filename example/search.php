<?php //ama bo garan bakar det
    if(isset($_GET['search'])){
        $search=clear($_GET['search']);
        $query=mysqli_query($con,"SELECT * FROM `name` WHERE `names` LIKE '%$search%' OR `age` LIKE '%$search%'");
        if(mysqli_num_rows($query)>0){?>
<div class="row justify-content-center  mt-5"><!--ama datakai tayay lanawrasti webpagaka-->
<?php //php lera akaitawa
    while($row=mysqli_fetch_assoc($query)){
    include "card.php";
  }?><!--lera phpyakyan daaxaitawa-->
</div> 
<?php // am phpya hi if kaya
  }else{
      exit('<div class="text-center   text-danger container mt-5"style="font-size:30px">!هیچ داتایەک نەدۆزرایەوە    </div>');
  }
   exit();// ama bo awaya data habw yan na ba har codakani tr run nakat
}//ama kawanai isset akaya  
?><!--am phpya hi webakawa lasaerawa-->