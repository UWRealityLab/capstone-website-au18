<!-- Exposes configuration file "config.xml" as $config xml object -->

<!DOCTYPE html>
<html lang="en">
    <!-- Include common html header -->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#4b2e83">
    <link rel="apple-touch-icon" sizes="180x180" href="./res/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./res/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./res/img/favicon-16x16.png">

    <title>UW CSE AR/VR Capstone | CSE 481V</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="University of Washington Computer Science and Engineering Virtual Augmented Reality Capstone Course">
    <meta name="description" content="Course webpage for University of Washington course CSE481V: Virtual and Augmented Reality Capstone, offered in Fall 2018.">
    <meta name="author" content="University of Washington">
    <meta name="robots" content="all,follow">
    <meta http-equiv="Cache-control" content="public">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="966242223397117" /> <!-- default FB app id -->
    <meta property="og:url" content="https://courses.cs.washington.edu/courses/cse481v/18au/index.php" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="UW CSE AR/VR Capstone" />
    <meta property="og:description" content="Course webpage for University of Washington course CSE481V: Virtual and Augmented Reality Capstone, offered in Fall 2018." />
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#4b2e83">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500|Quicksand" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href=./res/bootstrap/css/bootstrap.min.css rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Highlight JS -->
    <link rel="stylesheet" href=./res/css/github.css>
    <script src=./res/js/highlight.pack.js></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- Custom styles for this template -->
    <link href=./res/css/style.css rel="stylesheet">
</head>
    <body>
