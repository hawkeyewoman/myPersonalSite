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
          No matter what life throws at you, dust yourself off and
          take baby steps to a new beginning.  No one can determine your
          future but you.  Enjoy life and be thankful for the trials and
          always aim higher than you can reach.
          </p>
          <img src="lib/images/Carm.jpg" class="img-responsive center-block" style="height: 200px; width: 200px"/>
        </div>
        <div class="col-md-6">
          <h3>Beginning</h3>
          <p>
            Never truly understood the process behind a website until recently.
            The seven week class was insightful and taught me how to construct
            this site.  There are still a lot to learn and I am looking forward
            to building another site.
          </p>
          <img src="lib/images/beginning.jpg" class="img-responsive center-block" style="height: 200px; width: 200px"/>
        </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-9">
            
            </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                  <div class="panel">
                    <div class="panel-heading arrow_box text-center">
                      <h3>Contact Info</h3>
                    </div>
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
