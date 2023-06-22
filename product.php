<?php
trait QuantitaProdotto{
    public $weight;
    
    public function impostaPeso($weight, $unit="kg"){
        $this->weight = "$weight $unit";
    }
}
class Prodotto {
    use QuantitaProdotto;
    public $nome;
    public $prezzo;
    public $categoria;
    public $immagine;

    public function __construct($nome, $prezzo, $categoria, $immagine, $weight) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->immagine = $immagine;

        if ($categoria === 'Cibo') {
            $this->impostaPeso($weight);
        }
    }
}


function getProdotti() {
    $prodotti = array(
        new Prodotto('Cibo per cani', 10.99, 'Cibo','https://th.bing.com/th/id/OIP._iqkxowFnrVrfRpc37lzoQHaJc?pid=ImgDet&rs=1',0.5),
        new Prodotto('Cibo per gatti', 8.99, 'Cibo','https://th.bing.com/th/id/R.40710a60e96093fb4b5767c6ff56ba83?rik=RN%2bSOnsI28Yucw&pid=ImgRaw&r=0',1),
        new Prodotto('Cibo per uccelli', 5.99, 'Cibo','https://uploads.zoobio.de/resize/products/2016/01/27/56a897d8db4b8_1070x1000.jpeg',0.5),
        new Prodotto('Cibo per pesci', 3.99, 'Cibo','https://th.bing.com/th/id/OIP.yDxtbHmQXscfW74OtUKkIgHaHa?pid=ImgDet&rs=1',0.200),
        new Prodotto('Cuccia per cani', 49.99, 'Cuccia','https://th.bing.com/th/id/R.3358db6c6f90f315cc9105f6b19f8559?rik=aBKU5mePnQqATg&riu=http%3a%2f%2fguidapet.com%2fwp-content%2fuploads%2f2018%2f08%2fCuccia-per-cani-Woody-con-porta-in-Plastica-extra-big-1001-539.jpg&ehk=11IOWaG7EvMMpYI9nncJArxNkKhdI0kNoT2pKCV6T%2b4%3d&risl=&pid=ImgRaw&r=0',0),
        new Prodotto('Cuccia per gatti', 39.99, 'Cuccia','https://immagini.qualescegliere.it/articoli/2019/10/cuccia-per-gatti-da-esterni.jpg',0),
        new Prodotto('Osso di plastica', 8.99, 'Gioco', 'https://th.bing.com/th/id/R.0b5f1970fce946cd8ca8181bb9748e26?rik=7GSN7VViCFGL8w&riu=http%3a%2f%2fspanish.plasticpetproducts.com%2fphoto%2fpl19217062-pink_eco_friendly_plastic_dog_bones_12_2cm_plastic_chew_toys_for_dogs.jpg&ehk=57fJ0FLGANXOnWVrVyPmWIAltCUlhaDmVhqRDyrgZV0%3d&risl=&pid=ImgRaw&r=0',0)
    );

    return $prodotti;
}


$prodotti = getProdotti();


?>
