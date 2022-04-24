<?php

use App\Entity\Image;
use App\Service\FileService;
use App\Transformer\ImageInputTransformer;
use App\Model\ImageInput;
var_dump($_POST);
$file = $_POST["file"];
$description = $_POST["description"];
isset($_POST["privacy"]) ? $privacy = $_POST["privacy"] : $privacy = "0";
$user_id = $_POST["user_id"];
$user_name = $_POST["user_name"];
$albums = $_POST["albums"];
$balls = $_POST["balls"];
echo $file;
var_dump($file);
var_dump($balls);
var_dump($albums);
/*
try{
    ImageInputTransformer::$instance->transform(new ImageInput(), "to",[]);
}catch(Exception $e){}
$imageName = FileService::uploadImage($file, $description, $privacy, $user_id, $user_name);

$link = mysqli_connect("localhost", "root", "", "baza");
//$result= mysqli_query($link,  "INSERT INTO image(image_name, description, privacy, user_id) VALUES ('$imageName', '$description', '$privacy', '$user_id')");
*/

 $FILES_PATH = "/home/igormaculewicz/test";
   $ENDPOINT_PATH = "/image/";
 $base64="";
        $fileName = $this->generateFileName();
        $filePath = $this->generateFilePath($fileName);

        $file = fopen($filePath, 'wb');
        fwrite($file, base64_decode($base64));
        fclose($file);

        $fileExt = $this->getFileExt($filePath);
        rename($filePath, $filePath . '.' . $fileExt);

        return ENDPOINT_PATH . $fileName . '.' . $fileExt;

 private function generateFilePath(string $fileName): string {
        return FILES_PATH . '/' . $fileName;
    }

    /**
     * @return string
     */
    private function generateFileName(): string {
        return uniqid("img_", true);
    }

    /**
     * @param string $filePath
     * @return string
     */
    private function getFileExt(string $filePath): string {
        $extensionGuesser = new MimeTypes();

        return $extensionGuesser->getExtensions($extensionGuesser->guessMimeType($filePath))[0];
    }
?>

