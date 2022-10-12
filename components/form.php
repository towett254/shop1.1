
<?php


if (isset($_POST['submitPost'])) {
$rawData =  $_POST;

echo json_encode($_POST);
}



?>
<form action = "" method = "post">



<input type = "text" name="author" required='' placeholder="Enter batch reference"  />
<input type = "submit" name="submitPost" value = "Submit">
</form>

