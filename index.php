<?php
session_start();
$_SESSION['errorMessage'] = $_SESSION['errorMessage'] ?? "";
echo $_SESSION['errorMessage'];
if (isset($_SESSION['id']) && isset($_SESSION['login'])) {
   header('Location: indexU.php');
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>Kurs</title>
   <meta name="description" content="Módlek">
   <meta name="keywords" content="kurs, nauka, learning, moodle">
   <meta name="author" content="Grzegorz Brzeczyszczykiewicz">
   <meta http-equiv="X-Ua-Compatible" content="IE=edge">

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="main.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">



</head>

<body>
   <header>

      <nav class="bg-primary navbar navbar-dark navbar-expand-lg">
         <a class="navbar-brand" href="#">
            Mudle
         </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
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
                  <a class="nav-link dropdown-toggle" hrev="#" data-toggle="dropdown" role="button" id="submenu">Sing in</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item bg-primary" href="#" type="button" data-toggle="modal" data-target="#log">Log in</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item">You're new?</a>
                     <a class="dropdown-item bg-primary" href="#" type="button" data-toggle="modal" data-target="#reg" aria-controls="reg" aria-expanded="false" aria-label="Register">Join!</a>
                  </div>
               </li>


            </ul>

            <form class="form-inline">
               <input class="form-control mr-1" type="search" placeholder="Search " aria-laber="Search">
            </form>

         </div>

      </nav>

   </header>
   <main>
      <div class="container-fluid">


         <div class="row">



            <section class="jumpers col-sm-12 col-md-8">

               <div class="container ">


                  <div class="row">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit vitae, beatae repudiandae temporibus at iste ullam inventore optio deserunt veritatis, sint eligendi ipsam perferendis et ea molestiae, labore voluptate eaque? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio laudantium error recusandae, deserunt accusamus atque non minus assumenda. Voluptatum eius, quod corporis voluptas possimus non! Facere aut itaque enim nulla.
                  </div>
               </div>


            </section>

         </div>
      </div>
   </main>

   <footer class="page-footer font-small blue fixed-bottom ">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
         <a href="https://mdbootstrap.com/education/bootstrap/"> mySite.pl © 2018</a>
      </div>
      <!-- Copyright -->
   </footer>





   <!-- The Modal -->
   <div class='modal fade' id='reg'>
      <div class='modal-dialog modal-lg modal-dialog-centered'>
         <div class='modal-content'>
            <!-- Modal Header -->
            <div class='modal-header bg-primary'>
               <h4 class='modal-title '>Registration</h4>
               <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <!-- Modal body -->
            <div class='modal-body'>
               <div class='container'>
                  <div class='card-body'>
                     <form action='create.php' class='container' method='post'>
                        <div class='form-group'>
                           <input name='name' type='text' placeholder='Name' class='form-control  mt-2' required>
                           <input name='login' type='text' placeholder='Login' class='form-control  mt-2' required>
                        </div>
                        <div class='form-group'>
                           <input name='password' type='password' placeholder='Password' class='form-control  mt-2' required>
                           <input type='password' placeholder='Password' class='form-control  mt-2' required>


                           <div class="form-group container">


                              <div class="row">

                                 <select name='ad1' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Lepiej rozumiem coś jak: </option>
                                    <option value='1'>Usłyszę to</option>
                                    <option value='2'>Zobaczę to</option>
                                 </select>
                                 <select name='ad2' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Kiedy myślę o tym co robiłem wczoraj najprawdopodobniej przypomnę sobie:</option>
                                    <option value='1'>Słowa</option>
                                    <option value='2'>Obraz</option>
                                 </select>
                                 <select name='ad3' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Uczę się łatwiej gdy:</option>
                                    <option value='1'>Rozmawiam z kimś o tym</option>
                                    <option value='2'>Myślę o tym
                                    </option>
                                 </select>
                                 <select name='ad4' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Łatwiej zrozumiem działanie urządzenia gdy:</option>
                                    <option value='1'>Rozbiorę je część po części</option>
                                    <option value='2'>Zobaczę jego schemat</option>
                                 </select>
                                 <select name='ad5' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Lepiej koncentruję się gdy:</option>
                                    <option value='1'>Słucham muzyki
                                    </option>
                                    <option value='2'>W ciszy</option>
                                 </select>
                                 <select name='ad6' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Łatwiej mi przychodzi:</option>
                                    <option value='1'>Uczenie się faktów</option>
                                    <option value='2'>Uczenie się definicji</option>
                                 </select>
                                 <select name='ad7' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Czy umiesz narysować przedmiot który widziałeś 10 minut wcześniej?:</option>
                                    <option value='1'>Tak</option>
                                    <option value='2'>Nie</option>
                                 </select>
                                 <select name='ad8' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Lepiej coś zapamiętam jak coś:</option>
                                    <option value='1'>Widzę</option>
                                    <option value='2'>Słyszę</option>
                                 </select>
                                 <select name='ad9' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Idąc w nieznane miejsce wolisz:</option>
                                    <option value='1'>Czytać mapę</option>
                                    <option value='2'>Trzymać się wskazówek pisanych w formie tekstu</option>
                                 </select>
                                 <select name='ad10' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Kiedy muszę wykonać zadanie, wolę:</option>
                                    <option value='1'>Opanować jeden ze sposobów, aby to osiągnąć</option>
                                    <option value='2'>Przedstawić nowe sposoby realizacji tego celu</option>
                                 </select>
                                 <select name='ad11' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Wolałbym:</option>
                                    <option value='1'>Pomyśleć najpierw jak to zrobić</option>
                                    <option value='2'>Spróbować to zrobić</option>
                                 </select>
                                 <select name='ad12' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Gdy czytam, dane wolę widzieć w formie</option>
                                    <option value='1'>W formie opisowej
                                    </option>
                                    <option value='2'>W formie wykresów</option>
                                 </select>
                                 <select name='ad13' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Jeśli czytam powiadomienia, preferuję:</option>
                                    <option value='1'>Coś, co uczy mnie nowych faktów lub mówi mi, jak coś zrobić</option>
                                    <option value='2'>Coś, co daje mi nowe pomysły do przemyślenia.</option>
                                 </select>
                                 <select name='ad14' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Wolę kursy, które podkreślają:</option>
                                    <option value='1'>Konkretne materiały (fakty, dane)</option>
                                    <option value='2'>Materiał abstrakcyjny (koncepcje, teorie).</option>
                                 </select>
                                 <select name='ad15' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Preferuję pomysły, które są:</option>
                                    <option value='1'>Pewne</option>
                                    <option value='2'>Teoretyczne</option>
                                 </select>
                                 <select name='ad16' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Preferuję naukę:
                                    </option>
                                    <option value='1'>W grupie</option>
                                    <option value='2'>Samotnie</option>
                                 </select>
                                 <select name='ad17' class='form-control mt-2 col-6 sel' required>
                                    <option value="" disabled selected>Kiedy spotykam ludzi na imprezie, bardziej prawdopodobne jest, że będę pamiętać:</option>
                                    <option value='1'>Jak wyglądały</option>
                                    <option value='2'>Co mówili o sobie</option>
                                 </select>
                                 <input name='choice' id="choice" type='text' class='form-control  mt-2' hidden required>
                              </div>

                           </div>
                        </div>
                        <div class='form-group form-check  mt-2'>
                           <label class='form-check-label '>
                              <input class='form-check-input' type='checkbox' required> Akceptuje regulamin.
                           </label>
                        </div>
                        <button onclick='go()' class='button  ' id="button">Submit</button>
                     </form>
                  </div>
               </div>
            </div>
            <!-- Modal footer -->
         </div>
      </div>
   </div>
   <!-- The Modal -->
   <div class='modal fade' id='log'>
      <div class='modal-dialog modal-lg modal-dialog-centered'>
         <div class='modal-content'>
            <!-- Modal Header -->
            <div class='modal-header bg-primary'>
               <h4 class='modal-title'>Login</h4>
               <button type='button' class='close' data-dismiss='modal'>&times;</button>
            </div>
            <!-- Modal body -->
            <div class='modal-body'>
               <div class='container'>
                  <div class='card-body'>
                     <form action='login.php' class='container' method='post'>
                        <div class='form-group'>
                           <input name='login' type='text' placeholder='Login' class='form-control  mt-2' required>
                           <input name='password' type='password' placeholder='Password' class='form-control  mt-2' required>
                        </div>
                        <button type='submit' class='button'>Submit</button>
                     </form>
                  </div>
               </div>
            </div>
            <!-- Modal footer -->
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
   <script src="pars.js"></script>
</body>

</html>