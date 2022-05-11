<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
if (!empty($product_array)) { 
	foreach($product_array as $key=>$value){
?>
	<div class="product-item">
		<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
		<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
		<div class="product-tile-footer">
		<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
		<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
		<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
	</div>
		</form>
	</div>
<?php
	}
}
?>
<?php

	if(!empty($_POST["quantity"])) {
		$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
		$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
		
		if(!empty($_SESSION["cart_item"])) {
			if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["code"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								$_SESSION["cart_item"][$k]["quantity"] = 0;
							}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}

?>

    
</body>
</html>