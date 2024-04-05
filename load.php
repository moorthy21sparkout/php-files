<?php
if(isset($_POST["upload"])){
    $fileName=$_FILES['file']['name'];
    $fileTemp=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileType=$_FILES['file']['type'];
    if(is_uploaded_file($fileTemp)){
        if($fileSize<100000000000)

        {if ($fileType =='image/jpeg')
            {
                    if(move_uploaded_file($fileTemp,"upload/$fileName"))
                    {
                        echo "file upload successfully";
                    }
                    else{
                        echo "file upload failed";
                    }
            }
            else{
                echo "please select image jpg only";
            }

        }
        else
        {
            echo "your file above 2 mb ";
        }
    }
    else{
        echo "no file is select";
    }
}
else{
    echo "please select your file";
}

?>