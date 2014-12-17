<div class="bigwrapper" style="background-image:url('img/stock-vector.gif');  height:153px;">

    <div class="container"  >
          <div class="mycontainer">
             <h1>
                <a href="javascript:history.go(-1);">
                    <i class="icon-arrow-left-3 fg-darker smaller" style="color:black; "></i>
                </a><span class="topfont fg-black">Stock Price</span>
              </h1> 
            </div>

            <div class="mycontainer3">
                <div class="divhorizontal">
                    <div class="posdiv" style="font-size:19px; font-weight:bold;">
                        <blockquote>
                            <p class="text-success">
                                <?php
                                   foreach($info as $row)
                                    {
                                 
                                        echo("A share of " . $row["name"] . "</td>");
                                        echo("costs <b>" . $row["symbol"] . "</b> </td>");
                                        echo("<td>" . number_format($row["price"], 2) . "</td>");
                                    }     
                                ?>
                             </p>
                        </blockquote>
                      </div>
                 </div>
            </div>
       </div>
 </div>           
<!--
<?php
       foreach($info as $row)
    {
     
        echo("A share of " . $row["name"] . "</td>");
        echo("costs <b>" . $row["symbol"] . "</b> </td>");
        echo("<td>" . number_format($row["price"], 2) . "</td>");
   }     
?>
<!-- A share of <?=$info["symbol"]?> (<?=$info["name"]?>) costs <strong>$<?=number_format($info["price"], 2)?></strong> -->
