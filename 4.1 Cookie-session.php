<!-- .......... 1 .......... -->

<!-- Cea mai simpla forma de a duce o valoare in alta pagina -->
<!-- <a href="process.php?ani=20">Urmatorul</a> -->

<?php
// .......... 2 ..........

// Setarea unui cookie si afisarea acestuia.
    // setcookie("oras", "Bucuresti");
    // echo "Locul dvs de nastere este " .$_COOKIE["oras"];

// expira dupa o ora de la salvare
    // setcookie("oras", "Bucuresti" , time() + 3600);

// expira la 5:00 1. mai 2009.
    // setcookie("oras", "Bucuresti", mktime(5,0,0,5,1,2009));

// stergerea unui cookie
    // setcookie("oras");

// .......... 3 ..........
/*
    Chiar dacă forma HTML este utilizată adesea pentru generarea datelor
    de utilizator, aceasta poate fi utilizată și pentru expedierea
    informațiilor de pe o pagină pe alta.
*/
    // if (isset($_POST['submit'])) {
    //     echo $_POST['acct'];
    // }

    // $acct = "admin";
    // echo "<form action = '4.1 Cookie-session.php' method = 'POST'>
    //         <input type = 'hidden' name = 'acct' value = '$acct'>
    //         <input type = 'submit' name = 'submit' value = 'Next Page'>
    //       </form>";

// .......... 4 ..........
// Pornirea sessiunii
    // session_start();

// Setarea unei sessiuni
    // $_SESSION["nume"] = "Andrei";

// Daca informatia trebuie stearsa
    // unset($_SESSION["nume"]);

// Distrugerea unei sessiuni
    // session_destroy()

// .......... 5 ..........
// Mai jos avem un exemplu de utilizare a sesiunii pentru logging
    // if ($_POST['submit'] == "Login"){ // segmentul de cod verifica numele de utilizator si parola
    //     session_start(); //daca numele de utilizator este recunoscut
    //     $_SESSION['access'] = "yes";
    //     header('Location: 4.2 Access.php');
    // }
    // if ($_POST['submit'] == "Log Out"){  
    //     session_destroy(); //daca utilizatorul vrea sa paraseasca sesiunea
    // }

?>