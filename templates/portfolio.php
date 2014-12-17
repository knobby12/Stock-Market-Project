<div class="bigwrapper" style="background-image:url('img/stock-vector.jpg'); height:153px;">

    <div class="container"  >
          <div class ="mycontainer" style="font-size:30px; color:#B8B4B4; font-weight:bold;">
            <?= $users[0]["username"]?>
          </div>
          <div class="mycontainer2">
                <div class="grid" style="margin:0px;">
                     <div class="row" style="margin:0px;" >
                       
                        <div class="offset0">
                        <nav class="horizontal-menu">
                             <ul style="margin-left:0px; padding:0px;">
                                <li><a href="index.php"><h2 style="color:#52001D; font-size:33px; font-weight:bold;">portfolio</h2></a></li>
                                <li ><a href="history.php"><h2 style="color:#52001D; font-size:33px;">history</h2></a></li>
                                <li><a href="quote.php"><h2 style="color:#52001D; font-size:33px;">quotes</h2></a></li>                        
                                <li><a href="deposit.php"><h2 style="color:#52001D; font-size:33px;">deposit</h2></a></li>
                                <li><a href="buy.php"><h2 style="color:#52001D; font-size:33px;">buy</h2></a></li>
                                <li><a href="sell.php"><h2 style="color:#52001D; font-size:33px;">sell</h2></a></li>
                                <li><a href="logout.php"><h2 style="color:#52001D; font-size:33px;">logout</h2></a></li>
                            </ul>
                        </nav>
                        </div>
                      

                     </div>                     
                </div>
          </div>
          <div class="mycontainer3">
            <div class="divhorizontal">
                <div class="posdiv" style="font-size:19px; font-weight:bold;">
                      Account Balance: <span style="color:#52001D;" >$<?= number_format($users[0]["cash"],2) ?></span>
                </div>
                <div class="offset3 posdiv" style="font-size:19px; font-weight:bold;" >
                Today: <span class="fg-orange"> <?php echo date("d-m(l)");?></span>  
                </div>
                
            </div>
            <div class="divhorizontal">
                <div class="posdiv" style="margin-top:40px;">
                    <table class="table striped hovered " id="dataTables-1">
                 <thead>
                    <tr>
                        <th class="text-left">Symbol</th>
                        <th class="text-left">Name</th>
                        <th class="text-left">Shares</th>
                        
                        
                        <th class="text-left">Price</th>
                        <th class="text-left">TOTAL</th>
                    </tr>
                </thead>

                <tbody>
                <?php
	    foreach ($portfolio as $row)	
        {   
            echo("<tr>");
            echo("<td>" . $row["symbol"] . "</td>");
            echo("<td>" . $row["name"] . "</td>");
            echo("<td>" . $row["shares"] . "</td>");
            
            echo("<td>$" . number_format($row["price"], 2) . "</td>");
            echo("<td>$" . number_format($row["total"], 2) . "</td>");
            echo("</tr>");
        }
    ?>

    <tr>
        <td colspan="4">CASH</td>
        
        <td>$<?=number_format($users[0]["cash"], 2)?></td>
    </tr>   
    </tbody>

                    
              
            </table>

          
                
                </div>
            </div>
          </div>          
    </div>                         
</div>


-->
