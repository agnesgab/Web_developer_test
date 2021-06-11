<?php 

include('connect_db.php');
$sql = 'SELECT id, email, date_added FROM subscribers';
$result = mysqli_query($conn, $sql);
$subscribers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<?php include('top-left.php'); ?>
<?php include('success.php'); ?> 


</html>

