<?php
class Prodotto {
    public $nome;
    public $prezzo;
    public $categoria;
    public $immagine;

    public function __construct($nome, $prezzo, $categoria, $immagine) {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->immagine = $immagine;
    }
}


function getProdotti() {
    $prodotti = array(
        new Prodotto('Cibo per cani', 10.99, 'Cibo','https://th.bing.com/th/id/OIP._iqkxowFnrVrfRpc37lzoQHaJc?pid=ImgDet&rs=1'),
        new Prodotto('Cibo per gatti', 8.99, 'Cibo','https://th.bing.com/th/id/R.40710a60e96093fb4b5767c6ff56ba83?rik=RN%2bSOnsI28Yucw&pid=ImgRaw&r=0'),
        new Prodotto('Cibo per uccelli', 5.99, 'Cibo','https://uploads.zoobio.de/resize/products/2016/01/27/56a897d8db4b8_1070x1000.jpeg'),
        new Prodotto('Cibo per pesci', 3.99, 'Cibo','https://th.bing.com/th/id/OIP.yDxtbHmQXscfW74OtUKkIgHaHa?pid=ImgDet&rs=1'),
        new Prodotto('Cuccia per cani', 49.99, 'Cuccia','https://th.bing.com/th/id/R.3358db6c6f90f315cc9105f6b19f8559?rik=aBKU5mePnQqATg&riu=http%3a%2f%2fguidapet.com%2fwp-content%2fuploads%2f2018%2f08%2fCuccia-per-cani-Woody-con-porta-in-Plastica-extra-big-1001-539.jpg&ehk=11IOWaG7EvMMpYI9nncJArxNkKhdI0kNoT2pKCV6T%2b4%3d&risl=&pid=ImgRaw&r=0'),
        new Prodotto('Cuccia per gatti', 39.99, 'Cuccia','https://immagini.qualescegliere.it/articoli/2019/10/cuccia-per-gatti-da-esterni.jpg')
    );

    return $prodotti;
}


$prodotti = getProdotti();
?>
