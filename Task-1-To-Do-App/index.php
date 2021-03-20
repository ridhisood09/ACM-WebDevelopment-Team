<link rel="stylesheet" href="stylelist.php">

<body>
   

    <header class="main-header">MY TO-DO LIST</header>
    <h3><em>Don't let your victories go to your head, or your failures go to your heart</em></h3>
    
    <form action="index.php" method="POST">
        
    <p class="abc">ENTER YOUR TASK:<input type="text" placeholder="Enter Your Task" name="en"><br>
    <p><input class="button" type="submit" value="SUBMIT" name="save"></p>
</form>
</body>
<style>



<?php

$todoname = $_POST['todo_name'] ?? '';
$todoname = trim($todoname);
if($todoname){
    if(file_exists('todo.json')){

 $json = file_get_contents('todo.json');
 $jsonArray = json_decode($json, true);
}
 else{
    $jsonArray = []; 
 }
    
    $jsonArray[$todoname] = ['completed' => false];

    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header('Location: indexxx.php');
?>

