<?php
//html from WYSIWYG sections
$our_team = file_get_contents('https://pt.umaryland.edu/research/enrich-lab/our-team.html');
$research_areas = file_get_contents('https://pt.umaryland.edu/research/enrich-lab/research-areas.html');
$clinical_studies = file_get_contents('https://pt.umaryland.edu/research/enrich-lab/clinical-studies.html');
$news = file_get_contents('https://pt.umaryland.edu/research/enrich-lab/news.html');
$events = file_get_contents('https://pt.umaryland.edu/research/enrich-lab/events.html');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ENRICH Lab</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://pt.umaryland.edu/media/SOM/Departments/PTRS/assets/ENRICH-Lab/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        .error {color: #FF0000;}
        </style>
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">ENRICH Lab</a>

                <button class="navbar-toggler text-uppercase font-weight-bold bg-danger text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#our-team">Our Team</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#research-areas">Research Areas</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#studies">Clinical Studies</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#news">News</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#upcoming-events">Events</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!-- <img class="masthead-avatar mb-5 bg-img" src="assets/img/banner.jpeg" alt="..." /> -->
                <!-- Masthead Heading-->
                <img src="https://pt.umaryland.edu/media/SOM/Departments/PTRS/assets/ENRICH-Lab/logo.png" width="200px" alt="Avatar Logo" class="rounded-pill">
                <h1 class="masthead-heading text-uppercase mb-0"><span class="text-danger">En</span>hancing <span class="text-danger">R</span>ehabilitation to <span class="text-danger">I</span>mprove <span class="text-danger">C</span>ommunity <span class="text-danger">H</span>ealth</h1>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">We aim to reduce participation and mobility inequities among older adults.</p>
            </div>
        </header>

        <!-- Our Team Section-->
        <section class="page-section mb-0 bg-dark text-primary" id="our-team">
            <div class="container">
                <!-- Our Team Section Heading-->
                <h2 class="page-section-heading text-warning text-center text-uppercase mb-5">Our Team</h2>
                <!-- Our Team Section Content-->
                <?php echo "$our_team"?>
            </div>
        </section>

        <!-- Research Areas Section-->
        <section class="page-section portfolio" id="research-areas">
            <div class="container">
                <!-- Research Areas Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Research Areas</h2>
                <!-- Research Areas Section Content-->
                <?php echo "$research_areas"?>
            </div>
        </section>

        <!-- Research Areas Section-->
        <section class="page-section bg-dark text-primary" id="studies">
            <div class="container">
              <h2 class="page-section-heading text-center text-uppercase text-danger mb-5">Clinical Studies</h2>
              <div class="table-resonsive">
                <?php echo "$clinical_studies"?>
              </div>
            </div>
        </section>


        <!-- News Section-->
        <section class="page-section bg-primary text-white" id="news">
            <div class="container">
                <!-- News Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-light mb-5">News</h2>
                <!-- News Section Content-->
                <?php echo "$news"?>
                <div class="col-md-8 mx-auto">
                  <a class="twitter-timeline" data-width="100%" data-height="700" data-theme="dark" href="https://twitter.com/ENRICH_UMB?ref_src=twsrc%5Etfw">Tweets by ENRICH_UMB</a>
                  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </section>

        <!-- Events Section-->
        <section class="page-section" id="upcoming-events">
            <div class="container">
                <!-- Event Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Upcoming Events</h2>
                <!-- Event Section Content-->
                <div class="common_calendar">
                  <div class="calendar_events">
                  <?php echo "$events"?>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!-- Contact Section-->
        <section class="page-section bg-dark text-primary" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-danger text-uppercase text-secondary mb-5">Contact Us</h2>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <?php
                        // define variables and set to empty values
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["name"])) {
                            $nameErr = "* Name is required";
                          } else {
                            $name = test_input($_POST["name"]);
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                              $nameErr = "Only letters and white space allowed";
                            }
                          }

                          if (empty($_POST["email"])) {
                            $emailErr = "* Email is required";
                          } else {
                            $email = test_input($_POST["email"]);
                            // check if e-mail address is well-formed
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              $emailErr = "Invalid email format";
                            }
                          }

                          if (empty($_POST["message"])) {
                            $messageErr = "* Message is required";
                          } else {
                            $message = test_input($_POST["message"]);
                          }

                          if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
                            echo '<script type="text/javascript">
                              $(document).ready(function(){
                                window.location.replace("http://pt.umaryland.edu/research/enrich-lab/contact.php");
                              });
                            </script>';
                          }else{
                            echo '<script type="text/javascript">
                              $(document).ready(function(){
                                $("#contactConfirmation").modal("show");
                              });
                            </script>';
                          }

                        }

                        function test_input($data) {
                          $data = trim($data);
                          $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                          return $data;
                        }
                        ?>

                        <form class="needs-validation" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."/ value="<?php echo $name;?>" required>
                                <label for="name">Full name</label>
                                <div class="error"><?php echo $nameErr;?></div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" / value="<?php echo $email;?>" required>
                                <label for="email">Email address</label>
                                <div class="error"><?php echo $emailErr;?></div>
                                <!-- <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div> -->
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required><?php echo $message;?></textarea>
                                <label for="message">Message</label>
                                <div class="error"><?php echo $messageErr;?></div>
                                <!-- <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div> -->
                            </div>
                            <!-- Submit Button-->
                            <input type="submit" name="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Allied Health Research Building
                            <br>
                            100 S. Penn Street
                            <br>
                            Baltimore, MD 21201
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <!--
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                  -->
                </div>
            </div>
        </footer>

        <!-- The Modal -->
        <div class="modal" id="contactConfirmation">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal body -->
              <div class="modal-body">
                <div class="error"><?php echo $nameErr;?></div>
                <div class="error"><?php echo $emailErr;?></div>
                <div class="error"><?php echo $messageErr;?></div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>

            </div>
          </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
