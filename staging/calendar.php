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

    <title>AR/VR Capstone | CSE 481V | Calendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="University of Washington Computer Science and Engineering Virtual Augmented Reality Capstone Course">
    <meta name="description" content="Calendar page for University of Washington course CSE481V: Virtual and Augmented Reality Capstone, offered in Fall 2018.">
    <meta name="author" content="University of Washington">
    <meta name="robots" content="all,follow">
    <meta http-equiv="Cache-control" content="public">
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="966242223397117" /> <!-- default FB app id -->
    <meta property="og:url" content="https://courses.cs.washington.edu/courses/cse481v/18au/calendar.php" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="UW CSE AR/VR Capstone | Calendar" />
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
    <link href=./res/css/cal.css rel="stylesheet">
</head>
    <body>
<!-- Fixed Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container img-rounded">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="margin: 0" href=./>
            <img src=./res/img/rl-logo-alt.png alt="Logo" style="height: 50px; padding-left: 10px"/>
          </a>
        <a class="navbar-brand" href=./>
        <b>AR / VR Capstone</b>
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
                <li class="active">
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

        <!-- Introduction -->
        <div class="container content-main">
            <div class="header clearfix">
                <h3>Course Schedule</h3>
                <hr class="underliner" />
            </div>


<div class="slideshow-container">

<div id="calendar-wrap" class="mySlides fade">
            <header>
                <h1>September</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                </ul>

                <!-- Days from previous month -->
                <ul class="days">
                    <li class="day">
                        <div class="date">24</div>             
                    </li>
                    <li class="day">
                        <div class="date">25</div>                      
                    </li>
                    <li class="day">
                        <div class="date">26</div>                      
                    </li>
                    <li class="day">
                        <div class="date">27</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab: Unity Tutorial
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:30pm, SIG 327
                            </div>
                        </div>                       
                    </li>
                </ul>
            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

<div id="calendar-wrap" class="mySlides fade">
            <header>
                <h1>October</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">1</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm (By Appt.)
                            </div>
                        </div> -->             
                    </li>
                    <li class="day">
                        <div class="date">2</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: Introduction
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">3</div> 
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:00pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                 
                    </li>
                    <li class="day">
                        <div class="date">5</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">8</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm (By Appt.)
                            </div>
                        </div> -->             
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#lok>Ben Lok</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                    <li class="day">
                        <div class="date">10</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due: <a href=https://groups.google.com/a/cs.washington.edu/forum/#!forum/cse481v-18au-discussion>Initial Project Idea</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:00pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">11</div>
                        <div class="event import">
                            <div class="event-desc">
                                Lab Hours: Iniital Idea Pitch
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">12</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">15</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm (By Appt.)
                            </div>
                        </div> -->            
                    </li>
                    <li class="day">
                        <div class="date">16</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#lanman>Doug Lanman</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">17</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:00pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">18</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event import">
                            <div class="event-desc">
                                Due: <a href="https://groups.google.com/a/cs.washington.edu/forum/#!msg/cse481v-18au-discussion/aKl64Faj62o/ts7Qe8ExAwAJ">Initial Website</a>
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">19</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event import">
                            <div class="event-desc">
                                Due: <a href="https://goo.gl/rZsYnD">PRD</a>
                            </div>
                        </div>                      
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">22</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm (By Appt.)
                            </div>
                        </div> -->           
                    </li>
                    <li class="day">
                        <div class="date">23</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#bailenson>Jeremy Bailenson</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">24</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">25</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                    <li class="day">
                        <div class="date">26</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>PRDv2</a>
                            </div>
                        </div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">29</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm (By Appt.)
                            </div>
                        </div> -->            
                    </li>
                    <li class="day">
                        <div class="date">30</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#debevec>Paul Debevec</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">31</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day other-month">
                        <div class="date">1</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day other-month">
                        <div class="date">2</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                </ul>
            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

