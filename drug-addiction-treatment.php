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
        .drug-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/drugs-banner.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .drug-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .drug-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .drug-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .drug-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .drug-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .drug-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="drug-readcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">Drugs De-Addiction Treatment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Drugs De-Addiction Treatment</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =============================================================================== -->
    <section class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="head-title">
                    <h2>Best Drugs De-Addiction <span>Treatment</span></h2>
                </div>
                <div class="col-md-12">
                    <p>
                        Are you battling drug de-addiction? At <strong class="title">Sudhaar Foundation in
                            Jharkhand</strong>, we’re committed
                        to aiding your recovery journey. Our customized programs offer holistic support, addressing your
                        individual needs and guiding you towards lasting freedom from addiction. As a leading
                        rehabilitation center specializing in best drug de-addiction treatment in Jharkhand, we provide
                        personalized care to empower you towards a brighter future. Trust Sudhaar Foundation to
                        offer the assistance you need. Seek top-quality drug de-addiction services with us, and let’s
                        start together on the path to a healthier, happier life.

                        For top-quality drug de-addiction services in Jharkhand, choose Sudhaar Foundation. Receive
                        personalized care, support, and guidance to overcome addiction and lead a healthier life. You’re
                        not alone – take the first step today.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 alcohol">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" mb-3">
                    <h3 class="title">Why Choose Sudhaar Foundation for Drug De-Addiction Treatment</h3>
                </div>
                <div class="col-md-11">
                    <p><strong>🧘 Holistic Wellness:</strong> At Sudhaar Foundation, we combine traditional therapies
                        with alternative practices like art and music therapy to create a well-rounded and deeply
                        healing experience for individuals recovering from drug addiction.</p>

                    <div class="py-3">
                        <p><strong>⚙️ Customized Solutions:</strong> We incorporate innovative tools such as virtual
                            reality and biofeedback techniques to enhance the effectiveness of our programs and
                            encourage active participation in the recovery journey.</p>
                    </div>

                    <div class="py-3">
                        <p><strong>🌿 Nature’s Nurture:</strong> Nestled in peaceful surroundings, Sudhaar Foundation
                            offers eco-therapy initiatives that use the calming power of nature to improve emotional
                            balance and boost overall recovery outcomes.</p>
                    </div>

                    <div class="py-3">
                        <p><strong>👨‍👩‍👧‍👦 Family Focus:</strong> We understand the importance of family in the
                            recovery process. Our programs include family counseling and support sessions to rebuild
                            trust and create a strong, supportive foundation for long-term sobriety.</p>
                    </div>

                    <div class="py-3">
                        <p><strong>🌍 Cultural Competence:</strong> Sudhaar Foundation follows a culturally sensitive
                            approach, ensuring our treatment methods are inclusive, respectful, and relevant to
                            individuals from diverse backgrounds and walks of life.</p>
                    </div>

                    <div class="py-3">
                        <p>Start your recovery with <strong class="title">Sudhaar Foundation</strong> today. Our
                            dedicated team is committed to guiding
                            you with personalized care and unwavering support. If drug addiction is affecting your life,
                            don’t hesitate—take the first step toward a brighter, addiction-free future. You are not
                            alone, and with the right care, recovery is absolutely possible.</p>
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