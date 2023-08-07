<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myTeams</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/myTeam.css">
    <link rel="stylesheet" href="styles/menu.css">
    @vite([
        'resources/css/general.scss',
        'resources/css/myTeam.scss',
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
        <div class="team-card">
            <div class="content">
                <div class="left">
                    <img src="./team_img.svg" alt="">
                    <div class="middle">
                        <h3>Team name</h3>
                        <div class="points">points: 000</div>
                    </div>
                </div>
                <img src="./down.svg" alt="">
            </div>
            <div class="actions">
                <button>تفعيل الحساب</button>
                <div class="team-state">
                    <span>حالة الفريق : </span>
                    <span>مفعل / غير مفعل</span>
                </div>
            </div>
        </div>
        <div class="game-played">
            <h5>games played :</h5>
            <div class="game-card-list">
                <div class="card-game-played green">
                    <span>00</span>
                    <span>W</span>
                </div>
                <div class="card-game-played red">
                    <span>00</span>
                    <span>L</span>
                </div>
                <div class="card-game-played grey">
                    <span>00</span>
                    <span>T</span>
                </div>
            </div>
        </div>
        <div class="players">
            <h5>players :</h5>
            <div class="player-list">
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
                </div>
                <div class="player">
                    <img src="./team_img.svg" alt="">
                    <span>name</span>
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