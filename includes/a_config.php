<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
      break;
    case "/blog.php":
      $CURRENT_PAGE = "Blog"; 
      $PAGE_TITLE = "Blog Us";
      break;
    case "/gallery.php":
      $CURRENT_PAGE = "Gallery"; 
      $PAGE_TITLE = "Gallery Us";
      break;   
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>