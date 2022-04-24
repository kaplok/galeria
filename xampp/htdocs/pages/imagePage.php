<?php



$file = $_POST["file"];
$description = $_POST["description"];
isset($_POST["privacy"]) ? $privacy = $_POST["privacy"] : $privacy = "0";
$user_id = $_POST["user_id"];
$user_name = $_POST["user_name"];
$albums = $_POST["albums"];

/*echo $file;
var_dump($file);
var_dump($balls);
var_dump($albums);*/
/*
try{
    ImageInputTransformer::$instance->transform(new ImageInput(), "to",[]);
}catch(Exception $e){}
$imageName = FileService::uploadImage($file, $description, $privacy, $user_id, $user_name);

$link = mysqli_connect("localhost", "root", "", "baza");
//$result= mysqli_query($link,  "INSERT INTO image(image_name, description, privacy, user_id) VALUES ('$imageName', '$description', '$privacy', '$user_id')");
*/
        $GALERIA_PATH= "H:\\Users\\Cosmo\\Documents\\GitHub\\galeria";
        $FILES_PATH = $GALERIA_PATH."\\files\\";
        $start = strpos($file, "data:image/");
        $end = strpos($file, ";", $start);
        $startBase64 = strpos($file, "base64,", $start);
        $ext=substr($file, $start+11, $end-$start-11);
       // echo $ext."\n";
        $base64= substr($file, $startBase64+7);
       // echo $base64;
        $fileName = uniqid("img_", true);
        $filePath = $FILES_PATH  . $fileName;

        $file = fopen($filePath, 'wb');
        fwrite($file, base64_decode($base64));
        fclose($file);

        $fileExt = $ext; //fix
$fullName =$filePath. "." . $fileExt;
        rename($filePath, $fullName);
        $link = mysqli_connect("localhost", "root", "", "baza");

        mysqli_query($link,  "INSERT INTO image(image_name, description, privacy, user_id) 
VALUES ('$fullName', '$description', '$privacy', '$user_id')");
$resultID=mysqli_query($link,  "SELECT id from image where image_name = '$fullName'");
$row = mysqli_fetch_array($resultID);
$image_id = $row['id'];
//foreach albums
foreach ($albums as $album) {
       // echo "INSERT INTO image_album(image_id, album_id) VALUES ('$image_id', '$album')";
    mysqli_query($link,  "INSERT INTO image_album(image_id, album_id) VALUES ('$image_id', '$album')");
}
echo "success";
?>

