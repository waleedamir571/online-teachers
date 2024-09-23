<?php



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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MonthlyStaff - Hire developers from $300 per month without fees</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
<?php

include 'partials/header2.php';

?>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading inter">Hire talented developers 
                    from just $300/per month</h1>
                    <p class="inter">Connect directly with top-tier developers with exceptional skills & honest pricing.
                    ZERO fees for both the company and developer.</p>
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
                    <label for="sortBy" class="forn-label1 d-none3">Sort By :</label>
                    <!-- <select class="form-control h-3" name="sortBy" id="sortBy" onchange="this.form.submit()">
                        <option value="highest" <?php if ($sortBy == 'highest') echo 'selected'; ?>>Salary - Highest</option>
                        <option value="lowest" <?php if ($sortBy == 'lowest') echo 'selected'; ?>>Salary - Lowest</option>
                        <option value="none" <?php if ($sortBy == 'none') echo 'selected'; ?>>Default Order</option>
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
                        <option value="highest" <?php if ($sortBy == 'highest') echo 'selected'; ?>>Salary - Highest</option>
                        <option value="lowest" <?php if ($sortBy == 'lowest') echo 'selected'; ?>>Salary - Lowest</option>
                        <option value="none" <?php if ($sortBy == 'none') echo 'selected'; ?>>Default Order</option>
                    </select>
                </div>
                <div class="col-auto p-0">
                    <button type="submit" class="btn btn-filter btn-primary btn-filter2">Filter</button>
                </div>
            </div>
        </form>
    </div> -->
    
    <br>

    <div class="container">
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
                                <li><p> Years</p></li>
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
                                <a href="https://api.whatsapp.com/send/?phone=<?php echo htmlspecialchars($row["phone"]); ?>&text=I found you on MonthlyStaff.com&app_absent=0"><img class="w-29" src="assets/img/whatsapp.jpeg" alt=""></a> 
                                <a href="<?php echo htmlspecialchars($row["linkedin_link"]); ?>"> <img class="w-29" src="assets/img/linkedin.jpeg" alt=""></a>
                            </div>
                        </div>
                    </div>
                  
        </div>
        <br><br>
    </div>

    <style>
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
            .form-control1, .btn-filter2 {
                font-size: 12px;
                padding: 6px;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script>
        // Ensure the sortBy parameter is reset to 'none' on page load
        window.addEventListener('load', function() {
            const url = new URL(window.location);
            url.searchParams.set('sortBy', 'none');
            window.history.replaceState({}, '', url);
        });
    </script>
</body>

</html>

