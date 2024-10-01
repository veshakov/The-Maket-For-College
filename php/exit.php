<? session_start();
if($_GET['exit'] == true){
$location = '../index.php';
session_destroy();
};

header('location:'.$location);
?> 



