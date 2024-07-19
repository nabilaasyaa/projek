 <!-- Content -->
  <?php 
  if (isset($_GET['x']) && $_GET['x']=='home'){
      include "main.php";} 
  elseif(isset($_GET['x']) && $_GET['x']=='manajemenwaktu'){
    include "manajemenwaktu.php";}
  elseif(isset($_GET['x']) && $_GET['x']=='manajemenkeuangan'){
      include "manajemenkeuangan.php";}
  elseif(isset($_GET['x']) && $_GET['x']=='kebersihanrumah'){
        include "kebersihanrumah.php";}
  elseif(isset($_GET['x']) && $_GET['x']=='komunikasikeluarga'){
          include "komunikasikeluarga.php";}
  elseif(isset($_GET['x']) && $_GET['x']=='pembagiantugas'){
            include "main.php";}
  elseif(isset($_GET['x']) && $_GET['x']=='login'){
              include "login.php";}
  else {
    include"main.php";
  }
  
  ?>
