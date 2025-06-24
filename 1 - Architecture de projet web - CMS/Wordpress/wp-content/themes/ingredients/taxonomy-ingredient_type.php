<?php get_header(); ?>

<?php
echo "<!-- TEMPLATE TAXONOMY INGREDIENT_TYPE UTILISÉ -->";
?>

<main class="container py-4">
    <h1>Type : <?php single_term_title(); ?></h1>
    <?php if (term_description()) : ?>
        <div class="mb-3"><?php echo term_description(); ?></div>
    <?php endif; ?>
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                </a>
            <?php endif; ?>
            <div class="card-body">
                <h2 class="card-title fs-4">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p><strong>Couleur :</strong> <?php the_field('couleur'); ?></p>
                <p><strong>Prix :</strong> <?php the_field('prix'); ?> €</p>
            </div>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p>Aucun ingrédient dans cette catégorie.</p>
        <?php endif; ?>
    </div>
    <?php the_posts_pagination(); ?>
</main>

<?php get_footer(); ?> 
