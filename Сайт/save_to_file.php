<?php
$action = $_GET["action"];
$myText = $_POST["comemntline"];

if($action = "save") {
  $targetFolder = "/path_to_folder";
  file_put_contents($targetFolder."mytext.txt", $myText);
}
?>  
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <link rel="stylesheet" href="general_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="C:\Users\Паша\Downloads\letter-l-with-watercolor-leaves-background_1340-8357 (2).ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Головна</title>
    <script type="text/javascript">
        setInterval(function () {
            date = new Date(),
                h = date.getHours(),
                m = date.getMinutes(),
                s = date.getSeconds(),
                h = (h < 10) ? '0' + h : h,
                m = (m < 10) ? '0' + m : m,
                s = (s < 10) ? '0' + s : s,
                document.getElementById('time').innerHTML = h + ':' + m + ':' + s;
        }, 1000);
        $('button').on('click', function () {
            $('.wrap').toggleClass('day night');
        });
    </script>
</head>
<body>
    <footer class="general">
        <p>
            <div id="logodiv"><a href="Header.html" target="_parent"><span style="margin-left: 20%;"><img src="https://cdn.discordapp.com/attachments/798288758830530573/1025113314210107463/1664471623984.png" width="110" height="50" alt="Фото"></div></span></a>
            <a href="C:\Users\Администратор\Documents\Дз\3 семестр\WEB\ВЕБ_Снігур.html" target="_parent"><span style="margin-left: 4%;"><button class="button">Звіт</button></a></span><a href="#" target="_parent"><button class="button">Увійти</button></a><a href="#" target="_parent"><button class="button">Зареєструватись</button></a><a href="talking.html" target="_parent"><button class="button">Створити пост</button></a><a href="profile.html" target="_parent"><button class="button">Профіль</button></a>
            <span id="timer">
                <font size="4" color="red" face="Wingdings">v </font><span id="time">00:00:00</span>
            </span>
        </p>
    </footer>
      <div class="mode"><img class="btn-toggle" id="image" src="light mode.png" width="80px" height="41px" onClick="imgsrc();"></div>
    
      <?php
      $action = $_GET["action"];
      $myText = $_POST["mytext"];
      
      if($action = "save") {
        $targetFolder = "/path/to/folder";
        file_put_contents($targetFolder."mytext.txt", $myText);
      }
      ?>  

  <div>
    <table style="margin: 8% 15% 70px 5%;" width="80%" heigth="100%">
      <td id="leftblock">
        <div class = "stylesheet">
          <div class="selected-stylesheet-block" id="homepage">
            <a href="#4356" class="link"><div class = "stylesheet-block" enabled>
              <span><b>@wellke</b></span><br><span>Terraria</span><br>
              <span>Почав проходити Terraria. З чого почати?</span><br><img class="link" src="photo_2022-10-02_20-58-55.jpg">
            </div></a>
            <a href="#2567" class="link"><div class = "stylesheet-block" enabled>
              <span><b>@Pants_down_kyodai</b></span><br><span>The Witcher 3: Wild Hunt</span><br>
              <span>Вау, тільки гляньте, які круті обладунки мені трапилась!</span><br><img src="photo_2022-10-02_21-09-06.jpg">
            </div></a>
            <a href="#9351" class="link"><div class = "stylesheet-block" enabled>
              <span><b>@Luckych</b></span><br><span>The Legend of Zelda: Breath of the Wild</span><br>
              <span>Допоможіть встановити BCML для USB helper</span><br>
            </div></a>
            <a href="#4241" class="link"><div class = "stylesheet-block" enabled>
              <span><b>@Pants_down_kyodai</b></span><br><span>Disco Elysium</span><br>
              <span>Ой, негарно вийшло...</span><br><img src="photo_2022-10-02_21-22-50.jpg">
            </div></a>
            <a href="#1221" class="link"><div class = "stylesheet-block" enabled>
              <span><b>@Luckych</b></span><br><span>Geoguessr</span><br>
              <span>😎😎😎</span><br><img src="photo_2022-10-02_23-32-11.jpg">
            </div></a>
          </div>

          <div class="unselected-stylesheet-block" id="4356">
            <a href="#homepage" class="link"><img src="back.png" width="5%"></a>
            <div class = "stylesheet-block">
              <span><b>@wellke</b></span><br><span>Terraria</span><br>
              <span>Почав проходити Terraria. З чого почати?</span><br><img src="photo_2022-10-02_20-58-55.jpg">
            </div>
          </div>

          <div class="unselected-stylesheet-block" id="2567">
            <a href="#homepage" class="link"><img src="back.png" width="5%"></a>
            <div class = "stylesheet-block">
              <span><b>@Pants_down_kyodai</b></span><br><span>The Witcher 3: Wild Hunt</span><br>
              <span>Вау, тільки гляньте, які круті обладунки мені трапилась!</span><br><img src="photo_2022-10-02_21-09-06.jpg">
            </div>
          </div>

          <div class="unselected-stylesheet-block" id="9351">
            <a href="#homepage" class="link"><img src="back.png" width="5%"></a>
            <div class = "stylesheet-block">
              <span><b>@Luckych</b></span><br><span>The Legend of Zelda: Breath of the Wild</span><br>
              <span>Допоможіть встановити BCML для USB helper</span><br>
            </div>
          </div>

          <div class="unselected-stylesheet-block" id="4241">
            <a href="#homepage" class="link"><img src="back.png" width="5%"></a>
            <div class = "stylesheet-block">
              <span><b>@Pants_down_kyodai</b></span><br><span>Disco Elysium</span><br>
              <span>Ой, негарно вийшло...</span><br><img src="photo_2022-10-02_21-22-50.jpg">
            </div>
          </div>

          <div class="unselected-stylesheet-block" id="1221">
            <a href="#homepage" class="link"><img src="back.png" width="5%"></a>
            <div class = "stylesheet-block">
              <span><b>@Luckych</b></span><br><span>Geoguessr</span><br>
              <span>😎😎😎</span><br><img src="photo_2022-10-02_23-32-11.jpg">
            </div>
          </div>
        </div>
      </td>
      <td id="centerblock"></td>
      <td id="rightblock">
        <div class="rightmenu">
          2022 © Всі права захищені.
            При виявленні порушень правил користування або якихось перебоїв сайту 
            звертайтесь за ніком <b>@Luckych</b>.<br>
          Адреса: Україна, 03056, м.Київ-56, проспект Перемоги, 37
        <form action="?action=save" name="comemnt" method="post">
          <input type="text" name="comemntline" placeholder="Коментувати">  
          <input type="submit" value="Відправити">
        </form>
        </div>
      </td>
    </table>
  </div>



  <script language="javascript">
    var commentlock=document.createElement('div');
    commentlock.className = "stylesheet-block";
    commentlock.innerHTML = "efsv";

    var i=0;
    var image=document.getElementById("image");
    var imgs=new Array("light mode.png","dark mode.png");
    function imgsrc() {
        i++;i%=imgs.length;
        image.src = imgs[i];
    }
    
  const btn = document.querySelector(".btn-toggle");
  btn.addEventListener("click", function () {
    var general = document.querySelector(".general");
    var stylesheet = document.querySelector(".stylesheet");
    var rightmenu = document.querySelector(".rightmenu");
    var stylesheetblock = $(".stylesheet-block");
    var logodiv = document.querySelector("#logodiv");
    document.body.classList.toggle("dark-theme");
    stylesheet.classList.toggle('Dark-theme');
    general.classList.toggle('Dark-theme');
    rightmenu.classList.toggle('Dark-theme');
    logodiv.classList.toggle('Dark-theme');
    for(var i=0; i<stylesheetblock.length; i++)
      stylesheetblock[i].classList.toggle('Dark-theme');
  });

  
  $(".link").click(function(){
    var elementId=$(this).attr('href').substring(1);
    document.getElementsByClassName("selected-stylesheet-block")[0].classList.replace('selected-stylesheet-block', 'unselected-stylesheet-block');
    document.getElementById(elementId).classList.replace('unselected-stylesheet-block', 'selected-stylesheet-block');
    if (elementId!=homepage)
      $(elementId).append(commentlock);
  });
</script>
</body>
</html>