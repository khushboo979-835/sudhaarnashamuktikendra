
<style>
    .navbar {
        background: var(--tertiary-color);
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2),
            0px 6px 10px 0px rgba(0, 0, 0, 0.14),
            0px 1px 18px 0px rgba(0, 0, 0, 0.12);
            padding: 15px;
    }

    .navbar .nav-item {
        margin: 0px 10px;
    }

    .navbar .nav-item .nav-link {
        color: black;
        font-weight: 600;
    }

    .navbar.scrolled {
        background: var(--tertiary-color);
        box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2),
            0px 6px 10px 0px rgba(0, 0, 0, 0.14),
            0px 1px 18px 0px rgba(0, 0, 0, 0.12);
    }

    /* ==================================================== */
    .navbar.fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 15px !important;
        z-index: 1000;
        animation: slideDown 0.3s ease;
    }

    /* Optional smooth animation */
    @keyframes slideDown {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(0);
        }
    }

    body.fixed-padding {
        padding-top: 70px;
    }

    .navbar .dropdown-menu {
        border: none;
        border-radius: 0px;
        background: var(--tertiary-color);
    }

    .navbar .dropdown-item {
        color: black;
        font-weight: 600;
        padding:10px;
    }

    .navbar .dropdown-item:hover {
        background: var(--primary-color);
        color: var(--tertiary-color);
    }
    .navbar-toggler {
    padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
    /* font-size: var(--bs-navbar-toggler-font-size); */
    line-height: 1;
    color: var(--bs-navbar-color);
    background-color: transparent;
    border: 0px;
    border-radius: var(--bs-navbar-toggler-border-radius);
    transition: var(--bs-navbar-toggler-transition);
}
</style>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo/logo.jpg" alt="logo" class="img-fluid" style="width: 150px;">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list-nested fs-1 text-dark"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="alcohol-addiction.php">Alcohol Addiction</a>
                            <a class="dropdown-item" href="drug-addiction-treatment.php">Drug Addiction Treatment</a>
                            <a class="dropdown-item" href="marijuana-ganja-addiction.php">Marijuana Ganja Addiction</a>
                            <a class="dropdown-item" href="heroin-addiction-treatment.php">Heroin Addiction Treatment</a>
                            <a class="dropdown-item" href="cocaine-addiction-treatment.php">Cocaine Addiction Treatment</a>
                            <a class="dropdown-item" href="whitener-addiction.php">Whitener Addiction</a>                            
                        </div>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                    
                    <!-- WhatsApp & Call (Visible only on lg and above) -->
                    <li class="nav-item d-none d-lg-flex align-items-center gap-2">
                        <a href="https://wa.me/919229057761" class="btn btn-success btn-sm" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                        <a href="tel:+919229057761" class="btn btn-primary btn-sm">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- WhatsApp & Call (Visible only on md and below, below the navbar) -->
        <div class="d-lg-none d-flex align-items-center justify-content-around gap-5 px-5 pt-2">
            <a href="https://wa.me/919229057761" class="btn btn-success d-flex" target="_blank">
                <i class="bi bi-whatsapp me-1"></i> WhatsApp
            </a>
            <a href="tel:+919229057761" class="btn btn-primary btn-sm w-100">
                <i class="bi bi-telephone-fill"></i> Call Now
            </a>
        </div>
    </nav>
</header>

<?php include  "common/chat-bot.php"; ?>
<script>
    window.addEventListener("scroll", function () {
        const header = document.querySelector("header");
        const navbar = document.querySelector(".navbar");

        if (window.scrollY > 120) {
            navbar.classList.add("fixed-top");
            document.body.classList.add("fixed-padding");
        } else {
            navbar.classList.remove("fixed-top");
            document.body.classList.remove("fixed-padding");
        }

        // Optional: keep the "scrolled" class behavior
        if (window.scrollY > 0) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>