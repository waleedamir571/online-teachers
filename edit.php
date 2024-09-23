<?php
include 'partials/header.php';
?>

<?php
require_once 'backend/config/database.php';

// Fetch the record to edit
$id = $_GET['id'] ?? null;
if ($id) {
    $sql = "SELECT * FROM developers WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $developer = $result->fetch_assoc();
} else {
    echo "No record selected";
    exit;
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salary = $_POST['salary'];
    $experience = $_POST['experience'];
    $name = $_POST['name'];
    $stack = $_POST['stack'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $phone = $_POST['number'];
    $linkedin_link = $_POST['linkedin_link'];

    // Check if an image was uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "assets/img/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        // If no image was uploaded, keep the existing image
        $image = $developer['images'];
    }

    $sql = "UPDATE developers SET salary=?, experience=?, images=?, name=?, stack=?, city=?, country=?, phone=?,linkedin_link=? WHERE id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('sssssssssi', $salary, $experience, $image, $name, $stack, $city, $country, $phone, $linkedin_link, $id);

    if ($stmt->execute()) {
        header("Location: admin-panel.php");
        exit();
    } else {
        echo "Error updating record: " . $connection->error;
    }
}

include 'partials/header2.php';

$countries = [
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bhutan",
    "Bolivia",
    "Bosnia and Herzegovina",
    "Botswana",
    "Brazil",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cabo Verde",
    "Cambodia",
    "Cameroon",
    "Canada",
    "Central African Republic",
    "Chad",
    "Chile",
    "China",
    "Colombia",
    "Comoros",
    "Congo",
    "Costa Rica",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czech Republic",
    "Denmark",
    "Djibouti",
    "Dominica",
    "Dominican Republic",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Eritrea",
    "Estonia",
    "Eswatini",
    "Ethiopia",
    "Fiji",
    "Finland",
    "France",
    "Gabon",
    "Gambia",
    "Georgia",
    "Germany",
    "Ghana",
    "Greece",
    "Grenada",
    "Guatemala",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Haiti",
    "Honduras",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iran",
    "Iraq",
    "Ireland",
    "Israel",
    "Italy",
    "Jamaica",
    "Japan",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Kiribati",
    "Korea (North)",
    "Korea (South)",
    "Kuwait",
    "Kyrgyzstan",
    "Laos",
    "Latvia",
    "Lebanon",
    "Lesotho",
    "Liberia",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Maldives",
    "Mali",
    "Malta",
    "Marshall Islands",
    "Mauritania",
    "Mauritius",
    "Mexico",
    "Micronesia",
    "Moldova",
    "Monaco",
    "Mongolia",
    "Montenegro",
    "Morocco",
    "Mozambique",
    "Myanmar",
    "Namibia",
    "Nauru",
    "Nepal",
    "Netherlands",
    "New Zealand",
    "Nicaragua",
    "Niger",
    "Nigeria",
    "North Macedonia",
    "Norway",
    "Oman",
    "Pakistan",
    "Palau",
    "Panama",
    "Papua New Guinea",
    "Paraguay",
    "Peru",
    "Philippines",
    "Poland",
    "Portugal",
    "Qatar",
    "Romania",
    "Russia",
    "Rwanda",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Vincent and the Grenadines",
    "Samoa",
    "San Marino",
    "Sao Tome and Principe",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Seychelles",
    "Sierra Leone",
    "Singapore",
    "Slovakia",
    "Slovenia",
    "Solomon Islands",
    "Somalia",
    "South Africa",
    "South Sudan",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Sweden",
    "Switzerland",
    "Syria",
    "Taiwan",
    "Tajikistan",
    "Tanzania",
    "Thailand",
    "Timor-Leste",
    "Togo",
    "Tonga",
    "Trinidad and Tobago",
    "Tunisia",
    "Turkey",
    "Turkmenistan",
    "Tuvalu",
    "Uganda",
    "Ukraine",
    "United Arab Emirates",
    "United Kingdom",
    "United States",
    "Uruguay",
    "Uzbekistan",
    "Vanuatu",
    "Vatican City",
    "Venezuela",
    "Vietnam",
    "Yemen",
    "Zambia",
    "Zimbabwe"
];
?>


<body>
    <section class="container1 rem1">
        <div class="login-container">

            <div class="form-container">
                <h1 class="opacity">Edit Developer</h1>
                <form action="edit.php?id=<?= htmlspecialchars($id) ?>" method="post" enctype="multipart/form-data">
                    <label for="salary">Salary Per Month</label>
                    <br><br>
                    <select class="form-control" name="salary" id="salary" required>
                        <?php
                        // Generate salary options from 100 to 10000 with an increment of 100
                        for ($i = 100; $i <= 10000; $i += 100) {
                            $formatted_value = number_format($i); // Format the value with a comma
                            echo "<option value='$i' " . ($i == $developer['salary'] ? "selected" : "") . ">$formatted_value</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <label for="experience">Experience</label>
                    <br><br>
                    <select class="form-control" name="experience" id="experience">
                        <?php
                        for ($i = 1; $i <= 10; $i++) {
                            echo "<option value='$i' " . ($i == $developer['experience'] ? "selected" : "") . ">$i</option>";
                        }
                        ?>
                        <option value="10+" <?= $developer['experience'] == "10+" ? "selected" : "" ?>>10+</option>
                    </select>

                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" accept="image/*" />

                    <label for="name">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name" id="name"    
                        value="<?= htmlspecialchars($developer['name']) ?>" required title="Enter a valid name" />

                    <label for="stack">Stack</label>
                    <input type="text" name="stack" placeholder="Stack" id="stack"
                        value="<?= htmlspecialchars($developer['stack']) ?>" required title="Enter a valid stack" />


                    <label for="country">Country</label>
                    <br><br>
                    <select class="form-control" name="country" id="country" required>
                        <?php
                        // Generate country options from the array
                        foreach ($countries as $country) {
                            echo "<option value='" . htmlspecialchars($country) . "' " . ($country == $developer['country'] ? "selected" : "") . ">" . htmlspecialchars($country) . "</option>";
                        }
                        ?>
                    </select>
                    <br>

                    <label for="city">City</label>
                    <input type="text" name="city" placeholder="City" id="city"
                        value="<?= htmlspecialchars($developer['city']) ?>" required />

                    <label for="city">LinkedIn link</label>
                    <input type="text" name="linkedin_link" placeholder="LinkedIn link" id="linkedin_link"
                        value="<?= htmlspecialchars($developer['linkedin_link']) ?>" required />

                    <label for="number">Number</label>
                    <input type="number" name="number" placeholder="Number" id="number"
                        value="<?= htmlspecialchars($developer['phone']) ?>" required />


                    <!-- <img src="assets/img/<?= htmlspecialchars($developer['images']) ?>" alt="<?= htmlspecialchars($developer['name']) ?>" height="50"> -->

                    <button type="submit" class="opacity">Update</button>
                </form>
            </div>

        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>

</html>