<?php
include 'init_restrict_access.php';
$_SESSION['page']="admin";
?>

<?php

  $roll=$_SESSION["student_id"];
   $admin_id=$_SESSION["admin_id"] ;  
 // echo $roll;
?>
<?php
include '../front_page/header.php';
?>

<?php
include '../index_option/index.php';
?>





<html>
<head><title>Insert user Image </title>

    <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_admin_page.css">
 <link rel="stylesheet" type="text/css" href="/rmcenter_admin/rmc_style_register.css">
</head>
<body>

    <div class="show_log" style="font-size:15px color:white ">
    <br><br>
  
     <p style="color:orange;">welcome,<?php echo $admin_id ?>
     <?php echo ".  "?>
    <a href="/rmcenter_admin/rmc_admin_logout.php"> <img src="/rmcenter_admin/logout.jpg" alt="Log out" style="height:15px;width:50px"></a>
    </p>

    </div>

<h3 style="color: white; ">Please Choose a File and click Submit</h3>

<div class="rform" style="background:white; color:black; text-align:center; float:center;" >
<form style="text-align:center;" enctype="multipart/form-data" action=
"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" />
<br>
<input type="submit" value="Submit" />
</form>
</div>



<?php

// check if a file was submitted
if(!isset($_FILES['userfile']))
{
    echo '<p style="color: white; ">Please select a file</p>';
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
   
    $maxsize = 100000000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection


                    include 'init_restrict_access.php';
                    mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db

                   

                    mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query

                    $roll=$_SESSION["student_id"];

                    $sql = "INSERT INTO student_image
                    (image, roll)
                    VALUES
                    ('{$imgData}', '$roll');";

                    // insert the image
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database. </p>';

                     header("Location: /rmcenter_admin/rmc_student_profile_show.php");
                     exit;


                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>
</body>
</html>

<?php
include '../front_page/footer.php';
?>
