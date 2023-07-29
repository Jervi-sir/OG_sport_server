<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite([
        'resources/css/index.scss',
        'resources/css/general.scss',
        'resources/css/menu.scss',
    ])
</head>
<body>
    
<div class="wrapper">
    <div class="header">
        <div class="notification">
            <img src="./bell.svg" alt="">
        </div>
    </div>
    <div class="call-to-action">
        <h1>نظم مباراة و احصل على النقاط</h1>
        <a href="#">العب الان</a>
    </div>
    <div class="info-list">
        <div class="row">
            <div class="card">
                <h2>ما هي كاس OG الاولى ؟</h2>
                <div class="content">
                    <img src="./img.svg" alt="">
                    <p>دورة كأس OG الأولى هي دورة في كرة القدم من 16 فريق تلعب في الملاعب السداسية و السباعية .......</p>
                </div>
            </div>
            <div class="background">
                <div class="left"></div>
                <div class="right"></div>
            </div>
        </div>
        <div class="row">
            <div class="card">
            <h2>كيفية المشاركة ؟</h2>
                <div class="content">
                    <img src="./img.svg" alt="">
                    <p>الدورة مفتوحة للجميع و اي محب لكرة القدم من اي مكان بالجزائر يمكنه المشاركة كل ما عليه هو انشاء.....</p>
                </div>
            </div>
            <div class="background"></div>
        </div>
        <div class="row">
           <div class="card">
                <h2>نظام النقاط :</h2>
                <div class="content">
                    <img src="./img.svg" alt="">
                    <p>سيتم اختيار الفرق المشاركة في كأس OG الأولى بناءا على عدد النقاط التي يملكها كل فريق ........</p>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <a href="#">
            <img src="./profile.svg" alt="">
        </a>
        <a href="#">
            <img src="./team.svg" alt="">
        </a>
        <a href="#">
            <img src="./matches.svg" alt="">
        </a>
    </div>
    
</div>
</body>

</html>