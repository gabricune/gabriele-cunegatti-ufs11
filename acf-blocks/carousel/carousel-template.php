<?php

    $class_edit =' ';

    $arrows_Bool = get_field('acf_blocks_carousel_arrow_bool');

    if($arrows_Bool == true) {
        $class_edit .= 'carousel-no-arrow';
    }

?>





<div class="carousel-wrapper">
    <div class="carousel js-carousel<?php echo $class_edit; ?>">

    <InnerBlocks />

    </div>    

</div>