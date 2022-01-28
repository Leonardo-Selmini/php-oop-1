<?php
class Film {
  public $titolo;
  public $copertina;
  public $genere;
  public $durata;
  public $lingua;
  public $trama;
  public $anno;

  public function __construct($_titolo, $_copertina, $_genere, $_durata, $_lingua, $_trama, $_anno){
    $this -> titolo = $_titolo;
    $this -> copertina = $_copertina;
    $this -> genere = $_genere;
    $this -> durata = $_durata;
    $this -> lingua = $_lingua;
    $this -> trama = $_trama;
    $this -> anno = $_anno;
  }

  public function getAnnoLingua() {
    return "{$this -> anno}  {$this -> lingua}";
  }
}

$films = [
  new Film(
    'Inception',
    'https://i.etsystatic.com/20343000/r/il/68040f/1898560378/il_570xN.1898560378_f93y.jpg',
    'Azione',
    '2h 28m',
    'Ita',
    'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.',
    2010),
  new Film(
    'Interstellar',
    'https://images-na.ssl-images-amazon.com/images/I/91kFYg4fX3L.jpg',
    'Fantascienza',
    '2h 49m',
    'En',
    'L\'umanità è sull\'orlo dell\'estinzione e un gruppo di astronauti viaggia attraverso un wormhole alla ricerca di un altro pianeta abitabile.',
    2014),
  new Film(
    'Django Unchained',
    'https://www.cinefacts.it/foto/h!django-unchained-locandina-poster-cinefacts.jpg',
    'Western',
    '2h 45m',
    'Fr',
    'Insieme a un cacciatore di taglie tedesco,
    uno schiavo libero di nome Django attraversa gli Stati Uniti per salvare la moglie dal sadico proprietario di una piantagione.',
    2012),
  new Film(
    'Forrest Gump',
    'https://images-na.ssl-images-amazon.com/images/I/61amdGTMOBL.jpg',
    'Commedia Romantica',
    '2h 23m',
    'Ita',
    'Forrest Gump è un uomo gentile e di animo semplice che si trova coinvolto in quasi tutti gli eventi più importanti degli anni \'60 e \'70.',
    1994)
  ];
?>

<!DOCTYPE html>
<html lang="ita">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- title -->
  <title>4 Film da non perdere</title>
  <!-- link css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>4 Film da non perdere</h1>
  </header> 
  <main>
    <ul>
    <?php foreach($films as $film){ ?>
      <li>
        <img src="<?php echo $film -> copertina ?>" alt="copertina film">
        <div class="text-container">
          <h2>
            <?php echo $film -> titolo ?>
          </h2>
          <div class="info-container">
            <span>
              <?php echo $film -> genere ?>
            </span>
          </div>
          <div class="info-container">
            <span>
              <?php echo $film -> getAnnoLingua() ?>
            </span>
          </div>
          <p>
            <?php echo $film -> trama ?>
          </p>
        </div>
      </li>
    <?php } ?>
    </ul>
  </main>
</body>
</html>