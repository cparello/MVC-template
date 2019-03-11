<?php require APPROOT . '/views/includes/header.php'; ?>
<h1><?php echo $data['title'] . 'XXX'; ?></h1>


<?php

$host = '192.168.23.15';
$user = 'chris';
$password = 'Yellowmein1';
$dbname = 'pdo_test';


$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$status = 'admin';

$sql = 'SELECT * FROM users WHERE status = :status';
$stmt = $pdo->prepare($sql);
$stmt->execute(['status' => $status]);
$users = $stmt->fetchAll();


foreach ($users as $user) {
    echo '<h1>' . $user->name . '</h1><br>';
}
?>


<?php require APPROOT . '/views/includes/footer.php'; ?>
