<?php
    include_once 'includes/db.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $sql = "SINSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Daniel', 'Nielsen', 'danielnielsen@gmail.com', 'Admin', 'test123');"; 
    $result = mysqli_query($conn, $sql); 
?>

</body>
</html>