<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "common/head.php"; ?>
</head>

<body>
    <?php include "common/header.php"; ?>
    <!-- ======================================= -->
    <style>
        .about-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/about-banner.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .about-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .about-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .about-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .about-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .about-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .about-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="about-readcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =============================================== -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="head-title mb-4">
                    <h2>About <span>Sudhaar Foundation</span></h2>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="assets/images/about/about.avif" alt="about sudhaar foundation" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <p>
                        <strong class="title">Sudhaar Foundation</strong> is a trusted <strong>Nasha Mukti
                            Kendra</strong> (De-Addiction Centre) located in Jharkhand, dedicated to helping individuals
                        overcome substance abuse and lead a life of hope, health, and dignity.
                    </p>
                    <p>
                        We provide professional rehabilitation services for addiction to alcohol, drugs, ganja, heroin,
                        whitener, and other harmful substances. Our team of doctors, therapists, and support staff work
                        together to offer a safe, compassionate, and structured recovery environment.
                    </p>
                    <p>
                        At Sudhaar Foundation, we understand that addiction not only affects the individual, but also
                        their family. That’s why we focus on complete healing—physically, mentally, emotionally, and
                        socially. Our recovery programs include medical detox, psychological counseling, yoga,
                        meditation, motivational sessions, and aftercare support.
                    </p>

                    <p class="fw-bold mb-0">
                        Join hands with Sudhaar Foundation, and let us walk with you toward recovery and a brighter
                        future.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================================================= -->
    <style>
        .commitment {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/background/1.avif);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;

        }
    </style>
    <section class="py-5 commitment">
        <div class="container">
            <div class="row mb-4">
                <div class="head-title">
                    <h2 class="text-white">Our <span>Commitment</span></h2>
                    <p class="text-white">What drives Sudhaar Foundation toward transforming lives</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Mission -->
                <div class="col-md-4">
                    <div class="p-4 border rounded bg-white h-100 shadow-sm">
                        <h4 class="mb-3"><i class="bi bi-bullseye text-primary me-2"></i>Our Mission</h4>
                        <p>
                            To provide holistic, compassionate, and effective de-addiction care that empowers
                            individuals to overcome substance abuse and rebuild their lives with confidence and dignity.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-4">
                    <div class="p-4 border rounded bg-white h-100 shadow-sm">
                        <h4 class="mb-3"><i class="bi bi-eye-fill text-success me-2"></i>Our Vision</h4>
                        <p>
                            To be the most trusted and impactful Nasha Mukti Kendra in Jharkhand, creating a society
                            free from addiction, where every individual can live a healthy and fulfilling life.
                        </p>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="col-md-4">
                    <div class="p-4 border rounded bg-white h-100 shadow-sm">
                        <h4 class="mb-3"><i class="bi bi-heart-fill text-danger me-2"></i>Core Values</h4>
                        <ul class="mb-0 ps-3">
                            <li>Empathy & Respect</li>
                            <li>Trust & Confidentiality</li>
                            <li>Continuous Support</li>
                            <li>Medical & Moral Integrity</li>
                            <li>Family Involvement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================================== -->
     <?php include 'faq.php'; ?>
    <!-- =========================================== -->
    <?php include 'common/footer.php'; ?>
</body>

</html>