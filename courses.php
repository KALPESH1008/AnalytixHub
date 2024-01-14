<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Roboto+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <!-- navbar end -->

   

    <!-- Card 1 -->
    <!-- courses-card 1 -->
    <div class="courses-card-container">
        <div class="courses-card" style="height: 26rem;" data-aos="fade-right" data-aos-offset="480"
            data-aos-easing="ease-in-sine" onclick="redirectToDataPage(0)">
            <img src="./assets/img/data_analytics.jpg" alt="courses-card Image">
            <h3 class="courses-card-title"> Introduction to SQL and Tableau</h3>
          
            <button style="background-color:#1882E4; color:#f1f1f1; width: 60%; height: 40px; border:none;
                border-radius:5px; margin:5px; margin-top:25px">View Details</button>
        </div>

        <!-- courses-card 2 -->
        <div class="courses-card" style="height: 26rem;" data-aos="fade-right" data-aos-offset="480"
            data-aos-easing="ease-in-sine" onclick="redirectToDataPage(1)">
            <img src="./assets/img/complete sql bootcamp.jpeg" alt="courses-card Image">
            <h3 class="courses-card-title">Complete SQL Bootcamp</h3>
           
            <button style="background-color:#1882E4; color:#f1f1f1; width: 60%; height: 40px; border:none;
                border-radius:5px; margin:5px;  margin-top:45px" >View Details</button>
        </div>

        <!-- courses-card 3 -->

        <div class="courses-card" style="height: 26rem;" data-aos="fade-right" data-aos-offset="480"
            data-aos-easing="ease-in-sine" onclick="redirectToDataPage(3)">
            <img src="./assets/img/Artificial Intelligence.jpg" alt="courses-card Image">
            <h3 class="courses-card-title">Artificial Intelligence</h3>
               <button style="background-color:#1882E4; color:#f1f1f1; width: 60%; height: 40px; border:none;
                border-radius:5px; margin:5px; margin-top:45px">View Details</button>
        </div>

        <!-- courses-card 4 -->
     

        <div class="courses-card" style="height: 26rem;" data-aos="fade-right" data-aos-offset="480"
            data-aos-easing="ease-in-sine" onclick="redirectToDataPage(2)">
            <img src="./assets/img/Tableau.jpeg" style="height:60%;" alt="courses-card Image">
            <h3 class="courses-card-title">Tableau Masterclass</h3>
           <button style="background-color:#1882E4; color:#f1f1f1; width: 60%; height: 40px; border:none;
                border-radius:5px; margin:5px; margin-top:45px">View Details</button>
        </div>
    </div>

    <script>
        // Define an array of courses with unique details
        const courses = [
            {
                name: 'Data Analytics',
                imagePath: './assets/img/data_analytics.jpg',
                description: 'Data Analytics is a comprehensive course that teaches you how to analyze and interpret data to make informed business decisions. This course covers a wide range of topics, including data visualization, statistical analysis, SQL, communication, business analytics, and problem-solving. You will learn how to use various data analysis tools and techniques to extract valuable insights from large datasets. Whether you are a beginner or have some experience in data analytics, this course will equip you with the skills and knowledge needed to excel in the field of data analytics.',
                syllabus: [
                    'Introduction to Data Analytics',
                    'Data Visualization Techniques',
                    'Statistical Analysis',
                    'Introduction to SQL',
                    'Advanced Data Analytics Techniques',
                    'Communication and Presentation of Data Insights',
                    'Business Analytics and Decision Making',
                    'Data Analysis Tools and Software',
                    'Data Cleaning and Preprocessing',
                    'Data Mining and Machine Learning'
                ]
            },
            {
                name: 'Complete SQL Bootcamp',
                imagePath: './assets/img/complete_sql_bootcamp.jpeg',
                description: 'Complete SQL Bootcamp is a comprehensive course that teaches you everything you need to know about SQL. This course covers a wide range of topics, including basic SQL queries, database design, advanced SQL concepts, and performance tuning. You will learn how to write efficient and optimized SQL queries to manipulate and manage databases effectively. Whether you are a beginner or have some experience in SQL, this course will equip you with the skills and knowledge needed to become a proficient SQL developer.',
                syllabus: [
                    'Introduction to SQL',
                    'Basic SQL Queries',
                    'Database Design',
                    'Advanced SQL Concepts',
                    'Joins and Subqueries',
                    'Indexes and Performance Tuning',
                    'Stored Procedures and Functions',
                    'Triggers and Transactions',
                    'Data Import and Export',
                    'Real-world SQL Projects'
                ]
            },
            {
                name: 'Tableau Masterclass',
                imagePath: './assets/img/Tableau.jpeg',
                description: 'Tableau Masterclass is a comprehensive course that teaches you how to create interactive and visually appealing data visualizations using Tableau. This course covers a wide range of topics, including data connection, data visualization techniques, advanced chart types, calculated fields, and dashboard creation. You will learn how to explore, analyze, and present data effectively using Tableau. Whether you are a beginner or have some experience in data visualization, this course will equip you with the skills and knowledge needed to become a Tableau expert.',
                syllabus: [
                    'Introduction to Tableau',
                    'Data Connection and Data Sources',
                    'Basic Data Visualizations',
                    'Advanced Chart Types in Tableau',
                    'Calculated Fields and Expressions',
                    'Filters and Parameters',
                    'Dashboard Creation and Design',
                    'Data Storytelling',
                    'Tips and Tricks for Effective Data Visualization',
                    'Real-world Tableau Projects'
                ]
            },
            {
                name: 'Artificial Intelligence',
                imagePath: './assets/img/Artificial Intelligence.jpg',
                description: 'Artificial Intelligence is an advanced course that explores the concepts and applications of AI. This course covers a wide range of topics, including machine learning, deep learning, natural language processing, computer vision, and AI ethics. You will learn how to design and implement AI algorithms to solve complex problems and create AI-driven applications. Whether you are an AI enthusiast or a professional seeking to advance your AI skills, this course will provide you with a strong foundation in artificial intelligence.',
                syllabus: [
                    'Introduction to Artificial Intelligence',
                    'Machine Learning Algorithms',
                    'Supervised and Unsupervised Learning',
                    'Deep Learning and Neural Networks',
                    'Natural Language Processing',
                    'Computer Vision and Image Recognition',
                    'Reinforcement Learning',
                    'AI Ethics and Fairness',
                    'AI-driven Application Development',
                    'Real-world AI Projects'
                ]
            },
            // Add more courses here
        ];

        function redirectToDataPage(courseIndex) {
            // Redirect to data.php with course index as a parameter
            window.location.href = `data.php?courseIndex=${courseIndex}`;
        }
    </script>
          
  <!-- footer -->
  <?php include 'footer.php'; ?>
  <!--  end -->

</body>
</html>
