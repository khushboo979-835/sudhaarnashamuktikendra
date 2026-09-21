<?php
$districts = [
    "Ranchi",
    "Bokaro",
    "Chatra",
    "Deoghar",
    "Dhanbad",
    "Dumka",
    "East Singhbhum",
    "Garhwa",
    "Giridih",
    "Godda",
    "Gumla",
    "Hazaribagh",
    "Jamtara",
    "Khunti",
    "Koderma",
    "Latehar",
    "Lohardaga",
    "Pakur",
    "Palamu",
    "Ramgarh",
    "Sahibganj",
    "Saraikela-Kharsawan",
    "Simdega",
    "West Singhbhum"
];
?>

<!-- ==================== OUR NASHA MUKTI KENDRA NETWORK SECTION ==================== -->
<section class="network-section py-5" id="network-locations">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-8 col-md-10">
                <div class="network-badge mb-2">
                    <span><i class="bi bi-geo-alt-fill me-1"></i> 24x7 Helpline Across Jharkhand</span>
                </div>
                <h2 class="network-title">
                    Our <span class="highlight-text">Nasha Mukti Kendra</span> Network
                </h2>
                <div class="network-title-divider"></div>
                <p class="network-subtitle text-muted mt-3">
                    Fast immediate emergency medical response across all key structural nodes.
                </p>
            </div>
        </div>

        <!-- Districts Grid -->
        <div class="row g-3 g-md-4 network-grid">
            <?php foreach ($districts as $index => $district): ?>
                <div class="col-lg-4 col-md-6 col-12 network-card-col" data-aos="fade-up" style="--card-delay: <?= ($index % 6) * 0.08 ?>s;">
                    <a href="https://wa.me/919229057761?text=<?= urlencode('Hello Sudhaar Foundation, I am looking for Nasha Mukti Kendra in ' . $district . '.') ?>" 
                       target="_blank" 
                       class="network-card text-decoration-none d-block">
                        <div class="network-card-inner">
                            <div class="network-card-top-bar"></div>
                            <div class="network-card-content d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="network-icon-box">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <h3 class="network-location-name mb-0">
                                        Nasha Mukti Kendra <span class="district-name"><?= htmlspecialchars($district) ?></span>
                                    </h3>
                                </div>
                                <div class="network-arrow">
                                    <i class="bi bi-arrow-right-short"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Quick Help Bar Below Grid -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="network-help-bar p-4 rounded-4 shadow-sm text-center d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                    <div class="text-md-start">
                        <h4 class="mb-1 text-white fw-bold">Need Immediate Help in Your Area?</h4>
                        <p class="mb-0 text-white-50">Our rehabilitation counselors are available 24/7 to assist you in every district of Jharkhand.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="tel:+919229057761" class="btn btn-light rounded-pill px-4 fw-bold shadow-sm">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>Call +91 92290 57761
                        </a>
                        <a href="https://wa.me/919229057761" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                            <i class="bi bi-whatsapp me-2"></i>WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== NETWORK SECTION STYLES ==================== -->
