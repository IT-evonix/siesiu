// STICKY Header
// // Stickey header start
const header = document.querySelector(".page-header");
const toggleClass = "is-sticky";
window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;
    if (currentScroll > 50) {
        header.classList.add(toggleClass);
    } else {
        header.classList.remove(toggleClass);
    }
});
// Sticky Header End

// Header Menu Start
// =============================
// MOBILE MENU (OPEN / CLOSE)
// =============================
const openBtn = document.querySelector(".open-btn");
const closeBtn = document.querySelector(".close-btn");
const navMenu = document.querySelector(".nav-menu");

// OPEN MENU
function openMenu() {
    if (!navMenu) return;

    navMenu.classList.add("active");

    if (openBtn) openBtn.style.display = "none";
    if (closeBtn) closeBtn.style.display = "block";

    // lock scroll
    const scrollY = window.scrollY;
    document.body.dataset.scrollY = scrollY;

    document.body.style.position = "fixed";
    document.body.style.top = `-${scrollY}px`;
    document.body.style.left = "0";
    document.body.style.right = "0";
    document.body.style.width = "100%";

    // reset submenu
    document.querySelectorAll(".submenu").forEach((sub) => {
        sub.style.display = "none";
    });

    document.querySelectorAll(".submenu-toggle").forEach((icon) => {
        icon.innerHTML = "+";
    });

    document.querySelectorAll(".has-submenu").forEach((li) => {
        li.classList.remove("open");
    });
}

// CLOSE MENU
function closeMenu() {
    if (!navMenu) return;

    navMenu.classList.remove("active");

    if (openBtn) openBtn.style.display = "block";
    if (closeBtn) closeBtn.style.display = "none";

    // get saved scroll
    const scrollY = parseInt(document.body.dataset.scrollY || "0");

    document.body.style.position = "";
    document.body.style.top = "";
    document.body.style.left = "";
    document.body.style.right = "";
    document.body.style.width = "";

    window.scrollTo({
        top: scrollY,
        behavior: "instant",
    });
}

// EVENTS
if (openBtn) openBtn.addEventListener("click", openMenu);
if (closeBtn) closeBtn.addEventListener("click", closeMenu);

// SUBMENU
document.querySelectorAll(".submenu-toggle").forEach((toggle) => {
    toggle.addEventListener("click", function (e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            e.stopPropagation();

            const parent = this.closest(".has-submenu");
            if (!parent) return;

            const submenu = parent.querySelector(":scope > .submenu");
            if (!submenu) return;

            const siblings = parent.parentElement.children;

            Array.from(siblings).forEach((item) => {
                if (item !== parent && item.classList.contains("has-submenu")) {
                    item.classList.remove("open");

                    const sub = item.querySelector(":scope > .submenu");
                    const icon = item.querySelector(".submenu-toggle");

                    if (sub) sub.style.display = "none";
                    if (icon) icon.innerHTML = "+";
                }
            });

            parent.classList.toggle("open");

            if (parent.classList.contains("open")) {
                submenu.style.display = "block";
                this.innerHTML = "−";
            } else {
                submenu.style.display = "none";
                this.innerHTML = "+";
            }
        }
    });
});
// Header Menu End

$(".owl-carousel_banner").owlCarousel({
    autoplay: true,
    center: true,
    loop: true,
    nav: false,
    dots: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1200: {
            items: 1,
        },
        1300: {
            items: 1,
        },
    },
});
$(".owl-carousel_gallery").owlCarousel({
    autoplay: true,
    center: true,
    loop: true,
    nav: true,
    dots: true,
    navigationText: ["", ""],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1200: {
            items: 3,
        },
        1300: {
            items: 4,
        },
    },
});
$(".owl-carousel_event").owlCarousel({
    autoplay: true,
    center: true,
    loop: true,
    nav: false,
    dots: false,
    navigationText: ["", ""],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1200: {
            items: 1,
        },
        1300: {
            items: 1,
        },
    },
});

// State Start Here
document.addEventListener("DOMContentLoaded", function () {
    const section = document.getElementById("rating");
    const counters = document.querySelectorAll(".counter");
    let hasAnimated = false;

    function animateCounters() {
        counters.forEach((counter) => {
            const target = parseInt(counter.getAttribute("data-target"));
            const hasPlus = counter.getAttribute("data-plus") === "true";

            let current = 0;
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16);

            function updateCounter() {
                current += increment;

                if (current < target) {
                    counter.textContent = Math.ceil(current);

                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = hasPlus ? target + "+" : target;
                }
            }

            updateCounter();
        });
    }

    const observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    animateCounters();

                    observer.unobserve(section);
                }
            });
        },
        {
            threshold: 0.3,
        },
    );

    observer.observe(section);
});
