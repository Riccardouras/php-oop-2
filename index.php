
<!DOCTYPE html>
<head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <style>
        img{
            width: 200px;
        }
        li{
            list-style: none;
            margin: 20px;
        }
        a{
            text-decoration: none;
        }
        ul{
            display: flex;
        }
    </style>
</head>
<body>
<h1>Benvenuto nel nostro Negozio di Animali!</h1>
    
    <h2>Categorie:</h2>
    <ul>
        <li>
            <a href="category.php?categoria=cibo"><img style="width: 200px;" src="https://th.bing.com/th/id/R.87cd5cef16d3267b94f87b78618f72ad?rik=2Mb2xT%2ft%2fVKoHg&pid=ImgRaw&r=0" alt="carlino"> <br>Cibo</a> 
        </li>
       
        <li>
            <a href="category.php?categoria=cuccia"> <img src="https://emporiogenova.com/2393-thickbox_default/cuccia-cani-gatti-esterno-legno.jpg" alt="">  <br> Cuccia</a>
        </li>
        <li>
            <a href="category.php?categoria=gioco"><img src="https://th.bing.com/th/id/OIP.Y1uAfzN13Y0CaueN-WIvPwHaEd?pid=ImgDet&rs=1" alt=""> <br> Gioco</a>
        </li>
    </ul>
</body>
</html>