<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "wedkowanie1");

            $zap1 = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby.id=lowisko.Ryby_id and lowisko.rodzaj = 3;";
            $wynik1 = mysqli_query($conn, $zap1);
            while ($wiersz1 = mysqli_fetch_row($wynik1)) {
                echo "<li>$wiersz1[0] pływa w rzece $wiersz1[1], $wiersz1[2]</li>";
            }
            mysqli_close($conn);
            ?>
        </ol>
    </main>
    <div id="right">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="left">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>○
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
            $conn1 = mysqli_connect("localhost", "root", "", "wedkowanie1");

            $zap2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1;";
            $wynik2 = mysqli_query($conn1, $zap2);
            while ($wiersz2 = mysqli_fetch_row($wynik2)) {
                echo "<tr>
                            <td>$wiersz2[0]</td>
                            <td>$wiersz2[1]</td>
                            <td>$wiersz2[2]</td>
                          </tr>";
            }
            mysqli_close($conn1);
            ?>
        </table>
    </div>
    <footer>
        <p>Stronę wykonał: Mateusz Paciej</p>
    </footer>
</body>

</html>