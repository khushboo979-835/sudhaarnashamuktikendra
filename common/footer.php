<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= $base_url ?>assets/js/main.js"></script>
<!-- ========================================================================================= -->
<style>
    footer {
        background: var(--secondary-color);
        color: var(--tertiary-color);
        padding: 40px 0 20px 0;
        font-family: "Times New Roman", serif;
    }

    .top-footer {
        background: var(--primary-color);
        font-weight: 500;
        padding: 10px 0;
        font-size: 14px;
    }

    .social-icons a {
        color: var(--tertiary-color);
        font-size: 20px;
        margin: 0 8px;
        transition: color 0.3s;
    }

    .social-icons .bi-youtube {
        background-color: #FF0000;
    }

    .social-icons .bi-linkedin {
        background-color: #0077B5;
    }

    .social-icons .bi-facebook {
        background-color: #3b5998;
    }

    .social-icons .bi-instagram {
        background-color: #c32aa3;
    }

    .social-icons i {
        font-size: 15px;
        color: var(--tertiary-color);
        padding: 8px;
        border-radius: 50%;
    }

    .social-icons a:hover {
        color: var(--primary-color);
    }

    footer a {
        color: var(--tertiary-color);
        text-decoration: none;
    }

    .top-footer a {
        color: var(--tertiary-color);
    }

    .top-footer p {
        color: var(--tertiary-color);
    }

    footer h4 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: bold;
        border-left: 3px solid var(--secondary-color);
        padding-left: 5px;
    }

    footer ul {
        list-style: none;
        padding: 0;
    }

    footer ul li {
        margin-bottom: 10px;
    }

    footer ul li a:hover {
        color: var(--tertiary-color);
    }

    .bottom-footer {
        text-align: center;
        font-size: 13px;
        padding-top: 10px;
        border-top: 1px solid var(--secondary-color);
        margin-top: 20px;
    }

    .contact-infos {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url(<?= $base_url ?>assets/images/background/back1.avif);
        background-size: cover;
        background-position: top top;
        padding: 10px;
        border-radius: 10px;
        background-attachment: fixed;
    }
</style>

<!-- Top Footer -->


<!-- Main Footer -->
<footer>
    <div class="container">
        <div class="row gy-4 align-items-start">

            <!-- About + Logo -->
            <div class="col-md-4 d-flex flex-column align-items-start">
                <img src="assets/images/logo/logo.jpg" alt="sudhaar logo"
                    style="max-width: 150px; margin-bottom: 15px;">
                <h4>About Sudhaar Foundation</h4>
                <p>
                    At Sudhaar Foundation, we understand that addiction not only affects the individual, but also their
                    family. That’s why we focus on complete healing—physically, mentally, emotionally, and socially. Our
                    recovery programs include medical detox, psychological counseling, yoga, meditation, motivational
                    sessions, and aftercare support.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-5">
                <div class="row">
                    <div class="col-6">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact-us.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="alcohol-addiction.php">Alcohol Addiction</a></li>
                            <li><a href="drug-addiction-treatment.php">Drug addiction Treatment</a></li>
                            <li><a href="marijuana-ganja-addiction-treatment.php">Marijuana Ganja Addiction</a></li>
                            <li><a href="heroin-addiction-treatment-treatment.php">Heroin Addiction Treatment</a></li>
                            <li><a href="cocaine-addiction-treatment">Cocaine Addiction Treatment</a></li>
                            <li><a href="whitener-addiction.php">Whitener Addiction</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3">
                <h4>Contact Us</h4>
                <p><strong>Address:</strong><br>Ormanjhi, Irba, Dhobiya Ghat, Dam Road, Rukka, Hutup, Jharkhand 835219
                </p>
                <p>
                    <strong>Phone:</strong> +91 92290 57761<br>
                    <strong>Email:</strong> sudhaarfoundation@gmail.com
                </p>

            </div>
        </div>

        <hr>

        <div class="bottom-footer text-center">
            <p class="mb-0">
                ©
                <script>document.write(new Date().getFullYear());</script> Sudhaar Foundation | All Rights Reserved | Managed & Designed by <a href="https://sudhaarnashamuktikendra.in/" class="text-decoration-none" target="_blank">Coral Web Technology</a>
            </p>
        </div>
    </div>
</footer>