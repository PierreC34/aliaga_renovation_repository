<?php
ob_start();
if (!empty($_SESSION['alert'])) :
?>
    <div class="alert alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
        <?= $_SESSION['alert']['msg'] ?>
    </div>
<?php
endif

?>

<div class="div-contact-1">
    <section class="section-contact-un">
        <!-- grid superieur -->
        <article class="article-contact-un">
            <form action="<?= URL ?>contact" method="POST">
                <section class="form-gradient formulaire-contact">
                    <div class="card">
                        <h2 class="h2-contact-un">Contact</h2>
                        <div class="card-body mx-4">
                            <!-- <div class="md-form">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="form104" name="nom" class="form-control">
                                <label class="label-form" for="form104">Votre nom</label>
                            </div> -->
                            <div class="md-form">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="text" id="form105" name="email" class="form-control">
                                <label class="label-form" for="form105">Votre mail</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-tag prefix grey-text"></i>
                                <input type="text" id="form106" name="sujet" class="form-control">
                                <label class="label-form" for="form106">Sujet</label>
                            </div>
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                <textarea id="form107" name="message" class="md-textarea form-control" rows="5"></textarea>
                                <label class="label-form" for="form107">Votre message</label>
                            </div>
                            <div class="row d-flex align-items-center mb-3 mt-4">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button class="btn btn-grey btn-rounded z-depth-1a" type="submit" name="envoyer">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </article>
        <!-- grid inferieur -->
        <article class="article-contact-deux">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.6313996827594!2d3.9207573157235633!3d43.67663525893255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6a63745206007%3A0x98600a1e2fe1b0ec!2sAliaga%20Bernard!5e0!3m2!1sfr!2sfr!4v1636114678458!5m2!1sfr!2sfr" width="500" height="540" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </article>
    </section>
</div>

<?php
$title = "Contact";
$content = ob_get_clean();
require_once "template.view.php";
