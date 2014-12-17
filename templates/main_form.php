
<div class="image-container" style="width:100%;">

<?
   // $dom= simplexml_load_file("http://rss.nytimes.com/services/xml/rss/nyt/Business.xml");
    
    //foreach($dom -> xpath("/rss/channel/image") as $channel)
   // {
   //     print "<img src=\"{$channel -> url}\" style=\"height:100%; width:100%; position:relative;\">";
   // }


 ?>    
   <img src="img/wst.jpg" style="height:100%; width:100%; position:relative;">
    <div class="container">        
            <div class="mycontainer">
                <h3 class="fg-white"><strong>E STREET</strong></h3>
                <form id="form-quote" action="quote.php" method="POST">
                    <div class="input-control text" data-role="input-control">
                        <input id="symbol" type="text" name="quote" placeholder="quotes"/>
                        <button class="btn-search" type="submit" id="btn" ></button>
                    </div>
                </div>
            </form>
            <div class="grid" style="margin:0px;">
                <div class="row" style="margin:0px;" >
                    <div class="span1 offset12" style="float:right;">
                        <div class="mycontainer">
                            <nav class="horizontal-menu compact">
                                <ul class="fg-white" >
                                     <li><a href="login.php">login</a></li>
                                    <li><a href="register.php">register</a></li>                       
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>        
            </div>
            <div class="bottomcontainer">
                <a href="http://online.wsj.com/india"><h1 class="fg-white fg-hover-yellow"><strong>Can India's New Leaders Break up the Country's Carrot Cartel?</strong><h1></a>
            </div>    
            <div id="price">
            </div>  
    </div>
    <div class="overlay" style="height:90px;">
        
            <div class="divhorizontal" style="margin-left:20px;">
                <div class="posdiv" id="1">
                    <h4 class="fg-white"></h4>
                    <h3 class="fg-yellow"></h3>
                    <div class="up"></div>
                    <div class="down"></div>
                    
                </div>
                <div class="posdiv" id="2">
                    <h4 class="fg-white"></h4>
                    <h3 class="fg-yellow"></h3>
                    <div class="up"></div>
                    <div class="down"></div>
                </div>
                <div class="posdiv" id="3">
                    <h4 class="fg-white"></h4>
                    <h3 class="fg-yellow"></h3>
                    <div class="up"></div>
                    <div class="down"></div>
                </div>
                <div class="posdiv" id="4">
                    <h4 class="fg-white"></h4>
                    <h3 class="fg-yellow"></h3>
                    <div class="up"></div>
                    <div class="down"></div>
                </div>
                <div class="posdiv" id="5">
                    <h4 class="fg-white"></h4>
                    <h3 class="fg-yellow"></h3>
                    <div class="up"></div>
                    <div class="down"></div>
                </div>
                <div class="posdiv" id="6">
                    <h4 class="fg-white"></h4>
                    <h3 class="fg-yellow"></h3>
                    <div class="up"></div>
                    <div class="down"></div>
                </div>
            </div>
        
    </div>
</div>  


