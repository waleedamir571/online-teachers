

<?php
include 'partials/header.php';


$countries = [
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia",
    "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
    "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", 
    "Comoros", "Congo", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", 
    "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", 
    "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", 
    "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", 
    "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", 
    "Korea (North)", "Korea (South)", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", 
    "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", 
    "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", 
    "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", 
    "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", 
    "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", 
    "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", 
    "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", 
    "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", 
    "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", 
    "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", 
    "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
];


include 'partials/header2.php';
?>
<style>
   #stack {
        width: 100%; /* Ensures the input takes the full width of the container */
        box-sizing: border-box; /* Ensures padding is included in the width */
        white-space: normal; /* Allows wrapping to simulate break */
        word-wrap: break-word; /* Break words if too long */
        overflow-wrap: break-word; /* Break words if too long */
        padding: 10px; /* Adds some padding for better UX */
        font-size: 16px; /* Ensures the text is easily readable */
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

 
    <section class="container1">
        <div class="rem">
        <div class="login-container ">
            <!-- <div class="circle circle-one"></div> -->
            <div class="form-container">
                <h3 class="opacity fs-20">Register - List your profile</h3>
                <form action="process_registration.php" id="stackForm" method="post" enctype="multipart/form-data">
                    <!-- <label for="salary">Salary Per Month  (US Dollars)</label>
                    <input type="number" name="Salary" placeholder="Salary" id="salary" required
                        pattern="\d{1,3}(,\d{3})*" title="Enter a valid salary (e.g., 1,000)" /> -->
                        <label for="salary">Salary Per Month (US Dollars)</label>
                        <br><br>
                        <select class="form-control" name="Salary" id="salary" required>
                            <?php
                            // Generate salary options from 200 to 10000 with an increment of 100
                            for ($i = 100; $i <= 10000; $i += 100) {
                                $formatted_value = number_format($i); // Format the value with a comma
                                echo "<option value='$i'>$$formatted_value</option>";
                            }
                            ?>
                        </select>
                        <br>
                   
                    <div class="form-group">
                        <label for="experience">Experience (Years)</label>
                   
                       <br><br>
                        <select class="form-control" name="Experience"  id="experience">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>10+</option>
                          
                        </select>
                      </div>
                    <!-- <input type="text" name="Experience" placeholder="Experience" id="experience" required /> -->
                     <br>
                    <label for="image">Profile Photo</label>
                  <input type="file" name="Image" id="image" class="form-control my-image-field" accept="image/jpeg, image/png" required />
                  <!-- <input type="file" name="upload-image" id="upload-image" required /> -->
                    

                    <label for="name">Full Name</label>
                    <input type="text" name="Name" placeholder="Full Name" id="name" required 
                        title="Enter a valid name" />
                        <label for="stack">Your Skills (E.g. ReactJs, Laravel)</label>
                        <input type="text" id="stack" name="Stack" placeholder="Stack" required title="Enter a valid stack" required/>
                        <div id="error" class="error"></div>
                        <label for="city">Your Country </label>
                        <br>
                        <br>
                        <!-- <input type="text" name="Country" placeholder="Your Country" id="Country" required / style="text-transform: capitalize;">   -->
                        <select class="form-control" name="Country" id="Country" required>
                            <?php
                            // Generate country options from the array
                            foreach ($countries as $country) {
                                echo "<option value='".htmlspecialchars($country)."'>".htmlspecialchars($country)."</option>";
                            }
                            ?>
                        </select>
                        <br>
                    <label for="city">Your City </label>
                    <input type="text" name="City" placeholder="Your City" id="city" required / style="text-transform: capitalize;">
                    <label for="number">WhatsApp (with country code)</label>
                    <input type="number" name="Number" placeholder="WhatsApp Number" id="number" required />
                    <label for="number">LinkedIn Link </label>

                    <input type="text" name="Linkedin_link" placeholder="LinkedIn Link" id="Linkedin" required />
                   
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder=" Your Email" id="email" required />
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder=" Choose a Password" id="Password" required />
                    <button type="submit" class=" btn btn-primary">Create Account</button>
                </form>
            </div>
            <!-- <div class="circle circle-two"></div> -->
        </div>
    </div>
        <div class="theme-btn-container"></div>
    </section>
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
      const imgFileSize = (Math.round((webp.length - head.length)*3/4) / (1000)).toFixed(2);
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
    const compressImage = async (file, { quality = 1, type = file.type }) => {
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
        const { files } = e.target;

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


<!-- <script>
        document.getElementById('stack').addEventListener('input', function () {
            let input = this.value;
            let words = input.split(',');
            let formattedInput = '';
            let lineWordCount = 0;
            const maxWordsPerLine = 15;

            words.forEach((word, index) => {
                // Insert a space where you want
                if (word.toLowerCase() === 'promptengineer&llmse') {
                    word = 'Prompt engineer & llmse';
                }
                
                if (lineWordCount < maxWordsPerLine) {
                    formattedInput += word + (index < words.length - 1 ? ',' : '');
                    lineWordCount++;
                } else {
                    formattedInput += '\n' + word + (index < words.length - 1 ? ',' : '');
                    lineWordCount = 1;
                }
            });

            this.value = formattedInput;
        });
    </script> -->
<!-- <script>
    document.getElementById('image').addEventListener('change', function() {
        var file = this.files[0];
        if (file.size > 51200) { // 50 KB = 51200 Bytes
            alert('The image size must be less than 50 KB.');
            this.value = ''; // Clear the file input
        }
    });
</script> -->