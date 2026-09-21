<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/head.php'; ?>
</head>

<body>
    <!-- ================================================= -->
    <?php include 'common/header.php'; ?>
    <!-- ================================================= -->
    <style>
        .contact-readcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.4),
                    rgba(0, 0, 0, 0.4)),
                url(assets/images/banner/contact-banner.avif);
            background-size: cover;
            background-position: bottom;
            background-attachment: fixed;
            padding: 100px 0;
            color: #fff;
            position: relative;
            text-align: center;
            z-index: 1;
        }

        .contact-readcrumb .breadcrumb {
            background: transparent;
            justify-content: center;
            margin-bottom: 0;
            padding: 0;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .contact-readcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "›";
            color: #fff;
            padding: 0 8px;
            font-size: 20px;
        }

        .contact-readcrumb .breadcrumb-item a {
            color: #00d4ff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .contact-readcrumb .breadcrumb-item a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .contact-readcrumb .breadcrumb-item.active {
            color: #fff;
            font-weight: 600;
        }

        .contact-readcrumb .breadcrumb-title {
            font-size: 48px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }
    </style>
    <section class="contact-readcrumb">
        <div class="container">
            <h1 class="breadcrumb-title">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ========================================================================= -->
    <style>
        .contact-us .card {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/images/background/4.avif);
            padding: 10px;
            /* background-attachment: fixed; */
            background-position: center;
            background-repeat: no-repeat;
            font-family: var(--primary-font);
            color: var(--tertiary-color);
            transition: all 0.6s ease-in-out;
        }

        .contact-us .card:hover {
            background-size: cover;
            transition: all 0.6s ease-in-out;
        }

        .contact-us .card i {
            color: var(--tertiary-color);
        }

        .contact label {
            font-weight: bold;
            font-family: var(---primary-font);
        }

        .contact .form-control,
        .contact .form-select {
            border-radius: 0px;
            font-family: var(--primary-font);
        }

        .contact .form-card {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/images/background/2.avif);
            padding: 20px;
            color: var(--tertiary-color);
        }
    </style>
    <section class="py-5 contact-us">
        <div class="container">
            <div class="row g-4">
                <!-- Phone Card -->
                <div class="col-md-4">
                    <div class="card text-center p-4 h-100 ">
                        <div class="mb-3  fs-2">
                            <i class="bi bi-telephone-fill"></i> <!-- Or <i class="fa fa-phone"></i> -->
                        </div>
                        <h5 class="mb-2">Phone</h5>
                        <p class="mb-0">+91 92290 57761</p>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="col-md-4">
                    <div class="card text-center p-4 h-100 ">
                        <div class="mb-3  fs-2">
                            <i class="bi bi-envelope-fill"></i> <!-- Or <i class="fa fa-envelope"></i> -->
                        </div>
                        <h5 class="mb-2">Email</h5>
                        <p class="mb-0">sudhaarfoundation@gmail.com</p>
                    </div>
                </div>

                <!-- Address Card -->
                <div class="col-md-4">
                    <div class="card text-center p-4 h-100 ">
                        <div class="mb-3  fs-2">
                            <i class="bi bi-geo-alt-fill"></i> <!-- Or <i class="fa fa-map-marker"></i> -->
                        </div>
                        <h5 class="mb-2">Address</h5>
                        <p class="mb-0">Ormanjhi, Irba,Rukka, dam road, Dhobiya Ghat, Hutup, Ranchi, Jharkhand 835219
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================================================= -->
    <section class="py-5 contact">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title">
                    <h2>Get In <span>Touch</span></h2>
                    <div class="underline"></div>
                </div>
                <div class="col-md-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5011685930363!2d85.43635007352398!3d23.442380200535087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4fb66126c04b7%3A0x92b2b72853e28bb1!2sSudhaar%20Foundation%20Nasha%20mukti%20kendra%20in%20Ranchi%20-%20Best%20Nasha%20Mukti%20kendra%20in%20Ranchi%2C%20De-Addiction%20%26%20Rehabilitation%20Center%20.!5e0!3m2!1sen!2sin!4v1750178038875!5m2!1sen!2sin"
                        width="100%" height="350"  allowfullscreen="true" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-8">
                    <div class="form-card">
                        <form id="whatsappForm" method="post" class="needs-validation" novalidate
                            onsubmit="sendWhatsAppMessage(event)">
                            <div class="row">
                                <div class="py-3">
                                    <h5>
                                        Feel free to get in touch with us. We'd love to hear from you!
                                    </h5>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="name" class="form-label">Name <span>*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your name" id="name"
                                        name="name" required>
                                    <div class="invalid-feedback text-white">Please enter your name.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span>*</span></label>
                                    <input type="email" class="form-control" placeholder="Enter your email" id="email"
                                        name="email" required>
                                    <div class="invalid-feedback text-white">Please enter your Email.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="number" class="form-label">Number <span>*</span></label>
                                    <input type="tel" class="form-control" placeholder="Enter your number" id="number"
                                        name="number" required>
                                    <div class="invalid-feedback text-white">Please enter your Number.</div>
                                </div>

                                <div class="col-md-6">
                                    <label for="services" class="form-label">Services <span>*</span></label>
                                    <select class="form-select" id="services" name="services" required>
                                        <option value="" disabled selected>Select Services</option>
                                        <option value="Alcohol Addiction Treatment">Alcohol Addiction</option>
                                        <option value="Drug Addiction Treatment">Drug Addiction Treatment</option>
                                        <option value="Marijuana Ganja Treatment">Marijuana Ganja Treatment</option>
                                        <option value="Heroin Addiction Treatment">Heroin Addiction Treatment</option>
                                        <option value="Cocaine Addiction Treatment">Cocaine Addiction Treatment</option>
                                        <option value="Whitener Addiction Treatment">Whitener Addiction Treatment
                                        </option>
                                    </select>
                                    <div class="invalid-feedback text-white">Please Select a Service.</div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message <span>*</span></label>
                                    <textarea class="form-control" id="message" placeholder="Enter your message"
                                        name="message" rows="3"></textarea>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" name="submit" class="btn-modern">Submit
                                        <i class="bi bi-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================================================== -->

    <!-- ========================================================================= -->
    <?php include 'common/footer.php'; ?>
    <!-- ========================================================================= -->
</body>
<script>
    function sendWhatsAppMessage(event) {
        event.preventDefault();

        const form = document.getElementById("whatsappForm");

        // Bootstrap validation
        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add("was-validated");
            return false;
        }

        // If form is valid, collect data
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const number = document.getElementById("number").value.trim();
        const service = document.getElementById("services").value;
        const message = document.getElementById("message").value.trim();

        // WhatsApp number with country code (without +)
        const phoneNumber = "919123456789";

        // Format message with encoded line breaks and emojis
        const whatsappMessage = `Hello Sudhaar Foundation,%0A%0A` +
            `🔹 Name: ${name}%0A` +
            `🔹 Email: ${email}%0A` +
            `🔹 Phone: ${number}%0A` +
            `🔹 Selected Service: ${service}%0A` +
            `🔹 Message: ${message}`;

        // Open WhatsApp
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(whatsappURL, "_blank");

        // Optionally reset form
        form.reset();
        form.classList.remove("was-validated");
    }
</script>

</html>