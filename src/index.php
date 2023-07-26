<?php
session_start();
if(isset($_POST["user"])){
  $_SESSION["user"] = $_POST["user"];
}
?>
<html>
<head>
    <title>LFI to RCE</title>
</head>
<body>
    <?php
    echo '<a  href=".?file=hello.txt" /> hello? </a><br>';
    if(@$file=$_GET['file']){
        $file=str_replace("../","",$file);
        if($file!="../index.php"){
            include('files/'.$file);
        }
    }
  if(!isset($_SESSION["user"])){      
      echo '<form method="POST">
              <input name="user" type="text" placeholder="enter your name!">
              <input type="submit" value="enter">
            </form>';
    }else{
      echo "<br>Hello, ".htmlentities($_SESSION["user"]);
    }

//	highlight_file(__FILE__);
    ?>

</body>
</html>
