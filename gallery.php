<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <?php include "common/head.php"; ?>
</head>

<body>
    <?php include "common/header.php"; ?>
    <!-- ========================================================= -->
    <style>
        .gallery-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/gallery-banner.jpg);
            background-size: cover;
            background-position: bottom;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .gallery-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .gallery-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .gallery-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .gallery-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .gallery-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .gallery-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="gallery-readcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">Gallery</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ================================================================ -->
     <style>
        .gallery img{
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
     </style>
    <section class="py-5 gallery">
        <div class="container">
            <div class="row">
                <div class="head-title w-100 mb-4">
                    <h2>Our <span>Gallery</span></h2>
                    <p class="subtitle">A gallery of stunning works of art created by our talented artisans.</p>
                </div>
            </div>


            <div class="row">
                <!-- Static Images -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="assets/images/gallery/1.jpeg" data-fancybox="gallery" data-caption="Image 1">
                        <img src="assets/images/gallery/1.jpeg" alt="Gallery Image 1" class="img-fluid rounded shadow-sm"
                            >
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="assets/images/gallery/2.jpg" data-fancybox="gallery" data-caption="Image 2">
                        <img src="assets/images/gallery/2.jpg" alt="Gallery Image 2" class="img-fluid rounded shadow-sm"
                            >
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="assets/images/gallery/3.jpeg" data-fancybox="gallery" data-caption="Image 3">
                        <img src="assets/images/gallery/3.jpeg" alt="Gallery Image 3" class="img-fluid rounded shadow-sm"
                            >
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="assets/images/gallery/3.avif" data-fancybox="gallery" data-caption="Image 4">
                        <img src="assets/images/gallery/3.avif" alt="Gallery Image 4" class="img-fluid rounded shadow-sm"
                            >
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="assets/images/gallery/5.jpeg" data-fancybox="gallery" data-caption="Image 4">
                        <img src="assets/images/gallery/5.jpeg" alt="Gallery Image 4" class="img-fluid rounded shadow-sm"
                            >
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="assets/images/gallery/6.avif" data-fancybox="gallery" data-caption="Image 4">
                        <img src="assets/images/gallery/6.avif" alt="Gallery Image 4" class="img-fluid rounded shadow-sm"
                            >
                    </a>
                </div>

                <!-- Static Videos -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="videos/video1.mp4" data-fancybox="gallery" data-caption="Video 1" data-type="video">
                        <video class="img-fluid rounded shadow-sm"
                            style="height: 200px; width: 100%; object-fit: cover;" muted>
                            <source src="videos/video1.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="videos/video2.mp4" data-fancybox="gallery" data-caption="Video 2" data-type="video">
                        <video class="img-fluid rounded shadow-sm"
                            style="height: 200px; width: 100%; object-fit: cover;" muted>
                            <source src="videos/video2.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================== -->
    <?php include "common/footer.php"; ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function () {
        $('[data-fancybox="gallery"]').fancybox({
            loop: true,
            buttons: [
                'slideShow',
                'thumbs',
                'close'
            ],
            video: {
                autoStart: false
            }
        });
    });
</script>

</html>