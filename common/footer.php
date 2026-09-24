<!-- Bootstrap 5.3.3 JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= $base_url ?>assets/js/main.js"></script>
<!-- ========================================================================================= -->
<style>
    footer {
        background: #0d3b66;
        color: #ffffff;
        padding: 50px 0 20px 0;
        font-family: 'Open Sans', "Segoe UI", Roboto, Arial, sans-serif;
    }

    .footer-heading {
        font-size: 20px;
        margin-bottom: 20px;
        font-weight: 700;
        color: #ffffff;
        position: relative;
        padding-bottom: 8px;
    }

    .footer-heading::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 45px;
        height: 3px;
        background: linear-gradient(90deg, #00B0F0, #6FBF4B);
        border-radius: 2px;
    }

    .footer-about-text {
        font-size: 14px;
        line-height: 1.7;
        color: #d1e2f2;
    }

    .footer-links-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links-list li {
        margin-bottom: 10px;
    }

    .footer-links-list li a {
        color: #d1e2f2;
        text-decoration: none;
        font-size: 14.5px;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .footer-links-list li a:hover {
        color: #00B0F0;
        transform: translateX(4px);
    }

    /* Branch Locations Section inside Footer */
    .footer-branches-wrapper {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 16px;
        padding: 30px 25px;
        margin-top: 35px;
        margin-bottom: 25px;
    }

    .footer-branch-card {
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(0, 176, 240, 0.25);
        border-left: 4px solid #00B0F0;
        border-radius: 10px;
        padding: 14px 16px;
        height: 100%;
        transition: all 0.3s ease;
    }

    .footer-branch-card:hover {
        background: rgba(255, 255, 255, 0.09);
        border-color: #6FBF4B;
        border-left-color: #6FBF4B;
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .footer-branch-title {
        font-size: 14.5px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 6px;
        display: flex;
        align-items: flex-start;
        gap: 8px;
    }

    .footer-branch-title i {
        color: #00B0F0;
        font-size: 16px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .footer-branch-address {
        font-size: 13.5px;
        color: #d1e2f2;
        line-height: 1.5;
        margin-bottom: 8px;
        padding-left: 24px;
    }

    .footer-branch-actions {
        padding-left: 24px;
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
    }

    .footer-branch-actions a {
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: all 0.2s ease;
    }

    .btn-branch-map {
        color: #00B0F0;
    }

    .btn-branch-map:hover {
        color: #ffffff;
        text-decoration: underline;
    }

    .btn-branch-call {
        color: #6FBF4B;
    }

    .btn-branch-call:hover {
        color: #a3e685;
    }

    .social-icons a {
        color: #ffffff;
        font-size: 16px;
        margin-right: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background: #00B0F0;
        color: #ffffff;
        transform: translateY(-3px);
    }

    .bottom-footer {
        text-align: center;
        font-size: 13.5px;
        color: #a0bed8;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
    }

    .bottom-footer a {
        color: #00B0F0;
        text-decoration: none;
    }

    .bottom-footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 767px) {
        .footer-branches-wrapper {
            padding: 20px 14px;
        }

        .footer-branch-card {
            padding: 12px 14px;
        }

        .footer-branch-title {
            font-size: 14px;
        }

        .footer-branch-address {
            font-size: 13px;
            padding-left: 0;
        }

        .footer-branch-actions {
            padding-left: 0;
        }
    }
</style>

<!-- Main Footer -->
<footer>
    <div class="container">
        <!-- Top Section: About + Quick Links + Services + Contact -->
        <div class="row gy-4 align-items-start">

            <!-- About + Logo -->
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-start">
                <img src="assets/images/logo/logo.jpg" alt="sudhaar logo"
                    style="max-width: 150px; border-radius: 8px; margin-bottom: 15px; background: #fff; padding: 4px;">
                <h4 class="footer-heading">About Sudhaar Foundation</h4>
                <p class="footer-about-text">
                    At Sudhaar Foundation, we understand that addiction not only affects the individual, but also their
                    family. That’s why we focus on complete healing—physically, mentally, emotionally, and socially. Our
                    recovery programs include medical detox, psychological counseling, yoga, meditation, motivational
                    sessions, and aftercare support across Jharkhand.
                </p>
                <div class="social-icons mt-2">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-3 col-6">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links-list">
                    <li><a href="index.php"><i class="bi bi-chevron-right me-1 small"></i>Home</a></li>
                    <li><a href="about-us.php"><i class="bi bi-chevron-right me-1 small"></i>About Us</a></li>
                    <li><a href="gallery.php"><i class="bi bi-chevron-right me-1 small"></i>Gallery</a></li>
                    <li><a href="contact-us.php"><i class="bi bi-chevron-right me-1 small"></i>Contact Us</a></li>
                    <li><a href="#network-locations"><i class="bi bi-chevron-right me-1 small"></i>All Locations</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-3 col-6">
                <h4 class="footer-heading">Our Treatments</h4>
                <ul class="footer-links-list">
                    <li><a href="alcohol-addiction.php"><i class="bi bi-chevron-right me-1 small"></i>Alcohol Addiction</a></li>
                    <li><a href="drug-addiction-treatment.php"><i class="bi bi-chevron-right me-1 small"></i>Drug Treatment</a></li>
                    <li><a href="marijuana-ganja-addiction.php"><i class="bi bi-chevron-right me-1 small"></i>Marijuana / Ganja</a></li>
                    <li><a href="heroin-addiction-treatment.php"><i class="bi bi-chevron-right me-1 small"></i>Heroin De-Addiction</a></li>
                    <li><a href="cocaine-addiction-treatment.php"><i class="bi bi-chevron-right me-1 small"></i>Cocaine Treatment</a></li>
                    <li><a href="whitener-addiction.php"><i class="bi bi-chevron-right me-1 small"></i>Whitener Addiction</a></li>
                </ul>
            </div>

            <!-- 24x7 Helpline -->
            <div class="col-lg-3 col-md-12">
                <h4 class="footer-heading">24/7 Helpline</h4>
                <p class="footer-about-text mb-2">
                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                    <strong>Phone:</strong> <a href="tel:+919229057761" class="text-white text-decoration-none">+91 92290 57761</a>
                </p>
                <p class="footer-about-text mb-2">
                    <i class="bi bi-whatsapp text-success me-2"></i>
                    <strong>WhatsApp:</strong> <a href="https://wa.me/919229057761" target="_blank" class="text-white text-decoration-none">+91 92290 57761</a>
                </p>
                <p class="footer-about-text mb-2">
                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                    <strong>Email:</strong> <a href="mailto:sudhaarfoundation@gmail.com" class="text-white text-decoration-none">sudhaarfoundation@gmail.com</a>
                </p>
                <p class="footer-about-text mb-0">
                    <i class="bi bi-clock-fill text-warning me-2"></i>
                    <strong>Hours:</strong> 24 Hours / 7 Days Open
                </p>
            </div>
        </div>

        <!-- ==================== ALL 11 BRANCH & CENTER LOCATIONS ==================== -->
        <div class="footer-branches-wrapper">
            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4 border-bottom border-secondary pb-3">
                <div>
                    <h4 class="text-white mb-1 fw-bold">
                        <i class="bi bi-geo-alt-fill text-danger me-2"></i>Our Rehabilitation Centers & Branch Locations (Total 11)
                    </h4>
                    <p class="text-white-50 mb-0 small">Direct map directions and 24/7 contact helplines for all our centers across Jharkhand.</p>
                </div>
                <div class="mt-2 mt-md-0">
                    <a href="tel:+919229057761" class="btn btn-sm btn-outline-info rounded-pill px-3">
                        <i class="bi bi-headset me-1"></i> Helpline: +91 92290 57761
                    </a>
                </div>
            </div>

            <div class="row g-3">
                <!-- 1. Corporate Office (Ranchi) -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-building-fill text-warning"></i>
                            <span>Corporate Office: <span class="text-info">Sudhaar Foundation (Ranchi)</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Ormanjhi, Irba, Rukka Dam Road, Dhobiya Ghat, Hutup, Ranchi, Jharkhand - 835219
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://maps.google.com/?q=Sudhaar+Foundation+Ormanjhi+Ranchi" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. 1st Branch: Ramgarh -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>1<sup>st</sup> Branch: <span class="text-info">Punahsthapanaa Foundation | Nasha Mukti Kendra Ramgarh</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Nasha Mukti Kendra Ramgarh, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/MyCHwNMfw9Nd0Rq3B" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. 2nd Branch: Jamshedpur / East Singhbhum -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>2<sup>nd</sup> Branch: <span class="text-info">Sthapanaa Nasha Mukti Kendra Jamshedpur</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Jamshedpur, East Singhbhum, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/okVxLnHdJsawq2AwO" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 4. 3rd Branch: Bokaro -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>3<sup>rd</sup> Branch: <span class="text-info">Bright Hope Foundation | Nasha Mukti Kendra Bokaro</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Rehabilitation Center & De-Addiction Center, Bokaro, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/xchpqLFFYxsrPnQjK" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 5. 4th Branch: Dhanbad -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>4<sup>th</sup> Branch: <span class="text-info">Dhanbad Arogya Bhawan | Nasha Mukti Kendra Dhanbad</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Arogya Bhawan, Nasha Mukti Kendra, Dhanbad, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://www.google.com/search?sca_esv=cc12825c4d4cb41c&cs=1&output=search&kgmid=%2Fg%2F11rt_sng8b&q=Dhanbad%20Arogya%20bhawan%2CNASHA%20MUKTI%20KENDRA&shem=epsd1%2Cltae%2Crimspwouoe&shndl=30&source=sh%2Fx%2Floc%2Fact%2Fm1%2F2&kgs=1f8972e0390b58a2" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 6. 5th Branch: Hazaribagh -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>5<sup>th</sup> Branch: <span class="text-info">Hazaribagh Sankalp Foundation | Nasha Mukti Kendra</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Sankalp Foundation De-Addiction Center, Hazaribagh, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/FyMgOynKGkGxqtUtO" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 7. 6th Branch: Deoghar -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>6<sup>th</sup> Branch: <span class="text-info">Heritage International Center | Nasha Mukti Kendra Deoghar</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Heritage Center Road, Deoghar, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/DR7NE73YHynOxYorQ" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 8. 7th Branch: Palamu -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>7<sup>th</sup> Branch: <span class="text-info">Nasha Mukti Kendra Palamu (Daltonganj)</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Sadar Area / Medininagar (Daltonganj), Palamu, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/dqD3gN2CqmcwjWCVY" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 9. 8th Branch: West Singhbhum -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>8<sup>th</sup> Branch: <span class="text-info">Nasha Mukti Kendra West Singhbhum (Chaibasa)</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Sadar Chaibasa, West Singhbhum, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/EzFOHG1Dn9f0iOsXz" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 10. 9th Branch: Saraikela-Kharsawan -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>9<sup>th</sup> Branch: <span class="text-info">Nasha Mukti Kendra Saraikela-Kharsawan</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Main Road, Saraikela, Saraikela-Kharsawan, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/EzFOHG1Dn9f0iOsXz" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 11. 10th Branch: Sahibganj -->
                <div class="col-lg-6 col-12">
                    <div class="footer-branch-card">
                        <div class="footer-branch-title">
                            <i class="bi bi-geo-alt-fill text-primary"></i>
                            <span>10<sup>th</sup> Branch: <span class="text-info">Nasha Mukti Kendra Sahibganj</span></span>
                        </div>
                        <div class="footer-branch-address">
                            Surya Super Speciality Area, Sahibganj, Jharkhand
                        </div>
                        <div class="footer-branch-actions">
                            <a href="https://share.google/CN9rsod0dBHCyECjV" target="_blank" class="btn-branch-map">
                                <i class="bi bi-map-fill"></i> View on Google Maps
                            </a>
                            <a href="tel:+919229057761" class="btn-branch-call">
                                <i class="bi bi-telephone-fill"></i> +91 92290 57761
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright Footer -->
        <div class="bottom-footer text-center">
            <p class="mb-0">
                ©
                <script>document.write(new Date().getFullYear());</script> Sudhaar Foundation | All Rights Reserved | Managed & Designed by <a href="https://sudhaarnashamuktikendra.in/" target="_blank">Coral Web Technology</a>
            </p>
        </div>
    </div>
</footer>