<?php
// Ranchi Local Areas and Blocks
$ranchi_areas = [
    "Lalpur", "Doranda", "Argora", "Harmu Housing Colony", "Ashok Nagar", 
    "Hatia", "Dhurwa", "Kanke", "Kanke Road", "Morabadi", "Bariatu", 
    "Bariatu Housing Colony", "Ayodhya Enclave", "Bargai", "Hehal", 
    "Ratu", "Namkum", "Nagri", "Piska Nagri", "Banhora", "Ormanjhi", 
    "Chutia", "Kadru", "Kokar", "Kantatoli", "Lower Bazar", "Ranchi G.P.O.",
    "Hinoo", "AG Colony", "Birsa Munda Airport", "Raj Bhawan Area", 
    "Governor's House Area", "Sector 2, Dhurwa", "Sector 3, Dhurwa", 
    "Balalong", "Boreya", "Bukru", "Gagi", "Ranchi University", "CMPDI", 
    "Bara Ghaghra", "Tatisilwai", "BIT Mesra Campus", "Bijjulia", "Chipra", 
    "Buti", "Chandwa", "Chakla", "Chandra", "Baredih", "Bundu", "Adalahatu", 
    "Baruhatu", "Angara", "Silli", "Mandar", "Chanho", "Bero", "Itki", 
    "Burmu", "Khelari", "Lapung", "Rahe", "Sonahatu", "Tamar", "Hindpiri"
];

// Pincode Wise Grouping
$pincodes = [
    [
        "pincode" => "834001",
        "title" => "Central Ranchi",
        "areas" => ["Ranchi G.P.O.", "Chutia", "Lalpur", "Kokar", "Lower Bazar", "Kantatoli"]
    ],
    [
        "pincode" => "834002",
        "title" => "Doranda & South Ranchi",
        "areas" => ["Doranda", "Hinoo", "Ashok Nagar", "Argora", "Harmu Housing Colony", "AG Colony", "Birsa Munda Airport"]
    ],
    [
        "pincode" => "834003",
        "title" => "Raj Bhawan & Kanke Road",
        "areas" => ["Raj Bhawan", "Governor's House Area", "Kanke Road (lower parts)"]
    ],
    [
        "pincode" => "834004",
        "title" => "Dhurwa & Hatia",
        "areas" => ["Dhurwa", "Sector 2", "Sector 3", "Balalong", "Hatia"]
    ],
    [
        "pincode" => "834005",
        "title" => "Hehal & Banhora",
        "areas" => ["Banhora", "Hehal", "Piska Nagri"]
    ],
    [
        "pincode" => "834006",
        "title" => "Kanke & Boreya",
        "areas" => ["Kanke Road", "Boreya", "Bukru", "Gagi"]
    ],
    [
        "pincode" => "834008",
        "title" => "Morabadi & CMPDI",
        "areas" => ["Morabadi", "Bariatu (lower)", "Ranchi University", "CMPDI"]
    ],
    [
        "pincode" => "834009",
        "title" => "Bariatu & Bargain",
        "areas" => ["Bariatu", "Bariatu Housing Colony", "Ayodhya Enclave", "Bargain"]
    ],
    [
        "pincode" => "834010",
        "title" => "Namkum & Tatisilwai",
        "areas" => ["Bara Ghaghra", "Namkum", "Tatisilwai"]
    ],
    [
        "pincode" => "835215",
        "title" => "Mesra",
        "areas" => ["BIT Mesra Campus"]
    ],
    [
        "pincode" => "835222",
        "title" => "Ratu & Chipra",
        "areas" => ["Ratu", "Bijjulia", "Chipra"]
    ],
    [
        "pincode" => "835217",
        "title" => "Buti & Chandwa",
        "areas" => ["Buti", "Chandwa"]
    ],
    [
        "pincode" => "835219",
        "title" => "Ormanjhi & Rukka",
        "areas" => ["Ormanjhi", "Chakla", "Chandra", "Baredih"]
    ],
    [
        "pincode" => "835204",
        "title" => "Bundu & Tamar",
        "areas" => ["Bundu", "Adalahatu", "Baruhatu"]
    ]
];

