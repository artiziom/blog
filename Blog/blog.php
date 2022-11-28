<?php
session_start();
$photo = array("img/photo1.jpg",
"img/pcie5.jpg",
"img/intel.jpg",
"img/drukarka.jpg",
"img/tv.png",
"img/laptop.png",
"img/airpods.png");
$title = array("RTX 4090 niebezpiecznie szybko łamie hasła",
"Pierwsze dyski SSD Pcie 5.0 już w listopadzie",
"Intel szykuje 22 nowe procesory komputerowe",
"Jak korzytsać z drukarki laserowej",
"Zalety telewizora 19-cal",
"Najlepsze laptopy poniżej 1000zł",
"Jak dbac o słuchawki airpods");
$text = array("Okazuje się, że GeForce RTX 4090 radzi sobie ponad 2 razy
lepiej w zgadywaniu haseł niż jego poprzednik, czyli GeForce
RTX 3090. Nowa karta uzyskuje wyniki na poziomie 300 GH/s NTLM
oraz 200 kh/s w Bcrypt i to bez jakiegokolwiek OC.",
"Nowe procesory takie jak AMD Ryzen 7000 czy Intel Raptor
Lake-S to nie tylko więcej rdzeni i wątków, ale również
wsparcie najnowszych technologii. Mowa między innymi o
interfejsie PCI Express 5.0 czy pamięciach RAM typu DDR5. A to
oznacza jeszcze wydajniejsze nośniki półprzewodnikowe.",
" Odblokowane Intel Core 13. generacji trafią do sklepów lada
moment, już 20 października. Na zablokowane, tańsze wersje
oraz płyty główne z chipsetami Intel H770 i B760 poczekamy
znacznie dłużej. Mówi się nawet o pierwszym kwartale
przyszłego roku, co pokrywałoby się z targami CES w Las Vegas",
"Kolorowe drukarki laserowe szybko stają się standardem we wszystkich środowiskach biurowych. Jak z nich korzystać ???",
"Obok dużych, często nawet 60-calowych odbiorników stoją bowiem malutkie 19-calowe telewizory. Co sprawia, że cieszą się one mimo wszystko?",
"Dzisiaj zaprezentujemy wam najlepsze laptopy w super cenie czyli poniżej 1000zł",
"Dzisiaj pokażemy wam jak dbać o nasze słuchawki żeby działały jak najdłużej");
$comments = array(
  array("img/Adam.png","Adam","super post","img/Grazyna.jpg","Grażyna","Lubie tego bloga !!!"),
  array("img/Lukasz.jpg","Łukasz","Lubie wasze posty"),
  array(),
  array("img/Michal.jpg","Michał","Ciekawy post")
);
$captcha = rand(0,8);
$_SESSION['random'] = $captcha;
$captchaPhoto = array(
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg",
"img/blue.jpg");
$c = 0;
$captchaPhoto[$captcha] = "img/red.jpg";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://example.com/fontawesome/v6.2.0/js/fontawesome.js"
      data-auto-replace-svg="nest"
    ></script>

    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="script.js" defer></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />

    <title>TechBlog - Artur Kompała ISI 1</title>
  </head>
  <body>


  <div class="backdrop">
      <div class="comment-modal">
        <form class="formComment" action=""  method="post" >
          <div class="input-label">
            <label for="nick">Nick:</label>
            <input name="nick" type="text" label="Nick" class="nick"/>
          </div>
          <div class="input-label">
            <label for="email">Email:</label>
            <input name="email" type="email" label="Email"/>
          </div>
          <div class="input-label">
            <label for="email">Treść:</label>
            <textarea name="tresc" label="Tresc"></textarea>
            <button class="comment margin-top-20" type="submit" name="submit" class="submit">Wyslij</button>
          </div>
          <button class="comment close-btn margin-top-10">Zamknij</button>
        </form>
      </div>
  </div>

  <div class="register-backdrop">
    <div class="comment-modal">
      <form novalidate action="register.php"  method="post" class="formRegister">
        <div class="input-label">
          <label for="nick">Nick:</label>
          <input name="nick" type="text" label="Nick" class="nick" />
        </div>
        <div class="input-label">
          <label for="email">Email:</label>
          <input name="email" type="email" label="Email" />
        </div>
        <div class="input-label">
          <label for="password">Hasło:</label>
          <input name="password" type="password" label="Password" />
          <label for="captcha">Captcha, podaj numer czerwonego emoji</label>
          <div class="captcha-grid">
          <?php 
            for($c; $c < 9; $c++){
              echo '<img class="captchaPhoto" src="', $captchaPhoto[$c],'" alt="" />';
            } 
            echo '</div>';
            echo '<input name="captcha" type="text" label="Captcha" />';

          ?>
        </div>
        <button class="comment margin-top-20 captchaHide" type="submit">Wyslij</button>
        <button class="comment close-btn margin-top-10">Zamknij</button>
      </form>
    </div>
