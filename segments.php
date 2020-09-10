<!--bismillahir rahmanir rahim-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/technocracy_favicon.png" type="image/gif" sizes="16x16">
    <title>Technocracy | Segments</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <style media="screen">
  #banner{
   margin-top: 0px;
   height: 500px;
   background-image: url(img/segment-bg.png);
   background-size: cover;
   background-position: center;

   box-shadow: 10px 10px 23px 0px rgba(0,0,0,0.75);
  -webkit-box-shadow: 10px 10px 23px 0px rgba(0,0,0,0.75);
  -moz-box-shadow: 10px 10px 23px 0px rgba(0,0,0,0.75);
  }

  @media screen and (min-width: 800px) {
  #tazbinur-rahaman{
      display: block;
    }
  #tazbinur{
    display: none;
    }
  }

  @media screen and (max-width: 799px) {
  #tazbinur-rahaman{
      display: none;
    }
  #tazbinur{
    display: block;
    }
  }

}
  </style>
  <body>
    <!--my code goes here-->

    <!--navabar-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: rgba(4, 2, 85, 0.93);">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="font-family: 'Orbitron', sans-serif;">
          T E C H N O C R A C Y</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: 'Titillium Web', sans-serif;">
          <hr class="bg-light">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" style="margin-right: 30px" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Segments
              </a>
              <div class="dropdown-menu text-light" style="background-color: rgba(4, 2, 85, 0.93);" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light active" href="segments.php">All Segments</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-light" href="line_follower.php">Line Follower</a>
                <a class="dropdown-item text-light" href="project_show.php">Project Showcase</a>
                <a class="dropdown-item text-light" href="poster_presentation.php">Poster Presentation</a>
                <a class="dropdown-item text-light" href="programming_contest.php">Programming Contest</a>
                <a class="dropdown-item text-light" href="animation_game.php">Animated Movie Creation/Game Develoment</a>
                <a class="dropdown-item text-light" href="fifa.php">Gaming Contest (FIFA 2019)</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right: 30px" href="schedule.php">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="margin-right: 30px" href="gallary.php">Photo Gallary</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Committee
              </a>
              <div class="dropdown-menu text-light" style="background-color: rgba(4, 2, 85, 0.93);" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light" href="advisory_committee.php">Advisory Committee</a>
                <a class="dropdown-item text-light" href="organizing_committee.php">Organizing Committee</a>
                <a class="dropdown-item text-light" href="campus.php">Campus Representatives</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--navbar-->

    <!--home-->
    <div class="" id="banner">
      <div class="container text-center" style="margin-bottom: 300px; height: 300px">
        <div style="padding-top: 150px">
          <p style="font-family: 'Orbitron', sans-serif"; class="display-4 lead text-light">
            <text style="font-size: 30px; letter-spacing:5px">TECHNOCRACY</text>
            <br>
            <text style="font-size: 50px; letter-spacing: 30px">2019</text></p>

            <a href="registration.php" class="btn btn-md text-light" style="width: 250px; border-radius: 50px; background: #fc00ff;  /* fallback for old browsers */
            background: #00F260;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        ">Register Now</a>
        <br>
          <a href="#segments">
            <i class="fas fa-10x fa-sort-down text-light" style="margin-top: -70px;"></i>
          </a>
        </div>
      </div>
    </div>
    <!--home-->

    <!--logo -->
    <div class="container">
        <div class="text-center py-5">
          <p class="lead">
            <text style="font-family: 'Orbitron', sans-serif; font-size: 20px; letter-spacing: 20px; color: rgb(147, 2, 164)">OUR SEGMENTS</text> <br>
            <i class="fas fa-5x fa-sort-down" style="margin-top: -40px; color: rgb(147, 2, 164)"></i>
          </p>
        </div>
      </div>
    </div>
    <!-- logo -->

    <!-- large segments-->
      <section id="segments">
        <div class="" id="tazbinur-rahaman" style="margin-top: -20px; padding-top: 30px; padding-bottom: 30px; background-color: rgb(232, 232, 232)">
          <div class="container text-light" style="margin-top: 70px; margin-bottom: 120px">

            <div class="row grad-two text-center tazbinur-segment-card animated animatedFadeInUp fadeInUp">
              <div class="col-4 m-auto text-center">
                <img src="img/seg_logo/lf_logo.png" alt="Line Follower" style="width: 100px;">
              </div>
              <div class="col-8 m-auto">
                <text class="lead text-left"> <strong>Line Follower Racing (Robo Speedster)</strong><hr class="bg-light"></text>
                <p class="lead text-center" style="font-size: 12px; ">
                This contest is being arranged in this event where the robots will do the racing on a track. Through this contest, the students and robot enthusiastic persons in our country will be able to verify their skills in the field of robotics. This contest will require not only theoretical, but also practical knowledge and hence it will help the participants to apply their technological know-hows in our day to day life.
              </p>
              <br>
              <a href="line_follower.php" class="btn btn-sm btn-outline-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px; margin-right: 10px">View Details</a>
              <a href="registration.php">
              <button type="button" class="btn btn-sm btn-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px;" name="button">Register Now</button>
              </a>
              </div>
            </div>

            <hr data-aos="fade-up" >

            <div data-aos="fade-up" data-aos="fade-up" class="row grad-six text-center tazbinur-segment-card">
              <div class="col-8 m-auto">
                <text class="lead text-center"> <strong>Project Showcase (Master Builder)</strong><hr class="bg-light"></text>
                <p class="lead text-center" style="font-size: 12px;">
                Project showcasing is an excellent platform where the enthusiastic talents meet with creativity and diversity. Our daily life has become technology based, nowadays. Manual work is being replaced by automatic system. So, it is necessary to increase our knowledge about technology to control and modify this automatic system. Most of the time students only gather knowledge without implementation of their ideas which has a bad impact on their capability of creation.
              </p>
              <br>
              <a href="project_show.php" class="btn btn-sm btn-outline-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px; margin-right: 10px">View Details</a>
              <a href="registration.php">
              <button type="button" class="btn btn-sm btn-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px;" name="button">Register Now</button>
              </a>
              </div>
              <div class="col-4 m-auto text-center">
                <img src="img/segments/ps.png" alt="Project Showcasing" style="width: 150px;">
              </div>
            </div>

            <hr data-aos="fade-up" >

            <div data-aos="fade-up" class="row grad-four text-center tazbinur-segment-card">
              <div class="col-4 m-auto text-center">
                <img src="img/seg_logo/pp_logo.png" alt="Poster Presentation" style="width: 110px;">
              </div>
              <div class="col-8 m-auto">
                <text class="lead text-center"> <strong>Poster Presentation (Innovative Thinker)</strong><hr class="bg-light"></text>
                <p class="lead text-center" style="font-size: 12px;">
                This is an interesting competition which is an opportunity to express idea visually on related topics. Through this competition, students will be provided platform to present their ideas not only as a solution of technical problem but also as a key for the development in technical sector. By involving themselves in designing self-explanatory posters, they will be able to gain skill in this sector.
              </p>
              <br>
              <a href="poster_presentation.php" class="btn btn-sm btn-outline-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px; margin-right: 10px">View Details</a>
              <a href="registration.php">
              <button type="button" class="btn btn-sm btn-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px;" name="button">Register Now</button>
              </a>
              </div>
            </div>

            <hr data-aos="fade-up" >

            <div data-aos="fade-up" class="row grad-one text-center tazbinur-segment-card">
              <div class="col-8 m-auto">
                <text class="lead text-center"> <strong>Programming Contest</strong><hr class="bg-light"></text>
                <p class="lead text-center" style="font-size: 12px;">
                 The aim of competitive programming is to write source code of computer programs which are able to solve given problems. A vast majority of problems appearing in programming contests are mathematical or logical in nature. Typical such tasks belong to one of the following categories: combinatory, number theory, graph theory, geometry, string analysisand data structures.
              </p>
              <br>
              <a href="programming_contest.php" class="btn btn-sm btn-outline-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px; margin-right: 10px">View Details</a>
              <a href="registration.php">
              <button type="button" class="btn btn-sm btn-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px;" name="button">Register Now</button>
              </a>
              </div>
              <div class="col-4 m-auto text-center">
                <img src="img/segments/pc.png" alt="Programming Contest" style="width: 140px;">
              </div>
            </div>

            <hr data-aos="fade-up" >

            <div data-aos="fade-up" class="row grad-three text-center tazbinur-segment-card">
              <div class="col-4 m-auto text-center">
                <img src="img/segments/m.png" alt="Animated movie/Game dev" style="width: 150px;">
              </div>
              <div class="col-8 m-auto">
                <text class="lead text-center"> <strong>Animated Movie Creation/ GameDevelopment Contest</strong><hr class="bg-light"></text>
                <p class="lead text-center" style="font-size: 12px;">
                Animation is an intuitive art form- just like a canvas painting. It is a mix of imagination, creativity, meaning, colors and a story. In fact, it is the only medium that has a dimension of storytelling in it. Animation is the only medium that can bring fantasies to life. As for as its importance, animation has evolved through the years and have touched every single domain. Teachers have been heavily implementing animation in their teaching strategy to help their students understand the concepts that cannot be imagined or perceived.
              </p>
              <br>
              <a href="animation_game.php" class="btn btn-sm btn-outline-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px; margin-right: 10px">View Details</a>
              <a href="registration.php">
              <button type="button" class="btn btn-sm btn-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px;" name="button">Register Now</button>
              </a>
              </div>
            </div>

            <hr data-aos="fade-up" >

            <div data-aos="fade-up" class="row grad-eight text-center tazbinur-segment-card">
              <div class="col-8 m-auto">
                <text class="lead text-center"> <strong>Gaming Contest (FIFA 2019)</strong><hr class="bg-light"></text>
                <p class="lead text-center" style="font-size: 12px;">
                 Playing games makes people aware of their environment i.e. makes them mentally awake and increases their concentration power. It also increases their thinking ability and teaches them the power of teamwork and to find a way out of difficult situations. Cooperation among each other and importance of following certain rules can be taught through this type of gaming contests..
              </p>
              <br>
              <a href="fifa.php" class="btn btn-sm btn-outline-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px; margin-right: 10px">View Details</a>
              <a href="registration.php">
              <button type="button" class="btn btn-sm btn-light" style="width: 150px; border-radius: 100px; margin-top: -40px; font-size: 10px;" name="button">Register Now</button>
              </a>
              </div>
              <div class="col-4 m-auto text-center">
                <img src="img/seg_logo/fifa_logo.png" alt="Fifa Contest" style="width: 100px;">
              </div>
            </div>

          </div>
        </div>
      </section>
    <!-- large segments-->

    <!-- small segments-->
      <div class="" id="tazbinur" style="margin-top: -20px; padding-top: 30px; padding-bottom: 30px; background-color: rgb(232, 232, 232)">
        <div class="container text-light" style="margin-top: 70px; margin-bottom: 120px">

          <!-- iron man died -->
          <div data-aos="fade-up" class="container mx-auto row grad-two text-center tazbinur-segment-card">
            <div class="col-12 m-auto text-center">
              <img src="img/seg_logo/lf_logo.png" alt="Line Follower" style="width: 100px;">
            </div>
            <!--  -->
            <div class="col-12 m-auto">
              <text class="lead text-left"> <strong>Line Follower Racing (Robo Speedster)</strong><hr class="bg-light"></text>

            <a href="line_follower.php" class="btn btn-sm btn-outline-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;">View Details</a>

            <a href="registration.php" class="btn btn-sm btn-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;" name="button">Register Now</a>
            </div>
          </div>
          <!-- iron man died -->

          <hr data-aos="fade-up" >

          <!-- iron man died -->
          <div data-aos="fade-up" class="container mx-auto row grad-six text-center tazbinur-segment-card">
            <div class="col-12 m-auto text-center">
              <img src="img/segments/ps.png" alt="Project Showcasing" style="width: 150px;">
            </div>
            <!--  -->
            <div class="col-12 m-auto">
              <text class="lead text-center"> <strong>Project Showcase (Master Builder)</strong><hr class="bg-light"></text>

            <a href="project_show.php" class="btn btn-sm btn-outline-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;">View Details</a>

            <a href="registration.php" class="btn btn-sm btn-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;" name="button">Register Now</a>
            </div>
          </div>
          <!-- iron man died -->

          <hr data-aos="fade-up" >

          <!-- iron man died -->
          <div data-aos="fade-up" class="container mx-auto row grad-four text-center tazbinur-segment-card">
            <div class="col-12 m-auto text-center">
              <img src="img/seg_logo/pp_logo.png" alt="Poster Presentation" style="width: 110px;">
            </div>
            <!--  -->
            <div class="col-12 m-auto">
              <text class="lead text-center"> <strong>Poster Presentation (Innovative Thinker)</strong><hr class="bg-light"></text>

            <a href="poster_presentation.php" class="btn btn-sm btn-outline-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;">View Details</a>

            <a href="registration.php" class="btn btn-sm btn-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;" name="button">Register Now</a>
            </div>
          </div>
          <!-- iron man died -->

          <hr data-aos="fade-up" >

          <!-- iron man died -->
          <div data-aos="fade-up" class="container mx-auto row grad-one text-center tazbinur-segment-card">
            <div class="col-12 m-auto text-center">
              <img src="img/segments/pc.png" alt="Programming Contest" style="width: 140px;">
            </div>
            <!--  -->
            <div class="col-12 m-auto">
              <text class="lead text-center"> <strong>Programming Contest</strong><hr class="bg-light"></text>

            <a href="programming_contest.php" class="btn btn-sm btn-outline-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;">View Details</a>

            <a href="registration.php" class="btn btn-sm btn-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;" name="button">Register Now</a>
            </div>
          </div>
          <!-- iron man died -->

          <hr data-aos="fade-up" >

          <!-- iron man died -->
          <div data-aos="fade-up" class="container mx-auto row grad-three text-center tazbinur-segment-card">
            <div class="col-12 m-auto text-center">
              <img src="img/segments/m.png" alt="Animated movie/Game dev" style="width: 150px;">
            </div>
            <!--  -->
            <div class="col-12 m-auto">
              <text class="lead text-center"> <strong>Animated Movie Creation/ GameDevelopment Contest</strong><hr class="bg-light"></text>

            <a href="animation_game.php" class="btn btn-sm btn-outline-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;">View Details</a>

            <a href="registration.php" class="btn btn-sm btn-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;" name="button">Register Now</a>
            </div>
          </div>
          <!-- iron man died -->

          <hr data-aos="fade-up" >

          <!-- iron man died -->
          <div data-aos="fade-up" class="container mx-auto row grad-eight text-center tazbinur-segment-card">
            <div class="col-12 m-auto text-center">
                <img src="img/seg_logo/fifa_logo.png" alt="Fifa Contest" style="width: 100px;">
            </div>
            <!--  -->
            <div class="col-12 m-auto">
              <text class="lead text-center"> <strong>Gaming Contest (FIFA 2019)</strong><hr class="bg-light"></text>

            <a href="fifa.php" class="btn btn-sm btn-outline-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;">View Details</a>

            <a href="registration.php" class="btn btn-sm btn-light mx-1" style="width: 150px; border-radius: 100px; margin-bottom: 10px; font-size: 10px;" name="button">Register Now</a>
            </div>
          </div>
          <!-- iron man died -->

        </div>
      </div>
    <!-- small segments-->

    <!--footer-->
    <?php
      include 'footer.php';
     ?>
    <!--footer-->

    <!--my code goes here-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="js/smooth-scroll.js"></script>
  </body>

</html>
