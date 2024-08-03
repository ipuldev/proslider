<?php
/**
 * Footer Template
 * 
 * @package proslider
 */

?>
    <Footer class="flex justify-between p-8 border-t">
        <div class="flex flex-col gap-5 items-start">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/logo.png" alt="<?php esc_attr_e('Logo Slider', 'proslider'); ?>">
            <p>&copy; <?php echo date('Y'); ?>. All rights reserved.</p>
        </div>
        <div class="flex flex-col gap-5">
            <P class="text-md text-gray-400">Quick links</P>
            <div class="text-sm flex gap-5 items-center">
                <a href="/" class="hover:underline duration-150">Home</a>
                <a href="/career" class="hover:underline duration-150">Career</a>
                <a href="/contact" class="bg-[#FFF7F1] text-black py-1 px-2 rounded hover:text-red-600 flex gap-2 items-center duration-150 btn-animate">
                    Book a call
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-5">
            <P class="text-md text-gray-400">Follow us</P>
            <div class="text-sm flex gap-5 items-center">
                <a href="#" class="text-black">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/fb.png" alt="<?php esc_attr_e('FB', 'proslider'); ?>">
                </a>
                <a href="#" class="text-black">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/ig.png" alt="<?php esc_attr_e('IG', 'proslider'); ?>">
                </a>
                <a href="#" class="text-black">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/linkedin.png" alt="<?php esc_attr_e('linkedin', 'proslider'); ?>">
                </a>
                <a href="/contact" class="text-black px-3 py-2 border border-balck rounded flex gap-2 items-center">
                    Find us on Ariba Network
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer/airbnb.png" alt="<?php esc_attr_e('airbnb', 'proslider'); ?>">
                </a>
            </div>
        </div>
    </Footer>
    <?php wp_footer(); ?>
</body>
</html>