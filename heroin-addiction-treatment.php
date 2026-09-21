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
        .heroin-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/heroin-banner.avif);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .heroin-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .heroin-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .heroin-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .heroin-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .heroin-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .heroin-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="heroin-readcrumb">
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
    <section class="py-4 alcohol">
        <div class="container">
            <div class="row justify-content-center">
                <div class="head-title">
                    <h2>Heroin De-Addiction Treatment Center<span>  in Jharkhand</span></h2>
                </div>
                <div class="col-md-12">
                    <p>
                        Welcome to <strong class="title">Sudhaar Foundation</strong>, the leading heroin addiction
                        treatment center in Jharkhand.
                        We understand the devastating impact that heroin addiction can have on individuals and their
                        families.
                        With our comprehensive and personalized treatment programs, we are dedicated to helping you
                        overcome addiction
                        and reclaim a life of health, happiness, and sobriety.
                    </p>

                    <h4 class="pt-3 title">Understanding Heroin Addiction</h4>
                    <p>
                        We delve into the nature of heroin addiction, its effects on physical and mental health,
                        and the challenges it presents. Seeking professional help is essential for effective recovery,
                        and a reputed center like Sudhaar Foundation plays a pivotal role in the journey to sobriety.
                    </p>

                    <h4 class="pt-3 title">Our Approach to Heroin Addiction Treatment</h4>
                    <p>
                        At <strong>Sudhaar Foundation</strong>, we adopt a holistic approach combining experienced
                        professionals
                        with evidence-based treatment modalities tailored to your specific needs:
                    </p>
                    <ul>
                        <li><strong>Medical Detoxification:</strong> Safe and comfortable withdrawal under medical
                            supervision.</li>
                        <li><strong>Individualized Counseling:</strong> One-on-one sessions to understand triggers and
                            promote mental healing.</li>
                        <li><strong>Group Therapy:</strong> Connect with peers for shared support and motivation.</li>
                        <li><strong>Behavioral Therapies:</strong> CBT, MI, and other techniques to develop healthy
                            coping strategies.</li>
                        <li><strong>Family Involvement:</strong> Sessions to rebuild trust and strengthen the support
                            system.</li>
                    </ul>

                    <h4 class="pt-3 title">Why Choose Sudhaar Foundation for Heroin Addiction Treatment</h4>
                    <ul>
                        <li><strong>Experienced Staff:</strong> Qualified and compassionate professionals guiding each
                            step.</li>
                        <li><strong>Personalized Treatment:</strong> Customized plans to suit individual recovery
                            journeys.</li>
                        <li><strong>Safe Environment:</strong> Secure and nurturing surroundings for healing.</li>
                        <li><strong>Comprehensive Aftercare:</strong> Long-term support including relapse prevention and
                            counseling.</li>
                    </ul>

                    <h4 class="pt-3 title">Benefits of Joining Sudhaar Foundation for Heroin De-Addiction</h4>
                    <p><strong>Sudhaar Foundation</strong> offers structured and comprehensive care with:</p>
                    <ul>
                        <li>Professional guidance from trained experts.</li>
                        <li>Controlled environment to minimize relapse triggers.</li>
                        <li>Medical support for detox and withdrawal.</li>
                        <li>Peer support groups to build community and accountability.</li>
                        <li>Holistic healing for mind, body, and spirit.</li>
                        <li>Aftercare services to maintain long-term sobriety.</li>
                    </ul>

                    <p class="pt-3">
                        If you or someone you love is struggling with heroin addiction,
                        <strong>Sudhaar Foundation</strong> is here to help you take the first step towards recovery.
                        Contact us today and let us support you on your path to a healthier, addiction-free life in
                        Jharkhand.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================ -->
    <?php include 'common/footer.php'; ?>
    <!-- =============================================================== -->
</body>

</html>