
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
        <script type="text/javascript" src="js/navigation.js"></script>
        <script type="text/javascript" src="js/profile.js"></script>


    </head>

    <body>


        <div class="container">
            <div class="nav">
                <div class="logo"><a><img src="image/Mywaylogo.png"/></a></div>
                <div class="navigation">
                    <table>
                        <tr align="center">
                            <td id="home">HOME</td>
                            <td id="profile">PROFILE</td>
                            <td id="course">COURSE</td>
                            <td id="contact">CONTACT</td>
                            <td id="cart">CART</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="contentnav">
                <div class="slideshow">
                    <img class="jedna"src="image/nikelogo.jpg"/>

                    <img src="image/usain.jpg"/>
                    <img src="image/adida.jpg"/>
                </div>
                <div class="profile">
                    <div class="regist">
                        <form method="post" action="controler/registrace.php">
                            <p>Register</p>
                            <p><input class="inputdesg" type="name" name="name" value="" placeholder="Jmeno"></p>
                            <div id="result" style="color: red;height: -1px"></div>
                            <p><input class="inputdesg" id="password" type="password" name="pass" value="" placeholder="Password"></p>
                            <div id="result2" style="color: red;height: -1px"></div>
                            <p><input class="inputdesg" id="passrep" type="password" name="passrep" value="" placeholder="Password repeat"></p>
                            <p><input class="inputdesg" type="mail" name="mail" value="" placeholder="mail"></p>

                            <p class="submit"><input class='subbut' type="submit" name="" value="Registrovat"></p>
                        </form>
                    </div>
                    <div class="login">
                        <form method='POST' action='controler/prihlaseni.php'>
                            <p>Login</p>
                            <p><input class="inputdesg" id="mail" type='text' name='mail' placeholder="User Name"/></p>
                            <p><input class="inputdesg" type='password' name='pass' placeholder="Heslo"/></p>
                            <input class='subbut' type='submit' value='Odeslat'/>
                        </form>
                    </div>


                </div>
                <div class="course"></div>
                <div class="contact"></div>
                <div class="cart"></div>
            </div>
            <div class="slideswip">
                <table class="tabswip">
                    <tr>
                        <td><div class="swip1"></div></td>
                        <td><div class="swip2"></div></td>
                        <td><div class="swip3"></div></td>
                    </tr>
                </table>
                <div class="bla"></div>
            </div>
            <div class="cont-bar">
                <div class="bar" align="center">
                    <table>
                        <tr align="center">
                        <ul>
                            <td>JACKETS</td>
                            <td>HOODIES</td>
                            <td>T-SHIRTS</td>
                            <td>TROUSERS</td>
                            <td>SHORTS</td>
                            <td>SHOES</td>
                            <td id="training">TRAINING</td>
                            <td>ACCESSORIES</td>
                            </tr>
                    </table>
                    <img class="slidedown" src="image/1.png"/>
                </div>
            </div>
            <div class="content">

                <div class="incontent">
                    <?php
                    ?>

                </div>
            </div>
        </div>
    </body>
</html>
