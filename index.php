<?php
class Film {
  public $titolo;
  public $genere;
  public $durata;
  public $lingua;
  public $trama;
  public $anno;

  public function __construct($_titolo, $_genere, $_durata, $_lingua, $_trama, $_anno){
    $this -> titolo = $_titolo;
    $this -> genere = $_genere;
    $this -> durata = $_durata;
    $this -> lingua = $_lingua;
    $this -> trama = $_trama;
    $this -> anno = $_anno;
  }
}

$films = [
  new Film('Inception', 'Azione', '2h 28m', 'Ita', 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.', 2010),
  new Film('Interstellar', 'Fantascienza', '2h 49m', 'Ita', 'L\'umanità è sull\'orlo dell\'estinzione e un gruppo di astronauti viaggia attraverso un wormhole alla ricerca di un altro pianeta abitabile.', 2014),
  new Film('Django Unchained', 'Western', '2h 45m', 'ita', 'Insieme a un cacciatore di taglie tedesco, uno schiavo libero di nome Django attraversa gli Stati Uniti per salvare la moglie dal sadico proprietario di una piantagione.', 2012),
  new Film('Forrest Gump', 'Commedia Romantica', '2h 23m', 'ita', 'Forrest Gump è un uomo gentile e di animo semplice che si trova coinvolto in quasi tutti gli eventi più importanti degli anni \'60 e \'70.', 1994)
]

?>