<style>
    .faq-section {
        background-color: #f9f9f9;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
    }

    .section-title span {
        color: var(--primary-color, #ffc107);
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #666;
        margin-top: 10px;
    }

    .custom-accordion .accordion-item {
        border: none;
        border-radius: 8px;
        margin-bottom: 15px;
        background-color: #fff;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
    }

    .custom-accordion .accordion-button {
        background-color: #fff;
        color: #333;
        font-weight: 600;
        font-size: 1.1rem;
        padding: 1rem 1.25rem;
        transition: all 0.3s ease;
    }

    .custom-accordion .accordion-button:not(.collapsed) {
        background-color: var(--secondary-color, #ffc107);
        color: var(--tertiary-color, #fff);
    }

    .custom-accordion .accordion-button:focus {
        box-shadow: none;
    }

    .custom-accordion .accordion-body {
        padding: 1rem 1.25rem;
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
    }
</style>


<section class="faq-section py-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center mb-4">
                    <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
                    <p class="section-subtitle">Answers to common questions about Sudhaar Foundation's recovery
                        programs.</p>
                </div>

                <div class="accordion custom-accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                What services does Sudhaar Foundation provide?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We provide residential de-addiction treatment, individual counseling, group therapy,
                                detoxification, relapse prevention, and family counseling for those struggling with
                                substance
                                abuse.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                How long does the de-addiction program last?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The duration varies based on the individual's condition, but typically programs range
                                from 30 to
                                90 days, with follow-up support for long-term recovery.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Is the treatment at Sudhaar Foundation confidential?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, all treatment and patient information is kept strictly confidential to ensure
                                safety and
                                privacy for our clients.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Do you provide support after the treatment ends?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Yes, we offer relapse prevention sessions, periodic counseling, and community support
                                for
                                patients even after completing their primary treatment.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>