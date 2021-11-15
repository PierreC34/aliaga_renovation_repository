<?php
ob_start();
?>
<h1 class="mt-5 text-center"><?= $error ?></h1>
<?php
$title = "Page d'erreur";
$content = ob_get_clean();
require_once "template.view.php";
