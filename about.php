<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>about page</title>
    <?php require_once("lib/headUtils.php"); ?>
    <style>
      body{
        background: url("lib/images/bridge.jpg")no-repeat center center;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>
    <?php require_once ("lib/partials/navBar.php");?>
    <?php require_once ("lib/partials/carousel.php");?>

    <section class="info">
      <div class="row">
        <div class="col-md-6">
          <h3>Caramelita</h3>
          <p>
            A little info about myself.  My clan is Kinyaa'aanii (Towering House) born into the Tabaaha (Water's Edge clan).
            My materal grandparents are Keha'atiinii (Foot trails people) and my pateral grandparents are 'Ashiihi (Salt people).
            I remember my grandmother showing me how to weave when I was a little girl and wish I was able to learn more from her.  My
            grandmother was killed in a head on collison with a drunk driver.  As a child I walked in the hills behind
            our own and played outdoors, the internet didnt exist then nor did cell phones.  Today, it seems like our
            lives revolve around technology.
            No matter what life throws at you, dust yourself off and
            take baby steps to a new beginning.  No one can determine your
            future but you.  Enjoy life and be thankful for the trials and
            always aim higher than you can reach.
          </p>
        </div>
        <div class="col-md-6">
          <img src="lib/images/beginning.jpg" class="img-responsive center-block img-circle" style="height: 200px; width: 200px"/>
          <h3>Beginning</h3>
          <p>
            Never truly understood the process behind a website until recently.
            The seven week class was insightful and taught me how to construct
            this site.  There are still a lot to learn and I am looking forward
            to building another site.
          </p>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="lib/images/Carm.jpg" class="img-responsive center-block" style="height: 200px; width: 200px"/>
            <div class="panel">
            <div class="panel-heading arrow_box text-center">
              <h3>Contact Info</h3>
              <ul class="list-group list-group-flush text-center">
                <li class="list-group-item">Caramelita Rafael</li>
                <li class="list-group-item">Hawkeyewoman2013@gmail.com</li>
                <li class="list-group-item">facebook</li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
