<?php
/*
Template Name: Contact Page
*/
get_header();
add_action('init', function () {
    flush_rewrite_rules();
});

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_career_form'])) {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error_message = 'Please fill out all required fields.';
    } else {
        $to = get_option('admin_email'); // Use site admin email
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $body = "Name: $name<br>Email: $email<br>Subject: $subject<br>Message: $message";

        wp_mail($to, $subject, $body, $headers);

        // Create a new post of custom post type 'form_submission'
        $post_id = wp_insert_post(array(
            'post_title' => $subject,
            'post_content' => $body,
            'post_type' => 'form_submission',
            'post_status' => 'publish'
        ));

        // Add custom fields for name and email
        update_post_meta($post_id, 'name', $name);
        update_post_meta($post_id, 'email', $email);
        $success_message = 'Thank you for reaching out. We will get back to you soon.';
    }
}
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
                <form id="career-form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                    <input type="hidden" name="action" value="handle_career_form_submission">
                    <!-- Your form fields -->
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-col gap-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150" required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email address" class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150" required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" placeholder="“I need a Pro design!”" class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150" required>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" placeholder="We're happy to help! Describe your inquiry and we will reach out soon." class="px-4 py-2 rounded w-full bg-[#F4F4F4] duration-150 min-h-[178px]" required></textarea>
                        </div>
                        <button type="submit" class="bg-[#FFF7F1] p-3 rounded hover:text-red-600 flex gap-2 items-center duration-150 text-xl w-auto justify-end text-black btn-animate">
                            Send Message
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/chevron-left.png" alt="<?php esc_attr_e('Chevron Left', 'proslider'); ?>">
                        </button>
                    </div>
                </form>
                <p id="success-message" class="bg-green-100 text-green-700 p-3 rounded"></p>
                <p id="error-message" class="bg-red-100 text-red-700 p-3 rounded"></p>
            </div>
        </div>
    </div>
</section>

<script>
 document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('career-form');
    const submitButton = form.querySelector('button[type="submit"]');
    const successMessage = document.getElementById('success-message');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        if (submitButton.disabled) {
            return;
        }

        submitButton.disabled = true; // Disable button to prevent multiple clicks

        const formData = new FormData(form);

        fetch(myAjax.ajaxurl, { // Use the localized AJAX URL
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                successMessage.textContent = data.message;
                successMessage.style.display = 'block';
                errorMessage.style.display = 'none'; // Hide error message
                form.reset();
            } else {
                errorMessage.textContent = data.message;
                errorMessage.style.display = 'block';
                successMessage.style.display = 'none'; // Hide success message
            }
        })
        .catch(error => {
            errorMessage.textContent = 'An error occurred. Please try again.';
            errorMessage.style.display = 'block';
            successMessage.style.display = 'none'; // Hide success message
        })
        .finally(() => {
            submitButton.disabled = false; // Re-enable button
        });
    });

    // Initially hide messages
    successMessage.style.display = 'none';
    errorMessage.style.display = 'none';
});

</script>



<?php
get_footer();
?>