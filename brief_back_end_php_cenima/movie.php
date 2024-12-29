<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button><a href="./index.php">CLICK HERE</a></button>
<?php 

// getters :

// class Movie{
//     private $id;
//     private $title;
//     private $relese_date;
//     private $duration;
//     private $rating;

//     function __construct($id,$title,$relese_date,$duration,$rating){
//         $this->id = $id;
//         $this->title = $title;
//         $this->relese_date = $relese_date;
//         $this->duration = $duration;
//         $this->rating = $rating;
//      }
//     public function show_movie_Details()
//     {
//         echo  "<h4>title</h4>".$this->title,"<h4>relese_date</h4>".$this->relese_date,"<h4>duration</h4>".$this->duration,"<h4>rating</h4>".$this->rating ;
//     }
// }
// $obj = new movie(1,"interstiller","2014-1-31",190,9);
//  echo $obj->show_movie_Details();



// seters :

class Movie{
    private $id;
    private $title;
    private $relese_date;
    private $duration;
    private $rating;


    public function display_title(){
        echo "<h4>title</h4>".$this->title,"<h4>relese_date</h4>".$this->relese_date,"<h4>duration</h4>".$this->duration,"<h4>rating</h4>".$this->rating;

        
    }
    public function set_title($id,$title,$relese_date,$duration,$rating){
        $this->id = $id;
        $this->title = $title;
        $this->relese_date = $relese_date;
        $this->duration = $duration;
        $this->rating = $rating;
    }
}

$classic = new Movie(1,"interstiller","2014-1-31",190,9);
$classic->set_title(1,"pulpe fiction","1995-1-31",180,9.5);
echo $classic->display_title() ;

?>

</body>
</html>
