<?php
$name = $_GET["name"];

$link = mysqli_connect("localhost", "root", "", "baza");


$resultIfHas = mysqli_query($link, "SELECT id FROM user WHERE name='$name'");
$row = mysqli_fetch_assoc($resultIfHas);
if ($row == null) {
    mysqli_query($link, "INSERT INTO user(`name`) VALUES ('$name')");
}
$resultUserId = mysqli_query($link, "SELECT id FROM user WHERE name='$name'");
//echo $result;
$row = mysqli_fetch_assoc($resultUserId);
$id = $row["id"];

$resultAlbums = mysqli_query($link, "SELECT * FROM album WHERE user_id='$id'");
while ($row = mysqli_fetch_assoc($resultAlbums)) {
    $output[] =
        [
            'id' => $row["id"],
            'user_id' => $row["user_id"],
            'album_name' => $row["album_name"],
            'description' => $row["description"],
            'created_at' => $row["created_at"],
            'privacy' => $row["privacy"],
            'last_edited' => $row["last_edited"]
        ];
}
if (isset($output)) {
    $albums = $output;
}
//json_encode($output);
//echo $albums;

?>
<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>
        user <?php
        echo $name;
        ?>
    </title>
</head>
<body>
user: <?php
echo $name;
?>
<br>
<br>
<script>
    var albums = [];

    function handleClick(cb) {
        if (cb.checked) {
            albums.push(cb.value);
        } else {
            var index = albums.indexOf(cb.value);
            albums.splice(index, 1);
        }
    }
</script>
//add hidden userid user name value
<div class="imageInput" style="background: gray">
    <form action="imagePage.php" method="post">
        add image:<br>
        <input id="fileInput" type="file" name="file" required><br>
        <label>description:
            <input type="text" name="description">
        </label><br>
        <label>privacy:
            <input type='checkbox' name='privacy' value='privacy'>
        </label><br>
        <input type="hidden" value="<?php echo $id; ?>" name="user_id">
        <input type="hidden" value="<?php echo $name; ?>" name="user_name">
        select albums:<br><br>
        <?php
        //loop over $albums
        if (isset($albums)) {
            $index = 0;
            foreach ($albums as $album) {
                $albumId = $album["id"];
                $albumName = $album["album_name"];

                echo "<input type='checkbox' name='album$index' value='$albumId' onclick='handleClick(this);'>$albumName id:$albumId<br>";
                $index++;
            }
        }
        ?>
        <br>
        <!--<input type="submit" value="submit">!-->


    </form>
    <button onclick="sendFile()">coś</button>
</div>
<br>
<div class="albumInput" style="background: gray">
    <form action="albumPage.php" method="post">
        add album:<br>

        <label>name:
            <input type="text" name="name">
        </label><br>
        <label>description:
            <input type="text" name="description">
        </label><br>
        <input type="hidden" value="<?php echo $id; ?>" name="user_id">
        <input type="hidden" value="<?php echo $name; ?>" name="user_name">
        <label>privacy:
            <input type='checkbox' name='privacy' value='privacy'>
        </label><br>
        <input type="submit" value="submit">


    </form>
</div>
<br>


<label>Select album to show:
    <select onchange="showAlbum(this)">

        <?php
        //loop over $albums
        if (isset($albums)) {
            $index = 0;
            foreach ($albums as $album) {
                $albumId = $album["id"];
                $albumName = $album["album_name"];

                echo "<option value=\"$albumId\">$albumName id:$albumId</option>";
                $index++;
            }
        }
        ?>
    </select>
</label>
<div id="albumShow">

</div>
<script>
 albumShow=   document.getElementById("albumShow");
    function sendFile() {
        const selectedFile = document.getElementById('fileInput').files[0];
        console.log(selectedFile);
        const reader = new FileReader();
        reader.onload = (
            function (e) {


                //use ajax to send the file to the server
                $.ajax({
                    url: "imagePage.php",
                    type: "POST",
                    data: {
                        file: e.target.result,
                        name: selectedFile.name,
                        description: $("input[name='description']").val(),
                        user_id: $("input[name='user_id']").val(),
                        user_name: $("input[name='user_name']").val(),
                        privacy: $("input[name='privacy']").val(),
                        albums: albums,
                    },
                    success: function (data) {
                      //  console.log(data);
                        alert(data);
                    }
                });
            }
        );
        reader.readAsDataURL(selectedFile);
    }
    function showAlbum(obj){
        $.ajax({
            url: "albumShow.php",
            type: "POST",
            data: {
                albumID: obj.value,

            },
            success: function (data) {
                //remove all children of albumShow
                while (albumShow.firstChild) {
                    albumShow.removeChild(albumShow.firstChild);
                }
                for (var i = 0; i < data.length; i++) {
                    var img = document.createElement("img");
                    img.src = "data:image/jpeg;base64," + data[i].image;
                    img.width = "200";
                    img.height = "200";
                    albumShow.appendChild(img);
                }
            }
        });
    }
</script>
</body>

</html>