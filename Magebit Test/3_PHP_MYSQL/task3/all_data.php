<?php 

include('connect_db.php');
$sql = 'SELECT id, email, date_added FROM subscribers';
$result = mysqli_query($conn, $sql);
$subscribers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<h1>Subscribers</h1>
<div>
<?php foreach($subscribers as $subscriber){ ?>
<ol>
    <li><?php echo "ID: " .htmlspecialchars($subscriber['id']); ?></li>
    <li><?php echo "E-MAIL: " .htmlspecialchars($subscriber['email']); ?></li>
    <li><?php echo "DATE: " .htmlspecialchars($subscriber['date_added']); ?></li>
</ol>
<?php } ?>
</div>