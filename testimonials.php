<!-- Include Bootstrap 5 CSS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    .testimonial-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/background/2.avif') no-repeat center center/cover;
        padding: 60px 0;
        color: white;
    }

    .testimonial-slider {
        overflow: hidden;
        position: relative;
    }

    .testimonial-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .testimonial-item {
        min-width: 50%;
        /* only one at a time */
        box-sizing: border-box;
        padding: 15px;
    }


    .testimonial-track {
        display: flex;
        flex-wrap: nowrap;
    }


    .testimonial-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .testimonial-content {
        /* background: rgba(255, 255, 255, 0.85); */
        background: var(--secondary-color);
        color: var(--tertiary-color);
        padding: 25px;
        border-radius: 10px;
        max-width: 600px;
        text-align: center;
    }

    .testimonial-content h5 {
        margin-top: 20px;
        font-weight: 600;
    }

    .testimonial-content p {
        margin: 10px 0 0;
        font-size: 1rem;
    }

    .testimonial-indicators {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .testimonial-indicators span {
        height: 12px;
        width: 12px;
        background-color: #fff;
        border-radius: 50%;
        display: inline-block;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .testimonial-indicators .active {
        width: 30px;
        background-color: #000;
        border-radius: 10px;
    }

    @media (max-width: 992px) {
        .testimonial-item {
            min-width: 50%;
        }
    }

    @media (max-width: 576px) {
        .testimonial-item {
            min-width: 100%;
        }
    }
</style>

<section class="testimonial-section text-center ">
    <div class="container">
        <div class="head-title text-center mb-5">
            <h2 class="text-white">What Our <span>Recovered Clients Say</span></h2>
        </div>
        <div class="testimonial-slider" id="testimonial-slider">
            <div class="testimonial-track" id="testimonial-track">
                <!-- Testimonial 1 -->
                <div class="testimonial-item">
                    <img src="assets/images/others/user.jpg" class="testimonial-img" alt="Rahul Sharma">
                    <div class="testimonial-content">
                        <p>Sudhaar Foundation gave me a second chance at life. I was deeply addicted and had lost hope.
                            But with the support and guidance of the counselors here, I’ve overcome my addiction and
                            started a new journey.</p>
                        <h5>Rahul Sharma</h5>
                        <!-- <p>Ranchi, Jharkhand</p> -->
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial-item">
                    <img src="assets/images/others/user.jpg" class="testimonial-img" alt="Suman Devi">
                    <div class="testimonial-content">
                        <p>My husband struggled with addiction for years. We tried everything. It was only at Sudhaar
                            Foundation that we saw real progress. The team here truly cares, and they helped bring our
                            family back together.</p>
                        <h5>Suman Devi</h5>
                        <!-- <p>Gumla, Jharkhand</p> -->
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonial-item">
                    <img src="assets/images/others/user.jpg" class="testimonial-img" alt="Amit Kumar">
                    <div class="testimonial-content">
                        <p>The environment at Sudhaar Foundation is peaceful and encouraging. The therapy sessions,
                            daily routines, and mental health support helped me regain control over my life. I feel
                            stronger and more focused than ever.</p>
                        <h5>Amit Kumar</h5>
                        <!-- <p>Dhanbad, Jharkhand</p> -->
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="testimonial-item">
                    <img src="assets/images/others/user.jpg" class="testimonial-img" alt="Neha Singh">
                    <div class="testimonial-content">
                        <p>Sudhaar Foundation helped my brother come out of a very dark phase in his life. The
                            transformation we witnessed was truly heartwarming. Grateful to the dedicated team for their
                            constant support and care.</p>
                        <h5>Neha Singh</h5>
                        <!-- <p>Bokaro, Jharkhand</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-indicators mt-4" id="testimonial-indicators">
            <!-- Indicators will be inserted by JS -->
        </div>
    </div>
</section>


<script>
    const track = document.getElementById("testimonial-track");
    const items = document.querySelectorAll(".testimonial-item");
    const indicatorContainer = document.getElementById("testimonial-indicators");
    let currentIndex = 0;

    function getVisibleItems() {
        if (window.innerWidth <= 576) return 1;
        if (window.innerWidth <= 992) return 2;
        return 2; // default
    }

    function createIndicators() {
        indicatorContainer.innerHTML = "";
        const visible = getVisibleItems();
        const totalSlides = Math.ceil(items.length / visible);

        for (let i = 0; i < totalSlides; i++) {
            const span = document.createElement("span");
            if (i === 0) span.classList.add("active");
            span.addEventListener("click", () => {
                currentIndex = i;
                updateSlide(currentIndex);
            });
            indicatorContainer.appendChild(span);
        }
    }

    function updateSlide(index) {
        const visible = getVisibleItems();
        const itemWidth = items[0].offsetWidth;
        track.style.transform = `translateX(-${index * itemWidth * visible}px)`;

        const dots = document.querySelectorAll("#testimonial-indicators span");
        dots.forEach((dot, i) => dot.classList.toggle("active", i === index));
    }

    function autoSlide() {
        const visible = getVisibleItems();
        const totalSlides = Math.ceil(items.length / visible);
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlide(currentIndex);
    }

    // Auto Slide every 4 seconds
    let autoSlideInterval = setInterval(autoSlide, 4000);

    // Reinitialize on window resize
    window.addEventListener("resize", () => {
        clearInterval(autoSlideInterval);
        createIndicators();
        updateSlide(currentIndex);
        autoSlideInterval = setInterval(autoSlide, 4000);
    });

    // Init
    createIndicators();
    updateSlide(currentIndex);
</script>