<div id="calendar-wrap" class="mySlides fade">
            <header>
                <h1>November</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                </ul>
                <ul class="days">
                    <li class="day other-month">
                        <div class="date">29</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm (By Appt.)
                            </div>
                        </div> -->            
                    </li>
                    <li class="day other-month">
                        <div class="date">30</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#debevec>Paul Debevec</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day other-month">
                        <div class="date">31</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">1</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">2</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:00pm to 2:00pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                2:00pm to 3:00pm, SIG 327
                            </div>
                        </div>                       
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">5</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:30am to 12:30pm, CSE 284
                            </div>
                        </div> 
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>         
                    </li>
                    <li class="day">
                        <div class="date">6</div>
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#stoll>Gordon Stoll</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                    <li class="day">
                        <div class="date">7</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">8</div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">9</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>                       
                    </li>
                </ul>
                <ul class="days">
                    <li class="day other-month">
                        <div class="date">12</div>
                        <div class="event cancel">
                            <div class="event-desc">
                                Veterans Day
                            </div>
                        </div>            
                    </li>
                    <li class="day">
                        <div class="date">13</div>
                        <div class="event import">
                            <div class="event-desc">
                                Lecture: Progress Presentation
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">14</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">15</div>
                        <div class="event import">
                            <div class="event-desc">
                                Lab: Peer Review + Open House
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">16</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">19</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:30am to 12:30pm, CSE 284
                            </div>
                        </div> 
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>         
                    </li>
                    <li class="day">
                        <div class="date">20</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#curtis>Cassidy Curtis</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">21</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                       
                    </li>
                    <li class="day other-month">
                        <div class="date">22</div>
                        <div class="event cancel">
                            <div class="event-desc">
                                Thanksgiving
                            </div>
                        </div>                    
                    </li>
                    <li class="day other-month">
                        <div class="date">23</div>
                        <div class="event cancel">
                            <div class="event-desc">
                                Native American Heritage Day
                            </div>
                        </div>
                        <div class="event import">
                            <div class="event-desc">
                                Optional Weekly Blog; Post if you want feedback. Happy Thanksgiving! 旅
                            </div>
                        </div>                   
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">26</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:30am to 12:30pm, CSE 284
                            </div>
                        </div> 
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>           
                    </li>
                    <li class="day">
                        <div class="date">27</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#izadi>Shahram Izadi</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                    <li class="day">
                        <div class="date">28</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                      
                    </li>
                    <li class="day">
                        <div class="date">29</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due 11:59pm via email: <a href="https://docs.google.com/document/d/1MhbD6r2my_KDhbBlqaCsUEywIC8uygA6H7ttwMygQuI/edit?usp=sharing">Demo Plan</a>
                            </div>
                        </div>
                        <div class="event">
                            <div class="event-desc">
                                Lab Hours
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">30</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                10:30am to 11:30am, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:30pm to 2:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>                   
                    </li>
                </ul>
            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

<div id="calendar-wrap" class="mySlides fade">
            <header>
                <h1>December</h1>
            </header>
            <div id="calendar">
                <ul class="weekdays">
                    <li>Monday</li>
                    <li>Tuesday</li>
                    <li>Wednesday</li>
                    <li>Thursday</li>
                    <li>Friday</li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">3</div>
                        <div class="event lecture">
                            <div class="event-desc">
                                Ethan OOO Until Saturday
                            </div>
                            <div class="event-time">
                                Email or Call for Assistance
                            </div>
                        </div> 
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:30am to 12:30pm, CSE 284
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>        
                    </li>
                    <li class="day">
                        <div class="date">4</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
                        <div class="event lecture">
                            <div class="event-desc">
                                Lecture: <a href=./speakers.php#startup>Start-Up Panel</a>
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">5</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                2:00pm to 4:00pm, SIG 327
                            </div>
                        </div>                       
                    </li>
                    <li class="day">
                        <div class="date">6</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due 11:59pm via email: <a href="https://docs.google.com/document/d/1xApzsPt_UxSF7FYYIi40wgIJI6tsaadzqdbmcQOkpoo/edit?usp=sharing">Team Banner</a>
                            </div>
                        </div> 
                        <div class="event import">
                            <div class="event-desc">
                                Lab Hours: Demo Rehearsal
                            </div>
                            <div class="event-time">
                                1:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                    <li class="day">
                        <div class="date">7</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Weekly Blog</a>
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Xuan
                            </div>
                            <div class="event-time">
                                1:30pm to 2:30pm, SIG 327
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                2:30pm to 3:30pm, SIG 327
                            </div>
                        </div>                     
                    </li>
                </ul>
                <ul class="days">
                    <li class="day">
                        <div class="date">10</div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:30am to 12:30pm, CSE 284
                            </div>
                        </div>
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                11:30am - 12:30pm; 2:30pm to 4:30pm, SIG 327
                            </div>
                        </div>            
                    </li>
                    <li class="day">
                        <div class="date">11</div>
                        <!--<div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Aditya
                            </div>
                            <div class="event-time">
                                11:00am to 12:00pm, SIG 327
                            </div>
                        </div> -->
