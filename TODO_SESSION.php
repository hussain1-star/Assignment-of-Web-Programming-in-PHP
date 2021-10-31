<h3>Tasks List</h3>
<?php
if(!empty($_SESSION['values']))
{
    foreach ($_SESSION['values'] as $key=>$value)
    {
        echo "<pre>";
        print_r($value);
        echo "<br>";
    }
 }    
else
{
    echo "List is empty.";
}    
?>

