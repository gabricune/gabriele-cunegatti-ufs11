<?php 
// Recupera i campi personalizzati
$title = get_field('acf_blocks_popuptitle');
$content = get_field('acf_blocks_popupcontenuto');
$email = get_field('acf_blocks_popupemail');
$button = get_field('acf_blocks_popup_button');
$linkbutton = get_field('acf_blocks_popup_link_button');
?>

<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closePopupBtn" class="close">&times;</span>
        <!-- Utilizza i campi personalizzati di WordPress -->
        <h2><?php echo $title ? $title : 'Iscriviti alla nostra newsletter'; ?></h2>
        <p><?php echo $content ? $content : 'Inserisci la tua email per ricevere aggiornamenti:'; ?></p>
        <input type="email" id="email" placeholder="<?php echo $email ? $email : 'Inserisci la tua email'; ?>" required>
        <button id="submitBtn"><?php echo $button ? $button : 'Iscriviti'; ?></button>
    </div>
</div>

<script>
  // Mostra il popup al caricamento della pagina
  window.onload = function() {
    var popup = document.getElementById("popup");
    popup.style.display = "flex";  // Cambia display da 'none' a 'flex' per farlo apparire
  };

  // Chiudi il popup quando l'utente clicca sulla "X"
  var closeBtn = document.getElementById("closePopupBtn");
  closeBtn.addEventListener("click", function() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";  // Nasconde di nuovo il popup
  });

  // Potresti aggiungere altre funzionalità qui, come la gestione dell'invio dell'email, etc.
</script>
