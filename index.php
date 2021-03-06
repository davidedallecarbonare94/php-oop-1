<?php 

class Movie {
    public $title;
    public $original_title;
    public $year;
    public $cover;


    public function __construct($title, $original_title, $year, $cover){
        $this->title = $title;
        $this->original_title = $original_title;
        $this->year = $year;
        $this->cover = $cover;
    }
}

$movies = [
new Movie("One Piece: The Movie", "One Piece", "2000", "https://upload.wikimedia.org/wikipedia/en/thumb/b/b0/Dead_End_no_B%C5%8Dken.jpg/220px-Dead_End_no_B%C5%8Dken.jpg"),
new Movie("Chopper's Kingdom on the Island of Strange Animals", "Chinjū-tō no Choppā-ōkoku", "2002", "https://www.themoviedb.org/t/p/original/aYrVHb3QuCovmIMXnubYCPLXmqo.jpg"),
new Movie("Dead End Adventure", "Deddo Endo no Bōken", "2003", "https://images-na.ssl-images-amazon.com/images/I/61cnF1H8fhL._SX359_BO1,204,203,200_.jpg"),
new Movie("Baron Omatsuri and the Secret Island", "Omatsuri Danshaku to Himitsu no Shima", "2005", "https://www.movienco.co.uk/carteles/14600/14689/001.jpg"),
new Movie("One Piece: Gold", "One Piece: Gold", "2016", "https://guidatv.sky.it/uuid/4deb0605-9d9c-4464-8fb1-48af792d0c7c/cover?md5ChecksumParam=52061abc5a553103bc5adf00211065cb"),
new Movie("One Piece: Stampede", "One Piece: Stampido", "2019", "https://i.ebayimg.com/images/g/HoMAAOSw07ZdVUlF/s-l400.jpg")


];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon"
        href="https://icons.iconarchive.com/icons/crountch/one-piece-jolly-roger/256/Luffys-flag-icon.png"
        type="image/x-icon">
    <title>One Piece PHP Objects</title>
</head>

<body>
    <header>
        <h1>One Piece Films</h1>
    </header>
    <main>
        <div class="films">
            <?php foreach($movies as $movie) : ?>
            <div class="card">
                <img class="poster" src="<?php echo $movie->cover?>" alt="<?php $movie->cover?> Cover">
                <div class="text">
                    <h3><?php echo $movie->title?></h3>
                    <h4><?php echo $movie->original_title?></h4>
                    <h4><?php echo $movie->year?></h4>
                </div>
            </div>
            <?php endforeach ?>

        </div>

    </main>




</body>

</html>