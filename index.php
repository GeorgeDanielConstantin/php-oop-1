<?php

class Movie
{
    public $title;
    public $director;
    public $plot;
    public $year;
    public $originalLanguage;

    public function __construct($_title, $_director, $_year, $_originalLanguage)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->year = $_originalLanguage;

    }

    public function directedBy()
    {
        return "$this->title directed by $this->director";
    }
}

$Inception = new Movie("Inception", "Christopher Nolan", "2010", "English");
$Interstellar = new Movie("Interstellar", "Christopher Nolan", "2014", "English");
$DjangoUnchained = new Movie("Django Unchained", "Quentin Tarantino", "2012", "English");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP OOP 1</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <h1 class="text-center mt-3">MOVIES</h1>
    <div class="container">
      <div class="row row-cols-3">
        <div class="col">
          <div class="card mb-5">
            <h2 class="card-header"><?php echo $Inception->title ?></h2>
            <div class="card-body">
              <p class="card-title">
                Directed by
                <?php echo $Inception->director ?>
              </p>
              <p class="card-text">
                Year:
                <?php echo $Inception->year ?>
              </p>
              <p class="card-text">
                Original Language:
                <?php echo $Inception->originalLanguage ?>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-5">
            <h2 class="card-header"><?php echo $Interstellar->title ?></h2>
            <div class="card-body">
              <p class="card-title">
                Directed by
                <?php echo $Interstellar->director ?>
              </p>
              <p class="card-text">
                Year:
                <?php echo $Interstellar->year ?>
              </p>
              <p class="card-text">
                Original Language:
                <?php echo $Interstellar->originalLanguage ?>
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card mb-5">
            <h2 class="card-header"><?php echo $DjangoUnchained->title ?></h2>
            <div class="card-body">
              <p class="card-title">
                Directed by
                <?php echo $DjangoUnchained->director ?>
              </p>
              <p class="card-text">
                Year:
                <?php echo $DjangoUnchained->year ?>
              </p>
              <p class="card-text">
                Original Language:
                <?php echo $DjangoUnchained->originalLanguage ?>
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
