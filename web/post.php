<?php declare(strict_types=1);

function securityFilter(string $d): string
{
    $d = trim($d);
    $d = stripslashes($d);
    $d = htmlspecialchars($d);
    return $d;
}

$userName = securityFilter($_POST['user_name']);

if ($userName !== '') {
    session_start();
    $_SESSION['user_name'] = $userName;
}

header('Location: index.php');
