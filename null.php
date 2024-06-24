<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>null</title>
</head>
<body>
    <?php
    //creating a data type of my own(customized)
    class Show {
        public $name;
        public $review;
        private $rating;

        function __construct($name, $review, $rate){
            $this->name = $name;
            $this->review = $review;
            $this->setRating($rate) = $rate;
        }

        function fame(){
            if($this->review >= 8.0){
                return "Popular";
            }else{
                return "Narrow Audience";
            }
        }
        
        function getRating(){
            return $this->rate = $rate;
        }

        function setRating($rate){
            if($rate == "NR" || $rate == "PG-13" || $rate == "G" || $rate == "R"){
                $this->rate = $rate;
            }else{
                $this->rate = "NR";
            }
        }
    }

    $show1 = new Show("Kaiju No.8", 8.9, "R");
    $show2 = new Show("Sololeveling", 9.2, "G");
    $show3 = new Show("Kill La Kill", 6.4, "PG-13");

    $show2->setRating(22);
    echo $show2->getRating();
    ?>

</body>
</html>