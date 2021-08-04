<?php
// connect to db
$conn = mysqli_connect('localhost', 'isaiah', 'test1234', 'ninja_pizza');

// check connection 
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

// write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query get results 
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array 
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

//close connection
mysqli_close(($conn));

print_r($pizzas)


?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php') ?>

<?php include('templates/footer.php') ?>



</html>