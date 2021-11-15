<?php
ob_start();
?>



<div>
    <section>
        <article>
            <p class="text-center mt-5">La page Service est en cours de maintenance ...</p>
        </article>
    </section>
</div>

<?php
$title = "Service";
$content = ob_get_clean();
require_once "template.view.php";
