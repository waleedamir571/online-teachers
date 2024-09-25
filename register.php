<?php
include 'partials/innerheader.php';


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


include 'partials/header2.php';
?>
<style>
    #stack {
        width: 100%;
        /* Ensures the input takes the full width of the container */
        box-sizing: border-box;
        /* Ensures padding is included in the width */
        white-space: normal;
        /* Allows wrapping to simulate break */
        word-wrap: break-word;
        /* Break words if too long */
        overflow-wrap: break-word;
        /* Break words if too long */
        padding: 10px;
        /* Adds some padding for better UX */
        font-size: 16px;
        /* Ensures the text is easily readable */
    }

    @media (min-width: 320px) and (max-width:480px) {
        .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 118vh;
        }
    }
</style>

<body>


    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-xl-4 col-lg-5 col-md-6 d-flex flex-column">
                            <div class="border-0 card card-plain mt-sm-8 mt-7 mt-md-5">
                                <div class="pb-0 text-left card-header">
                                    <h2 class="text-dark">Join us today</h2>
                                    <!-- <p class="mb-0 font-sm">Enter your email and password to register</p> -->
                                </div>
                                <div class="pb-3 card-body">
                                    <form role="form">
                                        <label>Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="Enter your name" aria-label="Name">
                                        </div>
                                        <label>Email</label>
                                        <div class="mb-2">
                                            <input type="email" class="form-control" placeholder="Enter your email address" aria-label="Email">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Create a password" aria-label="Password">
                                        </div>
                                        <div class="text-left form-check form-check-info">
                                            <input class="form-check-input" type="checkbox" value id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="mt-4 mb-0 btn btn-dark w-100">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-1 pt-0 text-center card-footer px-sm-4">
                                    <p class="mx-auto mb-4">
                                        Already have an account?
                                        <a href="login.php" class="text-primary  font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-0 position-absolute h-100 end-0 d-md-block d-none w-45">
                                <div class="bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 me-n8 border-radius-lg" style="background-image:url('./assets/images/bg-purple.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
<script>
    const ReadAndCompress = (e) => {
        const size = `Before Compression: ${(e.target.files[0].size/(1000*1024)).toFixed(2)} MB`;
        document.querySelector("p[name=before-compression]").innerHTML = size;
        const reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);

        reader.onload = event => {
            const img = document.querySelector("img.before");
            img.src = event.target.result;
            //img.style = "display: true";
            img.onload = () => {
                    const width = img.width;
                    const height = img.height;
                    const elem = document.querySelector('canvas');
                    elem.width = width;
                    elem.height = height;
                    const ctx = elem.getContext('2d');
                    ctx.drawImage(img, 0, 0, width, height);
                    const webp = ctx.canvas.toDataURL("image/webp", 0.5);
                    const imgAfter = document.querySelector("img.after");
                    imgAfter.src = webp;
                    //imgAfter.style = "display: true";
                    const head = 'data:image/webp;base64,';
                    const imgFileSize = (Math.round((webp.length - head.length) * 3 / 4) / (1000)).toFixed(2);
                    document.querySelector("p[name=after-compression]").innerHTML =
                        `After Compression: ${imgFileSize} KB`;
                },
                reader.onerror = error => console.error(error);
        }
    }

    document.querySelector("input[name=upload-image]")
        .addEventListener("change", (event) => ReadAndCompress(event))
</script>


<script>
    const compressImage = async (file, {
        quality = 1,
        type = file.type
    }) => {
        // Get as image data
        const imageBitmap = await createImageBitmap(file);

        // Draw to canvas
        const canvas = document.createElement('canvas');
        canvas.width = imageBitmap.width;
        canvas.height = imageBitmap.height;
        const ctx = canvas.getContext('2d');
        ctx.drawImage(imageBitmap, 0, 0);

        // Turn into Blob
        const blob = await new Promise((resolve) =>
            canvas.toBlob(resolve, type, quality)
        );

        // Turn Blob into File
        return new File([blob], file.name, {
            type: blob.type,
        });
    };

    // Get the selected file from the file input
    const input = document.querySelector('.my-image-field');
    input.addEventListener('change', async (e) => {
        // Get the files
        const {
            files
        } = e.target;

        // No files selected
        if (!files.length) return;

        // We'll store the files in this data transfer object
        const dataTransfer = new DataTransfer();

        // For every file in the files list
        for (const file of files) {
            // We don't have to compress files that aren't images
            if (!file.type.startsWith('image')) {
                // Ignore this file, but do add it to our result
                dataTransfer.items.add(file);
                continue;
            }

            // We compress the file by 50%
            const compressedFile = await compressImage(file, {
                quality: 0.5,
                type: 'image/jpeg',
            });

            // Save back the compressed file instead of the original file
            dataTransfer.items.add(compressedFile);
        }

        // Set value of the file input to our new files list
        e.target.files = dataTransfer.files;
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const stackInput = document.getElementById('stack');

        // Helper function to enforce word and character limits
        function enforceLimits() {
            const maxWords = 100;
            const maxChars = 255; // Adjust if needed

            let value = stackInput.value;

            // Limit to maxWords
            const words = value.split(/\s+/);
            if (words.length > maxWords) {
                value = words.slice(0, maxWords).join(' ');
            }

            // Optionally, limit to maxChars
            if (value.length > maxChars) {
                value = value.slice(0, maxChars);
            }

            stackInput.value = value;
        }

        // Function to format the text into multiple lines if necessary
        function formatText() {
            const maxLineLength = 100; // Adjust to control when to break lines
            let value = stackInput.value;

            // Break the text into lines of maxLineLength characters
            let lines = [];
            while (value.length > maxLineLength) {
                let line = value.substring(0, maxLineLength);
                const lastSpaceIndex = line.lastIndexOf(' ');
                if (lastSpaceIndex > -1) {
                    line = line.substring(0, lastSpaceIndex);
                    value = value.substring(lastSpaceIndex + 1);
                } else {
                    value = value.substring(maxLineLength);
                }
                lines.push(line);
            }
            lines.push(value);

            stackInput.value = lines.join('\n');
        }

        // Apply limits and formatting on input and paste events
        stackInput.addEventListener('input', function() {
            enforceLimits();
            formatText();
        });

        stackInput.addEventListener('paste', function(e) {
            e.preventDefault();
            const pastedText = e.clipboardData.getData('text');
            stackInput.value += pastedText;
            enforceLimits();
            formatText();
        });
    });
</script>

<script>
    document.getElementById('stack').addEventListener('input', function() {
        let value = this.value;
        // Replace any comma with comma followed by a space
        this.value = value.replace(/,(\S)/g, ', $1');
    });
</script>


<?php

include 'partials/footer.php';

?>