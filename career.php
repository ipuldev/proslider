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
    <p class="text-[83px] w-[850px] font-bold leading-[1.2]">Join Our Team & Make an Impact </p>
</div>
</div>
</div>
</header>

<!-- What you get from US -->
<section class="mt-48 mb-48 flex flex-col items-end mr-0 sm:mr-16">
    <div class="w-full sm:w-[70%]">
        <div class="flex justify-between items-center border-b-2 border-black pb-2">
            <h2 class="text-3xl font-bold">WHAT YOU GET FROM US</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 p-5 gap-5 sm:gap-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 order-1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/career/cr1.png" alt="<?php esc_attr_e('Career 1', 'proslider'); ?>">
                <p class="text-sm">
                    We understand that everyone works best at different times. That's why we offer flexible schedules that allow you to structure your workday in a way that maximizes your productivity and well-being.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 order-3">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/career/cr2.png" alt="<?php esc_attr_e('Career 2', 'proslider'); ?>">
                <p class="text-sm">
                    We're committed to helping our team members learn and develop. We offer a variety of opportunities for professional growth, including mentorship programs, skills training, and the chance to work on challenging projects.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 order-2">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/career/cr3.png" alt="<?php esc_attr_e('Career 3', 'proslider'); ?>">
                <p class="text-sm">
                    Embrace the freedom and convenience of working from anywhere! We offer a fully remote work environment, allowing you to work from the comfort of your home or a location that best suits your needs.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 order-4">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/career/cr4.png" alt="<?php esc_attr_e('Career 4', 'proslider'); ?>">
                <p class="text-sm">
                    Be inspired and collaborate with a talented and passionate team. We foster a culture of creativity and innovation, where your ideas are valued and encouraged.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- We are looking for you -->
<section class="mt-48 mb-48 flex flex-col items-end mr-0 sm:mr-16">
    <div class="w-full sm:w-[70%]">
        <div class="flex justify-between items-center border-b-2 border-black pb-2">
            <h2 class="text-3xl font-bold">WE'RE LOOKING FOR YOU</h2>
        </div>
        <div class="py-5">
            <p class="text-md font-bold">Ready to join a team that's passionate, innovative, and thrives on flexibility?</p>
            <p class="text-sm">Don't miss out! Send your resume and cover letter to <span class="text-md text-[#FF4848]">email@email.com</span></p>
            <p class="text-sm pt-5">We're currently seeking talented individuals to join our team in the following roles:</p>
        </div>
        <div class="flex gap-4">
            <span class="rounded-full border border-[#FF4848] py-2 px-4 text-[#FF4848]">Branding Experts</span>
            <span class="rounded-full border border-[#FF4848] py-2 px-4 text-[#FF4848]">Website Designers & Developers</span>
            <span class="rounded-full border border-[#FF4848] py-2 px-4 text-[#FF4848]">Marketing Specialists</span>
            <span class="rounded-full border border-[#FF4848] py-2 px-4 text-[#FF4848]">Social Media Content Creators</span>
        </div>
    </div>
</section>

<?php
get_footer();
?>