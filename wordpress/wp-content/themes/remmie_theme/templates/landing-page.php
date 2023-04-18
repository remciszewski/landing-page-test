<?php
// Template Name: landing-page-template
?>
<?php
get_header();
?>



<main>
    <div class="container">
        <div class="container-cover">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="container-about" id="About">
            <h2>About</h2>
            <?php the_content(); ?>
        </div>
        <div class="container-grid-wrapping">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'post_per_page' => -1
                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="container-box">

                        <div class="image-resize"><?php the_post_thumbnail(); ?></div>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <h2>No posts</h2>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
        <div class="container-form">
            <div class="form-div" id="Contact">
                <h2>Contact Us</h2>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <button>Send</button>
            </div>
        </div>
    </div>
</main>

<div>
    <?php

    get_footer();

    ?>