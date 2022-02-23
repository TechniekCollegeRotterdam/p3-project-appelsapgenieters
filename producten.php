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
        <h2>Wijn</h2>

        <!-- We using tables for the products. -->
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/ArrogantFrogSingleBier02.jpg" alt="wijn">
                            <p>Arrogant Frog Single Vineyard Cabernet Sayvigon Les Calades 2020 75cl</p>
                            <a href="arrogant.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€7.98</p>
                        </td>
                        <td>
                            <img src="images/CantinaDiVeronaBier.jpg" alt="wijn">
                            <p>Cantina Di Verone ValPolicella Ripasso 2020 75cl</p>
                            <a href="cantina.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€10.65</p>
                        </td>
                        <td>
                            <img src="images/Lindeman'sWijn.jpg" alt="wijn">
                            <p>Lindeman's South Africa Sauvignon Blanc Chardonnay</p>
                            <a href="Lindeman.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€5.29</p>
                        </td>
                    </tr>
                </table>
            </article>
        </section>

        <h2>Champagne</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/POMMERYBRUTROYALChampagne.jpg" alt="champagne">
                            <p>Pommery Brut Royale 75cl</p>
                            <a href="prommery.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€34.99</p>
                        </td>
                        <td>
                            <img src="images/PiperScheidziek.jpg" alt="champagne" width="450" height="450">
                            <p>Piper Heidsieck Brut Champagne</p>
                            <a href="piper.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€35.99</p>
                        </td>
                        <td>
                            <img src="images/BollingChampagne.jpg" alt="champagne" width="450" height="450">
                            <p>Bollinger Champagne special cuvée</p>
                            <a href="bolinger.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€62.00</p>
                        </td>
                    </tr>
                </table>
            </article>
        </section>

        <section>
            <article>
                <table>
                    <tr>
                        <td>
                        <img src="images/RDeRuinart.jpg" alt="champagne" width="200" height="200">
                            <p>R De Ruinart 75cl</p>
                            <a href="RDERuinart.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€59.00</p>  
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
                            <button class="colorb">toevoegen</button>
                            <p>€13.99</p>
                        </td>
                        <td>
                            <img src="images/HertogJan.jpg" alt="bier" width="450" height="450">
                            <p>Hertog Jan Natuurzuiver bier krat 30cl</p>
                            <a href="hertogjan.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€17.99</p>
                        </td>
                        <td>
                            <img src="images/ExtraCorona.jpg" alt="bier" width="450" height="450">
                            <p>Corona Extra pils 6-pack</p>
                            <a href="corona.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€8.99</p>
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
                            <a href="campinahalf.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.45</p>
                        </td>
                        <td>
                            <img src="images/melk4pakjes.jpg" alt="melk" width="450" height="450">
                            <p>AH Biologisch Halfvolle melk</p>
                            <a href="melk4pakjes.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€4.79</p>
                        </td>
                        <td>
                            <img src="images/Biologischemelk.jpg" alt="melk" width="450" height="450">
                            <p>AH Biologische Halfvolle Melk</p>
                            <a href="ahbiologisch.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.09</p>
                        </td>
                    </tr>
                </table>
            </article>
        </section>
        <h2>Frisdrank</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/Rivella1.jpg" alt="frisdrank" width="450" height="450">
                            <p>Rivella Original Fles 1L</p>
                            <a href="rivellaoriginal.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.85</p>
                        </td>
                        <td>
                            <img src="images/rivella2.jpg" alt="frisdrank" width="450" height="450">
                            <p>Rivella Cranberry Fles 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.03</p>
                        </td>
                        <td>
                            <img src="images/rivella3.jpg" alt="melk" width="450" height="450">
                            <p>Rivella Green Tea Fles 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.29</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <img src="images/Liptonicetea1.jpg" alt="frisdrank" width="450" height="450">
                            <p>Lipton Ice Tea Green Original 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.59</p>
                        </td>
                        <td>
                            <img src="images/Liptonicetea2.jpg" alt="frisdrank" width="450" height="450">
                            <p>Lipton Ice Tea Green Original 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.79</p>
                        </td>
                        <td>
                            <img src="images/Liptonicetea3.jpg" alt="frisdrank" width="450" height="450">
                            <p>Lipton Ice Tea Sparkling Original 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.79</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <img src="images/CrystalClear1.jpg" alt="frisdrank" width="450" height="450">
                            <p>Crystal Clear Sparkling Lemon 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.63</p>
                        </td>
                        <td>
                            <img src="images/CrystalClear2.jpg" alt="frisdrank" width="450" height="450">
                            <p>Crystal Clear Sparkling Peach Fles 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.63</p>
                        </td>
                        <td>
                            <img src="images/Crystalclear3.jpg" alt="frisdrank" width="450" height="450">
                            <p>Crystal Clear Sparkling Cranberry Fles 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.63</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <img src="images/CrystalClear4.jpg" alt="frisdrank" width="450" height="450">
                            <p>Crystal Clear Sparkling Lemon Cactus Fles 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.67</p>
                        </td>
                        <td>
                            <img src="images/herocassis1.jpg" alt="frisdrank" width="450" height="450">
                            <p>Hero Cassis Zero 1,25L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.73</p>
                        </td>
                        <td>
                            <img src="images/herocassis2.jpg" alt="frisdrank" width="450" height="450">
                            <p>Hero Cassis 1,25L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€1.73</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <img src="images/fantacassis1.jpg" alt="frisdrank" width="450" height="450">
                            <p>Fanta Cassis 1,5L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">toevoegen</button>
                            <p>€2.03</p>
                        </td>
                    </tr>
                </table>
            </article>
        </section>
        <h2>Water</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/Spamineraalwater.jpg" alt="water" width="450" height="450">
                            <p>Spa Mineraalwater reine</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€0.99</p>
                        </td>
                        <td>
                            <img src="images/SpaIntense.jpg" alt="water" width="450" height="450">
                            <p>Spa Intense</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€1.09</p>
                        </td>
                        <td>
                            <img src="images/spafinesse.jpg" alt="water" width="450" height="450">
                            <p>Spa Finesse</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€1.05</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <img src="images/Spamineraalwater6x.jpg" alt="water" width="450" height="450">
                            <p>Spa mineraalwater 6x</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€5.79</p>
                        </td>
                    </tr>
                </table>
            </article>
        </section>
        <h2>Zuiveldrank</h2>
        <section>
            <article>
                <table>
                    <tr>
                        <td>
                            <img src="images/yakultoriginal.jpg" alt="zuiveldrank" width="450" height="450">
                            <p>Yakult Drink Original</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€3.25</p>
                        </td>
                        <td>
                            <img src="images/OpIsOptimel.jpg" alt="zuiveldrank" width="450" height="450">
                            <p>Optimel Drink framboos 0% vet</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€1.45</p>
                        </td>
                        <td>
                            <img src="images/chocolaOpjeMel.jpg" alt="melk" width="450" height="450">
                            <p>Chocolademelk vol 1L</p>
                            <a href="heineken.php">
                                <button class="colorp">bekijken</button>
                            </a>
                            <button class="colorb">aantal</button>
                            <p>€1.87</p>
                        </td>
                    </tr>
                </table>

                <h2>Vruchtensap</h2>
                <section>
                    <article>
                        <table>
                            <tr>
                                <td>
                                    <img src="images/TaksiTropischFruit.jpg" alt="vruchtensap" width="450" height="450">
                                    <p>Taksi Tropisch fruit</p>
                                    <a href="heineken.php">
                                        <button class="colorp">bekijken</button>
                                    </a>
                                    <button class="colorb">aantal</button>
                                    <p>€1.45</p>
                                </td>
                                <td>
                                    <img src="images/IceTeaLemon.jpg" alt="vruchtensap" width="450" height="450">
                                    <p>Ice tea Lemon</p>
                                    <a href="heineken.php">
                                        <button class="colorp">bekijken</button>
                                    </a>
                                    <button class="colorb">aantal</button>
                                    <p>€1.99</p>
                                </td>
                                <td>
                                    <img src="images/IceTeaPeach.jpg" alt="vruchtensap" width="450" height="450">
                                    <p>Ice tea Peach</p>
                                    <a href="heineken.php">
                                        <button class="colorp">bekijken</button>
                                    </a>
                                    <button class="colorb">aantal</button>
                                    <p>€1.99</p>
                                </td>
                            </tr>
                        </table>
                    </article>
                </section>

    </main>
</body>

</html>