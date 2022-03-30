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
        session_start();
        if(isset($_SESSION["bh-login"]))
        {
            include "navadmin.php";
        } elseif(isset($_SESSION["cl-login"]))
        {
            include "navclient.php";
        } else
			include "navbezoeker.html";
		?>
    </header>

    <main>
        <h1>Onze producten</h1>
        <h2>Wijn</h2>

        <!-- We using tables for the products. -->
        <section>
            <article>
                <form method="POST">
                <table>
                    <tr>
                        <td>
                        <a href="arrogant.php">
                            <img src="images/ArrogantFrogSingleBier02.jpg" alt="wijn">
                            </a>
                            <p>Arrogant Frog Single Vineyard Cabernet Sayvigon Les Calades 2020 75cl</p>
                            <button class="colorb">toevoegen</button>
                            <p>€7.98</p>
                        </td>
                        <td>
                        <a href="cantina.php">
                            <img src="images/CantinaDiVeronaBier.jpg" alt="wijn">
                            
                            </a>
                            <p>Cantina Di Verone ValPolicella Ripasso 2020 75cl</p>
                            <button class="colorb">toevoegen</button>
                            <p>€10.65</p>
                        </td>
                        <td>
                            <a href="Lindeman.php">
                            <img src="images/Lindeman'sWijn.jpg" alt="wijn">
                            </a>
                            <p>Lindeman's South Africa Sauvignon Blanc Chardonnay</p>
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

                            <a href="prommery.php">
                            <img src="images/POMMERYBRUTROYALChampagne.jpg" alt="champagne">
                            </a>
                            <p>Pommery Brut Royale 75cl</p>
                            <button class="colorb">toevoegen</button>
                            <p>€34.99</p>
                        </td>
                        <td>
                            <a href="piper.php">
                            <img src="images/PiperScheidziek.jpg" alt="champagne" width="450" height="450">
                            </a>
                            <p>Piper Heidsieck Brut Champagne</p>
                            <button class="colorb">toevoegen</button>
                            <p>€35.99</p>
                        </td>
                        <td>

                            <a href="bolinger.php">
                            <img src="images/BollingChampagne.jpg" alt="champagne" width="450" height="450">
                            </a>
                            <p>Bollinger Champagne special cuvée</p>
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
                            <a href="RDERuinart.php">
                            <img src="images/RDeRuinart.jpg" alt="champagne" width="200" height="200">
                            </a>
                            <p>R De Ruinart 75cl</p>
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
                            <button class="colorb">toevoegen</button>
                            <p>€13.99</p>
                        </td>
                        <td>
                            <a href="hertogjan.php">
                            <img src="images/HertogJan.jpg" alt="bier" width="450" height="450">
                            </a>
                            <p>Hertog Jan Natuurzuiver bier krat 30cl</p>
                            <button class="colorb">toevoegen</button>
                            <p>€17.99</p>
                        </td>
                        <td>
                            <a href="corona.php">
                            <img src="images/ExtraCorona.jpg" alt="bier" width="450" height="450">
                            </a>
                            <p>Corona Extra pils 6-pack</p>
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
                            <a href="campinahalf.php">
                            <img src="images/campinaopjemel.jpg" alt="melk" width="450" height="450">
                            </a>
                            <p>Campina Halfvolle melk</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.45</p>
                        </td>
                        <td>
                            <a href="melk4pakjes.php">
                            <img src="images/melk4pakjes.jpg" alt="melk" width="450" height="450">
                            </a>
                            <p>AH Biologisch Halfvolle melk</p>
                            <button class="colorb">toevoegen</button>
                            <p>€4.79</p>
                        </td>
                        <td>
                            <a href="ahbiologisch.php">
                            <img src="images/Biologischemelk.jpg" alt="melk" width="450" height="450">
                            </a>
                            <p>AH Biologische Halfvolle Melk</p>
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
                            <a href="rivellaoriginal.php">
                            <img src="images/Rivella1.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Rivella Original Fles 1L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.85</p>
                        </td>
                        <td>
                            <a href="rivellacranberry.php">
                            <img src="images/rivella2.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Rivella Cranberry Fles 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.03</p>
                        </td>
                        <td>
                            <a href="rivellagreentea.php">
                            <img src="images/rivella3.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Rivella Green Tea Fles 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.29</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                    <td>
                            <a href="fantacassis.php">
                            <img src="images/fantacassis1.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Fanta Cassis 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.03</p>
                        </td>
                        <td>
                            <a href="liptongreen.php">
                            <img src="images/Liptonicetea2.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Lipton Ice Tea Green Original 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.79</p>
                        </td>
                        <td>
                            <a href="liptonsparkling.php">
                            <img src="images/Liptonicetea3.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Lipton Ice Tea Sparkling Original 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.79</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <a href="crystallemon.php">
                            <img src="images/CrystalClear1.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Crystal Clear Sparkling Lemon 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.63</p>
                        </td>
                        <td>
                            <a href="crystalpeach.php">
                            <img src="images/CrystalClear2.jpg" alt="frisdrank" width="450" height="450">
                            </a>                             
                            <p>Crystal Clear Sparkling Peach Fles 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.63</p>
                        </td>
                        <td>
                            <a href="crystalcranberry.php">
                            <img src="images/Crystalclear3.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Crystal Clear Sparkling Cranberry Fles 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.63</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <a href="crystalcactus.php">
                            <img src="images/CrystalClear4.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Crystal Clear Sparkling Lemon Cactus Fles 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.67</p>
                        </td>
                        <td>
                            <a href="herocassiszero.php">
                            <img src="images/herocassis1.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Hero Cassis Zero 1,25L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.73</p>
                        </td>
                        <td>
                            <a href="herocassis.php">
                            <img src="images/herocassis2.jpg" alt="frisdrank" width="450" height="450">
                            </a>
                            <p>Hero Cassis 1,25L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€1.73</p>
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

                            <a href="spamineraal.php">
                            <img src="images/Spamineraalwater.jpg" alt="water" width="450" height="450">
                            </a>
                            <p>Spa Mineraalwater reine</p>
                            <button class="colorb">aantal</button>
                            <p>€0.99</p>
                        </td>
                        <td>
                            <a href="spaintense.php">
                            <img src="images/SpaIntense.jpg" alt="water" width="450" height="450">
                            </a>
                            <p>Spa Intense</p>
                            <button class="colorb">aantal</button>
                            <p>€1.09</p>
                        </td>
                        <td>
                            <a href="spafinesse.php">
                            <img src="images/spafinesse.jpg" alt="water" width="450" height="450">
                            </a>
                            <p>Spa Finesse</p>
                            <button class="colorb">aantal</button>
                            <p>€1.05</p>
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>
                            <a href="spamineraalzes.php">
                            <img src="images/Spamineraalwater6x.jpg" alt="water" width="450" height="450">
                            </a>
                            <p>Spa mineraalwater 6x</p>
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
                            <a href="yakult.php">
                            <img src="images/yakultoriginal.jpg" alt="zuiveldrank" width="450" height="450">
                            </a>
                            <p>Yakult Drink Original</p>
                            <button class="colorb">aantal</button>
                            <p>€3.25</p>
                        </td>
                        <td>
                            <a href="optimelframboos.php">
                            <img src="images/OpIsOptimel.jpg" alt="zuiveldrank" width="450" height="450">
                            </a>
                            <p>Optimel Drink framboos 0% vet</p>
                            <button class="colorb">aantal</button>
                            <p>€1.45</p>
                        </td>
                        <td>
                            <a href="chocolademelk.php">
                            <img src="images/chocolaOpjeMel.jpg" alt="melk" width="450" height="450">
                            </a>
                            <p>Chocolademelk vol 1L</p>
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
                                    <a href="taksifruit.php">
                                    <img src="images/TaksiTropischFruit.jpg" alt="vruchtensap" width="450" height="450">
                                    </a>
                                    <p>Taksi Tropisch fruit</p>
                                    <button class="colorb">aantal</button>
                                    <p>€1.45</p>
                                </td>
                                <td>
                                    <a href="icetealemon.php">
                                    <img src="images/IceTeaLemon.jpg" alt="vruchtensap" width="450" height="450">
                                    </a>
                                    <p>Ice tea Lemon</p>
                                    <button class="colorb">aantal</button>
                                    <p>€1.99</p>
                                </td>
                                <td></td>
                                    <a href="iceteapeach.php">
                                    <img src="images/IceTeaPeach.jpg" alt="vruchtensap" width="450" height="450">
                                    </a>
                                    <p>Ice tea Peach</p>
                                    <button class="colorb">aantal</button>
                                    <p>€1.99</p>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                            <td>
                            <p>Lipton Ice Tea Green Original 1,5L</p>
                            <a href="iceteagreen.php">
                            <img src="images/Liptonicetea1.jpg" alt="vruchtensap" width="450" height="450">
                            </a>
                            <p>Lipton Ice Tea Green Original 1,5L</p>
                            <button class="colorb">toevoegen</button>
                            <p>€2.59</p>
                        </td>
                            </tr>
                        </table>
                        </form>
                    </article>
                </section>

    </main>
</body>

</html>