<!DOCTYPE html>
<html>
<?php session_start() ?>
<?php require 'datas.php' ?>

<head>

  <meta charset="UTF-8">

    <title>To do list</title>

  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
<?php if (isset($_SESSION['name']) && isset($_SESSION['pass'])):?>
<?php $message = "To do list: " . $_SESSION['name']; ?>
<div id="logmsk" style="display: block;">
    <div id="userbox">
        <h1 id="signup" style="background-color: rgb(118, 171, 219); background-position: initial initial; background-repeat: initial initial;"><?php echo $message; ?></h1>
        <form action="addTasks.php" method="POST" id="form-list">
            <div class="form-group">
                <input type ="text" class="inline-input" id="task" name="task" placeholder="New task" >
                <button class="inline-button">Add</button>
            </div>
        </form>
        <ul>
            <?php foreach($tasks as $task): ?>
                <li><?php echo $task['name']?></li>
            <?php endforeach ?>
        </ul>
        <a href="logout.php" class="logout">Log out</a>
    </div>
</div>
<?php else: ?>
<?php Header('Location: index.php'); ?>
<?php endif; ?>
<script src="js/index.js"></script>
</body>

</html>