// Jharkhand 24 Districts
$districts = [
    "Ranchi", "Bokaro", "Chatra", "Deoghar", "Dhanbad", "Dumka", 
    "East Singhbhum", "Garhwa", "Giridih", "Godda", "Gumla", "Hazaribagh", 
    "Jamtara", "Khunti", "Koderma", "Latehar", "Lohardaga", "Pakur", 
    "Palamu", "Ramgarh", "Sahibganj", "Saraikela-Kharsawan", "Simdega", "West Singhbhum"
];
?>

<!-- ==================== OUR NASHA MUKTI KENDRA NETWORK SECTION ==================== -->
<section class="network-section py-5" id="network-locations">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-9 col-md-11">
                <div class="network-badge mb-2">
                    <span><i class="bi bi-shield-check me-1"></i> 24x7 Helpline & Emergency Support</span>
                </div>
                <h2 class="network-title">
                    Our <span class="highlight-text">Nasha Mukti Kendra</span> Network
                </h2>
                <div class="network-title-divider"></div>
                <p class="network-subtitle text-muted mt-3">
                    Fast immediate emergency medical response across all locations, pincodes & districts in Ranchi and Jharkhand.
                </p>
            </div>
        </div>

        <!-- Live Search Box -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-7 col-md-9 col-12">
                <div class="network-search-box position-relative">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" id="locationSearchInput" class="form-control" 
                           placeholder="Search area, pincode, or district (e.g. 834001, Lalpur, Kanke, Bokaro...)" 
                           onkeyup="filterLocations()">
                    <button class="clear-search-btn" id="clearSearchBtn" onclick="clearLocationSearch()" style="display: none;">
                        <i class="bi bi-x-circle-fill"></i>
                    </button>
                </div>
                <div id="noResultsMsg" class="text-center text-muted mt-3 py-3" style="display: none;">
                    <i class="bi bi-info-circle text-primary fs-4 d-block mb-1"></i>
                    No matching location found. Please contact our 24/7 helpline at <a href="tel:+919229057761" class="fw-bold text-primary">+91 92290 57761</a> for immediate assistance.
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <ul class="nav nav-pills justify-content-center network-tabs mb-4" id="networkTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="ranchi-tab" data-bs-toggle="pill" data-bs-target="#ranchi-locations" type="button" role="tab">
                    <i class="bi bi-geo-alt-fill me-1"></i> Ranchi Areas & Blocks (<?= count($ranchi_areas) ?>)
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pincode-tab" data-bs-toggle="pill" data-bs-target="#pincode-locations" type="button" role="tab">
                    <i class="bi bi-mailbox2 me-1"></i> Pincode Wise Coverage (<?= count($pincodes) ?>)
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="jharkhand-tab" data-bs-toggle="pill" data-bs-target="#jharkhand-locations" type="button" role="tab">
                    <i class="bi bi-map-fill me-1"></i> Jharkhand All Districts (<?= count($districts) ?>)
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="networkTabContent">
            
            <!-- TAB 1: Ranchi Areas & Localities -->
            <div class="tab-pane fade show active" id="ranchi-locations" role="tabpanel">
                <div class="row g-3 g-md-4 network-grid" id="ranchiGrid">
                    <?php foreach ($ranchi_areas as $index => $area): ?>
                        <div class="col-lg-4 col-md-6 col-12 location-item-card" data-location-name="<?= strtolower($area) ?>" data-aos="fade-up" style="--card-delay: <?= ($index % 6) * 0.05 ?>s;">
                            <a href="https://wa.me/919229057761?text=<?= urlencode('Hello Sudhaar Foundation, I am looking for Nasha Mukti Kendra in ' . $area . ', Ranchi.') ?>" 
                               target="_blank" 
                               class="network-card text-decoration-none d-block">
                                <div class="network-card-inner">
                                    <div class="network-card-top-bar"></div>
                                    <div class="network-card-content d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="network-icon-box">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </div>
                                            <h3 class="network-location-name mb-0">
                                                Nasha Mukti Kendra <span class="district-name"><?= htmlspecialchars($area) ?></span>
                                            </h3>
                                        </div>
                                        <div class="network-arrow">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- TAB 2: Pincode Wise Coverage -->
            <div class="tab-pane fade" id="pincode-locations" role="tabpanel">
                <div class="row g-3 g-md-4" id="pincodeGrid">
                    <?php foreach ($pincodes as $pIndex => $pItem): ?>
                        <div class="col-lg-6 col-12 pincode-item-card" data-location-name="<?= strtolower($pItem['pincode'] . ' ' . $pItem['title'] . ' ' . implode(' ', $pItem['areas'])) ?>">
                            <div class="pincode-box p-4 bg-white rounded-4 shadow-sm h-100 border">
                                <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-2">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="pincode-badge">PIN <?= htmlspecialchars($pItem['pincode']) ?></span>
                                        <h5 class="mb-0 fw-bold text-dark"><?= htmlspecialchars($pItem['title']) ?></h5>
                                    </div>
                                    <a href="https://wa.me/919229057761?text=<?= urlencode('Hello Sudhaar Foundation, I need Nasha Mukti Kendra support in Pincode ' . $pItem['pincode'] . ' (' . $pItem['title'] . ').') ?>" 
                                       target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3">
                                        <i class="bi bi-whatsapp"></i> Inquire
                                    </a>
                                </div>
                                <div class="covered-areas-tags d-flex flex-wrap gap-2">
                                    <?php foreach ($pItem['areas'] as $coveredArea): ?>
                                        <a href="https://wa.me/919229057761?text=<?= urlencode('Hello Sudhaar Foundation, I am looking for Nasha Mukti Kendra in ' . $coveredArea . ' (' . $pItem['pincode'] . ').') ?>" 
                                           target="_blank" class="area-tag text-decoration-none">
                                            <i class="bi bi-pin-map text-primary me-1"></i><?= htmlspecialchars($coveredArea) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- TAB 3: Jharkhand All Districts -->
            <div class="tab-pane fade" id="jharkhand-locations" role="tabpanel">
                <div class="row g-3 g-md-4 network-grid" id="districtGrid">
                    <?php foreach ($districts as $index => $district): ?>
                        <div class="col-lg-4 col-md-6 col-12 district-item-card" data-location-name="<?= strtolower($district) ?>">
                            <a href="https://wa.me/919229057761?text=<?= urlencode('Hello Sudhaar Foundation, I am looking for Nasha Mukti Kendra in ' . $district . '.') ?>" 
                               target="_blank" 
                               class="network-card text-decoration-none d-block">
                                <div class="network-card-inner">
                                    <div class="network-card-top-bar"></div>
                                    <div class="network-card-content d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="network-icon-box">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </div>
                                            <h3 class="network-location-name mb-0">
                                                Nasha Mukti Kendra <span class="district-name"><?= htmlspecialchars($district) ?></span>
                                            </h3>
                                        </div>
                                        <div class="network-arrow">
                                            <i class="bi bi-arrow-right-short"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!-- Quick Help Bar Below Grid -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="network-help-bar p-4 rounded-4 shadow-sm text-center d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                    <div class="text-md-start">
                        <h4 class="mb-1 text-white fw-bold">Need Immediate Help in Your Area or Pincode?</h4>
                        <p class="mb-0 text-white-50">Our rehabilitation counselors are available 24/7 to assist you in Ranchi & all districts of Jharkhand.</p>
                    </div>
                    <div class="d-flex gap-2 flex-wrap justify-content-center">
                        <a href="tel:+919229057761" class="btn btn-light rounded-pill px-4 fw-bold shadow-sm">
                            <i class="bi bi-telephone-fill text-primary me-2"></i>Call +91 92290 57761
                        </a>
                        <a href="https://wa.me/919229057761" target="_blank" class="btn btn-success rounded-pill px-4 fw-bold shadow-sm">
                            <i class="bi bi-whatsapp me-2"></i>WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== NETWORK SECTION STYLES ==================== -->
