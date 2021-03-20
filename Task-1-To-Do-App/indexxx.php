<?php
$todos = [];
if(file_exists('todo.json')){
$json = file_get_contents('todo.json');
$todos = json_decode($json, true);
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelist.php">
</head>

<body>
   

    <header class="main-header">MY TO-DO LIST</header>
    <h3><em>Don't let your victories go to your head, or your failures go to your heart</em></h3>
    
    <form action="index.php" method="POST">
        
    <p class="abc">
    ENTER YOUR TASK:<input type="text" placeholder="Enter Your Task" name="todo_name" id="add">

    </p>
    <p><input class="button" type="submit" value="SUBMIT" id="btn" ></p>
</form>
<?php foreach ($todos as $todoname => $todo): ?>
    <div style="margin-bottom: 20px ;color:white ; text-align:center">
       <input type="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?>>
       <?php echo $todoname ?>
       <form style="display: inline-block" action="delete.php" method="post">
       <input type="hidden" name="todo_name" value="<?php echo $todoname?>">
       <button>Delete</button>
       </form>
     </div>
     <?php endforeach; ?>


</body>
</html>

