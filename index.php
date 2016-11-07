<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Personal Page</title>
    <?php require_once("lib/headUtils.php"); ?>
    <link rel="stylesheet" href="lib/css/animate.css">
    <link rel="stylesheet" href="lib/css/box.css"/>
    <link rel="stylesheet" href="lib/css/mobile.css"/>
    <link rel="stylesheet" href="lib/js/mobile.js"/>

    <style>
      body{
        background: url("lib/images/road.jpg")no-repeat center center;
        background-attachment: fixed;
      }
    </style>
  </head>
  <body>
    <?php require_once ("lib/partials/mobile.php");?>
    <section>
      <div class="class-md-12">
        <div class="animated hinge">
          <h1>Stepping Forward</h1>
        </div>
      </div>
      <div id="photo">
        <div class="col-md-12">
          <div class="row col-centered">
              <img src="lib/images/reflect.png" class="img-responsive center-block clearfix" alt="" />
          </div>
        </div>
      </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <p class="lead">
          "If you accept the expectations of others, especially
          negative ones, then you never will change the outcome."
        </p>
        <p class="lead">
          Michael Jordan
        </p>
      </div>
    </div>
  </section>

  <section>
    <?php require_once ("lib/partials/box.php");?>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <p class="lead">
          How far can technology take you?  In the past few weeks I have taken a step that I have never
          seen myself taking and that is learning web design.  Codes, codes, a few nights
          they entered my dreams and causing headaches but in the end it's all worth it because I have learned
          something new.
        </p>
      </div>
    </div>
  </section>
  </body>
</html>
