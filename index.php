<?php
	include_once "content/Head.php";
?>

<body class="landing" onload="init()">
		<!-- Header -->
        <header id="header" class="header-home">
       <a href='index.php?page=home'><img src="images/banner.png" alt="Banner" /></a>
		<nav class="navbar navbar-default navbar-fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="nav navbar-nav">


					<li><p>
					<label for="query" ></label> 
					<input id="query" name="query" type="search" 
					placeholder="Suchbegriff ..." >
					</p></li>
	  				<li><a href="index.php?page=home">Start</a></li>
                    <li><a href="index.php?page=gallery">Galerie</a></li>
                    <li><a href="index.php?page=category">Alle Kategorien</a></li>
                    <li><a href="index.php?page=registration">Registrierung</a></li>
					</ul>
					

<!--<ul class="nav navbar-nav navbar-right">
<li>
<?php 

/*

if (isset($_SESSION['u_id'])) {

	echo "<form id='form-welcome' action='includes/logout.inc.php' method='POST'>";
		$username= $_SESSION['u_uid'];
		//$pic=$_SESSION['pic'];
		$pic=profilepic($_SESSION['u_id'],$conn);
		echo " Willkommen <img id='profileicon' src=$pic height='42' width='42' style='border-radius:100%;' > <a class='login-name' href='index.php?page=profile'>$username</a>! ";
		echo "<button id='button-login' type='submit' name='submit'><span class='glyphicon glyphicon-log-out'></span> Logout</button>
		</form>";
}	
else{*/
?>



<button id="button-login" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</button>
 </ul>-->

<?php
//}
?>

</nav>


</header>

        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Hier anmelden!</h4>-->

	 <?php
	 
	  if (isset($_SESSION['u_id'])) {
        echo "<form id='form-welcome' action='includes/logout.inc.php' method='POST'>";
        $username= $_SESSION['u_uid'];
        $pic=profilepic($_SESSION['u_id'],$conn);
        echo " Willkommen <img id='profileicon' src=$pic height='42' width='42' style='border-radius:100%;' > <a class='login-name' href='index.php?page=profile'>$username</a>! ";
        echo "<button id='button-login' type='submit' name='submit'><span class='glyphicon glyphicon-log-out'></span> Logout</button>
        </form>";
              

	  } else {
		  echo '<form action="includes/login.inc.php" method="POST">
				  <input type="text" name="uid" placeholder="Benutzername"> </br>
				  <input type="password" name="pwd" placeholder="Passwort"> </br>
				  <button class="btn btn-default" type="submit" name="submit">Einloggen</button>
				 </form>';
	  }
	  
	
	
?>

<!--<hr class="strich">
	
<img src="images/regMensch.png" style="width: 160px; float: right; margin-right:55px;">	


<h5>Noch kein Konto?</h5>
<p>Dann registriere dich noch heute!</p>
<ul class="actions">
	<li>
		<a href="index.php?page=registration" class="button big">Jetzt registrieren!</a>
	</li>-->
</ul>


		<section id="main" class="wrapper">
		
	    <?php if(!isset($_GET['page'])){
			header("Location: index.php?page=home");
		}
                   elseif($_GET['page']==''){ $_GET['page'] = 'home';}
            
             if($_GET['page'] != 'home' && $_GET['page'] != 'editor' && $_GET['page'] != 'profile' && $_GET['page'] != 'gallery' || $_GET['page'] == null){ echo "<div class=\"container\">";}
				if($_GET['page']=='home'){
					include_once "content/Startseite.php";
				}
				elseif($_GET['page']=='gallery'){
					include_once "content/Galerie.php";
                }
                elseif($_GET['page']=='category'){
					include_once "content/Kategorien.php";
				}
				elseif($_GET['page']=='profile'){
					include_once "content/Profil.php";
				}
				elseif($_GET['page']=='registration'){
					include_once "content/Registrierung.php";
				}
			
             if($_GET['page'] != 'home'){ echo "</div>";} ?>
            </section>


<?php
    include_once "content/Footer.php"
?>