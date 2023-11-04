<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Dogbey</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

    <!--
    - custom css link55555
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!--
    - #MAIN
  -->

    <main>

        <!--
      - #SIDEBAR
    -->

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="./assets/images/my-avatar.png" alt="
Lucky Dogbey" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Lucky Dogbey">Lucky Dogbey</h1>

                    <p class="title">Software Engineer</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>

                            <a href="mailto:luckydogbey@gmail.com" class="contact-link">luckydogbey@gmail.com</a>
                        </div>

                    </li>

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <a href="tel:+233247446039" class="contact-link">+233 (24) 744-6039</a>
                        </div>

                    </li>


                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <address>North Legon, Accra, Ghana</address>
                        </div>

                    </li>

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </aside>





        <!--
      - #main-content
    -->

        <div class="main-content">

            <!--
        - #NAVBAR
      -->

            <nav class="navbar">

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a class="navbar-link" href="index.php">About</a>
                    </li>

                    <li class="navbar-item">
                        <a class="navbar-link" href="resume.php">Resume</a>
                    </li>

                    <li class="navbar-item">
                        <a class="navbar-link active" href="projects.php">Portfolio</a>
                    </li>


                    <li class="navbar-item">
                        <a class="navbar-link" href="contacts.php">Contact</a>
                    </li>

                </ul>

            </nav>





            <!--
        - #PORTFOLIO
      -->

            <article class="portfolio active" data-page="portfolio">

                <header>
                    <h2 class="h2 article-title">Portfolio</h2>
                </header>

                <section class="projects">

                

                   

                    <ul class="project-list">

                        <?php
                        // Database connection parameters
                        $servername = "127.0.0.1";
                        $username = "dbUser";
                        $password = "XkI16_[kj829[NzP";
                        $dbname = "lucky_dogbey";

                        // Create a connection to the database
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check the connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // SQL query to fetch projects
                        $sql = "SELECT id, title, description, thumbnail FROM projects";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                // Embed project details within your HTML structure
                                echo '<li class="project-item active" data-filter-item data-category="web development">';
                                echo '<a href="project_detail.php?id='.  $row["id"] .'">';
                                echo '<figure class="project-img">';
                                echo '<div class="project-item-icon-box">';
                                echo '<ion-icon name="eye-outline"></ion-icon>';
                                echo '</div>';
                                echo '<img src="' . $row["thumbnail"] . '" alt="' . $row["title"] . '" loading="lazy">';
                                echo '</figure>';
                                echo '<h3 class="project-title">' . $row["title"] . '</h3>';
                                echo '</a>';
                                echo '</li>';
                            }
                        } else {
                            echo "No projects found.";
                        }

                        // Close the database connection
                        $conn->close();
                        ?>


                    </ul>

                </section>

            </article>


        </div>

    </main>






    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>