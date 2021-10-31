<html>
<?php 
session_start();
if(isset($_POST['addTask']))
{
$_val = $_POST['taskText'];
if(!empty($_val))
{
    $_array = array($_val);
}
else
{
    $_array =array();
}
if(isset($_SESSION['values']))
{
    $_array = array_merge($_SESSION['values'],$_array);
}
$_SESSION['values'] = $_array;
}
if(isset($_POST['delete']))
{
    include ("clearSession.php");
}
?>
    <head>
    <title>TODO PAGE</title>
    </head>
    <form method="POST">
    <h4>To Do Assignment</h4>
    <input id="textbox" type="text" placeholder="Enter Task " name="taskText" />
    <input style="color:yellow; background:green;" type="submit" name="addTask" value="ADD TASK"/>
    <input style="color:yellow; background:green;" type="submit" name="delete" value="CLEAR ALL"/>
</form>
</html>