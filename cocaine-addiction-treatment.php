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
        .cocaine-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/cocaine-banner.jpg);
            background-size: cover;
            background-position: bottom;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .cocaine-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .cocaine-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .cocaine-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .cocaine-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .cocaine-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .cocaine-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="cocaine-readcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">Heroin Addiction Treatment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Heroin Addiction Treatment</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =============================================================================== -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="head-title">
                    <h2>Best Cocaine <span>De-Addiction Treatment</span></h2>
                </div>
                <div class="col-md-12">
                    <p>
                        Struggling with cocaine addiction? Don’t let it dictate your life. At
                        <strong class="title">Sudhaar Foundation in Jharkhand</strong>, we are committed
                        to helping you reclaim control. Our center offers personalized programs tailored to your
                        needs, ensuring a structured path to recovery. As a trusted rehabilitation center specializing
                        in
                        cocaine addiction treatment, we provide comprehensive, holistic plans designed to support
                        long-term
                        freedom from addiction.
                    </p>
                    <p>
                        For those seeking effective and compassionate cocaine addiction recovery services in Jharkhand,
                        <strong>Sudhaar Foundation</strong> stands out as a leading choice. Begin your healing journey
                        with us today.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 treatment">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-3">
                    <h3 class="title">Why Choose Sudhaar Foundation for Cocaine De-Addiction Treatment?</h3>
                </div>
                <div class="col-md-11">
                    <div class="py-2">
                        <p><strong>🎯 Personalized Approach:</strong> Our treatment plans are custom-designed to meet
                            each individual's unique needs, ensuring focused and effective support throughout the
                            recovery process.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>👨‍⚕️ Experienced Professionals:</strong> Our team includes seasoned therapists,
                            counselors, and medical experts dedicated to cocaine addiction treatment, offering
                            round-the-clock care and professional guidance.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🧘 Holistic Treatment Methods:</strong> We use a blend of evidence-based therapies,
                            behavioral techniques, and alternative healing methods to target physical, psychological,
                            and emotional recovery.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🏡 Supportive Environment:</strong> Sudhaar Foundation offers a safe, judgment-free
                            environment where individuals feel supported by staff and fellow residents, encouraging deep
                            transformation and lasting change.</p>
                    </div>

                    <div class="py-2">
                        <p><strong>🔁 Aftercare Support:</strong> Recovery doesn’t stop at discharge. We offer relapse
                            prevention plans, follow-up counseling, and access to local support networks to ensure a
                            smooth reintegration into daily life.</p>
                    </div>

                    <div class="py-4">
                        <p>Reach out to <strong>Sudhaar Foundation</strong> today and take your first step toward a
                            drug-free life.
                            If cocaine addiction is affecting you or someone close to you, know that you're not alone.
                            Our team is ready to support you through every step of your recovery journey.</p>
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