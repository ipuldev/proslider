document.addEventListener('DOMContentLoaded', function () {
    const headerlogo = document.getElementById('logo');
    const headerlogoText = document.getElementById('logo-text');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function () {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (currentScroll > lastScrollTop) {
            // Scrolling down
            headerlogo.style.transform = 'translateY(-100%)';
            headerlogo.style.position = 'relative';
            headerlogoText.style.display = "block";
        } else {
            // Scrolling up
            if (currentScroll <= 0) {
                // At the top of the page
                headerlogoText.style.display = 'block';
            } else {
                headerlogo.style.transform = 'translateY(0)';
                headerlogo.style.position = 'fixed';
                headerlogoText.style.display = "none";
            }
        }
    
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
    });
    

    document.querySelectorAll('.plus-flip-card').forEach(button => {
        button.addEventListener('click', function() {
            this.closest('.relative').classList.add('my-rotate-y-180');
        });
    });

    document.querySelectorAll('.minus-flip-card').forEach(button => {
        button.addEventListener('click', function() {
            this.closest('.relative').classList.remove('my-rotate-y-180');
        });
    });
});