<?php include "dati.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Google FAQ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/master.css">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="row flex-align">
          <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
          <span>Privacy e Termini</span>
        </div>
        <div class="row">
          <div class="navbar">
            <ul>
              <li>Introduzione</li>
              <li>Norme sulla privacy</li>
              <li>Termini di servizio</li>
              <li>Tecnologie</li>
              <li>Domande frequenti</li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
    </header>
    <main>
      <div class="container">
            <div class="faq">
                <?php
                    foreach ($section as $request => $contenuto) {
                        echo "<h2>". $contenuto['titolo']."</h2>";
                        foreach ($contenuto as $span => $testo) {

                            if (is_array($testo)){
                                foreach ($testo as $punto => $text) {
                                  if (is_array($text) && $punto === "punto1") {
                                        echo "<ol>
                                                <li>".$text['primario']."
                                                    <ol>
                                                        <li>". $text['a'] ."</li>
                                                        <li>". $text['b'] ."</li>
                                                    </ol>
                                                </li>";
                                    } elseif ($punto === "punto2") {
                                        echo "<li>". $testo['punto2'] ."</li></ol>";
                                    }

                                }
                                if (is_array($testo) && $span ==="span4") {
                                    echo "<h3>". $testo['sottotitolo'] ."</h3>";
                                    echo "<p>". $testo['span1'] ."</p>";
                                    echo "<p>". $testo['span2'] ."</p>";
                                    echo "<p>". $testo['span3'] ."</p>";

                                }

                            } else {
                                if ($span === "titolo") {
                                  echo "<p>" . "</p>";
                                }
                                else {
                                  echo "<p>". $testo ."</p>";
                                }
                            }

                        }
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>
      <div class="container-fluid bg-lightblue">
        <div class="row flex-footer">
          <ul>
            <li>Google</li>
            <li>Tutto su Google</li>
            <li>Privacy</li>
            <li>Termini</li>
          </ul>
          <div class="">
            <i></i>
              <select id="lang" name="cars">
                <option value="">Italiano</option>
                <option value="">Inglese</option>
                <option value="">Spagnolo</option>
                <option value="">Francese</option>
              </select>
            <!-- <input type="text" name="" value="">
            <option value="ita">Italiano</option>
            <option value="eng">Inglese</option> -->
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
