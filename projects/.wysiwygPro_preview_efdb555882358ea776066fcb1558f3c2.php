<?php
if ($_GET['randomId'] != "TldqXCLg3Y3HXMfDEOYCm9lldOahloEJd6ciVzS8d5p9qqlqBXdE6M3y8KOjwtbZ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
