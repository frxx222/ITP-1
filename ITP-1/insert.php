

<?php
// include db connection
include 'config.php';

if (isset($_POST['upload'])) {
    $TITLE = $_POST['title'];
    $CONTENT = $_POST['content'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/" . $img_name;
    move_uploaded_file($img_loc, 'uploadImage/' . $img_name);

    // insert data

    mysqli_query($con, "INSERT INTO `tblcard`( `Title`, `Content`, `Image`) VALUES ('$TITLE','$CONTENT','$img_des')");
    header("location:index.php");
}

?>