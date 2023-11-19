<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../index.php");
}
?>
<html>
    <head>
        <title>CV-Mohammad Ballouz</title>
        <link rel="stylesheet" href="../CSS/Cv-style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>

    <body>
        <div class="row" id="header">
            <div style="position:absolute; right:0; font-size: 22px; font-family: 'Calibri', sans-serif; margin-right: 12px">Welcome <strong><?php echo $_SESSION["username"]; ?></strong> | 
            <a style="color: black;" href="../BE/logout.php">Logout</a></div>
        
            <div id="dropdown-menu">
                <span><image src="../icons/burgermenu.png" class="ico" id="ico2">MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="main-page.php">
                            <li><image src="../icons/house2.png" class="ico" id="ico2">Main Page</li>
                        </a>
                        <a href="CV.php">
                            <li><image src="../icons/CV2.png" class="ico" id="ico2">Resume</li>
                        </a>
                        <a href="gallery.php">
                            <li><image src="../icons/Gallery2.png" class="ico" id="ico2">Gallery</li>
                        </a>
                        <a href="contact-info-page.php">
                            <li><image src="../icons/contact information2.png" class="ico" id="ico2">Contact Me</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="box">
        <div class="container">Mohammad Ballouz <span class="occupation-font"><br>Senior LAU student pursuing a Bachelor of Science (BS) degree in Computer Science</span><br>
            <p class = "icons"><i class="fas fa-envelope"></i> mohammad.ballouz@lau.edu<br></p>
            <p class = "icons"><i class="fas fa-phone"></i> +961 76 748 236<br></p>
            <p class = "icons"><i class="fas fa-home"></i> Hamra, Beirut, Lebanon<br></p> 
            <p class = "icons"><i class="fab fa-linkedin"></i> https://www.linkedin.com/in/mohammadballouz</p>
        </div>

        <div class="side-container"></div></div>

        <div class="box2">
        <div class="side-container2">
            <p class="font-inside-side">LANGUAGES</p>
            <p class="font2-inside-side">English</p>
            <div class="progress-bar"></div>
            <p class="font2-inside-side">Arabic (Mother tongue)</p>
            <div class="progress-bar"></div>

            <p class="font-inside-side"><br><br>SKILLS &<br>
            TECHNOLOGIES</p>
            <p class="font2-inside-side">
                <ul class="font3">
                    <li>Java and OOP development</li>
                    <li>Python/Python Tornado</li>
                    <li>Data structures and algorithms</li>
                    <li>Intermediate in C</li>
                    <li>Postman</li>
                    <li>React Native</li>
                    <li>Oracle SQL</li>
                    <li>Flutter (Dart)</li>
                    <li>HTML, CSS, JS</li>
                    <li>RESTful APIs</li>
                    <li>Elasticsearch</li>
                    <li>RabbitMQ</li>
                    <li>Docker</li>			
                    <li>Testing microservices</li>
                    <li>Relational database design</li>
                </ul>
            </p>

        <p class="font-inside-side"><br><br>ACHIEVEMENTS</p>
        <p class="font2-inside-side">
            <ul class="square-bullets"><li><strong>Millennium Fellowship,<br> Class of 2022</strong></li></ul>
            <ul>
                <li>Led a community service project advancing SDG 1<br> from August-December<br> 2022, and moderated a<br> global webinar with Albie<br> Sachs,
                     a retired judge of the<br> South African<br> Constitutional Court.</li><br>
                <li>Earned a certificate<br> recognizing successful<br> completion of the program from the United Nations Academic Impact and<br> MCN.</li>
            </ul>
        </p>
        </div>
        
            <div class="below-container"> <span class="text-highlight">PROFILE </span>
                <p>Highly motivated computer science student at the Lebanese American University with strong
                programming skills. Seeking an internship opportunity to apply my knowledge and skills in a real-world
                setting, while also gaining valuable industry experience. Strong analytical and problem-solving abilities,
                as well as effective interpersonal skills. Proven ability to work competently in a team and
                independently.</p><br>

                <span class="text-highlight">EDUCATION </span>
                <p><ul class="font3">
                    <li><strong>BS in Computer Science,</strong> Lebanese American University <span class="font4">August 2021 - June 2024<br></span></li>
                    Enrolled in the full merit Higher Education Scholarship funded by <strong>USAID</strong><br>
                    Spring 2023 Cumulative GPA: 3.5/4
                    <br><br>
                    <li><strong>Lebanese Baccalaureate</strong>, Shhim Public High School <span class="font4">October 2018 - June 2021<br></span></li>
                    General Sciences: 18.22/20
                </ul><br>

                <span class="text-highlight">PROFESSIONAL EXPERIENCE </span></p>
                <p><strong>Software Development Intern</strong> <span class="font4">May 2023 - August 2023</span>
                   <br>SAUGO 360 <span class="font4">Beirut, Lebanon<br></span>
                   <ul class="inline">
                   <li>Developed a dynamic testing component designed to streamline and accelerate the microservices testing process.</li> 
                   <li>Implemented using Python Tornado with the integration of Elasticsearch database, RabbitMQ, Docker containers, and RESTful APIs for system component optimization validated using Postman.</li>
                   <li>Conducted unit, functional, integration, regression, and performance testing to ensure the reliability and consistency of the component.</li>
                   <li>Integrated the testing component with a controller to validate key operations, including message handling, HTTP requests, and validation of the Elasticsearch database.</li>
                   <li>Developed YAML test case files by defining test steps using JSON objects.</li>
                   <li>Produced detailed technical documentation and user guides for the component.</li>
                   </ul><br><br>

                   <span class="text-highlight">ACADEMIC PROJECTS </span><br><br>
                   <strong>MENTAL HEALTH MOBILE APPLICATION</strong> <span class="font4">Spring 2023</span><br>
                   <em>CSC498 – Mobile Development</em>
                   <ul class="inline">
                   <li>Developed a mental health mobile application using Flutter framework</li>
                   <li>Implemented using Dart programming language</li>
                   </ul><br>

                   <strong>SPA MANAGEMENT SOFTWARE</strong> <span class="font4">Spring 2023</span><br>
                   <em>CSC490 – Software Engineering</em><br>
                   <ul class="inline">
                    <li>Implemented the software using React Native and conducted Unit testing</li>
                    <li>Specified the software requirements as user or system requirements</li>
                    <li>Designed the software architecture and sketched the UML diagrams</li>
                   </ul><br>

                   <strong>PARALLEL ALGORITHM: FAST FOURIER TRANSFORM</strong> <span class="font4">Spring 2023</span><br>
                   <em>CSC447 – Parallel Progg/Multic. & Cluster</em>
                   <ul class="inline">
                    <li>Parallelized an algorithm for the Fast Fourier Transform</li>
                    <li>Parallelized using OpenMP, MPI, and CUDA, and studied each code’s behavior</li>
                   </ul><br>

                   <strong>DATABASE PROJECT FOR A RESTAURANT CHAIN</strong> <span class="font4">Fall 2022</span><br>
                   <em>CSC375 – Database Management Systems</em><br>
                   <ul class="inline">
                    <li>Designed Entity-Relation Diagram for a restaurant chain database</li>
                    <li>Translated the ER schema to tables and normalized the tables according to BCNF</li>
                    <li>Implemented the database using SQL on the Oracle Server</li>
                   </ul><br><br>

                   <span class="text-highlight">EXTRACURRICULAR ACTIVITIES </span><br><br>
                    <strong>Outreach Volunteer, Lebanese Vegans Social Hub</strong> <span class="font4">September 2022 - Present</span>
                   <ul class="inline">
                    <li>Assist in preparing food and collecting clothes through donations.</li>
                    <li>Distribute clothes and food boxes to the disadvantaged in Beirut region.</li>
                   </ul><br>

                   <strong>Groundwork Volunteer, Mission Village</strong> <span class="font4">September 2022</span>
                   <ul class="inline">
                    <li>Cleaned and painted rooms in the Mission Village shelter for the homeless.</li>
                    <li>Helped in constructing beds and closets for the shelter.</li>
                   </ul><br>

                   <strong>Data Collection and Entry, Rashet Kheir</strong> <span class="font4">January 2022 – February 2022</span>
                   <ul class="inline">
                    <li>Helped in organizing a workshop tackling youth skills.</li>
                    <li>Assisted in data entry of the attendees' information.</li>
                   </ul><br>
                </p>
            </div>
        </div>
    </body>
</html>