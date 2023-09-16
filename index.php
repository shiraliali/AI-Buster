<?php
?>

<html>

<head>
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="generator" content="venus" />
    <link href="assets/styles/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>AI Buster - Detect AI Generated Codes</title>
</head>

<body>
    <div class="main-section">
        <div class="hero-container animate__animated animate__fadeIn animate__slower">
            <div class="environment"></div>
            <h1 class="hero glitch layers" data-text="AI Buster"><span>AI Buster</span></h1>
        </div>
        <p class="animate__animated animate__fadeInUp animate__slower animate__delay-1s">AI Buster is a free bot developed by <a href="https://x.com/alyshirali" target="_blank">@alyshirali</a> that detects and scores AI generated codes.</p>
        <p class="manner animate__animated animate__fadeInUp animate__slower animate__delay-2s">Pulling the wool over people eyes, Won't change any fact!</p>
        <div class="donate-section manner animate__animated animate__fadeInUp animate__slower animate__delay-2s">

            <a class='donate-button' href='https://daramet.com/aly' target='_blank'>[ Buy Me A Coffe! ]</a>
        </div>

    </div>


    <div class="analyze-section animate__animated animate__fadeIn animate__slower animate__delay-3s">
        <textarea id="code" placeholder="Enter code from Php,javascript,c++,c#,python,java to analyze"></textarea>
        <button class="analyze-button">Start Analyze</button>
        <div class="result-message" id="res"></div>
    </div>

    <footer>

        <script src="./assets/scripts/jquery.js"></script>
        <script src="./assets/scripts/main.js"></script>
    </footer>
</body>

</html>