<head>
  <link rel="stylesheet" href="preco.css">
</head>

<?php
// Template Name: Pre-commande
?>

<?php


get_header();
$produits = get_field('galerie_produit');
?>

        <main class="commande-fond">
            <div class="commande">
                <h1><?php the_field('titre_principal'); ?></h1>
                <hr class="white-hr">
                <h3 class="commande-title"><?php the_field('sous_titre'); ?></h3>
                <div class="image-gout">
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?php echo esc_url( $produits['image_1']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_1']['alt'] ); ?>">
                            <div class="fruit-petit">
                                <?php echo esc_html( $produits['nom_du_produit1'] );?> 
                                <br> <?php  if($produits['nom_1_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit1b']);} ; ?>
                            </div>
                        </div>
                    </div>
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?php echo esc_url( $produits['image_2']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_2']['alt'] ); ?>">
                            <div class="fruit-petit">
                                <?php echo esc_html( $produits['nom_du_produit2'] );?> 
                                <br> <?php  if($produits['nom_2_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit2b']);} ; ?>
                            </div>
                        </div>
                    </div>
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?php echo esc_url( $produits['image_3']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_3']['alt'] ); ?>">
                            <div class="fruit-petit">
                                <?php echo esc_html( $produits['nom_du_produit3'] );?> 
                                <br> <?php  if($produits['nom_3_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit3b']);} ; ?>
                            </div>
                        </div>
                    </div>
                    <div class="quantite-produit">
                        <div class="image-fruit">
                            <img src="<?php echo esc_url( $produits['image_4']['url'] ); ?>" alt="<?php echo esc_attr( $produits['image_4']['alt'] ); ?>">
                            <div class="fruit-petit">
                                <?php echo esc_html( $produits['nom_du_produit4'] );?> 
                                <br> <?php  if($produits['nom_4_sur_2_lignes'] == true) {echo esc_html( $produits['nom_du_produit4b']);} ; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="62de59e" title="Formulaire Commande"]' ); ?>                
            </div>    

            <?php
    get_footer();