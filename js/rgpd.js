document.addEventListener('DOMContentLoaded', function() {
    const banner = document.getElementById('viking-rgpd-banner');
    const acceptBtn = document.getElementById('rgpd-accept');
    const refuseBtn = document.getElementById('rgpd-refuse');

    if (!banner || !acceptBtn || !refuseBtn) return;

    // Vérifier si le consentement a déjà été donné (stocké dans le navigateur de l'utilisateur)
    const consent = localStorage.getItem('viking_rgpd_consent');

    if (!consent) {
        // Afficher avec un léger délai pour une belle animation d'entrée
        setTimeout(() => {
            banner.classList.add('show');
        }, 800);
    } else if (consent === 'accepted') {
        loadTrackingScripts();
    }

    acceptBtn.addEventListener('click', function() {
        localStorage.setItem('viking_rgpd_consent', 'accepted');
        banner.classList.remove('show');
        loadTrackingScripts();
    });

    refuseBtn.addEventListener('click', function() {
        localStorage.setItem('viking_rgpd_consent', 'refused');
        banner.classList.remove('show');
    });

    function loadTrackingScripts() {
        // C'est ici que le développeur peut injecter Google Analytics, Meta Pixel, etc.
        console.log("Viking Aventure RGPD : Les cookies ont été acceptés. Vous pouvez charger les scripts de tracking ici.");
    }
});
