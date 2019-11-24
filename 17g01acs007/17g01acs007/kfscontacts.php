<!DOCTYPE html>
<html>
  <head>
    <title>WAKANDA JUNGLE SERVICE</title>
    <link rel="stylesheet" type="text/css" href="css/kfs.css" />
  </head>
  <body>
    <nav>
      <ul>
        <li><a>WAKANDA JUNGLE SERVICE</a></li>
        <li><a href="home.php">HOME</a></li>
        <li><a href="kfsfunctions.php">FUNCTIONS</a></li>
        <li><a href="kfsdirections.php">DIRECTIONS</a></li>
		<li class="active"><a href="kfscontacts.php">CONTACT US</a></li>
		 <li><a class="active" href="Loginvalidation.php" float="right">Logout</a></li>
      </ul>
    </nav>

    <header>
      <div class="headertext">
        <h1>Wakanda Jungle Service</h1>
        <h2>Talk To Us Today</h2>
      </div>
    </header>

    <div id="wrapper">
      <main>
        <div class="aboutsection">
          <h1 class="media">Talk To Us</h1>
          <hr class="hrunder" />
          <div class="">
            <form id="contactform" action="contact.php" method="POST">
              <input
                type="text"
                name="name"
                placeholder="Input Both Names"
                required=""
              />
              <br /><br />
              <input type="email" name="email" placeholder="Input Email" />
              <br /><br />
              <input
                type="number"
                name="tel"
                placeholder="Input Phone Number"
                required=""
              />
              <br /><br />
              <textarea
                name="message"
                placeholder="What do you want to tell us?"
              ></textarea>
              <br /><br />
              <input type="submit" name="submit" value="send" />
            </form>
          </div>
        </div>
      </main>
      <footer>
        <b><i>Copyright &copy; 2019 Darlyn Tessa</i></b>
      </footer>
    </div>
  </body>
</html>
