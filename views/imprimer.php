<?php include ("../config.php"); ?>
<html>

<body id="target" onload="window.print()">

                        <table>
                            <thead>
                                <tr>
                            
                                  
                                    <th class="product-name">Product</th>
                                    <th class="product-price text-center">Price</th>
                                    <th class="product-quantity text-center">Quantity</th>
                                    <th class="product-subtotal text-center hidden-xs">Total</th>
                                </tr>
                            </thead>
                            <tbody>






                            
                                            <?php

include_once ("../core/commandeC.php");
                                            $commande1=new commandeC();
                                            $prixTotale =0;
                                            $listeCommandes=$commande1->afficheCommande();
                                                foreach($listeCommandes as $row){  
                 
                                            ?>
                                <tr>
                                  
                                 
                                    <td class="product-name">
                                        <a href="shop-detail-1.html"><?php echo $row['nom'] ?></a>
                                    </td>
                                    <td class="product-price text-center">
                                        <span class="amount"><?php echo $row['price']." dt" ?></span>
                                    </td>
                                    <td class="product-quantity text-center">
                                        <div class="quantity">
                                            <input type="number" step="1" min="0" id="quantity" name="quantity" value="<?php echo $row['quantity'] ?>" title="Qty" class="input-text qty text" size="4"/>
                                        </div>
                                    </td>
                                    <td class="product-subtotal hidden-xs text-center">
                                        <span class="amount"><?php echo ($row['price'] * $row['quantity'])." dt" ?></span>
                                    </td>
                                </tr>
                                                    


                                                <?php $prixTotale = $prixTotale +($row['price'] * $row['quantity']);
                                                     $prodid = $row['ligneid'];} ?>







                                <tr>
                                </body>
                                </html>
