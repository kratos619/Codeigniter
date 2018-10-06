<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user_view</title>
</head>
<body>
   <p>
       <?php
        foreach($result as $val){
            echo $val->username;
        } 
       ?>
   </p> 
</body>
</html>