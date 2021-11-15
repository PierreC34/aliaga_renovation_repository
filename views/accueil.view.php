<?php
ob_start();
?>
<div class="container">
    <h1 class="text-center mt-5 m-auto">Présentation de l'entreprise</h1>
    <section class="section-accueil-une">
        <article class="article-accueil">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam inventore earum magni nulla excepturi delectus cupiditate? Obcaecati, vitae totam autem earum similique nostrum error aliquam consequatur illo repellat, quia dolorem.</p>
            <a href="https://www.google.com/search?q=Aliaga+renovation&sz=0&tbm=lcl&sxsrf=AOaemvLXNXDXK75RDOovPX-bTQFiqmKR5g%3A1636121083937&ei=-zmFYenkOOydlwSQw5XIDA&oq=Aliaga+renovation&gs_l=psy-ab.3...0.0.0.15209.0.0.0.0.0.0.0.0..0.0....0...1c..64.psy-ab..0.0.0....0.oS6mPafJhSI#rlfi=hd:;si:10979787016297885932,l,ChFBbGlhZ2EgcmVub3ZhdGlvbloTIhFhbGlhZ2EgcmVub3ZhdGlvbpIBEm1hc29ucnlfY29udHJhY3RvcqoBGRABKhUiEWFsaWFnYSByZW5vdmF0aW9uKAQ;mv:[[43.6879400584616,3.9458940614336724],[43.66366763744357,3.8815210450762505],null,[43.67580507519956,3.9137075532549614],15]" target="blank"><img src="public/image/mur_brique.jpg" class="image-accueil" alt="Une personne posant un brique sur un mur"></a>
        </article>
    </section>
</div>

<?php
$title = "Accueil";
$content = ob_get_clean();
require_once "template.view.php";
