<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>

<link rel="stylesheet" href="./assets/css/style.css">
    <style>
        

        .section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
        }

        .section-image {
            flex: 1;
            text-align: center;
            margin-right: 40px; /* Add margin between image and text */
        }

        .section-image img {
            max-width: 100%;
            border-radius: 8px;
        }

        .section-content {
            flex: 1;
            text-align: center;
            margin-left: 40px; /* Add margin between image and text */
            margin-right: 40px;
        }

        .section-content h2 {
            color: #1882E4;
            font-size: 50px;
        }

        .section-content p {
            color: #333;
            line-height: 1.6;
            text-align: justify;
            align-items: left;
        }
    </style>
<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <!-- nevbar end -->

    <!-- testimonials-section2 -->
    <section class="section2">
    <div class="headdingh1" style="padding-top: 120px;">
        <h1>Why AnalytixHub ?</h1>
    </div>
  
         <!-- AnalytixHub-card 1 -->
         <div class="AnalytixHub-card-container " >
            <div class="AnalytixHub-card" style="height: 26rem;" data-aos="fade-right"
            data-aos-offset="480"
            data-aos-easing="ease-in-sine"> 
                   <img src="./assets/img/1.jpg" alt="AnalytixHub-card Image">
                    <p>
                        Hi, AnalytixHub is the most trusted platform to learn about the data analytics to completes with the industries
                    </p>
                </div>
       
               <!-- AnalytixHub-card 2 -->
               <div class="AnalytixHub-card" style="height: 26rem;" data-aos="fade-right"
            data-aos-offset="480"
            data-aos-easing="ease-in-sine">
                   <img src="./assets/img/2.jpg" alt="AnalytixHub-card Image">
                   <p>
                    Hi, AnalytixHub is the most trusted platform to learn about the data analytics to completes with the industries
                </p>
                </div>
       
               <!-- AnalytixHub-card 3 -->
               <div class="AnalytixHub-card" style="height: 26rem ; " data-aos="fade-right"
            data-aos-offset="480"
            data-aos-easing="ease-in-sine">
                   <img src="./assets/img/3.jpg"  alt="AnalytixHub-card Image">
                   <p>
                    Hi, AnalytixHub is the most trusted platform to learn about the data analytics to completes with the industries
                </p>
                </div>
        </div>
    <!-- testimonials-section2 -->

    <div class="container">

    <div class="section">
            <div class="section-content">
                <h2>Mission</h2>
                <p>
                Analytix Hub's mission is to empower individuals in the fields of data analytics and artificial intelligence by offering accessible, 
                high-quality education through a diverse range of courses. They prioritize excellence by assembling renowned professors and 
                collaborating with industry experts to keep their content cutting-edge. Flexibility is key, with options for live classes and self-paced learning. Beyond education, Analytix Hub aims to ensure the success of its learners by providing certifications, placement support, and career advisory services. Their mission is to be a trusted partner in helping individuals build rewarding careers 
                in the data-driven and innovative realms of data analytics and AI.</p>
            </div>
            <div class="section-image">
                <img src="./assets/img/mission.jpg" alt="Mission Image">
            </div>
        </div>

        <div class="section">
            <div class="section-image">
                <img src="./assets/img/vission.png" alt="Vision Image">
            </div>
            <div class="section-content">
                <h2>Vision</h2>
                <p>Analytix Hub, with its top-notch faculty and industry collaboration, ensures that learners acquire cutting-edge skills. Our commitment to real-world relevance means you'll be well-prepared for the demands of the job market. Whether you prefer interactive live classes or self-paced learning, Analytix 
            Hub offers flexibility tailored to your needs. Plus, our comprehensive certifications and dedicated career support 
            ensure your journey to success in the dynamic fields of data analytics and artificial intelligence is both 
            educational and professionally rewarding. Join us and unlock a world of opportunities in the data-driven future.</p></div>
        </div>

        <h2 style="text-align:center; color:#1882E4; font-size:40px;">Testimonials</h2>
        <div class="testimonials-container">
            <div class="testimonial-arrow prev-testimonial" onclick="prevTestimonial()">&#10094;</div>
            <div class="testimonials" onscroll="checkTestimonialScroll(event)">
                <!-- Your testimonial cards -->
                <div class="testimonial-card">
                    <h3>John Doe</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac mi ut arcu mollis viverra.</p>
                </div>
                <div class="testimonial-card">
                    <h3>Jane Smith</h3>
                    <p>Nulla facilisi. Donec malesuada tellus eu arcu fermentum, eget dignissim velit dignissim.</p>
                </div>
                <div class="testimonial-card">
                    <h3>Mark Johnson</h3>
                    <p>Fusce ac odio tincidunt, efficitur nulla ac, tempor ex. Etiam vitae hendrerit felis.</p>
                </div>
                <!-- Add more testimonial cards here -->
                <div class="testimonial-card">
                    <h3>Mark Johnson</h3>
                    <p>Fusce ac odio tincidunt, efficitur nulla ac, tempor ex. Etiam vitae hendrerit felis.</p>
                </div>

                <div class="testimonial-card">
                    <h3>Mark Johnson</h3>
                    <p>Fusce ac odio tincidunt, efficitur nulla ac, tempor ex. Etiam vitae hendrerit felis.</p>
                </div>
            </div>
            <div class="testimonial-arrow next-testimonial" onclick="nextTestimonial()">&#10095;</div>
        </div>
    </div>


   <!-- team -->
   <?php include 'team.php'; ?>
    <!--  end -->
    

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!--  end -->

    <script>
        // Function to navigate to the previous testimonial
        function prevTestimonial() {
            const testimonials = document.querySelector('.testimonials');
            const testimonialWidth = testimonials.scrollWidth / testimonials.childElementCount;
            const scrollOffset = testimonials.scrollLeft - testimonialWidth;
            testimonials.scrollTo({
                left: scrollOffset,
                behavior: 'smooth',
            });
        }

        // Function to navigate to the next testimonial
        function nextTestimonial() {
            const testimonials = document.querySelector('.testimonials');
            const testimonialWidth = testimonials.scrollWidth / testimonials.childElementCount;
            const scrollOffset = testimonials.scrollLeft + testimonialWidth;
            testimonials.scrollTo({
                left: scrollOffset,
                behavior: 'smooth',
            });
        }

        // Function to update the current index on scroll
        function checkTestimonialScroll(event) {
            const testimonials = document.querySelector('.testimonials');
            const testimonialWidth = testimonials.scrollWidth / testimonials.childElementCount;
            currentIndex = Math.floor(testimonials.scrollLeft / testimonialWidth);
        }
    </script>
</body>
</html>
