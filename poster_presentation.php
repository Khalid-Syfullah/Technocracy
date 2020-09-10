<!--bismillahir rahmanir rahim-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/technocracy_favicon.png" type="image/gif" sizes="16x16">
    <title>Technocracy | Line Follower</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <style media="screen">
    .lf-navbar{
      background: #8E2DE2;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  }
    #banner{
     margin-top: 0px;
     height: 700px;
     background-image: url(img/bg/pp-bg.png);
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

  </style>
  <body>
    <!--my code goes here-->

    <!--navabar-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top lf-navbar">
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
              <div class="dropdown-menu text-light lf-navbar" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-light" href="segments.php">All Segments</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-light" href="line_follower.php">Line Follower</a>
                <a class="dropdown-item text-light" href="project_show.php">Project Showcase</a>
                <a class="dropdown-item text-light active" href="poster_presentation.php">Poster Presentation</a>
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
              <div class="dropdown-menu text-light lf-navbar" aria-labelledby="navbarDropdown">
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
     <section id="tazbinur-rahaman">
       <div class="" id="banner">
         <div class="container" style="margin-bottom: 300px; height: 300px">
           <div class="row" style="padding-top: 15%">
             <div class="col-sm-12 col-md-6">
               <p style="font-family: 'Orbitron', sans-serif; padding-left: 20px"; class="display-4 text-left lead text-light">
                 <text style="font-size: 30px; letter-spacing:15px; font-family: 'Titillium Web', sans-serif; border-bottom: 1px solid white; padding-bottom: 5px;">TECHNOCRACY 2019</text>
                 <br>
                 <text style="font-size: 70px; letter-spacing:5px">Poster Presentation</text>
                 <br>
                 <text style="font-size: 40px; letter-spacing: 15px">// Innovative Thinker // </text>
               </p>
             </div>
             <div class="col-sm-12 col-md-6 text-center">
               <img src="img/seg_logo/pp_logo.png" alt="" style="width: 350px; padding-top: 10px; padding-left: -10px">
             </div>
           </div>
         </div>
       </div>
     </section>
    <!--large home-->

    <!--small home-->
     <section id="tazbinur">
       <div class="" id="banner">
         <div class="container" style="margin-bottom: 300px; height: 300px">
           <div class="row" style="padding-top: 20%">
             <div class="col-sm-12 col-md-6">
               <p style="font-family: 'Orbitron', sans-serif; padding-left: 20px"; class="display-4 text-left lead text-light">
                 <text style="font-size: 20px; letter-spacing:5px; font-family: 'Titillium Web', sans-serif; border-bottom: 1px solid white; padding-bottom: 5px;">TECHNOCRACY 2019</text>
                 <br>
                 <text style="font-size: 30px; letter-spacing:5px">Poster Presentation</text>
                 <br>
                 <text style="font-size: 20px; letter-spacing: 5px">Innovative Thinker</text>
               </p>
             </div>
             <div class="col-sm-12 col-md-6 text-center">
               <img src="img/seg_logo/pp_logo.png" alt="" style="width: 250px; padding-top: 10px; padding-left: -10px">
             </div>
           </div>
         </div>
       </div>
     </section>
    <!--small home-->


      <!--intro-->
      <p class="lead container text-muted text-justify" style="padding-top: 50px; padding-bottom: 10px; font-size: 15px; font-family: 'Titillium Web', sans-serif;">
        <text style="font-size: 25px;" class="text-primary">Introduction:</text> <br>
        <i>
          <div class="container">
            <div class="card">
              <div class="card-body">
                <strong>Poster Presentation(Innovative Thinker): </strong> A poster is any piece of printed paper designed to be attached to a wall or vertical surface. It can also be defined as a constructive means of communication. A poster can deliver a powerful message and at the same time delight the eyes.

                <a class="text-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <br><strong> View details... </strong>
                </a>

                <div class="collapse" id="collapseExample">
                  <div class="">
                    Hence the art of poster designing is so thought-provoking. In order to offer the students something that influences them to think creatively, an idea has come up to organize a Poster Presentation (Innovative Thinker)Contest. Poster Presentation (Innovative Thinker)is an interesting competition which is an opportunity to express idea visually on related topics. Through this competition, students will be provided platform to present their ideas not only as a solution of technical problem but also as a key for the development in technical sector. By involving themselves in designing self-explanatory posters, they will be able to gain skill in this sector.
                  </div>
                </div>

              </div>
            </div>
          </div>
        </i>
        </p>
      <!--intro-->


      <!--rulebook-->
      <p class="lead container text-muted text-justify" style="padding-top: 0px; padding-bottom: 10px; font-size: 15px; font-family: 'Titillium Web', sans-serif;">
        <text style="font-size: 25px;" class="text-primary">RuleBook:</text> <br>
        <i>
          <div class="container text-dark">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Bring your poster before the event will get started. There will be a poster stand that will be
              marked with your Paper ID. Please paste your poster using at the poster stand. All necessary
              tools will be provided.</a>
              <a href="#" class="list-group-item list-group-item-action">Poster size: Available poster surface area is restricted to A1 Poster size (610mm x 914mm, or 24
              inches x 36 inches)</a>
              <a href="#" class="list-group-item list-group-item-action">Participants will print, and will bring to the event venue by themselves, place the poster to the
              assigned poster stand [marked by paper ID] before the start of the poster session and be there
              to present during your presentation time.</a>
              <a href="#" class="list-group-item list-group-item-action">The judges will move from one poster to the next consecutively. There are no formal power
              point presentations for poster sessions. Participants need to explain the research to the judges.</a>
              <a href="#" class="list-group-item list-group-item-action">Please remove your poster from the poster stand at the end of the poster session.</a>
              <a href="#" class="list-group-item list-group-item-action">Presentation Time: 5 minutes.</a>
            </div>
          </div>
        </i>
      </p>
      <!--rulebook-->

      <!--regi -->
      <div class="text-center container" style="margin-top: 30px">
        <p class="lead container" style="padding-top: 0px; padding-bottom: 0px; font-size: 15px; font-family: 'Titillium Web', sans-serif;">
          <text style="font-size: 25px;" class="text-primary text-center">Registration Fee:</text> <br>
          <i>
            <div class="card mx-auto" style="max-width: 600px;">
              <div class="card-body">
                <table class="table container my-auto">
                  <thead>
                    <tr>
                      <th scope="col">Fee</th>
                      <th scope="col">Bkash</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2,400 /=</td>
                      <td>48 /=</td>
                      <td>2,448 /=</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <br>
            <text class="text-primary"><i class="fas fa-exclamation-triangle" style="padding-right: 5px"></i>For adding each member Registration fee will increase 800 + 16 = 816 BDT</text>
          </i>
        </p>
      </div>
      <!-- regi -->

      <!-- prize -->
      <div class="text-center container" style="margin-top: 30px; margin-bottom: 50px">
        <p class="lead container" style="padding-top: 0px; padding-bottom: 0px; font-size: 15px; font-family: 'Titillium Web', sans-serif;">
          <text style="font-size: 25px;" class="text-primary text-center">Prize Money:</text> <br>
          <i>
            <div class="card mx-auto" style="max-width: 600px;">
              <div class="card-body">
                <table class="table container my-auto">
                  <thead>
                    <tr>
                      <th scope="col">Champion</th>
                      <th scope="col">1<sup>st</sup>Runner Up</th>
                      <th scope="col">2<sup>nd</sup>Runner Up</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>10,000 /=</td>
                      <td>5,000 /=</td>
                      <td>3,000 /=</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </i>
        </p>
      </div>
      <!-- prize -->


    <p class="lead text-center" style="margin-bottom: 100px">
      <a class="btn btn-lg mx-auto text-light text-center lf-navbar" style="width: 300px; border-radius: 40px; font-size: 20px;" href="https://docs.google.com/forms/d/e/1FAIpQLSdE_LwS-s89CzrV-4AXQJQj0x5cQA0fWS8qru_3nVWxbe7_mw/viewform?usp=sf_link" target="_blank">Register Now</a>
    </p>


    <!--footer-->
    <?php
      include 'footer.php';
     ?>
    <!--footer-->

    <!--my code goes here-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
