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
            <a class="navbar-link  " href="index.php">About</a>
          </li>

          <li class="navbar-item">
            <a class="navbar-link active" href="resume.php">Resume</a>
          </li>

          <li class="navbar-item">
            <a class="navbar-link" href="projects.php" >Portfolio</a>
          </li>


          <li class="navbar-item">
            <a class="navbar-link" href="contacts.php">Contact</a>
          </li>
        </ul>

      </nav>





    

      <article class="resume active" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">MSc Information Technology, BlueCrest University</h4>

              <span>2022 — 2024</span>

              <p class="timeline-text">
                Expanding my knowledge and understanding in the cutting-edge technologies for solving problems. With major in Data Science, AI, Web Dev, and Systems Desgin
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">BSc Computing Science, Coventry University</h4>

              <span>2018 — 2019</span>

              <p class="timeline-text">
                Deeper understanding into Algorithms, Systems Design and Implementation, Entrepreneurship, and Software Engineering.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">HND in Computer Networking, Koforidua Polytechnic</h4>

              <span>2010 — 2013</span>

              <p class="timeline-text">
                Major in Network Engineering, Data Structures, Software Engineering, and Electronics
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Technology Teaching Fellow, MEST Africa</h4>

              <span>2022 — Present</span>

              <p class="timeline-text">
                Teaching and mentoring startups in full-stack technologies (ie. Web Frontend, Backend Engineering, Server Architecture and DevOps)
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">VP. Of Web and Enterprise Engineering, KudiGo Inc</h4>

              <span>2018 — Present</span>

              <p class="timeline-text">
              Responsible for coordinating web application development, troubleshooting problems, integrating into other applications,and managing solutions for our enterprise partners.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Solutions Architect, SFEPlus</h4>

              <span>2017 — Present</span>

              <p class="timeline-text">
              Provided technical support to our major clients including Coca-Cola where I manage 6 countries; building intuitive dashboards with Power BI and Excel on their data warehouse. 
An conducts data analysis, system updates, and business intelligence analysis for Lucozade
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Angular, Web Frontend with Typescript and JS</h5>
                <data value="80">100%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 100%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Technology Education</h5>
                <data value="70">98%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 98%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Backend Engineering with Django, Python and PostgreSQL</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Data Science and ML with Python</h5>
                <data value="50">88%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 88%;"></div>
              </div>

            </li>
            <li class="skills-item">

<div class="title-wrapper">
  <h5 class="h5">Business Intelligence with Power BI</h5>
  <data value="50">86%</data>
</div>

<div class="skill-progress-bg">
  <div class="skill-progress-fill" style="width: 86%;"></div>
</div>

</li>

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