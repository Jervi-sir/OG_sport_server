<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchs</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/myMatches.css">
    <link rel="stylesheet" href="styles/menu.css">
    @vite([
        'resources/css/general.scss',
        'resources/css/myMatches.scss',
        'resources/css/menu.scss',
    ])
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h2>my matchs</h2>
            <a href="#">
                <img src="./back.svg" alt="">
            </a>
        </div>
        <div class="matche-list">
            <div class="card">
                <div class="top">
                    <span class="title">matche n'0021</span>
                    <span class="date">monday 00h:00 pm</span>
                </div>
                <div class="content">
                    <div class="left">
                        <img src="./team_img.svg" alt="" class="team-img">
                        <span class="score">20</span>
                    </div>
                    <div class="vs">VS</div>
                    <div class="right">
                        <span class="score">20</span>
                        <img src="./team_img.svg" alt="" class="team-img">
                    </div>
                </div>
                <div class="confirm-score">
                    <button>confirm score</button>
                </div>
            </div>
            <div class="card green">
                <div class="top">
                    <span class="title">matche n'0021</span>
                    <span class="date">monday 00h:00 pm</span>
                </div>
                <div class="content">
                    <div class="left">
                        <img src="./team_img.svg" alt="" class="team-img">
                        <span class="score">20</span>
                    </div>
                    <div class="vs">VS</div>
                    <div class="right">
                        <span class="score">20</span>
                        <img src="./team_img.svg" alt="" class="team-img">
                    </div>
                </div>
            </div>
            <div class="card red">
                <div class="top">
                    <span class="title">matche n'0021</span>
                    <span class="date">monday 00h:00 pm</span>
                </div>
                <div class="content">
                    <div class="left">
                        <img src="./team_img.svg" alt="" class="team-img">
                        <span class="score">20</span>
                    </div>
                    <div class="vs">VS</div>
                    <div class="right">
                        <span class="score">20</span>
                        <img src="./team_img.svg" alt="" class="team-img">
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