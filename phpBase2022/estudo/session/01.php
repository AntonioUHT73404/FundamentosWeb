<?php
// Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // Set session variables
    $_SESSION["favcolor"] = "Blue";
    $_SESSION["favanimal"] = "Dog";
    $_SESSION["nome"] = "Antonio Oliveira";
    
    echo "Session variables are set.";
?>

</body>
</html>