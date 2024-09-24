<?php

include 'partials/header.php';

// include 'backend/config/database.php';

// $sortBy = isset($_GET['sortBy']) ? $_GET['sortBy'] : 'none';

// // Base SQL query to get all developers
// $sql = "SELECT * FROM developers";

// // Modify the SQL query based on the sorting option selected
// if ($sortBy == 'highest') {
//     $sql .= " ORDER BY CAST(REPLACE(salary, ',', '') AS UNSIGNED) DESC";
// } elseif ($sortBy == 'lowest') {
//     $sql .= " ORDER BY CAST(REPLACE(salary, ',', '') AS UNSIGNED) ASC";
// } else { // Default to the order of entry (oldest first)
//     $sql .= " ORDER BY id ASC";
// }

// // Execute the SQL query
// $result = $connection->query($sql);



// ?>


    <?php

    include 'partials/header2.php';

    ?>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading inter">American English teachers for just $6 per lesson - learn English fast</h1>
                    <p class="inter">Connect directly with top-tier teachers with exceptional skills & honest pricing.
                        ZERO fees for both the company and teacher.</p>
                    <div class="inlinef">
                        <a href="register"><button class="btn btn-primary" id="">Get Hired</button></a>
                    </div>
                    <a href="#hire-now"><button class="btn btn-primary" id="">Find Staff</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="GET" action="">
            <div class="row mb-3">
                <div class="col-md-4 col-12">
                    <!-- <label for="sortBy" class="forn-label1 d-none3">Sort By :</label> -->
                    <!-- <select class="form-control h-3" name="sortBy" id="sortBy" onchange="this.form.submit()">
                        <option value="highest" <?php if ($sortBy == 'highest')
                            echo 'selected'; ?>>Salary - Highest</option>
                        <option value="lowest" <?php if ($sortBy == 'lowest')
                            echo 'selected'; ?>>Salary - Lowest</option>
                        <option value="none" <?php if ($sortBy == 'none')
                            echo 'selected'; ?>>Default Order</option>
                    </select> -->
                </div>
            </div>
        </form>
    </div>



    <!-- <div class="container d-none3">
        <form method="GET" action="" class="form-inline">
            <div class="row mb-3 align-items-center w-100">
                <div class="col p-0">
                    <label for="sortBy" class="sr-only">Sort By</label>
                    <select class="form-control form-control1 h-3" name="sortBy" id="sortBy">
                        <option value="highest" <?php if ($sortBy == 'highest')
                            echo 'selected'; ?>>Salary - Highest</option>
                        <option value="lowest" <?php if ($sortBy == 'lowest')
                            echo 'selected'; ?>>Salary - Lowest</option>
                        <option value="none" <?php if ($sortBy == 'none')
                            echo 'selected'; ?>>Default Order</option>
                    </select>
                </div>
                <div class="col-auto p-0">
                    <button type="submit" class="btn btn-filter btn-primary btn-filter2">Filter</button>
                </div>
            </div>
        </form>
    </div> -->

    <br>

    <!-- <div class="container">
        <div class="row">
            <?php
            // Check if there are results and display them
            // if ($result->num_rows > 0) {
            //     while ($row = $result->fetch_assoc()) {
            //         ?>
            <div class="col-md-3 developer-card-wrapper" id="hire-now">
                <div class="developer-card">
                    <div class="row d-none2">
                        <div class="col-md-6">
                            <p>$/pm</p>
                        </div>
                        <div class="col-md-6">
                            <p> Years</p>
                        </div>
                    </div>
                    <ul class="gap-60 d-flex justify-content-between d-none1 mt-15">
                        <p>$/pm</p>
                        <li>
                            <p> Years</p>
                        </li>
                    </ul>
                    <img src="assets/img/">
                    <h5></h5>
                    <p class="p3"></p>
                    <p class="p2"></p>
                    <div class="rating">
                        <img class="rating1" src="assets/img/stars.png" alt="">
                    </div>
                    <div class="whatsapp-btn">
                        Contact Me
                        <a href="https://api.whatsapp.com/send/?phone=<?php echo htmlspecialchars($row[" phone"]);
                            ?>&text=I found you on MonthlyStaff.com&app_absent=0"><img class="w-29"
                                src="assets/img/whatsapp.jpeg" alt=""></a>
                        <a href="<?php echo htmlspecialchars($row[" linkedin_link"]); ?>"> <img class="w-29"
                                src="assets/img/linkedin.jpeg" alt=""></a>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
    </div> -->

    <div class="container">
        <div class="row">
            <!-- Tutor 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="video-container">
                    
                        <!-- YouTube Video Iframe, initially hidden -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SoUZ3wovZAs?si=kImVfzGwydhHXt_t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Gary Lopez</h5>
                        <span class="badge bg-primary">Accent: American</span>
                        <p class="card-text pt-3"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> 100% positive reviews</p>
                        <p class="card-text"><strong><i class="fa fa-signal" aria-hidden="true"></i>  Speaks:</strong> English</p>
                        <a href="#" class="btn btn-outline-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <!-- Tutor 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="video-container">
                    
                        <!-- YouTube Video Iframe, initially hidden -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/_cAfSxeu_nY?si=4MGWs-045gUYV3YR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Gary Lopez</h5>
                        <span class="badge bg-primary">Accent: British</span>
                        <p class="card-text pt-3"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> 100% positive reviews</p>
                        <p class="card-text"><strong><i class="fa fa-signal" aria-hidden="true"></i>  Speaks:</strong> English</p>
                        <a href="#" class="btn btn-outline-primary">See Profile</a>
                    </div>
                </div>
            </div>

            <!-- Tutor 3 -->

            <div class="col-md-4">
                <div class="card">
                    <div class="video-container">
                    
                        <!-- YouTube Video Iframe, initially hidden -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SoUZ3wovZAs?si=kImVfzGwydhHXt_t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Gary Lopez</h5>
                        <span class="badge bg-primary">Accent: American</span>
                        <p class="card-text pt-3"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> 100% positive reviews</p>
                        <p class="card-text"><strong><i class="fa fa-signal" aria-hidden="true"></i>  Speaks:</strong> English</p>
                        <a href="#" class="btn btn-outline-primary">See Profile</a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <style>
        .card {
            margin: 20px;
            border-radius: 10px;
            overflow: hidden;
            background-color: #f9f9f9;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .badge-custom {
            background-color: #ffd700;
            color: #000;
        }

        .form-inline {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
        }

        .form-control1 {
            width: 100%;
        }

        .btn-filter2 {
            width: 100%;
        }

        /* Make sure the controls are responsive */
        @media (max-width: 576px) {
            .form-control1 {
                font-size: 14px;
                padding: 8px;
            }

            .btn-filter2 {
                font-size: 14px;
                padding: 8px;
            }
        }

        @media (max-width: 375px) {

            .form-control1,
            .btn-filter2 {
                font-size: 12px;
                padding: 6px;
            }
        }
    </style>

<?php

include 'partials/footer.php';

?>