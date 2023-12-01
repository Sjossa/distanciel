<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function alert($alert1){
        echo "<script type='text/javascript'>alert('$message');<script>"
        return true;
    }
    alert("ceci est message d'alert");
    
    ?>
    
</body>
</html>