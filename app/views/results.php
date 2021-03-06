<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=URL?>/css/style.css">
    <title>Rock-Paper-Scissors Game</title>
</head>
<body>
    
    <header>
        <div class="container">
        <div class="jumbotron">
            <h1>Rock-Paper-Scissors Game</h1>
        </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/game">Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URL?>/results">Results</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="container">
            <h2 class="header">The results of your games</h2>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Number of Game</th>
                <th scope="col">Computer played</th>
                <th scope="col">You played</th>
                <th scope="col">Who wins</th>
                <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // TODO Naprawienie błędu z NULLEM
            if (isset($data[0])) {
                $numer_of_game = 1;
                foreach ($data[0] as $gra){
                    echo '<tr>';
                    echo "<th scope='row'>$numer_of_game</th>";

                    foreach ($gra as $val) {
                        if ($val == "Computer wins!"){
                            echo "<td style='color: red'>$val</td>";
                        }
                        elseif ($val == "You win!"){
                            echo "<td style='color: green'>$val</td>";
                        }
                        elseif ($val == "Tie!") {
                            echo "<td style='color: saddlebrown'>$val</td>";
                        }
                        else echo "<td>$val</td>";
                    }

                    echo '</tr>';
                    $numer_of_game += 1;
                }
            }
            ?>
            </tbody>
            </table>
        </div>
    </section>
    <footer>
        <div class="container header footer">
            <p>Copyright ©2020 · Author: Michał Kordziński· GitHub: https://github.com/michal-kordzinski</p>
        </div>
    </footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
