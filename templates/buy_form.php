<div class="bigwrapper" style="background-image:url('img/stock-vector.jpg'); height:153px;">

    <div class="container"  >
          <div class ="mycontainer" style="font-size:30px; color:#B8B4B4; font-weight:bold;">
            <?= $user[0]["username"]?>
          </div>
          <div class="mycontainer2">
                <div class="grid" style="margin:0px;">
                     <div class="row" style="margin:0px;" >
                       
                        <div class="offset0">
                        <nav class="horizontal-menu">
                             <ul style="margin-left:0px; padding:0px;">
                                <li><a href="index.php"><h2 style="color:#52001D; font-size:33px; ">portfolio</h2></a></li>
                                <li ><a href="history.php"><h2 style="color:#52001D; font-size:33px;">history</h2></a></li>
                                <li><a href="quote.php"><h2 style="color:#52001D; font-size:33px;">quotes</h2></a></li>                        
                                <li><a href="deposit.php"><h2 style="color:#52001D; font-size:33px;">deposit</h2></a></li>
                                <li><a href="buy.php"><h2 style="color:#52001D; font-size:33px;font-weight:bold;">buy</h2></a></li>
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
                      Account Balance: <span style="color:#52001D;" >$<?= number_format($cash[0]["cash"],2) ?></span>
                </div>
                <div class="offset3 posdiv" style="font-size:19px; font-weight:bold;" >
                Today: <span class="fg-orange"> <?php echo date("d-m(l)");?></span>  
                </div>
                
            </div>
            <div class="divhorizontal">
                <div class="posdiv" style="margin-top:40px;">
                    <form  action="buy.php" method="POST" >
                            <fieldset>
                                <div class="input-control text" data-role="input-control">
                                    <input id="symbolInput" type="text" placeholder="Symbol" name="symbol" autofocus>
                                    <button class="btn-clear" tabindex="-1" type="button"></button>
                                </div>                                        
                                                                        
                                
                                <div class="input-control text" data-role="input-control">
                                    <input id="sharesInput" name="shares" type="text" placeholder="Shares">
                                    <button class="btn-clear" tabindex="-1" type="button"></button>                                  
                                </div>
                                        
                                <div class="toolbar transparent" style=" font-size:25px; margin-top:20px;">                               
                                    <button type="submit" id="btn">
                                       
                                            <i class="fa fa-arrow-circle-o-right fa-2x fg-pink">Buy</i>
                                            
                                       
                                     </button>
                                     
                                     
                                     
                                </div>
                            </fieldset>     
                        </form>
                    </div>
               </div>
         </div>
  </div>                      


