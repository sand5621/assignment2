<!--
To change this template use Tools | Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Assignment 2: Card matching</title>
    <link href="css/styles.css" rel="stylesheet">
    <script>
        function image(card, newSource){
            //console.log(card.src);
            //console.log(newSource);
            var source = card.src.split("/");
            var relativeSource = source[4]+"/"+source[5]+"/"+source[6];
            console.log(relativeSource);
            
            if(relativeSource == "img/cards/card_back.png"){
                card.src = newSource;
                console.log("Changing the source to the front");
            }
            else{
               card.src = "img/cards/card_back.png";
               console.log("chaging the souce to back");
                
            }
        }
    </script>
</head>
<body>
    <div id="wrapper">
        <h1>Card Matching Game</h1>
        <h2>Created by Edgar Sandoval<br>Assignment #2</h2>
        <div id ="game">
            <table>
                
             <?php
                include 'includes/functions.php';
                define("CARDBACK", "img/cards/card_back.png");
                $rows = [];
                for($i = 0; $i < 5; $i++){
                    $rows[] = getRow();
                    
                }
                //print_r($rows);
                $cardFaces = [];
                foreach($rows as $row){
                    $cardFaces[] = buildCardPaths($row);
                }
                //print_r($cardFaces);
                for($j = 0; $j < count($rows); $j++){
                    echo "<tr>\n";
                        for($i = 0; $i < count($rows[$j]); $i++){
                            echo "<td><img src='".CARDBACK."' alt='The back of a playing card' onclick='image(this,\"".$cardFaces[$j][$i]."\")'></td>\n";
                        }
                    echo "</tr>\n";
                }

                
            ?>
           </table>
        </div>
    </div>

</body>
</html>