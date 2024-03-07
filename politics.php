<?php
    session_start();
    if(isset($_SESSION["user"])){
        header("Location: user_index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dabed's Blog | Politics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Rubik:wght@800&family=Syne:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/articles.css">
        <link rel="icon" href="images/icon.png" type="image/x-icon"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
            margin-bottom: 0;
            border-radius: 0;
            }

            h2 {
                color: #F6C90E;
                font-family: 'Rubik', sans-serif;
                font-size: 35px;
                margin-bottom: 10px;
            }

            .references > a {
                text-decoration: underline;
            }

            article > div > p {
                margin-bottom: 15px !important;
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }
                100% {
                    opacity: 0.9;
                }
            }

            img {
                width: 60%;
                margin-bottom: 20px;
                border-radius: 30px;
                animation-name: fadeIn;
                animation-duration: 2s;
                animation-fill-mode: forwards;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-inverse" style="z-index: 1;">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand active" id="home_button" href="index.php">Dabed's Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a style="background-color:#808080" href="politics.php" class="link-buttons">Politics</a></li>
            <li><a href="technology.php" class="link-buttons">Technology</a></li>
            <li><a href="environment.php" class="link-buttons">Environment</a></li>
            <li><a href="sports.php" class="link-buttons">Sports</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="z-index: 1;">
            <li><a href="comments.php" class="link-buttons">Comments</a></li>
            <li><a href="about me.php" class="link-buttons">About Me</a></li>
            <li><a href="login.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        </div>
    </div>
    </nav>

        <article id="article-1">
            <div>
                <h2>Voice of the People</h2>
                <img src="images/politics/pol1.jpg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: LinkedIn | <a target="_blank" href="credits.php#pol1" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>It’s very disappointing to think that the government has pushed through the controversial Anti-Terrorism Bill which was said by most that will give the government their fangs “against terrorists.” Despite the bill stating that activists will not be treated as terrorists, some are still fearing for their lives as it may still interfere with their rights as an individual.</p>
            <p>Included in the Section 27 Preliminary Order of Proscription, the court, as well as cabinet officials have the power to suspect someone as a terrorist and get them arrested. Moreover, under the Section 29 of the said law, the police and military are permitted to put any “suspicious” individuals behind bars without an official warrant of arrest.</p>
            <p>This law is bothering because if we think of it, there will be no due process and pointless arrests will happen one after the other. It’s as if all is based on hearsays and accusations, causing a great deal to innocent citizens without any proper investigation.</p>
            <p>In relation to that, under the section 25, the Anti-Terrorism Council (ATC) may declare an individual, organization, or an association as a terrorist if there is a “probable cause.” This gives the council its freedom to pinpoint almost anyone as a terrorist, especially the government critics. What’s even worse is that under the Section 9, an individual may serve 12 years in jail even though they are only “encouraged” and have not done any direct act of terrorism. Let that sink in.</p>
            <p>If my memory serves me right, laws are enforced to serve justice. With the Anti-Terrorism Bill being officialized, it appears that laws are no longer effective considering that its conditions are unreasonable. With this law, you no longer have the right to defend yourself and freely express your thoughts because of such act of the government.</p>
            <p>If this event continues, where is the so-called freedom of speech? It’s as if the rights of the people are completely ignored, and our voices are now insignificant. Social media has been burning with posts of reaching out to the government with regards to their objection to the Anti-Terrorism Bill. Will the government continue to be as deaf as a bat?</p>
            
            <div class="references">
                <a class="read-more" href="https://www.amnesty.org/en/latest/news/2020/07/philippines-dangerous-antiterror-law-yet-another-setback-for-human-rights/" target="_blank">Read More</a>
                <a href="https://www.linkedin.com/pulse/5-things-you-can-do-stop-terrorism-ana-isabel-mota-teles" target="_blank">Image Source</a>
            </div>
        </article>

        <article>
            <div>
                <h2>Misguided Appointments in Critical Departments</h2>
                <img src="images/politics/pol2.jpeg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: Manila Bulletin | <a target="_blank" href="credits.php#pol2" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>The Philippine government we have today is flawed in numerous ways. However, if they’ve decided to finally address the critical issues that the country is facing in a sensible manner, there are a handful of ways to do so and one of those and probably the most obvious thing to do is to appoint officials in the different departments of government that are fit for the job. You can’t just assign someone that is not knowledgeable about the department that he/she will be handling. An example of that instance is when President Bongbong Marcos appointed former Philippine National Police (PNP) chief Gen. Camilo Cascolan as the undersecretary Department of Health (DOH). It really is mind-blowing to think why the president did what he did. A former PNP chief getting a position in a health-related department? As others say, “When you elect clowns, expect a circus.”</p>
            <p>In relation to that, the president also reportedly appointed director Paul Soriano as Presidential Adviser on Creative Communications. According to Philippine News Agency, the Creative Communications’ Presidential Adviser’s role is to advise the President and assist various departments and agencies. Just to clarify, Soriano is an award-winning film director, and his forte lies only within the film production industry. His resume is way off to fulfill the role of a Presidential Adviser on Creative Communications. Even Soriano himself thinks that he is not qualified for such position, "Yes, there was a conversation, but I feel that the position needs more qualified people to help the President," Soriano said.</p>
            <p>It makes me question his decisions, why would you have someone to lead a certain department that is not even in his field of specialization? When decisions such as that are made, the potential of a certain department to be fully functional is not utilized at all, especially those that departments under the government, which is responsible for every citizen in a country that they are handling.</p>
            <p>With that in mind, how can we expect that the Philippine government can solve major issues if we already fail in making the simplest yet crucial decisions such as appointing the right person to the job? So, just to sum things up, the government must address these critical by having the right people to do the job as they are the ones that have the sufficient knowledge and skillsets to address whatever issue it is that needs to be solved.</p>
        
            <div class="references">
                <a class="read-more" href="https://mb.com.ph/2022/10/26/people-have-misunderstood-marcos-defends-appointments-of-cascolan-soriano" target="_blank">Read More</a>
                <a href="https://mb.com.ph/2022/10/26/people-have-misunderstood-marcos-defends-appointments-of-cascolan-soriano" target="_blank">Image Source</a>
            </div>
        </article>
    </body>
</html>