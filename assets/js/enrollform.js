
        // Function to show the form
        function showForm() {
            var modalContainer = document.getElementById("modalContainer");
            var modalOverlay = document.getElementById("modalOverlay");

            // Load the enroll.php content into the modal container using AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    modalContainer.innerHTML = this.responseText;
                    modalContainer.style.display = "block";
                    modalOverlay.style.display = "block";
                }
            };
            xhr.open("GET", "enroll.php", true);
            xhr.send();
        }

        // Function to hide the form
        function hideForm() {
            var modalContainer = document.getElementById("modalContainer");
            var modalOverlay = document.getElementById("modalOverlay");
            modalContainer.style.display = "none";
            modalOverlay.style.display = "none";
        }