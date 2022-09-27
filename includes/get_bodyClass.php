<?php
$uri = rtrim($_SERVER["REQUEST_URI"], '/');
$uri = substr($uri, strrpos($uri, '/') + 1);
$page_class = 'page_' . $uri
?>

<body <?php body_class($page_class); ?>>
