<link rel="stylesheet" type="text/css" href="company.css">  

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

         </p>
 		<p>
             <h2>Zoek producten op type</h2>
             <form action="zkproducttype.php"></form>
             <form method="post" action="zkproducttype.php">
             <table class="elementsContainer">
             <tr>
               <td>
                 <input type="text" name="search" placeholder="type een producttype">
               </td>
               <td>
                 <input type="submit" name="submit" value="search">
                 </input>
               </td>
             </tr>
           </table>
           </form>

 		</p>
 		<p>
             <h2>Zoek producten op naam</h2>
             <form action="zkproductnaam.php"></form>
             <form method="post" action="zkproductnaam.php">
           <table class="elementsContainer">
             <tr>
               <td>
                 <input type="text" name="search" placeholder="type een productnaam">
               </td>
               <td>
                 <input type="submit" name="submit" value="search">
                 </input>
               </td>
             </tr>
           </table>
         </form>

 		</p>
 	</main>

	
