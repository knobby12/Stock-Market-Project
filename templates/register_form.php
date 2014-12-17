<div class="bigwrapper" style="background-image:url('img/star.gif'); height:110px;">

    <div class="container"  >
          <div class="mycontainer">
                <h1>
                    <a href="main.php">
                            <i class="icon-arrow-left-3 fg-darker smaller" style="color:black; "></i>
                    </a><span class="topfont"><img src="img/FomsIcon.png" class="span1">forms</span>
                </h1> 
            </div>

            <div class="mycontainer2">
                <div class="grid" style="margin:0px;">
                     <div class="row" style="margin:0px;" >
                        <nav class="horizontal-menu">
                             <ul style="font-weight:light;">
                                <li><a href="login.php"><h1 style="color:#979797;">login</h1></a></li>
                                <li><a href="register.php"><h1>register</h1></a></li>                        
                            </ul>
                        </nav>                         
                        <form class="submit" action="register.php" method="POST" style="margin-top: 50px; margin-left:30px;">
                            <fieldset>
                                <div class="input-control text" data-role="input-control">
                                    <input id="nameInput" type="text" placeholder="Username" name="username" autofocus>
                                    <button class="btn-clear" tabindex="-1" type="button"></button>
                                    
                                </div>
                                <div class="input-control password" data-role="input-control">
                                    <input id="passwordInput" name="password" type="password" placeholder="Password">
                                    <button class="btn-reveal" tabindex="-1" type="button"></button>
                                    
                                </div>
                                <div class="input-control password" data-role="input-control">
                                    <input id="cpasswordnput" name="c_password" type="password" placeholder="Confirm Password">
                                    <button class="btn-reveal" tabindex="-1" type="button"></button>
                                    
                                </div> 
                                <div class="toolbar transparent fg-lightOlive" style=" font-size:25px; margin-top:20px;">                               
                                    <button type="submit">
                                        <h2>
                                            <i class=" icon-arrow-right-3 on-left fg-lightOlive"></i>
                                            
                                        </h2>
                                     </button>
                                     register
                                     
                                     
                                </div>
                            </fieldset>     
                        </form>
                       
                    </div>
                 </div>
                 
            </div>
        </div>
</div>

<!--<form action="register.php" method="post">
    <fieldset>
        <div class="control-group">
            <input autofocus name="username" placeholder="Username" type="text"/>
        </div>
        <div class="control-group">
            <input name="password" placeholder="Password" type="password"/>
        </div>
        <div class="control-group">
            <input name="c_password" placeholder="Confirm Password" type="password"/>
        </div>
        <div class="control-group">
            <button type="submit" class="btn">Register</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">Login</a> for an account
</div>-->