<!-- Fixed Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container img-rounded">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-top:25px;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin: 0" href=./>
            <img src=./res/img/rl-logo-alt.png alt="Logo" style="height: 50px; padding-left: 10px"/>
          </a>
        <a class="navbar-brand" href=./>
        AR / VR Capstone
        </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Project <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./deliver.php">Deliverables</a>
                        </li>
                        <li>
                            <a href="./teams.php">Team Websites</a>
                        </li>
                        <li>
                            <a href="./reports.php">Progress Reports</a>
                        </li>
                    </ul>
                </li>
                <li >
                    <a href=./calendar.php>Schedule</a>
                </li>
                <li >
                    <a href=./speakers.php>Speakers</a>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            Resources <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="./ideas.php">Ideas</a>
                            </li>
                            <li>
                                <a href="./links.php">Links</a>
                            </li>
                        </ul>
                    </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
        
        <div class="container">
            <!-- Announcement -->
            
            <div class="row" style="padding-bottom: 18px;">
                <div class="col-xs-3 col-sm-2 col-md-1">
                    <img src=./res/img/icons/5.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="hidden-sm hidden-xs col-md-1">
                    <img src=./res/img/icons/1.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1">
                    <img src=./res/img/icons/2.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="hidden-sm hidden-xs col-md-1">
                    <img src=./res/img/icons/3.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="hidden-sm hidden-xs col-md-1">
                    <img src=./res/img/icons/4.png alt="Icon 1" class="img-responsive"/>
                </div>
                
                <div class="col-sm-2 hidden-xs col-md-1">
                    <img src=./res/img/icons/6.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1">
                    <img src=./res/img/icons/7.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="hidden-sm hidden-xs col-md-1">
                    <img src=./res/img/icons/8.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="col-sm-2 hidden-xs col-md-1">
                    <img src=./res/img/icons/9.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="hidden-sm hidden-xs col-md-1">
                    <img src=./res/img/icons/10.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1">
                    <img src=./res/img/icons/11.png alt="Icon 1" class="img-responsive"/>
                </div>
                <div class="hidden-sm hidden-xs col-md-1">
                    <img src=./res/img/icons/12.png alt="Icon 1" class="img-responsive"/>
                </div>
            </div>
        </div>

        <!-- Introduction -->
        <div class="container content-main">
            <!-- Announcement -->
            
            <div class="row">
                <div class="col-md-6">
                    <div class="header clearfix project-header">
                        <hr class="overliner"/>
                        <h4>Learn new techniques. Build something cool.<br />See the state-of-the-art in AR/VR.</h4>
                        <hr />
                    </div>

                    <!-- Class Info -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td><b>Time</b></td>
                                <td>Lectures: Tuesday 1:30pm - 2:50pm<br />Lab: Thursday 1:30pm - 4:20pm</td>
                            </tr>
                            <tr>
                                <td><b>Place</b></td>
                                <td>Lectures: <a href="https://www.washington.edu/maps/#!/gld">GLD 322</a>
                                <br />Lab: <a href="http://uw.edu/maps/?sig">Sieg 327</a></td>
                            </tr>
                        </table>
                    </div>
                <h3>Rules and Logistics</h3>
                <hr class="underliner" />

            <ul>
                <li><b>Reference Text</b>: <a href="http://msl.cs.uiuc.edu/vr/">Virtual Reality</a>
                <li><b>Collaborate</b> on <a href="https://gitlab.cs.washington.edu/groups/vrcapstone-18au">GitLab</a>! Learn more <a href=https://www.cs.washington.edu/lab/gitlab>here</a>.</li>
                <li><b>Discussion</b>: <a href="https://groups.google.com/a/cs.washington.edu/forum/#!forum/cse481v-18au-discussion">Google Groups</a>, <a href="https://mattermost.cs.washington.edu/vrcapstone-18au/">Mattermost</a></li>
                <li><b>Email: vr-capstone-staff@cs</b>. For Aditya and individual TAs, add [vr-capstone] to the subject line.</li>
                <li><strong>VR/AR Labs</strong>
                <ol>
                    <li>No food or drinks allowed near the devices.</li>
                    <li>Lock your devices every day in your assigned locker.</li>
                    <li><strong>Have Fun.</strong></li>
                </ol>
            </li>
            </ul>
                </div>
                <div class="col-md-6" style="text-align: center">
                    <div id="carousel-highlights" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <!-- Wrapper for slides -->
                        <
                        <div class="carousel-inner" role="listbox">
                            <div class='item active'>
                                <img src=./res/img/carousel/1.jpg />
                            </div>
                            <div class='item'>
                                <a href="./res/demo_day.pdf"><img src="./res/img/demo_day_combined.png" style="width: 100%"/></a>
                            </div>
                            <div class='item'>
                                <img src=./res/img/carousel/2.jpg />
                            </div>
                            <div class='item'>
                                <img src=./res/img/carousel/3.jpg />
                            </div>
                            <div class='item'>
                                <img src=./res/img/carousel/4.jpg />
                            </div>
                            <div class='item'>
                                <img src=./res/img/carousel/5.jpg />
                            </div>
                            <div class='item'>
                                <img src=./res/img/carousel/6.jpg />
                            </div>
                            <div class='item'>
                                <img src=./res/img/carousel/7.jpg />
                            </div>
                        </div>
                    </div>
                    <a href="https://www.facebook.com/pg/UWRealityLab/photos/"><h2>Thank you for a successful demo day!</h2></a>
                </div>
            </div>
        </div> <!-- /container -->

        <!-- Personnel and Office Hours -->
        <div class="container content">
            <!-- Staff Information -->
            <div class="header clearfix">
                <h3>Staff and Office Hours</h3>
                <hr class="underliner" />
            </div>

            <div class="row">
                
                <div class="col-md-12">
                    <h4>Instructor</h4>
                    <img src=./res/img/aditya_vr_small.png alt="Aditya's Pic" class="img-responsive"><br />
                            <a href=http://homes.cs.washington.edu/~aditya/>Aditya Sankar</a> <br / >
                            aditya@cs <br />
                            OH: <a href=./calendar.php>M 11:30am-12:30pm</a> + By Appointment <br />
                            CSE 284

                </div>
            </div>

            <div class="row">
                
                <div class="col-md-12">
                    <h4>Teaching Assistants</h4>
                </div>

                <div class="col-sm-3 col-xs-12">
                    <img src=./res/img/ethan_vr_small.png alt="Ethan's Pic" class="img-responsive"> <br />
                            <a href=https://ethankgordon.com>Ethan Gordon</a><br />
                            ekgordon@cs<br />
                            OH: <a href=./calendar.php>M 2:30pm-3:30pm + W 3:30pm-4:30pm</a><br />
                            SIG 327

                </div>
                <div class="col-sm-3 col-xs-12">
                    <img src=./res/img/xuanluo_vr_small.png alt="Xuan's Pic" class="img-responsive"></center><br />
                            <a href=https://roxanneluo.github.io/>Xuan Luo</a><br />
                            xuanluo@cs<br />
                            OH: <a href=./calendar.php>W 2:30pm-3:30pm + F 1:30pm-2:30pm</a><br />
                            SIG 327

                </div>
                <div class="col-sm-3 col-xs-12">
                    <img src=./res/img/edzhang_vr_small.png alt="Edward's Pic" class="img-responsive"><br />
                            <a href=http://ed.ilogues.com/>Edward Zhang</a><br />
                            edzhang@cs<br />
                            OH: <a href=./calendar.php>T 3:30pm-4:30pm + F 2:30pm-3:30pm</a><br />
                            SIG 327
                </div>
            </div>

            
            <h3><b>Staff Email:</b> <b>vr-capstone-staff@cs</b></h3>
        </div>
        <!-- Include scripts used in every page -->
        <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 <!-- Bootstrap core JavaScript -->
 <script src="./res/js/jquery.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>

    <script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '360',
      width: '540',
      videoId: 'RfOtWPXV0ZA',
      playerVars: { 'version': 3, 'autoplay': 1, 'controls': 0, 'loop': 1, 'playlist': 'RfOtWPXV0ZA' }
    });
  }
</script>
</html>
