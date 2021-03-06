<?php

// session_start();
// $_SESSION['errorMessage'] = $_SESSION['errorMessage'] ?? "";
// echo $_SESSION['errorMessage'];
// echo "Hi " . $_SESSION['name'];

// if (!isset($_SESSION['id']) || !isset($_SESSION['login']) )
// {
//  header('Location: index.php');
// }	

?>


<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Kurs</title>
    <meta name="description" content="Módlek" />
    <meta name="keywords" content="kurs, nauka, learning, moodle" />
    <meta name="author" content="Grzegorz Brzeczyszczykiewicz" />
    <meta http-equiv="X-Ua-Compatible" content="IE=edge" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="main.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext"
      rel="stylesheet"
    />
  </head>

  <body>
    <header>
      <nav class="bg-primary navbar navbar-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <img
            class="d-inline-block mr-1 align-bottom"
            src="img/aw.png"
            width="30"
            height="30"
            alt=""
          />
          Módle
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#mainmenu"
          aria-controls="mainmenu"
          aria-expanded="false"
          aria-label="Przełącznik nawigacji"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainmenu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Main site</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>

          <form class="form-inline">
            <input
              class="form-control mr-1"
              type="search"
              placeholder="Search "
              aria-laber="Search"
            />
          </form>
        </div>
      </nav>
    </header>
    <main>
      <div class="container-fluid">
        <div class="row">
          <aside class="col-sm-12 col-md-4 ">
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action active">
                Opcje
              </a>
              <a
                class="list-group-item list-group-item-action nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
                role="button"
                id="csubmenu"
                >Kursy</a
              >
              <div class="dropdown-menu">
                <a class="list-group-item list-group-item-action" href="#"
                  >Lekcja 1</a
                >
                <div class="dropdown-divider"></div>
                <a
                  class="list-group-item list-group-item-action"
                  href="#"
                  type="button"
                  >Lekcja 2</a
                >
              </div>
              <a
                href="#"
                class="list-group-item list-group-item-action disabled"
                >Vestibulum at eros</a
              >
            </div>
          </aside>

          <section class="jumpers col-sm-12 col-md-8">
            <div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit
              vitae, beatae repudiandae temporibus at iste ullam inventore optio
              deserunt veritatis, sint eligendi ipsam perferendis et ea
              molestiae, labore voluptate eaque? Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. Optio laudantium error recusandae,
              deserunt accusamus atque non minus assumenda. Voluptatum eius,
              quod corporis voluptas possimus non! Facere aut itaque enim nulla.

              <div class="mt-4 mb-4">
                <audio controls>
                  <source
                    src="http://www.w3schools.com/html/horse.ogg"
                    type="audio/ogg"
                  />
                  <source
                    src="http://www.w3schools.com/html/horse.mp3"
                    type="audio/mpeg"
                  />
                  <a href="http://www.w3schools.com/html/horse.mp3">horse</a>
                </audio>
              </div>
            </div>
            <form class="mt-4 mb-4">
              <h1>Pytanie blbalbalba, blblbla bla ?</h1>
              <div class="form-check form-check-inline ">
                <input
                  class="form-check-input"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio1"
                  value="option1"
                />
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio2"
                  value="option2"
                />
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio3"
                  value="option3"
                  disabled
                />
                <label class="form-check-label" for="inlineRadio3"
                  >3 (disabled)</label
                >
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </section>
        </div>
      </div>
    </main>

    <footer class="page-footer font-small blue fixed-bottom ">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright: by Sith
      </div>
      <!-- Copyright -->
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
