<?php
session_start(); //BEFORE ANY OUTPUT, YOU MUST DECLARRE IF YOU'D LIKE TO USE SESSION.
if ( !isset( $_SESSION['activeToDo']))
{
    $_SESSION[ 'activeToDo'] = array();
}

if (isset($_POST) && !empty($_POST)) //Making sure something was submitted.
{
    array_push( $SESSSION[ 'activeToDo'], $_POST[ 'activeToDo'] );   
}
?><DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To Do List</title>
    </head>

    <body>
        <h1>PHP To Do List</h1>
    
        <form action="$_SESSION[activeToDo]" method="POST">
    <?php //Forms can use GET or POST method. ?>
                                            
        <label for="addToDo">
            Enter a new task:
            <input type="text" name="addToDo" id="addToDo">
        </label>
         <input type="submit" value="Add to List">
        <input type="submit" value="Reset">
    </form>
    <?php if ( !empty( $_SESSION['activeToDo'] ) ) : //Check if there are to dos ?> 
        <h2>Active To Dos : </h2>
        <ul>
            <?php foreach ( $_SESSION['activeToDo'] as $active ) : //Output each to do  in the array?>
            <li>
                <?php echo $active; ?>
            </li>
            <?php endforeach; ?>
        </ul>
            <?php endif; ?>
 <h2> Active To Do List</h2>
 <input type="checkbox" value=" $_SESSION['activeToDo'] as $active  ">
 <h2> Completed To Dos </h2>
 <pre>
    <strong>$_SESSION contents:</strong> 
<?php var_dump($_SESSION); ?>
    </pre>
</body>
</html>
