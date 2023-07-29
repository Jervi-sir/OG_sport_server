<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>match Details</title>
    @vite([
        'resources/css/general.scss',
        'resources/css/matchDetails.scss',
        'resources/css/popup.scss',
        'resources/css/menu.scss',
    ])
</head>
<body>
   <div class="wrapper">
        <div class="header">
            <h2>matche n'0021</h2>
            <a href="">
                <img src="./back.svg" alt="">
            </a>
        </div>
        <div class="teams">
            <div class="card">
                <img src="./team_img.svg" width="50px" alt="">
                <div class="info">
                    <div class="name">club name</div>
                    <div class="points">points</div>
                </div>
            </div>
            <div class="vs">VS</div>
            <div class="card">
                <img src="./team_img.svg" width="50px" alt="">
                <div class="info">
                    <div class="name">club name</div>
                    <div class="points">points</div>
                </div>
            </div>
        </div>
        <div class="teams-details">
            <div class="row">
                <span>...........................</span>
                <span>اسم الملعب </span>
            </div>
            <div class="row">
                <span>...........................</span>
                <span>اليوم و التاريخ </span>
            </div>
        </div>
        <div class="objective">
            <h3>OBJECTIF:</h3>
            <span>.......................</span>
        </div>
        <div class="lucky-cards">
            <h3>CARDS:</h3>
            <div class="card-list">
                <div class="card">
                    <img src="./lucky_card.svg" alt="">
                </div>
                <div class="card">
                    <img src="./lucky_card.svg" alt="">
                </div>
            </div>
        </div>
        <div class="confirm-score">
            <h3>CONFIRME SCORE:</h3>
            <div class="team-list">
                <div class="team">
                    <div class="card">
                        <img src="./team_img.svg" width="50px" alt="">
                        <div class="info">
                            <div class="name">club name</div>
                            <div class="points">points</div>
                        </div>
                    </div>
                    <input class="score" type="text">
                    <button class="ready">جاهز</button>
                </div>
                <div class="team">
                    <div class="card">
                        <img src="./team_img.svg" width="50px" alt="">
                        <div class="info">
                            <div class="name">club name</div>
                            <div class="points">points</div>
                        </div>
                    </div>
                    <input class="score" type="text">
                    <button class="ready">جاهز</button>
                </div>
            </div>
        </div>
        <div class="call-to-action">
            <button>
                احصل على النقاط
            </button>
        </div>

        <div class="popup">
            <div class="top">
                <span>Match n'0021</span>
                <span>code::gsi35h</span>
            </div>
            <div class="teams">
                <div class="team">
                    <button>جاهز</button>
                    <input type="text" placeholder="اختر الفريق">
                </div>
                <div class="team">
                    <button>جاهز</button>
                    <input type="text" placeholder="الفريق الخصم">
                </div>
            </div>
            <div class="timing">
                <input type="text" class="day" placeholder="اليوم">
                <input type="text" class="time" placeholder="التوقيت">
            </div>
            <div class="stadium">
                <div class="name">
                    <input type="text" placeholder="اسم الملعب">
                </div>
            </div>
            <div class="action">
                <button>انشئ مباراة</button>
            </div>
            <div class="preview-date">
                monday 00h:00 pm
            </div>
        </div>
   </div>
</body>
</html>