<style>
/* Section Base */
.network-section {
    background: linear-gradient(180deg, #f8fbfe 0%, #edf5fa 100%);
    position: relative;
    overflow: hidden;
}

.network-section::before {
    content: "";
    position: absolute;
    top: -50px;
    right: -50px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(0, 176, 240, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.network-section::after {
    content: "";
    position: absolute;
    bottom: -50px;
    left: -50px;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(111, 191, 75, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

/* Badge */
.network-badge span {
    display: inline-block;
    background: rgba(0, 176, 240, 0.12);
    color: #0084b4;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 6px 18px;
    border-radius: 30px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
}

/* Title */
.network-title {
    font-size: 2.3rem;
    font-weight: 800;
    color: #0d3b66;
    font-family: 'DM Serif Text', "Times New Roman", serif;
    letter-spacing: -0.5px;
}

.network-title .highlight-text {
    background: linear-gradient(135deg, #0099cc 0%, #52a832 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
}

.network-title-divider {
    width: 70px;
    height: 4px;
    background: linear-gradient(90deg, #00B0F0, #6FBF4B);
    margin: 12px auto 0;
    border-radius: 4px;
}

.network-subtitle {
    font-size: 1.05rem;
    color: #5a6e7f;
    font-weight: 500;
    max-width: 650px;
    margin: 0 auto;
}

/* Search Box */
.network-search-box {
    position: relative;
}

.network-search-box .search-icon {
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: #0084b4;
    font-size: 1.2rem;
    z-index: 5;
}

.network-search-box .form-control {
    padding: 14px 45px 14px 48px;
    border-radius: 50px;
    border: 2px solid rgba(0, 176, 240, 0.25);
    background: #ffffff;
    font-size: 1rem;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.network-search-box .form-control:focus {
    border-color: #00B0F0;
    box-shadow: 0 6px 20px rgba(0, 176, 240, 0.2);
    outline: none;
}

.network-search-box .clear-search-btn {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    border: none;
    background: transparent;
    color: #888;
    font-size: 1.2rem;
    cursor: pointer;
    z-index: 5;
}

.network-search-box .clear-search-btn:hover {
    color: #ff4d4f;
}

/* Tabs */
.network-tabs .nav-link {
    border-radius: 30px;
    padding: 10px 22px;
    font-weight: 600;
    font-size: 0.95rem;
    color: #0d3b66;
    background: #ffffff;
    border: 1px solid rgba(0, 176, 240, 0.2);
    margin: 4px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    transition: all 0.3s ease;
}

.network-tabs .nav-link.active {
    background: linear-gradient(135deg, #00B0F0, #0077aa);
    color: #ffffff;
    border-color: transparent;
    box-shadow: 0 4px 15px rgba(0, 176, 240, 0.35);
}

.network-tabs .nav-link:hover:not(.active) {
    background: #eef7fc;
    color: #0084b4;
}

/* Network Card */
.network-card {
    position: relative;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 4px 18px rgba(13, 59, 102, 0.06);
    border: 1px solid rgba(0, 176, 240, 0.15);
    transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
    cursor: pointer;
    overflow: hidden;
}

.network-card-inner {
    position: relative;
}

/* Top colored accent bar */
.network-card-top-bar {
    height: 4.5px;
    width: 100%;
    background: linear-gradient(90deg, #00B0F0 0%, #0084b4 50%, #6FBF4B 100%);
    transition: height 0.3s ease, background 0.3s ease;
}

.network-card-content {
    padding: 16px 20px;
}

/* Icon Box */
.network-icon-box {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 12px;
    background: #f0f8ff;
    color: #0084b4;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.15rem;
    transition: all 0.35s ease;
    border: 1px solid rgba(0, 176, 240, 0.2);
}

/* Location Name */
.network-location-name {
    font-size: 1.02rem;
    font-weight: 700;
    color: #0f3d63;
    line-height: 1.35;
    transition: color 0.3s ease;
}

.network-location-name .district-name {
    color: #007ba8;
    font-weight: 800;
    transition: color 0.3s ease;
}

/* Arrow */
.network-arrow {
    width: 30px;
    height: 30px;
    min-width: 30px;
    border-radius: 50%;
    background: #f5f9fc;
    color: #6c869c;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    transition: all 0.35s ease;
}

/* Card Hover Effects */
.network-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0, 176, 240, 0.18);
    border-color: #00B0F0;
}

.network-card:hover .network-card-top-bar {
    height: 6px;
    background: linear-gradient(90deg, #6FBF4B 0%, #00B0F0 100%);
}

.network-card:hover .network-icon-box {
    background: linear-gradient(135deg, #00B0F0, #0077aa);
    color: #ffffff;
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 4px 12px rgba(0, 176, 240, 0.3);
}

.network-card:hover .network-location-name {
    color: #005f88;
}

.network-card:hover .network-location-name .district-name {
    color: #4b9b2b;
}

.network-card:hover .network-arrow {
    background: #6FBF4B;
    color: #ffffff;
    transform: translateX(4px);
    box-shadow: 0 4px 10px rgba(111, 191, 75, 0.35);
}

/* Pincode Box Styling */
.pincode-box {
    border: 1px solid rgba(0, 176, 240, 0.2);
    transition: all 0.3s ease;
}

.pincode-box:hover {
    box-shadow: 0 8px 24px rgba(0, 176, 240, 0.15) !important;
    border-color: #00B0F0;
}

.pincode-badge {
    background: linear-gradient(135deg, #00B0F0, #0077aa);
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 700;
    padding: 5px 12px;
    border-radius: 8px;
    letter-spacing: 0.5px;
}

.area-tag {
    background: #f0f7fc;
    color: #0f3d63;
    font-size: 0.88rem;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 20px;
    border: 1px solid rgba(0, 176, 240, 0.15);
    transition: all 0.25s ease;
}

.area-tag:hover {
    background: #00B0F0;
    color: #ffffff !important;
    transform: translateY(-2px);
    box-shadow: 0 3px 8px rgba(0, 176, 240, 0.3);
}

.area-tag:hover i {
    color: #ffffff !important;
}

/* Help Bar */
.network-help-bar {
    background: linear-gradient(135deg, #0d3b66 0%, #075e7a 50%, #1e7046 100%);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

/* Animation on Scroll & Entrance */
.location-item-card, .district-item-card {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

.location-item-card.is-visible, .district-item-card.is-visible {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive Rules */
@media (max-width: 991px) {
    .network-title {
        font-size: 1.9rem;
    }
    
    .network-location-name {
        font-size: 0.98rem;
    }
}

@media (max-width: 767px) {
    .network-title {
        font-size: 1.55rem;
    }

    .network-subtitle {
        font-size: 0.95rem;
    }

    .network-card-content {
        padding: 14px 16px;
    }

    .network-icon-box {
        width: 34px;
        height: 34px;
        min-width: 34px;
        font-size: 0.95rem;
        border-radius: 10px;
    }

    .network-location-name {
        font-size: 0.92rem;
    }

    .network-arrow {
        width: 26px;
        height: 26px;
        min-width: 26px;
        font-size: 1.05rem;
    }

    .network-grid {
        row-gap: 10px !important;
    }

    .network-card {
        border-radius: 14px;
        box-shadow: 0 3px 12px rgba(13, 59, 102, 0.08);
    }

    .network-tabs .nav-link {
        font-size: 0.85rem;
        padding: 8px 16px;
        width: 100%;
        text-align: center;
    }
}
</style>

<!-- ==================== SEARCH & ANIMATION SCRIPT ==================== -->
<script>
function filterLocations() {
    const input = document.getElementById("locationSearchInput");
    const filter = input.value.toLowerCase().trim();
    const clearBtn = document.getElementById("clearSearchBtn");
    const noResults = document.getElementById("noResultsMsg");

    clearBtn.style.display = filter ? "block" : "none";

    let totalVisible = 0;

    // Search across all tab items
    const allCards = document.querySelectorAll(".location-item-card, .pincode-item-card, .district-item-card");

    allCards.forEach(card => {
        const name = card.getAttribute("data-location-name") || "";
        if (!filter || name.includes(filter)) {
            card.style.display = "";
            totalVisible++;
        } else {
            card.style.display = "none";
        }
    });

    if (totalVisible === 0 && filter !== "") {
        noResults.style.display = "block";
    } else {
        noResults.style.display = "none";
    }
}

function clearLocationSearch() {
    const input = document.getElementById("locationSearchInput");
    input.value = "";
    filterLocations();
    input.focus();
}

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".location-item-card, .district-item-card");
    
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    obs.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.05,
            rootMargin: "0px 0px -20px 0px"
        });

        cards.forEach(card => observer.observe(card));
    } else {
        cards.forEach(card => card.classList.add("is-visible"));
    }
});
</script>
