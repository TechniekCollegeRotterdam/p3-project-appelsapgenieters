<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
    <header>
        <img src="images/Logo.jpg" alt="logo">
        <!-- hieronder wordt het menu opgehaald. -->
        <?php
			include "nav.html";
		?>
    </header>

    <main>
        <h1>Ons producten</h1>
        <h2>Wijn/Champagne</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/ArrogantFrogSingleBier02.jpg" alt="wijn">
                            <p>Arrogant Frog Single Vineyard Cabernet Sayvigon Les Calades 2020 75cl</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                        <td>
                            <img src="images/CantinaDiVeronaBier.jpg" alt="wijn">
                            <p>Cantina Di Verone ValPolicella Ripasso 2020 75cl</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                        <td>
                            <img src="images/POMMERYBRUTROYALChampagne.jpg" alt="champagne">
                            <p>Pommery Brut Royale 75cl</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                    </tr>
                </table>
            </article>
        </section>

        <h2>Bier</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <a href="heineken.php">
                                <img src="images/heineken.jpg" alt="bier" width="450" height="450">
                            </a>
                            <p class="linkcolorp">heineken 30cl</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                        <td>
                            <img src="images/HertogJan.jpg" alt="bier" width="450" height="450">
                            <p>Hertog Jan Natuurzuiver bier krat 30cl</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                        <td>
                            <img src="images/POMMERYBRUTROYALChampagne.jpg" alt="champagne">
                            <p>Pommery Brut Royale 75cl</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                    </tr>
                </table>
            </article>
        </section>

        <h2>Melk</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/campinaopjemel.jpg" alt="melk" width="450" height="450">
                            <p>Campina Halfvolle melk</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                        <td>
                            <img src="images/chocolaOpjeMel.jpg" alt="melk" width="450" height="450">
                            <p>Chocolademelk vol 1L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                        <td>
                            <img src="images/yakultoriginal.jpg" alt="melk" width="450" height="450">
                            <p>Chocolademelk vol 1L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                        </td>
                    </tr>
                </table>
            </article>
        </section>
    </main>
</body>

</html>