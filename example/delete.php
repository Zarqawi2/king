<?php
if(isset($_GET['delete']) && isset($_SESSION['admin'])){// ama bo awaya admon bw enja btwanet delet bkat
    $id=htmlspecialchars($_GET['delete']);//am xata zarda ba har gwbxwat
    $delete_upload_image=mysqli_query($con,"SELECT * FROM `name` WHERE `id` = '$id'");//bo srinawai wenai naw img katek delett krd lanaw web page
    while($row=mysqli_fetch_assoc($delete_upload_image)){
        $image=$row['photo'];
    }
    $query=mysqli_query($con,"DELETE FROM `name`WHERE `id`='$id'");
    if($query){
        header("location:index.php");
        unlink("img/$image");// keywordeaka bo srinawai wena
    }
}    
?>