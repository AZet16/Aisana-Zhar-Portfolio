<?php
    $name= $_POST['From'];
    $email= $_POST['Email'];
    $profile= $_POST['Profile'];
    $subject= $_POST['Subject'];
    $message= $_POST['Message'];

    $mailheader="From: ".$name."<".$email.">\r\n";
    $finalmessage=.$message."\n".$profile.;

    $recipient="aisana16zh@gmail.com";

    mail($recipient,$subject,$message,$mailheader)
    or die("Error");

    echo '<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Aisana-Zhar-education</title>
    
        <link rel="stylesheet" href="../style.css" />
      </head>
      <body>
        <!--menubar-->
        <div class="menu" id="menu">
          <div class="menu-top">
            <h1 class="web_name">Aisana_Zh</h1>
            <nav class="side-menu">
              <ul class="menu-items">
                <li><a href="../contact.html">Contact Me</a></li>
                <li><a href="../index.html">About Me</a></li>
              </ul>
            </nav>
          </div>
      
          <hr />
          <div class="menu-bottom">
            <nav>
              <ul class="menu-items">
                <li><a href="edu.html">Education</a></li>
                <li><a href="skills.html">Skills</a></li>
                <li><a href="experience.html">Experience</a></li>
              </ul>
            </nav>
          </div>
        </div>
    
        <!--main container-->
        <div class="container" style="display: inline-flex;align-items: flex-start;">
          <h1>Thanks for Your Message</h1>
    
          <p style="text-align: center; margin: 0;">
            I will try to respond whenever it's possible. In case you want a guicker reply try contacting me via other social means. I am usually active on LinkedIn. See more below.
          </p>
    
            <div class="contact_links" style="border: 2px solid rgb(85, 255, 181); padding: 30px; background: black;">
                <ul class="biggericon">
                    <li>
                    <a
                        href="https://linkedin.com/in/aisana-zharmagambetova-7161181bb"
                        target="blank"
                        ><img
                        src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg"
                        alt="aisana zharmagambetova"
                    /></a>
                    </li>
                    <li>
                    <a href="https://www.hackerrank.com/aisana16" target="blank"
                        ><img
                        src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/hackerrank.svg"
                        alt="aisana16"
                    /></a>
                    </li>
                    <li>
                    <a href="https://github.com/AZet16" target="blank"
                    ><img style="height: 40px; width: 40px;"
                    src="https://cdn.pixabay.com/photo/2022/01/30/13/33/github-6980894_1280.png"
                    alt="AZet16"
                    /></a>
                    </li>
                </ul>
    
            </div>
        </div>
    
    
       
      </body>
    </html>
    ';

?>