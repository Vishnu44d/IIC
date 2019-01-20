<html>
<head>
    <title>IIC-IIESTS</title>
    <meta name="description" content="A website for IIC">
    <meta name="author" content="Vishnu Deo" />
    <link rel=icon href=img/favicon.png sizes="16x16" type="image/png">
    <link rel="stylesheet" media="screen" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="css/mystyle.css">
    <link rel="stylesheet" media="screen" href="css/team.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.js"></script>   
    <?php
    @ob_start();
    session_start();
    ?>
</head>
    <body>
        <section id="home" name="home">
            <div class="navbar-fixed">
                <nav class="white">
                    <div class="nav-wrapper">
                        <a href="#" data-target="slide-out" class="sidenav-trigger black-text mob-ico right"><<image src="img/menu-ico.png" height="90%" style="padding-right: 10px; margin-bottom: 5px; margin-top: 18px;"></a>
                        <a href="http://www.iiests.ac.in/">
                        <image src="img/iiest-logo.png" height="90%" style="padding-left: 4%; margin-bottom: 5px; padding-top: 5px;" />
                        </a>
                        <a href="#">
                        <image src="img/Emblem_of_India.png" height="90%" style="padding-left: 10px; margin-bottom: 5px; padding-top: 5px;"/>
                        </a>
                        <a href="#">
                        <image src="img/innovation_logo.png" height="90%" style="padding-left: 10px; margin-bottom: 5px; padding-top: 5px;"/>
                        </a>
                        <!--a href="#" data-target="mobile-view" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a-->
                        
                        <ul class="right hide-on-med-and-down " >
                            <li><a href="#home " ><span class="black-text">Home</span></a></li>
                            <li><a href="#about"><span class="black-text">About</span></a></li>
                            <li><a href="#announcements"><span class="black-text">Announcements</span></a></li>
                            <li><a href="#team"><span class="black-text">Team</span></a></li>
                            <li><a href="http://www.edc-iiests.in" class="pulse btn blue"><span class="white-text">E-Cell</span></a></li>
                            <li><a href="#links"><span class="black-text">Links</span></a></li>
                            <li><a href="#footer"><span class="black-text">Contacts</span></a></li>
                            
                        </ul>
                    </div>
                    </div>
                </nav>
            </div>
            
            <ul id="slide-out" class="sidenav menue-mob">
                <li><div class="user-view ">
                <div style="margin-top: 4%; height: 4%;">    
                </div>
                <li><a href="#home " class="center white-text fs"><h3>Home</h3></a></li><br/>
                <li><a href="#about" class="center white-text fs"><h3 >About</h3></a></li><br/>
                <li><a href="#announcements" class="center white-text fs"><h3 >Announcements</h3></a></li><br/>
                <li><a href="#team" class="center white-text fs"><h3 >Team</h3></a></li><br/>
                <li><a href="http://www.edc-iiests.in" class="blue center"><h3>E-Cell</h3></a></li><br/>
                <li><a href="#links" class="center white-text fs"><h3 >Links</h3></a></li><br/>
                <li><a href="#footer" class="center white-text fs"><h3 >Contacts</h3></a></li><br/>
                </div>
                
            </ul>
            




            <div  class="foot-container">
            <div class="row home-wrap">
                <div class="col s8 offset-s100">
                    <h4 class="innovation">Innovation Cell: A GoI initiative</h4> 
                    <div class="type-js headline">
                        <span class="text-js white-text home-subtitle">A GoI initiative to shape the innovation ecosystem.</span>
                    </div>
                </div>
            </div>
            </div>
        </section>



        <section id="about">
        <br><br><br>
        <div  class="foot-container">
            <div class="row">
                <div class="col s6">
                <div class="about-container">
                    <span class="black-text"><h1 class="my-font">About</h1></span>
                    <p>
                    <?php
                        $handle = fopen("contents/about.txt", "r");
                        if ($handle) {
                            while (($line = fgets($handle)) !== false) {
                                echo $line. "</br>"; 

                            }

                            fclose($handle);
                        } else {
                            echo "error opening the file.";
                        } 
                    ?>
                        
                    </p>
                </div>
                </div>
                <div class="col s4">
                    <div class="valign-wrapper ">
                        <image class="responsive-img" src="img/about.png" style="padding-left: 5%; margin-top: 15%;" />
                    </div>
                </div>
            </div>
        </div>
        </section>


        <section id="announcements">
        <br><br><br>
        <div  class="foot-container">
            <div class="row">
                <div class="col s12">
                    <span class="black-text"> <h1 class="my-font">Announcements</h1></span><br/>
                    <a href="contents/announcements.pdf" class="grey-text"> Download the complete schedule here.<i class="inline-icon material-icons">file_download</i></a>
                </div>
            </div> 
            <div class="slider">
                <ul class="slides">
                    <?php
                        $handle = fopen("contents/slider.csv", "r");
                        for ($i = 0; $row = fgetcsv($handle ); ++$i){
                            echo '
                            <li>
                                <img src="img/slider/'.$row[1].'.jpg">  
                            </li>';
                        }
                        fclose($handle);      
                    ?>
                    
                </ul>
            </div>
            <br/><br/>
            <div class="ann-container">
                <table class="highlight centered ">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Announcements</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $handle = fopen("contents/announcements.csv", "r");
                            for ($i = 0; $row = fgetcsv($handle ); ++$i) {
                                echo '
                                    <tr>
                                        <td>'. $row[0].'</td>
                                        <td>'. $row[1].'</td>
                                    <tr>';
                            }
                            fclose($handle);
                        ?>
                    </tbody>
                </table><br/><br/>
            </div>
        </div>  
        </section>


        <section id="team">
            <br><br><br>
        <div  class="foot-container">
            <div class="center"><span class="center"><h1 class="center">Team</h1></span></div>
            <div class="cards">
            <?php
                $handle = fopen("contents/teams.csv", "r");
                for ($i = 0; $row = fgetcsv($handle ); ++$i){
                    echo '
                    <div class="card team-card-2">
                        <img src="img/team/'.$row[5].'.jpg">
                        <div class="card-title">
                        <a href="#" class="toggle-info my-btn">
                            <span class="left"></span>
                            <span class="right"></span>
                        </a>
                        <h2>'.$row[0].'
                        </h2>
                        </div>
                        <div class="card-flap flap1">
                        <div class="card-description">
                        '.$row[1].'<br>'.$row[2].'<br>'.$row[3].'<br>'.$row[4].'   
                        </div>
                        <div class="card-flap flap2">
                            
                        </div>
                        </div>
                    </div>';
                }
                fclose($handle);      
            ?>
            </div>
        </div>
        </section>


        <section id="links">
            <br/><br/><br/>
            <div class="foot-container">
                <span class="black-text"> <h3 class="my-font">Useful Links</h3></span>
                <div class="row">
                    <?php
                        $handle = fopen("contents/links.csv", "r");
                            for ($i = 0; $row = fgetcsv($handle ); ++$i) {
                                echo '
                                <div id="link_col" class="col m4">
                                    <a class="black-text left inline-icon" href="'.$row[1].'"><image src="img/link_icons/'.$row[0].'.png" height="100px" style="margin-left: 1%; margin-bottom: 5px; padding-top: 5px;" /></a>
                                </div>';
                            }
                            fclose($handle);
                    ?>
                    <hr/>
                </div>
            </div>
        </section>

        <footer class="page-footer indigo darken-4" id="footer">
          <div class="foot-container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Contact</h5>
                <p class="grey-text text-lighten-4">Prof. M. K. Sanyal<br/>
                    Professor & Head – Department of Human Resource Management<br/>
                    Secretary, TCGTBI <br/>
                    Mail : sec.tcgtbi@iiests.ac.in hodhrm@iiests.ac.in <br/>
                </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text"></h5>
                <p class="grey-text text-lighten-4">
                    Mr. Alan Das M<br/>
                    IICs Co-ordinator (Student)<br/>
                    Dept. of Aerospace Engg., IIEST Shibpur<br/>
                    Call: +91-9446846142<br/>
                    E-Mail: alandas.dd2016@aero.iiests.ac.in<br/>
                </p>
              </div>
            </div>
            <div class="row">
                <div class="col s12 center">
                    <span class="grey-text text-lighten-3">Have any query or suggestion? Drop us a word.</span><br/>
                    <span class="grey-text text-lighten-3"><i class="inline-icon material-icons">email</i>  iic.iiests@gmail.com</span>
                </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2019 Copyright IIC-IIEST Shibpur
            <a class="grey-text text-lighten-5 right" href="https://www.facebook.com/iic.iiests/"><image src="img/facebook.svg" height="30px" style="padding-left: 4%; margin-bottom: 5px; padding-top: 5px;" /></a>
            <a class="grey-text text-lighten-5 right" href="https://www.linkedin.com/company/iic-iiests/"><image src="img/linkedin.svg" height="30px" style="padding-left: 4%; margin-bottom: 5px; padding-top: 5px; padding-right:10px;" /></a>
            <div class="center"><span class="grey-text text-lighten-7 center vishnu">Designed and maintained by Vishnu Deo Gupta</span></div>
        </div>
          </div>
        </footer>
        


        <div class="pre-loader">
            <div class="sk-fading-circle">
                <div class="sk-circle1 sk-circle"></div>
                <div class="sk-circle2 sk-circle"></div>
                <div class="sk-circle3 sk-circle"></div>
                <div class="sk-circle4 sk-circle"></div>
                <div class="sk-circle5 sk-circle"></div>
                <div class="sk-circle6 sk-circle"></div>
                <div class="sk-circle7 sk-circle"></div>
                <div class="sk-circle8 sk-circle"></div>
                <div class="sk-circle9 sk-circle"></div>
                <div class="sk-circle10 sk-circle"></div>
                <div class="sk-circle11 sk-circle"></div>
                <div class="sk-circle12 sk-circle"></div>
            </div>
        </div>

    </body>
    <script src="js/actions.js"></script>
</html>