<!--                         <div class="event import">
                            <div class="event-desc">
                                Lecture: Startup Panel
                            </div>
                            <div class="event-time">
                                1:30pm to 2:50pm, GLD 322
                            </div>
                        </div> -->
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Edward
                            </div>
                            <div class="event-time">
                                3:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                    
                    </li>
                    <li class="day">
                        <div class="date">12</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Submit 2-5min Demo Video</a>
                            </div>
                        </div> 
                        <div class="event office">
                            <div class="event-desc">
                                Office Hours w/ Ethan
                            </div>
                            <div class="event-time">
                                2:30pm to 4:30pm, SIG 327
                            </div>
                        </div>                       
                    </li>
                    <li class="day">
                        <div class="date">13</div>
                        <div class="event import">
                            <div class="event-desc">
                                <b>Demo Day!</b>
                            </div>
                            <div class="event-time">
                                CSE Atrium; 4pm-6:30pm; <b>Setup 1:30pm</b>
                            </div>
                        </div>                     
                    </li>
                    <li class="day">
                        <div class="date">14</div>
                        <div class="event import">
                            <div class="event-desc">
                                Due at 7pm: <a href=./deliver.php>Final Peer Review and Course Evals</a>
                            </div>
                        </div>                  
                    </li>
                </ul>
            </div><!-- /. calendar -->
        </div><!-- /. wrap -->

<!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div> <!-- /slidwshow -->
<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)" title="September"></span>
  <span class="dot" onclick="currentSlide(2)" title="October"></span>
  <span class="dot" onclick="currentSlide(3)" title="November"></span>
  <span class="dot" onclick="currentSlide(4)" title="December"></span>
</div>

</div> <!-- /container -->
        <!-- Include scripts used in every page -->
        <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
 <!-- Bootstrap core JavaScript -->
 <script src="./res/js/jquery.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
    var slideIndex = 4;

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeSlide", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " activeSlide";
}

document.addEventListener('touchstart', handleTouchStart, false);        
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;                                                        
var yDown = null;

function getTouches(evt) {
  return evt.touches ||             // browser API
         evt.originalEvent.touches; // jQuery
}                                                     

function handleTouchStart(evt) {                                         
    xDown = getTouches(evt)[0].clientX;                                      
    yDown = getTouches(evt)[0].clientY;                                      
};                                                

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
        if ( xDiff > 0 ) {
            plusSlides(1);
        } else {
            plusSlides(-1);
        }                       
    }
    /* reset values */
    xDown = null;
    yDown = null;                                             
};

$( document ).ready(function() {
    showSlides(slideIndex);
    var d = new Date();
    $("li.day").filter(function() {
        var thisMonth = $(this).parents(".mySlides").css('display') == 'block';
        var today = $(this).children().first().text() == d.getDate();
        return today && thisMonth;
    }).addClass("today");
});

</script>
</html>
