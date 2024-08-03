<?php

/**
 * Main Template Files
 * 
 * @package proslider
 */
get_header();
add_action('init', function () {
    flush_rewrite_rules();
});

?>
<div class="flex flex-col items-end mt-40">
    <p class="text-[32px] w-[636px] text-right mr-8">Unlocking your true potential through graphic design for business</p>
</div>
<div class="flex flex-col items-start mt-40 ml-48">
    <p class="text-[83px] w-[850px] font-bold leading-[1.2]">Where Design Meets Strategy</p>
    <p class="mt-1 flex items-start gap-2 font-bold">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tabler-trophy.png" alt="<?php esc_attr_e('Tabler Trophy', 'proslider'); ?>">
        an award winning creative agency
    </p>
</div>
</div>
</div>
</header>

<!-- Our Services Section -->
<section class="mt-48 mb-48 flex flex-col items-end mr-16">
    <div class="w-[70%]">
        <div class="flex justify-between items-center border-b-2 border-black pb-2">
            <h2 class="text-3xl font-bold">OUR SERVICES</h2>
            <a href="#" class="bg-[#FFF7F1] text-black px-4 py-2 rounded hover:text-red flex gap-2 items-center btn-animate">
                Book a call
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
            </a>
        </div>
        <div class="flex justify-end items-end gap-8 mt-8">
            <div class="w-[300px] h-[300px] bg-transparent group perspective relative">
                <div class="relative preserve-3d w-full h-full duration-1000 shadow-lg bg-zoom">
                    <div class="absolute inset-0 flex items-end w-full backface-hidden overflow-hidden">
                        <div class="bg-cover bg-center w-full h-full transition-transform duration-500 ease-in-out bg-image" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/card-1.png');"></div>
                        <div class="absolute py-5 px-5 flex justify-between items-end w-full">
                            <p class="mt-4 text-black">Sales Proposal</p>
                            <button class="cursor-pointer plus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/max-icon.png" alt="<?php esc_attr_e('Max Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                    <div class="backface-hidden my-rotate-y-180 absolute inset-0 bg-[#FFFEF8] overflow-hidden text-left p-3 flex justify-between flex-col shadow-lg">
                        <div>
                            <h1 class="text-sm text-gray-400 mb-2">Sales Proposal</h1>
                            <h1 class="text-md font-bold mb-3">Close More Deals with Winning Sales Proposals</h1>
                            <p class="text-sm mb-5">We work closely with you to understand your prospect's unique challenges and goals.</p>
                        </div>
                        <div class="flex justify-between items-end w-full">
                            <div class="flex items-center gap-3 justify-center">
                                <p class="text-[#FF4848]">ASK FOR A QUOTE</p>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/chevron-left.png" alt="<?php esc_attr_e('Chevron left Icon', 'proslider'); ?>" >
                            </div>
                            <button class="cursor-pointer minus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/min-icon.png" alt="<?php esc_attr_e('Min Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[300px] bg-transparent group perspective relative">
                <div class="relative preserve-3d w-full h-full duration-1000 shadow-lg bg-zoom">
                    <div class="absolute inset-0 flex items-end w-full backface-hidden overflow-hidden">
                        <div class="bg-cover bg-center w-full h-full transition-transform duration-500 ease-in-out bg-image" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/card-2.png');"></div>
                        <div class="absolute py-5 px-5 flex justify-between items-end w-full">
                            <p class="mt-4 text-black">Investor Pitch Decks</p>
                            <button class="cursor-pointer plus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/max-icon.png" alt="<?php esc_attr_e('Max Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                    <div class="backface-hidden my-rotate-y-180 absolute inset-0 bg-[#FFFEF8] overflow-hidden text-left p-3 flex justify-between flex-col shadow-lg">
                        <div>
                            <h1 class="text-sm text-gray-400 mb-2">Investor Pitch Decks</h1>
                            <h1 class="text-md font-bold mb-3">Secure Funding with Captivating Pitch Decks</h1>
                            <p class="text-sm mb-5">Secure investment with a compelling pitch deck tailored to resonate with investors.</p>
                        </div>
                        <div class="flex justify-between items-end w-full">
                            <div class="flex items-center gap-3 justify-center">
                                <p class="text-[#FF4848]">ASK FOR A QUOTE</p>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/chevron-left.png" alt="<?php esc_attr_e('Chevron left Icon', 'proslider'); ?>" >
                            </div>
                            <button class="cursor-pointer minus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/min-icon.png" alt="<?php esc_attr_e('Min Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[300px] bg-transparent group perspective relative">
                <div class="relative preserve-3d w-full h-full duration-1000 shadow-lg bg-zoom">
                    <div class="absolute inset-0 flex items-end w-full backface-hidden overflow-hidden">
                        <div class="bg-cover bg-center w-full h-full transition-transform duration-500 ease-in-out bg-image" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/card-3.png');"></div>
                        <div class="absolute py-5 px-5 flex justify-between items-end w-full">
                            <p class="mt-4 text-black">Business Plans</p>
                            <button class="cursor-pointer plus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/max-icon.png" alt="<?php esc_attr_e('Max Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                    <div class="backface-hidden my-rotate-y-180 absolute inset-0 bg-[#FFFEF8] overflow-hidden text-left p-3 flex justify-between flex-col shadow-lg">
                        <div>
                            <h1 class="text-sm text-gray-400 mb-2">Business Plans</h1>
                            <h1 class="text-md font-bold mb-3">Chart Your Course to Success</h1>
                            <p class="text-sm mb-5">Develop an actionable business plan to secure and guide your growth strategy, and achieve your long-term goals.</p>
                        </div>
                        <div class="flex justify-between items-end w-full">
                            <div class="flex items-center gap-3 justify-center">
                                <p class="text-[#FF4848]">ASK FOR A QUOTE</p>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/chevron-left.png" alt="<?php esc_attr_e('Chevron left Icon', 'proslider'); ?>" >
                            </div>
                            <button class="cursor-pointer minus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/min-icon.png" alt="<?php esc_attr_e('Min Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[300px] h-[300px] bg-transparent group perspective relative">
                <div class="relative preserve-3d w-full h-full duration-1000 shadow-lg bg-zoom">
                    <div class="absolute inset-0 flex items-end w-full backface-hidden overflow-hidden">
                        <div class="bg-cover bg-center w-full h-full transition-transform duration-500 ease-in-out bg-image" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/card-4.png');"></div>
                        <div class="absolute py-5 px-5 flex justify-between items-end w-full">
                            <p class="mt-4 text-black">Educational Materials</p>
                            <button class="cursor-pointer plus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/max-icon.png" alt="<?php esc_attr_e('Max Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                    <div class="backface-hidden my-rotate-y-180 absolute inset-0 bg-[#FFFEF8] overflow-hidden text-left p-3 flex justify-between flex-col shadow-lg">
                        <div>
                            <h1 class="text-sm text-gray-400 mb-2">Educational Materials</h1>
                            <h1 class="text-md font-bold mb-3">Educate and Engage Your Audience</h1>
                            <p class="text-sm mb-5">Develop clear, concise, and visually appealing  materials to empower your audience.</p>
                        </div>
                        <div class="flex justify-between items-end w-full">
                            <div class="flex items-center gap-3 justify-center">
                                <p class="text-[#FF4848]">ASK FOR A QUOTE</p>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/chevron-left.png" alt="<?php esc_attr_e('Chevron left Icon', 'proslider'); ?>" >
                            </div>
                            <button class="cursor-pointer minus-flip-card">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home/min-icon.png" alt="<?php esc_attr_e('Min Icon', 'proslider'); ?>" >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LinkedIn Section -->
<section class="mt-16 bg-gray-100 py-12">
    <div class="flex items-center justify-around">
        <div class="flex items-center flex-col gap-2">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/linkedIn-icon.png" alt="<?php esc_attr_e('Linkedin Icon', 'proslider'); ?>">
            <p class="text-md font-bold text-[#FF4848]">Fastest Growing</p>
            <p class="text-sm">Presentation design firm on Linked in</p>
        </div>
        <div class="flex items-center flex-col gap-2">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/stars-list.png" alt="<?php esc_attr_e('Stars Icon', 'proslider'); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/portal-icon.png" alt="<?php esc_attr_e('Portal Icon', 'proslider'); ?>">
            <div class="text-sm">Average feedback received</div>
        </div>
        <div class="flex items-center flex-col gap-2">
            <div class="flex items-center gap-2">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slides-icon.png" alt="<?php esc_attr_e('Slides Icon', 'proslider'); ?>">
                <p class="text-2xl">11,111</p>
            </div>
            <p class="text-md font-bold text-[#FF4848]">World-Class slides</p>
            <p class="text-sm">designed this year till date</p>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="mt-48 mb-48 flex flex-col items-end">
    <div class="flex justify-between items-center border-b-2 border-black pb-2 w-[70%] mb-20 mr-16">
        <h2 class="text-3xl font-bold">USE CASES</h2>
        <a href="#" class="bg-[#FFF7F1] text-black px-4 py-2 rounded hover:text-red flex gap-2 items-center btn-animate">
            Book a call
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
        </a>
    </div>
    <div class="flex justify-end items-end py-32 w-full parallax-bg-1" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/pattern1.jpg');">
        <div class="flex items-center space-x-8 mr-16 w-[70%]">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/logo-1.png" alt="<?php esc_attr_e('Use Cased Logo 1', 'proslider'); ?>" class="w-16 h-16 object-cover">
            <div class="flex-1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/use-cased-1.png" alt="<?php esc_attr_e('Use Cased 1', 'proslider'); ?>" class="w-full h-[300px] object-cover">
                <div class="flex justify-between items-start gap-2 mt-5">
                    <p class="text-lg font-bold w-1/4">COMPANY NAME</p>
                    <p class="text-sm w-1/2">Our project, named "InnovateX", is a cutting-edge platform designed to streamline your workflow and boost productivity. With a user-friendly interface and powerful features, InnovateX is your go-to solution for all your project management needs.</p>
                    <p class="text-lg w-1/4 text-right">53% Increased sales</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end items-end py-32 w-full parallax-bg-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/pattern2.jpg');">
        <div class="flex items-center space-x-8 mr-16 w-[70%]">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/logo-2.png" alt="<?php esc_attr_e('Use Cased Logo 2', 'proslider'); ?>" class="w-16 h-16 object-cover">
            <div class="flex-1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/use-cased-2.png" alt="<?php esc_attr_e('Use Cased 2', 'proslider'); ?>" class="w-full h-[300px] object-cover">
                <div class="flex justify-between items-start gap-2 mt-5">
                    <p class="text-lg font-bold w-1/4">COMPANY NAME</p>
                    <p class="text-sm w-1/2">Our project, named "InnovateX", is a cutting-edge platform designed to streamline your workflow and boost productivity. With a user-friendly interface and powerful features, InnovateX is your go-to solution for all your project management needs.</p>
                    <p class="text-lg w-1/4 text-right">53% Increased sales</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-end items-end py-32 w-full parallax-bg-3" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/pattern3.jpg');">
        <div class="flex items-center space-x-8 mr-16 w-[70%]">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/logo-3.png" alt="<?php esc_attr_e('Use Cased Logo 3', 'proslider'); ?>" class="w-16 h-16 object-cover">
            <div class="flex-1">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/use-cased/use-cased-3.png" alt="<?php esc_attr_e('Use Cased 3', 'proslider'); ?>" class="w-full h-[300px] object-cover">
                <div class="flex justify-between items-start gap-2 mt-5">
                    <p class="text-lg font-bold w-1/4">COMPANY NAME</p>
                    <p class="text-sm w-1/2">Our project, named "InnovateX", is a cutting-edge platform designed to streamline your workflow and boost productivity. With a user-friendly interface and powerful features, InnovateX is your go-to solution for all your project management needs.</p>
                    <p class="text-lg w-1/4 text-right">53% Increased sales</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();
