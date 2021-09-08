<?php 
     $error=['result'=>''];//array bo error 
    if(isset($_POST['add'])){
        $name=clear($_POST['name']);//clear functiona la config drust krawa bo kam krdnawai code xss w sql injection
        $age=clear($_POST['age']);
        $details=clear($_POST['details']);
        $dep=clear($_POST['dep']);
        $phone=clear($_POST['phone']);//amana aw variblanan ka data akana naw databasakawa


        // file apload krdn bam shewaya abet w abe zanyaryakani image bnusit yak yak
        $file=$_FILES['file'];//amayan hi buttonakaya ka addi akait aw 'file'
         $filename=$file['name'];
         $filetype=$file['type'];
         $fileTempname=$file['tmp_name'];
         $fileError=$file['error'];
         $filesize=$file['size'];

         $fileExt=explode('.',$filename);//ama bo dozinawai . lana file
         $fileActualExt=strtolower(end($fileExt));// ama bo awaya axiri dwai . aka bkat ba small abe aw end bnusit
         $fileAllowed=array('png','svg','jpeg','jpg');//am arraya bo dyari krdni jori wenakana
         if(empty($name) || empty($age) || empty($details) || empty($file) || empty($dep) || empty($phone)){
            $error['result']="تکایە خانەکان پڕبکەوە بە تەواوەتی";
        }
        else{
      
         if(in_array($fileActualExt,$fileAllowed)){
             if($fileError===0){
                 if($filesize<1000000000000){
                
                     $fileupload="img/$filename";
                     move_uploaded_file($fileTempname,$fileupload);
                     $query=mysqli_query($con,"INSERT INTO `name`(`names`,`age`,`dep`,`phone`,`details`,`photo`)VALUES('$name','$age','$dep','$phone','$details','$filename')");//insert krdn 
                     if($query){
                      header('location:index.php?success');
                     }else{
                         $error['result']="سەرکەووتوو نەبوو";
                     
                    }
                 }else{
                     $error['result']="قەبارەی وێنەکە گونجاو نییە";
                 }

             }else{
                 $error['result']="وێنەکە گونجاو نییە";
             }
            }
       else
           {
              $error['result']="تکایە بەس وێنە ئەپلۆد بکە";
           }
        }
       }

    
   


//
?>


