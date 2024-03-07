<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dabed's Blog | Environment</title>
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
        <script src="script.js"></script>
        <style>
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
            <li><a href="user_technology.php" class="link-buttons">Technology</a></li>
            <li><a style="background-color:#808080" href="user_environment.php" class="link-buttons">Environment</a></li>
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
                <h2>Ocean's State Amidst Global Warming</h2>
                <img src="images/environment/environment-1.jpg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: VODzilla | <a target="_blank" href="user_credits.php#env1" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>Among many other issues, global warming is something that has existed for a couple of decades already. However, unlike other matters, the threat of global warming is barely even recognized. The value of the issue as an alarming concern is not viewed the way it should. It’s as if you’re absorbing information by receiving it in one side of your ear, and letting it pass through the other. Little did we know that by ignoring this matter today will significantly affect us in the upcoming years. </p>
            <p>Probably one of the greatest ways to illustrate how impactful global warming is to the human race along with every living organism, is by having a walkthrough about the current state of our oceans. </p>
            <p>Oceans are technically the foundation of life here on our planet. They control the weather, the climate, and aside from trees, oceans are also our primary source of the oxygen we breathe. In a documentary film called “Chasing Coral,” the impact of global warming is heavily discussed by studying the response of the corals through the ocean’s rising temperatures. Just to have an overview, corals were made up of animals called polyps. These polyps have plants inside their tissues called microalgae that photosynthesize to provide food for them. Once these corals fit into their environment, they thrive and grow overtime to what we know as coral reefs. These coral reefs provide an ecosystem where different species are involved and benefit from one another. </p>
            <p>However, due to global warming, there is a sudden increase in temperature, and the ocean is no exception to the damages it may bring. In the documentary film mentioned, they named a project called Catlin Seaview Survey which reveals the state of oceans to the world and provides access to virtual diving. According to their findings, In the last 30 years, 80% of the corals were already lost globally.</p>
            <p>Moreover, the researchers involved in the documentary also visited the Airport Reef in American Samoa as there are reportedly white corals within the area. Those white corals that might look pleasing to the eyes of many, are already on the verge of dying. This phenomenon is known as coral bleaching. It is not a disease nor due to lack of sunlight. Bleaching among corals is more of a stress response that happens when the microalgae in the corals’ tissues were impaired to their ability to photosynthesize that is caused by certain factors such as the rise in water temperature. If the microalgae failed to perform photosynthesis, they will no longer be able to provide food for the polyps and will eventually die, leaving the skeleton alone which we are seeing as white corals.</p>
            <p>It was also described how a small increase in temperature affects the aquatic life on our planet. Based on their analysis, there is about 2 degrees Celsius of rise in temperature that prompted the corals to bleach. To us humans, it doesn’t alarm us at all with such numbers. But for life in the ocean, things are very different. Think of their situation as our body temperature. When our temperature rises just a few degrees, we immediately feel the difference, the heat inside our bodies. The case is the same with the water temperature in the ocean. A manageable change for us is a whole different experience for the organisms living under the ocean. </p>
            <p>With no corals to accommodate the fishes, the fish will either migrate or die due to failure in adapting to the drastic change of their environment. With no fish available, there will be less food supply for humans given that over 500 million people rely on reefs as a source for food.</p>
            <p>So, as we can observe from the documentary film itself, even though we are not directly affected by what we’ve been doing these past couple of years, it doesn't mean that it will not affect us in other ways. Our wrongdoings will surely find its way to come back to us at some point in our lives. It’s very devastating that the majority of the people do not realize the consequences of our actions. Nevertheless, we must not stop aiming for the betterment of our planet, educate others for there is still hope that we can alter the danger that awaits us in the future. Our planet is teeming with life and as far as we know, is the only planet capable of hosting one, so let us protect it as much as we can. </p>

            <div class="references">
                <a class="read-more" href="https://www.chasingcoral.com/" target="_blank">Read More</a>
                <a href="https://vodzilla.co/wp-content/uploads/2017/07/Chasing-Coral-Still_7.jpg" target="_blank">Image Source</a>
            </div>
        
        </article>

        <article>
            <div>
                <h2>Are Invasive Species a Threat?</h2>
                <img src="images/environment/environment-2.jpg">
                <p style="color:#F6C90E; padding:0; margin:0">Image by: NPSEC | <a target="_blank" href="user_credits.php#env2" style="color:#F6C90E">View full credits</a></p>
            </div>
            
            <p>In our science or biology classes, we were always taught about different educational concepts and information about living organisms: humans, plants, animals, and even microorganisms such as bacteria. We were taught something about their origin, the way they behave, the habitat that suits them, as well as the ecosystem they live in. Moreover, it is also common knowledge to us that all living things are at a threat of extinction. Natural disasters, change in climate, failure to environmental adaptation, and humans are one of the most common examples of this phenomenon. However, it is rarely discussed that an unbalance in a particular habitat in terms of the species within it, can drastically change an entire ecosystem. </p>
            <p>What surprised me and piqued my attention is the topic about invasive species. Invasive species is a term used to describe organisms that happen to take place in a habitat that is not their own or where they used to be. With respect to that, changes are high that they might overpopulate due to various factors including the climate, not having a common predator within the area, or they’ve become the top predator themselves which in all cases makes them unable to be controlled in terms of their numbers. As their population is impossible to regulate, sooner or later, they will likely damage infrastructures, mess up habitats, or worse, destroy the entire ecosystem leading to an extinction of some species. </p>
            <p>Animals from different species are the ones that were frequently reported to do these invasive behaviors. These things might happen naturally by a change in climate, causing these animals to migrate to a more suitable environment. But most of the time, it is due to human activities whether intentional or unintentional. An example of this is in Jovellar, Albay in the Philippines. There is a river in the area that serves as a tourist destination where there is this animal that suddenly appeared, a soft-shelled turtle or what the locals call as “Ahas-pagong.” These turtles are not in their native habitat and were known to prey on the freshwater crabs within the river. With no common predators to feed on them, they turned out to be a lot more aggressive and reproduce way faster to the point that the people within the place had to kill them when they saw one. With these invasive species preying on the native ones, they might disrupt the food chain, and cause lower food sources to the locals.</p>
            <p>Animals are not the only ones that can become invasive. Plants, fungi, and bacteria can all become invasive species themselves. An example of this is the Kudzu Vine that is naturally occurring in some parts of East Asia. These vines are frequently eaten by native insects and die during winter. However, they were imported to a part of the United States where there is a milder climate and none of the insects that consume them in their native place. With these factors out of the picture, the vines were now able to grow uncontrollably and increase their numbers without the threat of a shift in climate nor the native insects that feed from them.</p>
            <p>On the contrary, not all invasive species are harmful to the environment. There are some cases where certain species fit well and harmonize well with the native organisms in the habitat. In fact, one of the main reason humans import plants and animals from other countries is to solve a problem in their area such as to prevent soil erosion and for pest control. Unfortunately, many of these instances turn out into a failure one way or another where it causes more damage than it fixes. Peacock Bass in Florida is an example where an invasive animal is actually beneficial to other habitats. Florida is known for its problems dealing with numerous invasive species. With respect to that, after years of studies, the officials came up with a solution and introduced the Speckled and Butterfly Peacock Bass. Although these basses are invasive organisms themselves, they successfully took out a handful of invasive predators that are dominant in the local rivers. As a result, they’ve given room for the native species to repopulate again and rebuild and regulate the ecosystem once again. </p>
            <p>What we can infer from these aside from the idea that invasive species can be beneficial or destructive to one's ecosystem, is that the threat of these species becoming invasive heavily depends on us. Statistically speaking, 33% of all animal extinctions worldwide are caused by invasive species which is a huge percentage. But on the bright side of things, knowing that the majority of these events are due to human activities, we can significantly reduce those records and save wildlife. Fortunately, we are already taking actions to address these concerns. Currently, there are various checkpoints such as in boats to look for hitchhiking aquatic organisms, and in other importing departments to closely monitor all the animals that are being transferred.</p>
            <p>Extinction is a real issue and is something to be taken seriously. Opening the discussion about invasive species is truly necessary as it has the ability to affect all living things, including humans. Let us prevent these scenarios from happening the best way we can, and instead, just like in Florida, we can use these species to our advantage.</p>

            <div class="references">
                <a class="read-more" href="https://education.nationalgeographic.org/resource/invasive-species/" target="_blank">Read More</a>
                <a href="https://npsec.us/wp-content/uploads/invasive-species-banner-2.jpg" target="_blank">Image Source</a>
            </div>
        
        </article>
    </body>
</html>