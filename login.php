
<?php
$uname = $_POST['uname'];
$pword = $_POST['pword'];
session_start();
$url = 'userdata.json'; // path to JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$details = json_decode($data, true); // decode the JSON feed

$user_found = FALSE;

foreach ($details as $detail) {
    /* Check Username and Password existence in defined array */
    if ($detail["username"] == $uname && $detail["password"] == $pword) {
        $user_found = TRUE;
        break;
    }
}

if ($user_found === FALSE) {
    /*Unsuccessful attempt: Set error message */
    $_SESSION['msg'] = "<script type='text/javascript'>toastr.error('Wrong Login Details')</script>";
    echo $msg;
} else {
   $_SESSION['msg']  = "<script type='text/javascript'>toastr.success('Welcome $uname')</script>";
}

SESSION_START();
//redirect to the dashboard page using php built-in header method
header("Location: index.php");
//replace the index.html with the dashboard URL
?>