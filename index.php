<!--bismillahir rahmanir rahim-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/technocracy_favicon.png" type="image/gif" sizes="16x16">
    <title>Technocracy | Home</title>

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
   width: 100%;
   background-image: url(img/bg/home-bg.png);
   background-size: cover;
   background-position: center;

  }

    @media screen and (min-width: 1000px) {
    #tazbinur-rahaman{
        display: block;
      }
    #tazbinur{
      display: none;
      }
    }

    @media screen and (max-width: 999px) {
    #tazbinur-rahaman{
        display: none;
      }
    #tazbinur{
      display: block;
      }
    }
  </style>
  <body>
    <!--my code goes here-->

    <!--navabar-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top" style="background-color: rgba(58, 42, 120, 1);">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="font-family: 'Orbitron', sans-serif;">
          T E C H N O C R A C Y</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: 'Titillium Web', sans-serif;">
          <hr class="bg-light">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" style="margin-right: 30px" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Segments
              </a>
              <div class="dropdown-menu text-light" style="background-color: rgba(58, 42, 120, 1);" aria-labelledby="navbarDropdown">
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
              <a class="nav-link dropdown-toggle" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Committee
              </a>
              <div class="dropdown-menu text-light" style="background-color: rgba(58, 42, 120, 1);" aria-labelledby="navbarDropdown">
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

    <!--large home-->
    <div class="" id="tazbinur-rahaman">
      <div class="" id="banner">
        <div class="container">
          <div class="row" style="font-family: 'Orbitron', sans-serif; padding-top: 100px">
            <div class="col-6">
              <p class="text-light" style="margin-top: 50px">
                <text style="letter-spacing: 15px">GET READY FOR</text>
                <hr class="bg-light">
                <text style="font-size: 70px; letter-spacing: 5px" class="text-light">TECHNOCRACY</text>
                <br>
                <text style="font-size: 50px; letter-spacing: 60px" class="text-light">2019</text>
              </p>
              <br> <br>
              <a href="registration.php" class="btn btn-md text-light" style="width: 300px; border-radius: 50px; background: #fc00ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #00dbde, #fc00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">Register Now</a>

            </div>
            <div class="col-6">
              <img src="img/title-logo2.png" style="width: 400px; margin-left: 100px" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--large home-->

    <!--small home-->
    <div class="" id="tazbinur">
      <div class="" id="banner">
        <div class="container">
          <div class="row text-light text-center" style="font-family: 'Orbitron', sans-serif;">
            <div class="col-12">
              <p style="padding-top: 100px">
                <text style="letter-spacing: 10px">GET READY FOR</text>
                <hr class="bg-light">
              <text style="font-size: 30px; letter-spacing: 5px">
                TECHNOCRACY
              </text>
              <br>
              <text style="font-size: 40px; letter-spacing: 30px">
                2019
              </text>
              </p>
            </div>
            <div class="col-12" style="margin-left: 0px">
              <img src="img/title-logo3.png" style="width: 190px; padding-top: 30px; z-index: -1" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--small home-->

    <div class="container text-center">
      <img src="img/technocracy_circle.png" style="width: 200px; margin-top: -50px;" alt="">
      <p> <br> <br>
        <text style="font-size: 20px; letter-spacing: 10px; font-family: 'Orbitron', sans-serif; color: rgb(147, 2, 164)">TECHNOCRACY 2019</text> <br><br>
        <text class="text-muted" style="font-size: 10px; letter-spacing: 5px; font-family: 'Orbitron', sans-serif">Organized by Department of Electrical & Computer Engineering (ECE) <br>
        Rajshahi University of Engineering & Technology (RUET)</text>
      </p>
    </div>

    <!--large front video -->
    <div class="container" id="tazbinur-rahaman" style="margin-top: 50px; margin-bottom: 50px">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GNRvqWRaAw4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
          <hr style="background-color: #794292">
          <p class="text-muted text-justify" style="font-family: 'Titillium Web', sans-serif; font-size: 14px; margin-top: 0px"><text style="color: #794292">Technocracy 2019</text> is going to be one of the biggest tech carnivals for the enthusiastic mega
          minds of Bangladesh, will be organized by the Department of Electrical & Computer
          Engineering (ECE), RUET. This competition is open for all the undergraduate students from
          Bangladesh. The aim of Technocracy 2019 is to blend all the engineering know-hows to
          meet the social and global challenges. It also aims to create a platform for the enthusiastic
          students of top universities here in Bangladesh to showcase their talents and skills. This
          event also aims at bringing out the capabilities of the students and introduce them with the
          world. <br>
          <i class="text-success"> N. B.: The Top Ten (10) projects in this event will be given the chance to be published in
          RUET Journal. And all the technical supports will be provided to these projects by the
          executive committee of Technocracy 2019.</i></p>
          <hr style="background-color: #794292">
        </div>
      </div>

      <br><br>

      <div class="row">
        <div class="col-md-6 col-sm-12">
          <hr style="background-color: #794292; margin-top: 10px">
          <p class="text-muted text-justify" style="font-family: 'Titillium Web', sans-serif; font-size: 14px; margin-top: 0px"><text style="color: #794292">Technocracy 2018</text> – organized by the <text style="color: #794292"> Department of Electrical & Computer Engineering (ECE), RUET</text>, was an intra-university tech-skill showcasing. It was the first ever tech event in RUET which targeted many of the demanding technical sectors that we have embraced recently in Bangladesh – focusing on Robotics, Electronics, Programming, Web Development, Graphics Design and Art. During the event, the number of participants reached to a whopping 250, which definitely was a large number for such an intra-varsity tech event. In terms of achievement, Technocracy 2018 was a huge success. The winning team (Team Drogon) of this event went to take part in an international event titled IEEE SS12 2018 in Sri Lanka and they were placed 4th in Maker Fair contest.<br><br>
          Thus, the widespread appraisal, hunger for technology and the positivity of the participants have inspired us to spread the spark this time from campus-wide to nation-wide.</p>
          <hr style="background-color: #794292">
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-iugJQ6fRw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <!--large front video -->

    <!--small front video -->
    <div class="container" id="tazbinur" style="margin-top: 50px; margin-bottom: 50px">
      <div class="row">
        <div class="col-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/GNRvqWRaAw4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-12">
          <hr style="background-color: #794292">
          <p class="text-muted text-justify" style="font-family: 'Titillium Web', sans-serif; font-size: 14px; margin-top: 0px"><text style="color: #794292">Technocracy 2019</text> is going to be one of the biggest tech carnivals for the enthusiastic mega
          minds of Bangladesh, will be organized by the Department of Electrical & Computer
          Engineering (ECE), RUET. This competition is open for all the undergraduate students from
          Bangladesh. The aim of Technocracy 2019 is to blend all the engineering know-hows to
          meet the social and global challenges. It also aims to create a platform for the enthusiastic
          students of top universities here in Bangladesh to showcase their talents and skills. This
          event also aims at bringing out the capabilities of the students and introduce them with the
          world. <br>
          <i class="text-success"> N. B.: The Top Ten (10) projects in this event will be given the chance to be published in
          RUET Journal. And all the technical supports will be provided to these projects by the
          executive committee of Technocracy 2019.</i></p>
          <hr style="background-color: #794292">
        </div>
      </div>



      <div class="row">
        <div class="col-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/-iugJQ6fRw8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <!--small front video -->

    <p class="text-center lead" style="font-family: 'Orbitron', sans-serif; color: rgba(58, 42, 120, 0.9); font-size: 30px">
      <span class="px-3" style="background-color: rgb(255, 255, 255)">
       Hear From Us
     </span>
    </p>
    <hr style="margin-top: -38px; background-color: rgba(58, 42, 120, 0.9);">
     <br> <br>

    <!-- large interview video -->
      <div class="" id="tazbinur-rahaman" style="padding-top: 100px; padding-bottom: 100px; background-color: #e7e6e6">
        <div class="container">

          <div class="row text-light" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-12 col-md-6">
              <div class="embed-responsive embed-responsive-16by9 tazbinur-video" style="z-index: 2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/rO-ibRoiJlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="card tazbinur-video-card" style="width: 570px ; height: 270px; margin-top: 15px; margin-left: -50px; z-index: 1;" >
                <div class="card-body" style="margin-left: 30px">
                  <h5 class="card-title" style="font-size: 30px; margin-top: 30px">Message From Vice Chancellor</h5>
                  <h6 class="card-subtitle mb-2" style="font-size: 20px">Prof. Dr. Md. Rafiqul Islam Sheikh</h6>
                  <hr class="bg-light" style="width: 80%">
                  <p class="card-text">TECHNOCRACY 2019<br>
                    Department of Electrical & Computer Engineering (ECE)
                    Rajshahi University of Engineering & Technology (RUET)
                  </p>
                </div>
              </div>
            </div>
          </div>

          <br><br>

          <div class="row text-light" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-12 col-md-6">
              <div class="card tazbinur-video-card" style="width: 570px ; height: 270px; margin-top: 15px; margin-right: -50px; z-index: 1;
                box-shadow: -25px 19px 24px -13px rgba(0,0,0,0.75);
                -webkit-box-shadow: -25px 19px 24px -13px rgba(0,0,0,0.75);
                -moz-box-shadow: -25px 19px 24px -13px rgba(0,0,0,0.75);" >
                <div class="card-body" style="margin-left: 30px">
                  <h5 class="card-title" style="font-size: 30px; margin-top: 30px">Message From Dean</h5>
                  <h6 class="card-subtitle mb-2" style="font-size: 20px"> S. M. Abdur Razzak </h6>
                  <hr class="bg-light" style="width: 80%">
                  <p class="card-text">TECHNOCRACY 2019<br>
                    Department of Electrical & Computer Engineering (ECE)
                    Rajshahi University of Engineering & Technology (RUET)
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="embed-responsive embed-responsive-16by9" style="margin-left: -50px; z-index: 2; box-shadow: -25px 19px 24px -13px rgba(0,0,0,0.75);
                -webkit-box-shadow: -25px 19px 24px -13px rgba(0,0,0,0.75);
                -moz-box-shadow: -25px 19px 24px -13px rgba(0,0,0,0.75);">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AdjHC0A5M70" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <br><br>

          <div class="row text-light" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-sm-12 col-md-6">
              <div class="embed-responsive embed-responsive-16by9 tazbinur-video" style="z-index: 2;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UhVlZ2JpRyk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="card tazbinur-video-card" style="width: 570px ; height: 270px; margin-top: 15px; margin-left: -50px; z-index: 1;" >
                <div class="card-body" style="margin-left: 30px">
                  <h5 class="card-title" style="font-size: 30px; margin-top: 30px">Message From Head of The Dept.</h5>
                  <h6 class="card-subtitle mb-2" style="font-size: 20px">Dr. Md. Shamim Anower </h6>
                  <hr class="bg-light" style="width: 80%">
                  <p class="card-text">TECHNOCRACY 2019<br>
                    Department of Electrical & Computer Engineering (ECE)
                    Rajshahi University of Engineering & Technology (RUET)
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    <!-- large interview video -->

    <!-- small interview video -->
      <div class="" id="tazbinur" style="padding-top: 50px; padding-bottom: 100px; background-color: #e7e6e6">
        <div class="container">

          <div class="row text-light text-center" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-12">
              <div class="embed-responsive embed-responsive-16by9 tazbinur-video" style="z-index: 2">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/rO-ibRoiJlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-12">
              <div class="card tazbinur-video-card" style="width:100% ; height: 370px; margin-top: -50px; z-index: 1;" >
                <div class="card-body" style="">
                  <h5 class="card-title" style="font-size: 30px; margin-top: 80px">Message From Vice Chancellor</h5>
                  <h6 class="card-subtitle mb-2" style="font-size: 20px">Prof. Dr. Md. Rafiqul Islam Sheikh</h6>
                  <hr class="bg-light" style="width: 80%">
                  <p class="card-text">TECHNOCRACY 2019<br>
                    Rajshahi University of Engineering & Technology (RUET)
                  </p>
                </div>
              </div>
            </div>
          </div>

          <br><br>

          <div class="row text-light text-center" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-12">
              <div class="embed-responsive embed-responsive-16by9 tazbinur-video" style="z-index: 2">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AdjHC0A5M70" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-12">
              <div class="card tazbinur-video-card" style="width:100% ; height: 370px; margin-top: -50px; z-index: 1;" >
                <div class="card-body" style="">
                  <h5 class="card-title" style="font-size: 30px; margin-top: 80px">Message From Dean</h5>
                  <h6 class="card-subtitle mb-2" style="font-size: 20px"> S. M. Abdur Razzak </h6>
                  <hr class="bg-light" style="width: 80%">
                  <p class="card-text">TECHNOCRACY 2019<br>
                    Faculty of Electrical & Computer Engineering (ECE) <br>
                    Rajshahi University of Engineering & Technology (RUET)
                  </p>
                </div>
              </div>
            </div>
          </div>

          <br><br>

          <div class="row text-light text-center" style="font-family: 'Titillium Web', sans-serif;">
            <div class="col-12">
              <div class="embed-responsive embed-responsive-16by9 tazbinur-video" style="z-index: 2">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/UhVlZ2JpRyk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-12">
              <div class="card tazbinur-video-card" style="width:100% ; height: 370px; margin-top: -50px; z-index: 1;" >
                <div class="card-body" style="">
                  <h5 class="card-title" style="font-size: 30px; margin-top: 60px">Message From Head of The Dept.</h5>
                  <h6 class="card-subtitle mb-2" style="font-size: 20px"> Dr. Md. Shamim Anower </h6>
                  <hr class="bg-light" style="width: 80%">
                  <p class="card-text">TECHNOCRACY 2019<br>
                    Department of Electrical & Computer Engineering (ECE) <br>
                    Rajshahi University of Engineering & Technology (RUET)
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    <!-- small interview video -->

    <!--supports -->
    <div class="container text-center">
      <br> <br>
      <p class="text-center lead" style="font-family: 'Titillium Web', sans-serif; color: rgba(58, 42, 120, 0.9); font-size: 20px">
        <span class="" style="background-color: rgb(255, 255, 255); padding-left: 30px; padding-right: 30px">
         Supported By
       </span>
      </p>
      <hr style="margin-top: -31px; background-color: rgba(58, 42, 120, 0.9);">
      <br>

      <img src="img/support/1.png" style="width: 100px" class="mx-2 my-2" alt="">
      <img src="img/support/2.png" style="width: 150px" class="mx-2 my-2" alt="">
      <img src="img/support/3.png" style="width: 50px" class="mx-2 my-2" alt="">

      <br> <br> <br>
    </div>
    <!--supports-->

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
  </body>

  <script type="">
  //fade-in-out
    AOS.init({
      easing: 'ease-in-quad',
    });
  </script>

</html>
