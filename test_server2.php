<?php

 if (isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        
        if ($name == "pass") {
 header("Location: registration.html?status=success");
            exit;
        }
          
else {
              header("Location: registration.html?status=failure");
            exit;
    }
}
?>