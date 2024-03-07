<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dabed's Blog | Technology</title>
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
        <a class="navbar-brand active" id="home_button" href="user_index.php">Dabed's Blog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="user_politics.php" class="link-buttons">Politics</a></li>
            <li><a style="background-color:#808080" href="user_technology.php" class="link-buttons">Technology</a></li>
            <li><a href="user_environment.php" class="link-buttons">Environment</a></li>
            <li><a href="user_sports.php" class="link-buttons">Sports</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="z-index: 1;">
            <li><a href="user_comments.php" class="link-buttons">Comments</a></li>
            <li><a href="user_about me.php" class="link-buttons">About Me</a></li>
            <li><a href="logout.php" class="link-buttons"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
        </div>
    </div>
    </nav>

        <article id="article-1">
            <div>
                <h2>Future Computers</h2>
                <img src="images/technology/tech1.jpg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: TED | <a target="_blank" href="user_credits.php#tech1" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>Our world in terms of technological advancements has undoubtedly progressed a lot. We’ve upgraded our transportation, introduced different techniques in agriculture, as well as the introduction to different forms of communication. Aside from those fascinating improvements we’ve had in those areas, computer technology on the other hand has remarkably progressed as well. The computing prowess that we currently have with our traditional computers helped in many areas such as human genome sequencing and computational drug design. However, despite all the things that our existing computers offer, it’s just a matter of time before our current computing approach is about to meet the end of the line as it is just not enough to solve some of our world’s greatest problems. </p>
            <p>As we all know, the computers we have today function by the binary system, which is composed of 0’s and 1’s known as “bits”. Following that, these traditional computers are only following two values such as yes or no, and true or false. On the contrary, quantum computers accept more than two values/inputs to process data in the form of so-called “qubits”. It can still hold 0’s and 1’s, but what’s interesting is that these qubits can undergo a “superposition” state that according to the video, offers way more information than 0 and 1. This whole comparison of ideas between bits and qubits changes a lot of things. By harnessing qubits and eventually reaching its full potential, the purpose of it as a tool for future computing technology is very beneficial as it will not only process information exponentially faster, but it will also require fewer qubits as compared to bits with equal work being done.</p>
            <p>Now, to elaborate further on the wonders that quantum computing can do to revolutionize our world, real-life examples and applications can fill in the gap of confusion. Let’s refer to potentially one of the most significant fields that this tech can help: drug discovery. Let’s take for example the creation of a vaccine for COVID-19. To make a successful vaccine to combat this virus as well as other diseases, it would require searching in the entire chemical space to find the right molecular structure applicable to counter such diseases. This chemical space is just so vast and complex that it is too much for conventional computers to handle as they only process tasks one thing at a time, serially in other words, and would therefore require a massive amount of time even for our world’s fastest supercomputers. But with quantum computing, with the unique properties that this computational method possesses such as the superposition state of qubits, the amount of time that would require to solve and formulate solutions to these crucial problems our world is facing, would only take what? A few days, hours, or even minutes? It of course depends on the complexity but what’s guaranteed is that quantum computing is much more efficient than the traditional computers that we are having today to an extent that it will not only save us an enormous amount of time and resources in general, but we will also be saving a lot of lives in the process. </p>
            <p>As fascinating as it is to hear all the breakthroughs that quantum computers may provide, we are still in the process of learning the ropes and what I’ve meant by that is we’ve barely scratched the surface of quantum mechanics itself. We are still on the part trying to control, preserve, and scale qubits to maximize their capabilities. I also inferred that the particles that make up a quantum computer are very delicate that minor vibrations, sudden temperature changes, or nearby particle collisions can all interfere and cause disturbances to keep these quantum particles in place. Moreover, we still haven’t figured out yet how to successfully scale up these qubits to the point where they can outperform our conventional computers in all aspects. These may all sound uninspiring or give a sense of hopelessness but looking on the bright side, we still have a lot of things to study and new approaches offered by this technology, just waiting to be discovered.</p>
            
            <div class="references">
                <a class="read-more" href="https://www.ted.com/talks/matt_langione_the_promise_of_quantum_computers" target="_blank">Read More</a>
                <a href="https://i.pinimg.com/originals/79/69/88/796988184857d8b9bda6b024b519021d.jpg" target="_blank">Image Source</a>
            </div>
        
        </article>

        <article>
            <div>
                <h2>Internet of Medical Things</h2>
                <img src="images/technology/tech2.jpg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: Software Design Solutions (SDS) | <a target="_blank" href="user_credits.php#tech2" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>Our technology nowadays really does influence a lot of areas for our own improvement and beneficial innovations. I’ve been aware about the new method of computing technology, the different smart devices that can be used within our homes, and just now, the introduction of the Internet of Medical Things (IOMT). Our medical technology drastically escalated to an extent that is unimaginable a few years back. We already have various devices for medical usage ranging from wearables (skin patches, insulin pumps, and blood glucose monitors) up to implants such as pacemakers. These devices all have one goal, to improve the healthcare provided to patients. </p>
            <p>Based on these innovations alone, we can already say that our advancements in medical technology are something to be amazed by. Their advantages provide convenience to people, a medical orientation, and practices have done to the next level. However, despite its numerous advantages, there is still a dilemma, especially for those devices that are powered by the internet. Due to most of our latest medical technologies being utilized using the internet, it is highly prone to be targeted by cybercriminals. They may have access to a specific hospital’s medical records of their patients which they can be used to hold against those patients. Another downside of our current medical technology is the short duration of software installed on our medical devices. With operating systems being outdated, we are only increasing the risks of those devices getting hacked by cybercriminals to get data. </p>
            <p>On the bright side, Internet of Medical Things provides a possible future for medical institutions, particularly hospitals such as in terms of architecture wherein it was anticipated that telemedicine will be the new norm: mobile medical appointments will further be implemented so that patients can consult with their doctors virtually. Because of that, many hospitals will have more room for patients that have more complex ailments which can’t be done remotely. Another area that will benefit with this technology is the point of care and patient design which puts more emphasis on the patients. Future hospitals have rooms that are customized based on their patients’ personal preferences to make them feel more comfortable as if they are just inside their own homes. In addition, medical devices are also introduced here once more such as wearables like smartwatches integrated with ECG that can detect different health problems concerning the patient’s heart and will send an alert once it detects such problems.</p>
            <p>Of all the medical technologies that are experienced across the world today by different nations, the Philippines however, is undoubtedly lacking in those advanced medical technologies. Given that we are only classified as a third-world country, we don’t have sufficient funds to bring this technology here to our medical institutions. Moreover, healthcare in general is not receiving the support it deserves. If we observed before, just when the pandemic started, we can observe the hardship of our health workers. It is no question that aside from our lack of manpower, we are also lacking in sufficient medical tools and facilities for all people suffering from the virus. However, if advanced medical technologies are urgent for growth in the medical field here in our country, we can always start small. We may invest in different wearables to hand out to patients that need them, which I think is on the side of the cheaper devices. In that way, we can somehow reduce the number of patients visiting hospitals because the assistance that the devices they have are already enough to attend to their medical concerns. </p>
            
            <div class="references">
                <a class="read-more" href="https://www.techtarget.com/iotagenda/definition/IoMT-Internet-of-Medical-Things" target="_blank">Read More</a>
                <a href="https://softwaredesignsolutions.com/blog/iot-medical-devices-are-the-future-of-healthcare-sds-blog/" target="_blank">Image Source</a>
            </div>
        
        </article>
    </body>
</html>