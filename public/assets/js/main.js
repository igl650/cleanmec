/**
 * Script Principal — CleanMec Refrigeração
 * JavaScript puro progressivo (Vanilla ES6+).
 */

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const primaryNav = document.getElementById('primaryNavigation');

    if (menuToggle && primaryNav) {
        // Mantém estado (aria-expanded) e nome acessível (aria-label) sempre sincronizados
        const setMenuOpen = (open) => {
            menuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            menuToggle.setAttribute('aria-label', open ? 'Fechar menu de navegação' : 'Abrir menu de navegação');
            primaryNav.classList.toggle('is-open', open);
        };

        menuToggle.addEventListener('click', () => {
            setMenuOpen(menuToggle.getAttribute('aria-expanded') !== 'true');
        });

        // Fechar com tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && primaryNav.classList.contains('is-open')) {
                setMenuOpen(false);
                menuToggle.focus();
            }
        });

        // Fechar ao clicar fora do menu
        document.addEventListener('click', (e) => {
            if (!primaryNav.contains(e.target) && !menuToggle.contains(e.target) && primaryNav.classList.contains('is-open')) {
                setMenuOpen(false);
            }
        });

        // Fechar ao clicar em qualquer link interno de navegação
        const navLinks = primaryNav.querySelectorAll('.nav-link, .nav-mobile-cta a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (primaryNav.classList.contains('is-open')) {
                    setMenuOpen(false);
                }
            });
        });
    }

    // Botão flutuante de WhatsApp:
    // - some enquanto outro botão/link de WhatsApp já está visível na tela;
    // - em telas pequenas, some ao rolar para baixo (leitura) e volta ao rolar para cima.
    const floatingBtn = document.getElementById('floatingWhatsappBtn');
    if (floatingBtn) {
        const whatsappUrl = floatingBtn.getAttribute('href');
        const otherCtas = [...document.querySelectorAll('a[href]')]
            .filter(a => a !== floatingBtn && a.getAttribute('href') === whatsappUrl && !a.closest('.header-nav, .header-actions'));
        const visibleCtas = new Set();
        const smallScreen = window.matchMedia('(max-width: 860px)');
        let scrollingDown = false;
        let lastY = window.scrollY;

        const update = () => {
            const hide = visibleCtas.size > 0 || (smallScreen.matches && scrollingDown);
            floatingBtn.classList.toggle('is-hidden', hide);
            floatingBtn.setAttribute('tabindex', hide ? '-1' : '0');
            floatingBtn.setAttribute('aria-hidden', hide ? 'true' : 'false');
        };

        if ('IntersectionObserver' in window && otherCtas.length) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        visibleCtas.add(entry.target);
                    } else {
                        visibleCtas.delete(entry.target);
                    }
                });
                update();
            });
            otherCtas.forEach(a => observer.observe(a));
        }

        window.addEventListener('scroll', () => {
            const y = window.scrollY;
            if (Math.abs(y - lastY) < 8) return;
            scrollingDown = y > lastY;
            lastY = y;
            update();
        }, { passive: true });

        update();
    }
});
