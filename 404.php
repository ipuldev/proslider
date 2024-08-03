<?php
/*
Template Name: Career Page
*/
get_header();
add_action('init', function () {
    flush_rewrite_rules();
});

?>

<div class="flex flex-col items-start mt-28 ml-32">
</div>
</div>
</div>
</header>

<!-- What you get from US -->
<section class="mt-48 mb-48 flex flex-col items-end mr-0 sm:mr-16">
    <div class="w-full sm:w-[70%]">
        <div class="flex justify-between items-center border-b-2 border-black pb-2">
            <h2 class="text-9xl font-bold tracking-[0.5em]">404</h2>
        </div>
        <div class="mt-5 flex flex flex-col items-start ">
            <p class="text-md font-bold">This page may be extinct..</p>
            <p class="text-md font-bold">Let's create a new one together!</p>
            <a href="#" class="bg-[#FFF7F1] text-black py-1 px-2 rounded hover:text-red-600 flex gap-2 items-center duration-150 text-xl w-auto mt-5">
                Schedule a call
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
?>