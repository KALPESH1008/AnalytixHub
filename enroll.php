<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Form</title>
    <style>
        /* Your CSS styles go here */
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background */
        }

        .modal-container {
            width: 80%;
            /* Adjust the width as needed */
            max-width: 600px;
            /* Add a max-width to limit the container size on larger screens */
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center the form content horizontally */
        }

        .form-field {
            width: 100%;
            /* Make the form fields take the full width of the container */
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .form-field label {
            font-weight: bold;
            color: #1882E4;
        }

        .form-field input,
        .form-field select,
        .form-field textarea {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 93%;
            /* Make the form fields take the full width of the container */
        }

        .form-field select {
            width: 100%;
        }

        .form-field textarea {
            resize: vertical;
        }

        .form-btn {
            width: 100%;
            /* Make the button take the full width of the container */
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .button-63 {
            align-items: center;
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            border: 0;
            border-radius: 8px;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            box-sizing: border-box;
            color: #FFFFFF;
            display: flex;
            font-family: Phantomsans, sans-serif;
            font-size: 20px;
            justify-content: center;
            line-height: 1em;
            max-width: 100%;
            min-width: 140px;
            padding: 19px 24px;
            text-decoration: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            cursor: pointer;
        }

        .button-63:active,
        .button-63:hover {
            outline: 0;
        }

        @media (min-width: 768px) {
            .button-63 {
                font-size: 24px;
                min-width: 196px;
            }
        }

        /* Add this CSS to the existing CSS styles in enroll.php */
        .enroll-form-container {
            width: 80%;
            /* Adjust the width as needed */
            max-width: 600px;
            /* Add a max-width to limit the container size on larger screens */
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
            /* Add some top margin to center the form on the page */
            display: none;
            /* Hide the form container by default */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black color */
            z-index: 9999;
            /* Ensure the overlay appears on top of other elements */
            display: none;
            /* Hide the overlay by default */
        }

        .imgx {
            width: 50px;
            height: 5px;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center; font-size: 50px; color: #1882E4;">Enroll Now</h1>

    <form action="send_email123.php" method="post" onsubmit="return validateForm()">


        </div>
        <div class="form-field">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-field">
            <label for="contact">Contact No:</label>
            <input type="tel" id="contact" name="contact" required>
        </div>
        <div class="form-field">
            <label for="course">Select Course:</label>
            <select id="course" name="course" required>
                <option label="Select Course"></option>
                <option value="Python">Data Analytics</option>
                <option value="Database">Complete SQL Bootcamp</option>
                <option value="Java">Tableau Masterclass</option>
                <option value="Android">Artificial Intelligence</option>
                <!-- Add more course options here -->
            </select>
        </div>
        <div class="form-field">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <div class="form-btn">
            <button class="button-63" type="submit">Submit</button>
        </div>
    </form>


    <!-- Your existing JavaScript code here -->
    <script>
        function validateForm() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const contact = document.getElementById("contact").value;
            const course = document.getElementById("course").value;
            const message = document.getElementById("message").value;

            if (!name || !email || !contact || !course || !message) {
                alert("Please fill all the required fields.");
                return false;
            }

            // Form data is valid, continue with form submission.
            return true;
        }

        // Check if the URL has the parameter indicating successful form submission.
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get("success")) {
            alert("Email sent successfully!");
        }
    </script>
</body>

</html>