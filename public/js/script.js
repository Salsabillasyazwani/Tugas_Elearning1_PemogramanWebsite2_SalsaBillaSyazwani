document.addEventListener('DOMContentLoaded', () => {

    const navbar = document.getElementById('mainNavbar');

    const handleScroll = () => {
        if (window.scrollY > 50) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();


    const tabBtns    = document.querySelectorAll('.tab-btn');
    const productItems = document.querySelectorAll('.product-item');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {

            tabBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            productItems.forEach(item => {
                if (filter === 'semua' || item.dataset.category === filter) {
                    item.classList.remove('hidden');
                    item.style.animation = 'none';
                    item.offsetHeight; 
                    item.style.animation = '';
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });


    const fadeElements = document.querySelectorAll('.fade-up');

    if ('IntersectionObserver' in window && fadeElements.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, i * 80);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        fadeElements.forEach(el => observer.observe(el));
    } else {
        fadeElements.forEach(el => el.classList.add('visible'));
    }


    const newsletterForm = document.querySelector('.footer-newsletter');

    if (newsletterForm) {
        const sendBtn   = newsletterForm.querySelector('button');
        const emailInput = newsletterForm.querySelector('input[type="email"]');

        sendBtn?.addEventListener('click', () => {
            const email = emailInput?.value.trim();

            if (!email || !email.includes('@')) {
                emailInput?.classList.add('is-invalid');
                setTimeout(() => emailInput?.classList.remove('is-invalid'), 2000);
                return;
            }

            sendBtn.innerHTML = '<i class="bi bi-check-lg"></i>';
            sendBtn.style.background = '#4CAF50';
            emailInput.value = '';

            setTimeout(() => {
                sendBtn.innerHTML = '<i class="bi bi-send-fill"></i>';
                sendBtn.style.background = '';
            }, 3000);
        });
    }


    const sections  = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.navbar-nav .nav-link');

    const activeLinkObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    }, { threshold: 0.4 });

    sections.forEach(section => activeLinkObserver.observe(section));

});