<style>
/* Section Base */
.network-section {
    background: linear-gradient(180deg, #f8fbfe 0%, #edf5fa 100%);
    position: relative;
    overflow: hidden;
}

.network-section::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(0, 176, 240, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.network-section::after {
    content: "";
    position: absolute;
    bottom: -50px;
    left: -50px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(111, 191, 75, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Badge */
.network-badge span {
    display: inline-block;
    background: rgba(0, 176, 240, 0.12);
    color: #0084b4;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 6px 18px;
    border-radius: 30px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

/* Title */
.network-title {
    font-size: 2.3rem;
    font-weight: 800;
    color: #0d3b66;
    font-family: 'DM Serif Text', "Times New Roman", serif;
    letter-spacing: -0.5px;
}

.network-title .highlight-text {
    background: linear-gradient(135deg, #0099cc 0%, #52a832 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
}

.network-title-divider {
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #00B0F0, #6FBF4B);
    margin: 12px auto 0;
    border-radius: 4px;
}

.network-subtitle {
    font-size: 1.05rem;
    color: #5a6e7f;
    font-weight: 500;
    max-width: 600px;
    margin: 0 auto;
}

/* Network Card */
.network-card {
    position: relative;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 4px 18px rgba(13, 59, 102, 0.06);
    border: 1px solid rgba(0, 176, 240, 0.15);
    transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
    overflow: hidden;
}

.network-card-inner {
    position: relative;
}

/* Top colored accent bar (as in reference image) */
.network-card-top-bar {
    height: 4.5px;
    width: 100%;
    background: linear-gradient(90deg, #00B0F0 0%, #0084b4 50%, #6FBF4B 100%);
    transition: height 0.3s ease, background 0.3s ease;
}

.network-card-content {
    padding: 18px 22px;
}

/* Icon Box */
.network-icon-box {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 12px;
    background: #f0f8ff;
    color: #0084b4;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    transition: all 0.35s ease;
    border: 1px solid rgba(0, 176, 240, 0.2);
}

/* Location Name */
.network-location-name {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f3d63;
    line-height: 1.35;
    transition: color 0.3s ease;
}

.network-location-name .district-name {
    color: #007ba8;
    font-weight: 800;
    transition: color 0.3s ease;
}

/* Arrow */
.network-arrow {
    width: 32px;
    height: 32px;
    min-width: 32px;
    border-radius: 50%;
    background: #f5f9fc;
    color: #6c869c;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    transition: all 0.35s ease;
}

/* Card Hover Effects */
.network-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 176, 240, 0.18);
    border-color: #00B0F0;
}

.network-card:hover .network-card-top-bar {
    height: 6px;
    background: linear-gradient(90deg, #6FBF4B 0%, #00B0F0 100%);
}

.network-card:hover .network-icon-box {
    background: linear-gradient(135deg, #00B0F0, #0077aa);
    color: #ffffff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 4px 12px rgba(0, 176, 240, 0.3);
}

.network-card:hover .network-location-name {
    color: #005f88;
}

.network-card:hover .network-location-name .district-name {
    color: #4b9b2b;
}

.network-card:hover .network-arrow {
    background: #6FBF4B;
    color: #ffffff;
    transform: translateX(4px);
    box-shadow: 0 4px 10px rgba(111, 191, 75, 0.35);
}

/* Help Bar */
.network-help-bar {
    background: linear-gradient(135deg, #0d3b66 0%, #075e7a 50%, #1e7046 100%);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Animation on Scroll & Entrance */
.network-card-col {
    opacity: 0;
    transform: translateY(25px);
    transition: opacity 0.5s ease, transform 0.5s ease;
    transition-delay: var(--card-delay, 0s);
}

.network-card-col.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Rules */
@media (max-width: 991px) {
    .network-title {
        font-size: 1.9rem;
    }
    
    .network-location-name {
        font-size: 1rem;
    }
}

@media (max-width: 767px) {
    .network-title {
        font-size: 1.55rem;
    }

    .network-subtitle {
        font-size: 0.95rem;
    }

    .network-card-content {
        padding: 15px 16px;
    }

    .network-icon-box {
        width: 36px;
        height: 36px;
        min-width: 36px;
        font-size: 1rem;
        border-radius: 10px;
    }

    .network-location-name {
        font-size: 0.95rem;
    }

    .network-arrow {
        width: 28px;
        height: 28px;
        min-width: 28px;
        font-size: 1.1rem;
    }

    /* Stack cards cleanly with spacing on mobile */
    .network-grid {
        row-gap: 12px !important;
    }

    .network-card {
        border-radius: 14px;
        box-shadow: 0 3px 12px rgba(13, 59, 102, 0.08);
    }
}
</style>

<!-- ==================== ANIMATION SCRIPT ==================== -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".network-card-col");
    
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: "0px 0px -40px 0px"
        });

        cards.forEach(card => observer.observe(card));
    } else {
        cards.forEach(card => card.classList.add("is-visible"));
    }
});
</script>
