<footer style="background: #333; color: white; padding: 30px 20px 20px; text-align: center; margin-top: 50px;">
    
    <!-- Zone de liens utiles globaux -->
    <div style="margin-bottom: 20px;">
        <a href="/wp-content/uploads/autorisation-parentale-viking-aventure.pdf" target="_blank" class="btn btn-outline-light btn-sm" style="border-radius: 20px; padding: 8px 20px;">
            <i class="fa-solid fa-file-pdf me-2"></i> Télécharger l'autorisation parentale (PDF)
        </a>
    </div>

    <p class="mb-0 text-white-50 small">&copy; <?php echo date('Y'); ?> Viking Aventure - Tous droits réservés.</p>
</footer>

<!-- Bandeau RGPD Viking Aventure -->
<div id="viking-rgpd-banner" class="viking-rgpd-banner">
    <div class="container">
        <div class="viking-rgpd-content">
            <div class="viking-rgpd-text">
                <strong>🍪 À propos de vos données</strong><br>
                Nous utilisons des cookies essentiels au fonctionnement du site. Nous utilisons également des cookies pour analyser notre trafic et vous proposer la meilleure expérience de navigation. Vous pouvez choisir de les accepter ou de les refuser librement.
            </div>
            <div class="viking-rgpd-buttons">
                <button id="rgpd-refuse" class="btn-rgpd-refuse">Continuer sans accepter</button>
                <button id="rgpd-accept" class="btn-rgpd-accept">Tout Accepter</button>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.menu-toggle');
    const drawer = document.querySelector('#mobile-drawer');
    const closeBtn = document.querySelector('.drawer-close');

    if(toggle && drawer) {
        // Only open the drawer from the main navbar button
        toggle.addEventListener('click', function() {
            drawer.classList.add('active');
            document.body.style.overflow = 'hidden'; // Empêche le scroll derrière
        });
    }

    if(closeBtn && drawer) {
        // Only close the drawer from the inside close button
        closeBtn.addEventListener('click', function() {
            drawer.classList.remove('active');
            document.body.style.overflow = '';
        });
    }

    // Toggle mobile submenus manually with nice fade/slide behavior
    document.querySelectorAll('.mobile-sub-toggle').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const parentLi = this.parentElement;
            const subMenu = parentLi.querySelector('.sub-menu');
            const icon = this.querySelector('i');
            
            if(subMenu.style.display === 'none' || subMenu.style.display === '') {
                subMenu.style.display = 'block';
                if(icon) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                }
            } else {
                subMenu.style.display = 'none';
                if(icon) {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            }
        });
    });

});
window.addEventListener('scroll', function() {
    const header = document.querySelector('.main-header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;

        // Ferme les autres items ouverts (optionnel)
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) item.classList.remove('active');
        });

        // Alterne l'état de l'item cliqué
        faqItem.classList.toggle('active');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const today = new Date();
    const d = today.getDate();
    const m = today.getMonth() + 1; // JS commence à 0
    const y = today.getFullYear();

    console.log(d);

    // On cherche la case qui correspond à la date système
    const todayCell = document.querySelector(`.wpsbc-date[data-day="${d}"][data-month="${m}"][data-year="${y}"]`);

    console.log(todayCell)

    if (todayCell) {
        todayCell.style.outline = "3px solid #bf222d";
    }
});

</script>
</body>
</html>