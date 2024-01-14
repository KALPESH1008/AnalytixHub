<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Analytics Course</title>

    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="./assets/js/enrollform.js"> </script>

</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <!-- navbar end -->

    <div class="container">
        <?php
        // Define an array of courses with unique details
        $courses = [
            [
                'name' => 'Data Analytics',
                'imagePath' => './assets/img/data_analytics.jpg',
                'description' => 'Course Overview:
                This course is designed to provide students with a foundational understanding of SQL (Structured Query Language) and Tableau, two essential tools for data management, manipulation, and visualization. Students will learn the fundamentals of SQL for querying and managing databases and gain hands-on experience in using Tableau for creating interactive data visualizations and dashboards.
                .',
                'syllabus' => [

                    
                    '1. Introduction to Data Analysis
                    <li>	What is data analysis? </li>
                    <li> Role of a data analyst in organizations.</li>
                    <li> Data analysis tools and software.</li>',
                    '2. Data Collection and Cleaning
                    <li>	Data sources and types.</li>
                    <li>	Data collection methods.</li>
                    <li>	Data cleaning and preprocessing.</li>
                    <li>	Dealing with missing data and outliers.</li>',
                   ' 3. Data Exploration and Visualization
                    <li>	Descriptive statistics.</li>
                    <li>	Data visualization techniques (e.g., histograms, scatter plots, bar charts).</li>
                    <li>	Exploratory data analysis (EDA).</li>',
                   ' 4. Statistical Analysis
                    <li>	Probability and probability distributions.</li>
                    <li>	Hypothesis testing.</li>
                    <li>	Confidence intervals.</li>
                    <li>	Correlation and regression analysis.</li>',
                   ' 5. Data Wrangling and Transformation
                    <li>	Data manipulation with libraries like pandas (Python).</li>
                    <li>	Data transformation and feature engineering.</li>',
                   ' 6. Data Analysis with Programming Languages
                    <li>	Using programming languages like Python or R for data analysis.</li>
                    <li>	Working with libraries and packages for data analysis (e.g., NumPy, SciPy, scikit-learn in Python).</li>',
                   ' 7. SQL and Relational Databases
                    <li>	Introduction to SQL (Structured Query Language).</li>
                    <li>	Querying relational databases.</li>
                    <li>	Joining tables and extracting data.</li>',
                   ' 8. Machine Learning Fundamentals
                    <li>	Introduction to machine learning.</li>
                    <li>	Supervised learning, unsupervised learning, and other paradigms.</li>
                    <li>	Model evaluation and selection.</li>',
                   ' 9. Data Visualization and Reporting
                    <li>	Advanced data visualization techniques.</li>
                    <li>	Creating informative data dashboards.</li>
                    <li>	Communicating insights effectively.</li>',
                   ' 10. Time Series Analysis (Optional)
                    <li>	Analyzing time-series data.</li>
                    <li>	Forecasting methods.</li>',
                   ' 11. Big Data and Distributed Computing (Optional)
                    <li>	Introduction to big data technologies (e.g., Hadoop, Spark).</li>
                    <li>	Distributed computing for large-scale data analysis.</li>',
                   ' 12. Case Studies and Projects
                    <li>	Real-world data analysis projects.</li>
                    <li>	Applying learned skills to solve practical problems.</li>
                    <li>	Presenting findings and insights.</li>',
                   ' 13. Ethical Considerations in Data Analysis
                    <li>	Data privacy and security.</li>
                    <li>	Ethical data handling and reporting.</li>',
                  '  14. Professional Development
                    <li>	Building a data analyst portfolio.</li>
                    <li>	Job search and interview skills.</li>
                    <li>	Career paths in data analysis.</li>',
                    
                ]
            ],
            [
                'name' => 'Complete SQL Bootcamp',
                'imagePath' => './assets/img/complete sql bootcamp.jpeg',
                'description' => 'Complete SQL Bootcamp is a comprehensive course that teaches you everything you need to know about SQL. This course covers a wide range of topics, including basic SQL queries, database design, advanced SQL concepts, and performance tuning. You will learn how to write efficient and optimized SQL queries to manipulate and manage databases effectively. Whether you are a beginner or have some experience in SQL, this course will equip you with the skills and knowledge needed to become a proficient SQL developer.',
                'syllabus' => [
                                        
                    'Week 1-2: Introduction to SQL

                    Introduction to databases and their importance
                    Basics of SQL: SELECT statements, WHERE clause, ORDER BY
                    Working with multiple tables: JOIN operations
                    Aggregation and grouping data: GROUP BY, HAVING
                    Subqueries and nested queries',
                    'Week 3-4: Advanced SQL

                    Data modification: INSERT, UPDATE, DELETE statements
                    Working with functions: COUNT, SUM, AVG, MAX, MIN
                    Data manipulation: CASE statements, string functions, date functions
                    Creating and modifying database tables: CREATE, ALTER, DROP
                    Indexing and optimizing queries',
                    'Week 5-6: Introduction to Tableau

                    Understanding data visualization and its importance
                    Tableau interface and navigation
                    Connecting to data sources: Excel, CSV, databases
                    Building basic visualizations: bar charts, line charts, scatter plots
                ',
                    'Week 7-8: Advanced Tableau

                    Data preparation and cleaning within Tableau
                    Interactive dashboards: combining multiple visualizations
                    Filters, parameters, and calculated fields
                    Mapping data: geographical visualizations
                    Drill-down and hierarchies in Tableau
                
                ',
                    'Week 9-10: Tableau for Data Storytelling

                    Principles of effective data storytelling
                    Design aesthetics and best practices
                    Creating dynamic dashboards with actions
                    Sharing and publishing Tableau visualizations
                    Exporting and embedding Tableau visualizations',
                    
                    'Week 11-12: Capstone Project

                    Applying SQL skills to retrieve and manipulate data
                    Utilizing Tableau for data visualization and storytelling
                    Designing a comprehensive data-driven project
                    Presenting the project and insights to the class
                ',
                    'Assessment:

                    Quizzes and assignments assessing SQL query skills
                    Tableau visualization projects
                    Capstone project combining SQL and Tableau skills
                    Class participation and engagement'
                ]
            ],
            [
                'name' => 'Tableau Masterclass',
                'imagePath' => './assets/img/Tableau.jpeg',
                'description' => 'Tableau Masterclass is a comprehensive course that teaches you how to create interactive and visually appealing data visualizations using Tableau. This course covers a wide range of topics, including data connection, data visualization techniques, advanced chart types, calculated fields, and dashboard creation. You will learn how to explore, analyze, and present data effectively using Tableau. Whether you are a beginner or have some experience in data visualization, this course will equip you with the skills and knowledge needed to become a Tableau expert.',
                'syllabus' => [
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
            ],
            [
                'name' => 'Artificial Intelligence',
                'imagePath' => './assets/img/Artificial Intelligence.jpg',
                'description' => 'Artificial Intelligence is an advanced course that explores the concepts and applications of AI. This course covers a wide range of topics, including machine learning, deep learning, natural language processing, computer vision, and AI ethics. You will learn how to design and implement AI algorithms to solve complex problems and create AI-driven applications. Whether you are an AI enthusiast or a professional seeking to advance your AI skills, this course will provide you with a strong foundation in artificial intelligence.',
                'syllabus' => [
                    '1. Artificial Intelligence
                    1.1 What Is Artificial Intelligence?
                    1.2 Scope, problems, and approaches of AI.
                    1.3 Types Of AI
                    1.4 AI Domains
                    1.5 Programming Languages For AI',
                    '2. Problem-solving
                    2.1 Solving Problems by Searching
                    2.2 Search in Complex Environments
                    2.3 Adversarial Search and Games
                    2.4 Constraint Satisfaction Problems',
                    '3. Knowledge, reasoning, and planning
                    3.1 Logical Agents
                    3.2 First-Order Logic
                    3.3 Inference in First-Order Logic
                    3.4 Knowledge Representation
                    3.5 Rule-based Systems',
                    '4. Uncertain knowledge and reasoning
                    4.1 Quantifying Uncertainty
                    4.2 Probabilistic Reasoning
                    4.3 Probabilistic Reasoning over Time
                    4.4 Probabilistic Programming',
                    '5. Decision-Making
                    5.1 Basics of utility theory and Decision theory
                    5.2 Making Simple Decisions
                    5.3 Making Complex Decisions
                    5.4 Multi agent Decision Making',
                ]
            ],
            // Add more courses here
        ];

        // Get the course index from the query parameters
        $courseIndex = isset($_GET['courseIndex']) ? intval($_GET['courseIndex']) : 0;

        // Retrieve the course details based on the course index
        $courseName = $courses[$courseIndex]['name'];
        $imagePath = $courses[$courseIndex]['imagePath'];
        $description = $courses[$courseIndex]['description'];
        $syllabus = $courses[$courseIndex]['syllabus'];
        ?>

        <div class="course-description">
            <h2><?php echo $courseName; ?></h2>
        </div>

        <!-- Display the course image using PHP -->
        <img class='course-image' src='<?php echo $imagePath; ?>' alt='<?php echo $courseName; ?>'>

        <div class="course-description">
            <!-- Display the course name and description using PHP -->

            <p><?php echo $description; ?></p>
        </div>

        <div class="modal-overlay" id="modalOverlay" onclick="hideForm()"></div>

        <!-- Enroll Form Container (Initially Hidden) -->
        <div class="modal-container" id="modalContainer">
            <!-- Use an iframe to load the enroll.php content -->
            <iframe src="enroll.php" frameborder="0" width="100%" height="100%"></iframe>
        </div>


        <div class="syllabus">
            <h3 class="listofsyllabus">Syllabus</h3>
            <ul class="listofsyllabus">
                <?php
                // Display the syllabus using PHP
                foreach ($syllabus as $syllabusItem) {
                    echo "<li>$syllabusItem</li>";
                }
                ?>
            </ul>
            <button class="enroll-button" onclick="showForm()">Enroll Now</button>
        </div>
    </div>
</body>

</html>