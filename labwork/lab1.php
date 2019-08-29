<!DOCtype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Labwork 1: Hello World</title>
        <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
            body {
                background-color: #D6EAF8;
                color: #808B96;
                font-size: 1.5em;
                line-height: 1.3em;
                padding: 2%;
                margin: 5%;
                text-align: justify;
                font-family: 'Roboto', sans-serif;
            }
            h1 {
                font-size: 1.85em;
                text-decoration: underline;
                margin-bottom: 7%;
            }
            p {
                width: 65%;
            }
            
        </style>
    </head>
<body>
    <?php
    /* echo 'lab1.php
            Holly Nahigyan 
            August 29 2019'; */
    ?>
    <h1>Hello World!</h1>
    <p>My name is Holly Nahigyan and I am a Web Development student at Long Beach City College.
    Prior to starting the Web Dev program at LBCC I had essentially no experience with coding. However, I really am enjoying so far. It can be challenging but also very rewarding.</p>
    <p>Here's a link to my <a href="https://github.com/hollyLikestoCode" target="_blank">GitHub Profile</a></p>
    <p>Outside of my academic interests I enjoy hiking, cooking and working out. I mainly hike around the Angeles National Forest and go about once every week or two.
    I love to cook all types of recipes and cusines. Lately, I've been trying to eat  and have been making primarily vegetarian at home.</p>
    <?php
        echo 'This my PHP pretty paragraph.';
        echo '<p>Some of the websites I use the most are <a href="https://www.alltrails.com/" target="_blank">AllTrails</a> and <a href="https://www.instagram.com/" target="_blank"> Instagram</a>.</p>
        <p>AllTrails is helpful site for finding hiking trails and other outdoor activities in your area. Instagram is my preferred social media site. Great for sharing pictures, humor, and connecting with friends.</p>';
        echo "<p>This assignment was relatively easy. I found the instructions easy to follow and working in class helped me figure out the things that weren't obvious</p>
        <p>The only problem I had was even after linking to GitHub and Heroku and uploading the php file I still can't get the page to display.</p>"; 
        
    ?>
</body>
</html>
