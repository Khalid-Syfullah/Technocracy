<!--bismillahir rahmanir rahim-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/technocracy_favicon.png" type="image/gif" sizes="16x16">
    <title>Technocracy | Schedule</title>

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
   background-image: url(img/bg/campus.png);
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

  .nav-color{
    background: #134E5E;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #71B280, #134E5E);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #71B280, #134E5E); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }

  </style>
  <body>
    <!--my code goes here-->

    <!--navabar-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top nav-color";>
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
              <a class="nav-link dropdown-toggle" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Segments
              </a>
              <div class="dropdown-menu text-light nav-color"; aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light" href="segments.php">All Segments</a>
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
              <a class="nav-link active dropdown-toggle" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Committee
              </a>
              <div class="dropdown-menu text-light nav-color"; aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light" href="advisory_committee.php">Advisory Committee</a>
                <a class="dropdown-item text-light" href="organizing_committee.php">Organizing Committee</a>
                <a class="dropdown-item text-light active" href="campus.php">Campus Representatives</a>
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
      <div class="container text-center" style="margin-bottom: 200px; height: 300px">
        <div style="padding-top: 200px">
          <p style="letter-spacing: 5px"; class="lead text-light">
            <text style="font-size: 30px; font-family: 'Orbitron', sans-serif;">
              Be Our Presentative <br>
            </text>
            <text style="letter-spacing: 10px; font-family: 'Titillium Web', sans-serif;">
              Help your campus to reach us.
            </text>
          </p>
        <a href="#schedule">
          <i class="fas fa-10x fa-sort-down text-light" style="margin-top: -70px;"></i>
        </a>
        </div>
      </div>
    </div>
    <!--home-->


    <!--campus-->
      <section id="schedule" style="font-family: 'Titillium Web', sans-serif; margin-top: 100px">
        <div class="" style="background-color: #e7e6e6; padding-top: 50px; padding-bottom: 150px">
          <div class="container text-center">

            <i>
              <p class="text-success lead" style="font-size: 30px">
                <i class="fas fa fa-bullhorn"></i> <br>
                Call for Campus Representative.
              </p>

              <hr class="bg-success" style="width: 70%">

              <p class="text-muted text-justify">
                After successfully organizing the an Inter University Tech  Carnival Call <i class="text-success">“TECHNOCRACY 2018”, the Department of Electrical & Computer Engineering (ECE) </i> is back with a blast this year. RUET alongside Department of Electrical & Computer Engineering is going to Organize <strong class="text-success"> “TECHNOCRACY 2019” </strong>, a nationwide Tech Carnival for all the Tech fanatics. <br> <br>
                “TECHNOCRACY 2019” has brought some great challenges & opportunities to all the tech enthusiast nationwide. There will be <i class="text-success">ROBO speedster, Master Builder, Innovation Thinker, Programming contest, Animated Movie Creation/Game Development & FIFA 19 Gaming contest</i>. All the segments are going to be judged by renowned professionals form around our country but also from abroad. There will also be guests from around the globe to spectate your glory. They will also take seminars & give their personal point of views to everyone. <br> <br>
                <strong class="text-success">Not only is this event a national event but also international as it is directly linked to IEEE (Institute of Electrical and Electronics Engineers). IEEE will give the chance to some spectacular projects to participate in the upcoming event SS12 2019 in Thailand. </strong> <br> <br>
                So, we are giving you a life time opportunity to be a part of this phenomenal event. We are looking for worthy Campus Representatives who can contribute in representing our event to your university. Your leadership & perseverance is essentially need to reach this event to everyone out there. So this is your moment to be a part of something huge.
                So anyone interested in receiving the responsibilities of being a Campus Representative can fill the form given in the google doc form. The campus representatives also has the opportunities to attend this mega event including the seminars for fee. You will be provided with represtative certificate along with breakfast lunch & snacks throughout the event  by the authority. So if you think you are worthy then don’t miss this opportunity. <br> <br>

              </p>

              <i class="far fa-3x fa-check-circle text-success"></i> <br> <br>
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7yls2nNQiQHy-RBKV2dtC_uV5MPUXWMtM_iL91CW-VBcyJg/viewform?usp=sf_link" class="btn btn-success px-5" target="_blank">Apply for Campus Representative</a>
            </i>

          </div>
        </div>
      </section>
    <!--campus-->

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

  <script type="">
  //fade-in-out
    AOS.init({
      easing: 'ease-in-quad',
    });
  </script>

</html>
