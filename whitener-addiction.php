<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "common/head.php"; ?>
    <!-- =================================== -->
</head>

<body>
    <?php include "common/header.php"; ?>
    <!-- ====================================== -->
    <style>
        .whitener-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/whitener-banner.jpg);
            background-size: cover;
            background-position: bottom;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .whitener-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .whitener-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .whitener-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whitener-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .whitener-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .whitener-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="whitener-readcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">Whitener Addiction Treatment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Whitener Addiction Treatment</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =============================================================================== -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="head-title">
                    <h2>Best Whitener <span>De-Addiction Treatment</span></h2>
                </div>
                <div class="col-md-12">
                    <p>
                        Are you struggling with whitener addiction? At
                        <strong class="title">Sudhaar Foundation in Jharkhand</strong>, we’re dedicated to helping you
                        regain control and find freedom from substance abuse. Our personalized recovery programs are
                        designed to meet your unique needs, providing a safe, structured, and compassionate
                        environment for healing.
                    </p>
                    <p>
                        As a leading rehabilitation center specializing in <strong>whitener addiction
                            treatment</strong>,
                        we offer holistic and effective treatment solutions that support your physical, emotional, and
                        psychological recovery. If you're ready to take the first step toward a healthier and brighter
                        future,
                        trust <strong>Sudhaar Foundation</strong> to guide you every step of the way.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 treatment">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-3">
                    <h3 class="title">Why Choose Sudhaar Foundation for Whitener Addiction Treatment?</h3>
                </div>
                <div class="col-md-11">
                    <div class="py-2">
                        <p><strong>🎓 Specialized Expertise:</strong> Our team is trained specifically in dealing with
                            whitener addiction, understanding the behavioral and neurological effects caused by
                            inhalants and providing targeted care.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🛠 Personalized Programs:</strong> Each treatment plan is customized based on
                            individual assessments to ensure you're receiving the right support for your personal
                            addiction history and recovery goals.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🌿 Holistic Approach:</strong> We focus on healing the mind, body, and soul. Our
                            program includes a combination of medical detox, therapy, yoga, mindfulness, and life-skills
                            development to promote complete recovery.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🤝 Comprehensive Support:</strong> From admission through post-treatment care, we
                            offer continuous support including individual counseling, group therapy, family involvement,
                            and relapse prevention strategies.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🏆 Proven Success:</strong> Our center has successfully helped many young individuals
                            overcome whitener addiction. Our evidence-based methods and compassionate care give you the
                            best chance at sustained sobriety.</p>
                    </div>

                    <div class="py-4">
                        <p>If you or a loved one is struggling with whitener addiction, don't wait.
                            <strong>Contact Sudhaar Foundation</strong> today to begin your path to recovery.
                            Our expert team is ready to support you with personalized treatment and dedicated care.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ================================================================ -->
    <?php include 'common/footer.php'; ?>
    <!-- =============================================================== -->
</body>

</html>