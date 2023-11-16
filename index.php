<?php
// echo '<script>alert("'..'")</script>';
include_once ('include/nav.php');	

IF ( $_SESSION['currentpages'] == '/index' ){	
 
  include_once ('pages/index.php');
  
}ELSE {  
  
  include_once (page_php($_SESSION['currentpath'],$_SESSION['currentpages']));
}

include_once ('include/footer.php');
 
?>