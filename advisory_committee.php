<!--bismillahir rahmanir rahim-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/technocracy_favicon.png" type="image/gif" sizes="16x16">
    <title>Technocracy | Advisory Panel</title>

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
     background-image: url(img/schedule-bg.png);
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
      background: #005C97;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #363795, #005C97);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #363795, #005C97); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

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
              <a class="nav-link dropdown-toggle active" style="margin-right: 30px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Committee
              </a>
              <div class="dropdown-menu text-light nav-color"; aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light active" href="advisory_committee.php">Advisory Committee</a>
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
            background: #02AAB0;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to left, #00CDAC, #02AAB0);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to left, #00CDAC, #02AAB0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
          Register Now</a>
        <br>
        <a href="#committee">
          <i class="fas fa-10x fa-sort-down text-light" style="margin-top: -70px;"></i>
        </a>
        </div>
      </div>
    </div>
    <!--home-->

    <!--advisory panel -->

    <div class="container text-center text-info py-3" style="margin-top: 30px">
      <i class="fas fa-5x fa-users"></i>
      <p style="font-size: 20px">
        Advisory Committee
      </p>
      <hr class="bg-info">
    </div>

    <div class="container" id="committee" style="padding-top: 0px; padding-bottom: 100px">

      <div class="row text-light">
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Dr. Md. Murtoza Ali</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of EEE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Dr. Muhammad Abdul Goffar Khan</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of EEE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
      </div>

      <div class="row text-light">
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. Md. Shahid Uz Zaman</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of CSE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. S. M. Abdur Razzak</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of EEE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
      </div>

      <div class="row text-light">
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Dr. Md. Nazrul Islam Mondal</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of CSE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. Md. Rabiul Islam</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of CSE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
      </div>

      <div class="row text-light">
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. Boshir Ahmed</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of CSE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. Ajay Krishno Sarkar</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of EEE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
      </div>

      <div class="row text-light">
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. Md. Faruk Hossain</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of EEE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="card ami-tazbinur" id="" style="">
           <div class="card-body">
             <h5 class="card-title lead"><i class="far fa-user-circle" style="padding-right: 5px"></i> Professor Dr. Md. Selim Hossain</h5>
             <h6 class="card-subtitle lead mb-2 text-light" style="font-size: 15px"><i class="far fa-address-card" style="padding-right: 8px; padding-left: 2px"></i> Professor</h6>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-university" style="padding-right: 10px; padding-left: 4px"></i> Department of EEE</text><br>
             <text class="lead text-light" style="font-size: 13px"><i class="fas fa-map-marker-alt" style="padding-right: 10px; padding-left: 5px"></i> Rajshahi University of Engineering & Technology</text>
           </div>
         </div>
        </div>
      </div>

    </div>
    <!--advisory panel-->

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
    <script src="js/smooth-scroll.js">

    </script>
  </body>


</html>
