<?php
//الأتصال بقاعدة البيانات
$servername="localhost";
$username="root";
$password="";
$dbname="image";

$conn=new mysqli($servername,$username,$password,$dbname);
//التحقق من الاتصال
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error)
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    //التحقق من رفع الملف
    if(isset($_FILES['image']) && $_FILES['image']['error']== 0)
}
$imageName=$_POST['name'];
$imageData=file_get_contents($_FILES['image']['tmp_name']);
$imageType=$_FILES['image']['Type'];
//التحقق من نوع الملف
if(strpos($imageType,'image')===0)
{
    //إدخال الصورة في قاعدة البيانات
    $stmt=$conn->prepare("INSERT INTO images(image,name)VALUE(?,?)");
    $stmt->bind_param("bs",$imageData,$imageName);

}
if($stmt->execute()){
    echo "Image uploaded successfuly!";
    else{
        echo "error:"$stmt->error;
    }
    $stmt->close();
    else{
        echo "only image files are allowes!";
    }
    else{
        echo "error uploading the file";
    }
}
$conn->close();
?>
