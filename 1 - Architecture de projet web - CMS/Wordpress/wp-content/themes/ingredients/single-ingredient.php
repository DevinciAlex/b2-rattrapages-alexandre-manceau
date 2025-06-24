<?php get_header(); ?>

<main class="container py-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
        <div class="col-md-6">
            <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large', ['class' => 'img-fluid mb-3']); ?>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <h1><?php the_title(); ?></h1>
            <p><strong>Couleur :</strong> <?php the_field('couleur'); ?></p>
            <p><strong>Prix :</strong> <?php the_field('prix'); ?> €</p>
            <p><strong>Type :</strong> <?php the_terms(get_the_ID(), 'ingredient_type'); ?></p>
            <?php if (get_the_content()) : ?>
            <hr>
            <div><?php the_content(); ?></div>
            <?php endif; ?>
            <a href="<?php echo get_post_type_archive_link('ingredient'); ?>" class="btn btn-outline-primary mt-4">← Retour à la liste</a>
        </div>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
