<?php
include 'db.php';

session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>To Do Entries</title>
    <link rel="stylesheet" type="text/css" href="todo.css">
</head>
<!-- The Add feature is not yet functional, that should be done in week 6 though.-->
<body>
    <div class="generalFormat">
        <h1 class="softColor">Daily School Todo List</h1>
        <form action="display.php" method="GET">
            <span class="indextext softColor">Choose a task from the list provided:</span><br>
    <?php
    echo "<select name='listSelect'>";
    foreach ($db->query('SELECT id FROM list') as $row)
    {
        echo "<option value='".$row['id']."'>".$row['id']."</option>";
    }
    echo "</seclect><br /><br />";
    ?>
            <input type="submit" value="Find Note"> <!-- Add a view all option after you understand how to implement it -->
        </form>

    <!--Note: Should the add note feature use a form or possibly added? Add that to your list of things to look up. Also check if its a feature added into the php instead for practical use.-->
    <input type="submit" value="Add Note"> <!-- Reminder: This is not functional button yet>

    </div>
</body>




</html>