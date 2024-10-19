<div class="card-container">


    <h2 class="card-title"><?php echo esc_html( get_field('acf_blocks_card_text') ); ?></h2>

    <?php if( get_field('acf_blocks_card_image') ): ?>
        <img class="card-image" src="<?php the_field('acf_blocks_card_image'); ?>" />
    <?php endif; ?>

    <p class="card-text"><?php echo wp_kses_post ( get_field('acf_blocks_card_content') ); ?></p>

    <button class="card-button">
        <a href="<?php echo esc_attr( get_field('acf_blocks_card_button_link') ); ?>">
        <?php echo esc_attr( get_field('acf_blocks_card_button') ); ?></a>
    </button>

</div>
