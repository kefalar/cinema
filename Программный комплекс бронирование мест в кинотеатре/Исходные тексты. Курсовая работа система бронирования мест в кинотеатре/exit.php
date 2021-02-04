<?PHP
ob_start();
setcookie('user', $user['name'], time()-600);
header('Location:/');
ob_enf_fluch();
?>
