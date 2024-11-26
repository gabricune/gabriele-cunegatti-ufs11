

$('.js-carousel .acf-innerblocks-container').slick({
    arrows: true,         // Mostra le frecce
    dots: true,           // Mostra i pallini di navigazione
    slidesToShow: 1,      // Mostra una slide per volta
    slidesToScroll: 1,    // Scorri una slide per volta
    infinite: true,       // Scorrimento infinito
    adaptiveHeight: true,  // Adatta l'altezza della slide
    prevArrow : '<span class="slick-prev slick-arrow"><</span>', 
    nextArrow : '<span class="slick-next slick-arrow">></span>', 
});