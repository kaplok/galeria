<?php
$name = $_POST["name"];
$description = $_POST["description"];
isset($_POST["privacy"]) ? $privacy = $_POST["privacy"] : $privacy = "0";
$user_id = $_POST["user_id"];
$user_name = $_POST["user_name"];

$link = mysqli_connect("localhost", "root", "", "baza");
$resultIfHas = mysqli_query($link, "SELECT id FROM album WHERE album_name='$name'");
$row = mysqli_fetch_assoc($resultIfHas);
if ($row == null) {
    mysqli_query($link,
        "INSERT INTO album (album_name, description, privacy, user_id) VALUES ('$name', '$description', '$privacy', '$user_id')");
}

?>
added new album
<script>
    function OpenMainPage() {
        location.href = "userPage.php?name=<?php echo $user_name ?>";
    }
    setInterval(function(){OpenMainPage()},200);

</script>
