<footer class="custom-footer" style="background-color: #8f965f7e; padding: 10px; color: #000;">

    <div class="container" style="max-width: 1400px; margin: 0 auto; display: flex; justify-content: space-between; align-items: flex-start;">
        <!-- Adresse -->
        <div class="address" style="flex: 1;">
            <a href="https://maps.google.com?q=Avenue+de+l'Harmonie+Corporelle+234,1111+Bruxelles" target="_blank" style="text-decoration: none; color: #000;">
                <p style="font-weight: bold; margin-bottom: 5px;">Avenue Harmonie</p>
                <p style="font-weight: bold; margin-bottom: 5px;">Corporelle 234</p>
                <p style="font-weight: bold; margin-bottom: 5px;">1111 Bruxelles</p>
            </a>
        </div>

        <!-- Informations légales, Email et Téléphone -->
        <div class="info" style="flex: 1; text-align: right;">
            <!-- Informations légales -->
            <div class="legal-info" style="margin-bottom: 10px;">
                <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('mentions-legales'))); ?>" style="color: #000; text-decoration: underline;">Mentions légales</a></p>
                <p><a href="<?php echo esc_url(get_permalink(get_page_by_path('politique-de-confidentialité'))); ?>" style="color: #000; text-decoration: underline;">Politique de confidentialité</a></p>
            </div>

            <!-- Numéro de téléphone -->
            <div class="phone" style="margin-bottom: 10px;">
                <p><a href="tel:09000003" style="color: #000; text-decoration: underline;">09000003</a></p>
            </div>

            <!-- Adresse e-mail -->
            <div class="email">
                <p><a href="mailto:harmonie-corporelle@cestpasvvrai.be" style="color: #000; text-decoration: underline;">harmonie-corporelle@cestpasvvrai.be</a></p>
            </div>
        </div>
    </div>

    <!-- Icônes -->
    <div class="icons" style="margin-top: 20px; text-align: center;">
        <ul style="list-style-type: none; padding: 0; display: inline-block;">
            <li style="margin-right: 10px; display: inline-block;"><a href="https://www.instagram.com/harmonie.corporellee/"><img width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_INSTAGRAM.png"></a></li>
            <li style="margin-right: 10px; display: inline-block;"><a href="https://pin.it/7KwgCRX"><img width="20" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_PINTEREST.png"></a></li>
            <li style="display: inline-block;"><a href="#"><img width="25" src="<?php echo get_template_directory_uri(); ?>/assets/images/ICÔNE_PODCAST.png"></a></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
