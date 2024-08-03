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
    <p class="text-[83px] w-[870px] font-bold leading-[1.2]">Start Your Journey to Success </p>
</div>
</div>
</div>
</header>

<!-- What you get from US -->
<section class="mt-48 mb-48 flex flex-col items-end mr-0 sm:mr-16">
    <div class="w-full sm:w-[70%]">
        <div class="flex justify-between items-center border-b-2 border-black pb-2">
            <h2 class="text-3xl font-bold uppercase">Speak to Us Anytime, Anywhere</h2>
        </div>
        <div class="flex mt-5 gap-5 sm:gap-10">
            <div class="flex gap-5 flex-col w-[30%]">
                <p>We have a dedicated international team ready to assist you, 24 hours a day. Your questions won't wait, and neither will we.</p>
                <div class="flex flex-col divide-y gap-5">
                    <div>
                        <h2 class="text-xl font-bold">Email</h2>
                        <h2 class="text-xl">Email@email.com</h2>
                    </div>
                    <div class="flex items-start flex-col pt-5">
                        <h2 class="text-xl font-bold">Meet Us Now'</h2>
                        <a href="#" class="bg-[#FFF7F1] text-black py-1 px-2 rounded hover:text-red-600 flex gap-2 items-center duration-150 text-xl w-auto btn-animate">
                            Schedule a call
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex gap-5 flex-col w-[70%]">
                <h2 class="text-xl font-bold">Contact form</h2>
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter your email address" class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="“I need a Pro design!”" class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150">
                    </div>
                    <div class="flex flex-col gap-3">
                        <label for="subject">Message</label>
                        <textarea name="subject" id="subject" placeholder="We're happy to help! Describe your inquiry and we will reach out soon." class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150 min-h-[178px]"></textarea>
                    </div>
                    <button type="submit" class="bg-[#FFF7F1] p-3 rounded hover:text-red-600 flex gap-2 items-center duration-150 text-xl w-auto justify-end text-black btn-animate">
                        Send Message
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>