</div>


    
    
    <main class="main">
    <header class="header">
      <img class="card" src="img/card.png" alt="Blog logo" />
      <h1 class="blog-title">TechBlog</h1>
      <a class="register" href="#">Rejestracja</a>
    </header>
    
      <section class="section">
        <nav class="nav">
          <h2>Menu</h2>
          <ul class="nav-list">
            <li><a class="item" href="">🧑‍💻 O mnie</a></li>
            <li>
              <a
                class="item"
                href="https://www.google.com/intl/pl/calendar/about/"
                >📅 Kalendarz</a
              >
            </li>
            <li><a class="item" href="">📗 Archiwum</a></li>
            <li><a class="item" href="">💡Linki</a></li>
            <li><a class="item" href="">🔑 Panel Administracyjny</a></li>
          </ul>
          <h2>Kategorie</h2>
          <ul class="nav-list">
            <li><a class="item" href="">💻 Procesory</a></li>
            <li><a class="item" href="">🎞 Karty graficzne</a></li>
            <li><a class="item" href="">💾 Dyski</a></li>
            <li><a class="item" href="">📱 Telefony</a></li>
          </ul>
        </nav>
        <div class="content">
          <h2>Najnowsze Posty</h2>
          <div class="posts">
              <?php 

              $postInPage = 2;
              $x = 0;
              $numberOfPages = ceil(count($title) / $postInPage);
              $lastPage = count($title)%$postInPage;
              
              if( isset($_GET['page'])){
                if($_GET['page'] < 0 || $_GET['page'] > $numberOfPages) $page = 0;
                else $page = $_GET['page'];
              }
              else $page = 0;
              $y = $page * $postInPage;


                for( $x; $x < $postInPage; $x++ ){
                  echo '<div class="post">';
                  echo '<img class="post-img" src= ', $photo[($x)+$y]  ,' alt="" />';
                  echo '<div class="post-text">';
                  echo '<h3 class="post-title"> ',$title[($x)+$y],' </h3>';
                  echo '<p class="text"> ',$text[($x)+$y],' </p>';
                  echo '<a class="post-more" href="#" ">Czytaj dalej -> </a>';
                  echo '<div class="addComment">';
                  echo '<a class="comment page',$page,' post',$x,'" href="#">Dodaj komentarz </a>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  if($x+$y == count($title)-1){
                      break;
                  }
                }
                
                
              ?>
          </div>
        </div>
       
          
        </div>
      </section>
      <div class="pagination-bar">
        <?php
        for($i = 0; $i < $numberOfPages;$i++){
          echo '<a class="pageButton" href="blog.php?page=',$i,'">',$i+1,'</a>';
        }
        ?>
      </div> 
    <footer class="footer">
      <h3>TechBlog</h3>
      <p>Design by Artur Kompała ISI 1</p>
    </footer>
    </main>
  </body>
</html>
