<?php
echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Oscar | the god</title>
    <link rel=\"stylesheet\" href=\"codecss.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script src=\"codejs.js\"></script>
</head>
<body onload=\"fnct2();
                fnct0();\">
    <div class=\"header\">
    <div class=\"container\">
    <div class=\"navbar\">
    <div class=\"row\">
        <img src=\"profile_pic.png\" alt=\"logo\" width=\"125px\" class=\"profile\">
        <b style=\"color:#555;\">$name</b>
    </div>
    <nav>
        <ul>
            <li>
                <div class=\"hover\">
                    <div class=\"dropbtn\">clothes</div>
                    <div class=\"dropdown-content\">
                    <a href=\"men.html\" class=\"align\"><i class=\"fa fa-male\" aria-hidden=\"true\" style=\"margin-right:10px;\"></i>men</a>
                    <a href=\"women.html\" class=\"align\"><i class=\"fa fa-female\" aria-hidden=\"true\"></i>women</a>
                    </div>
                  </div>
            </li>
            <li>
                <div class=\"hover\">
                    <div class=\"dropbtn\">electronics</div>
                    <div class=\"dropdown-content\">
                    <a href=\"log_in.html\" class=\"align\"><i class=\"fa fa-mobile\" aria-hidden=\"true\"></i>phones</a>
                    <a href=\"sign_in.html\" class=\"align\"><i class=\"fa fa-laptop\" aria-hidden=\"true\"></i>computers</a>
                    </div>
                  </div>
            </li>
            <li>
        <li><a href=\"\" class=\"hover\">books</a></li>
        <li>
            <div class=\"hover\">
                <div class=\"dropbtn\">account</div>
                <div class=\"dropdown-content\">
                <a href=\"log_in.html\" class=\"align\" onclick=\"fnct12();\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\" style=\"margin-right: 10px;\"></i>log out</a>
                </div>
              </div>
        </li>
        </ul>
    </nav>
    <a href=\"profile.php\" onclick=\"fnct3('$name','$family_name','$email','$password');\"><img src=\"shopping.jpg\" alt=\"shopping\" width=\"30px\" height=\"30px\"></a>
    </div>
    </div>
    </div>

<div class=\"small-container\">
    <h2 class=\"title\">our products:</h2>
    <div class=\"row\">
    <div class=\"col-4\">
    <a href=\"produit.html\"onclick=\"fnct5('clothes1.jpg','short','6.00','4'); 
                                      fnct('$name')\"><img src=\"clothes1.jpg\" alt=\"clothes1\"></a>
    <h4>short:</h4>
    <div class=\"rating\">
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star-o\"></i>
    </div>
    <p>$6.00</p>
</div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes18.jpg','pink skirt','17.00','5'); 
        fnct('$name')\"><img src=\"clothes18.jpg\" alt=\"clothes1\"></a>
            <h4>pink skirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </div>
            <p>$17.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes7.jpg','sndala adidas','10.00','3'); 
                                      fnct('$name')\"><img src=\"clothes7.jpg\" alt=\"clothes1\"></a>
            <h4>sndala adidas:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$10.00</p>
        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes21.jpg','black squares','12.00','4'); 
        fnct('$name')\"><img src=\"clothes21.jpg\" alt=\"clothes1\"></a>
            <h4>black squares:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$12.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes19.jpg','white tshirt','8.00','5'); 
                                      fnct('$name')\"><img src=\"clothes19.jpg\" alt=\"clothes1\"></a>
            <h4>white tshirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </div>
            <p>$8.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes3.jpg','white short','7.00','5'); 
                                      fnct('$name')\"><img src=\"clothes3.jpg\" alt=\"clothes1\"></a>
            <h4>white short:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$7.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes20.jpg','pink skirt','14.00','4'); 
                                      fnct('$name')\"><img src=\"clothes20.jpg\" alt=\"clothes1\"></a>
            <h4>pink skirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$14.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes4.jpg','yellow short','9.00','5'); 
                                      fnct('$name')\"><img src=\"clothes4.jpg\" alt=\"clothes1\"></a>
            <h4>yellow short:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </div>
            <p>$9.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes27.jpg','pinky','20.00','4'); 
                                      fnct('$name')\"><img src=\"clothes27.jpg\" alt=\"clothes1\"></a>
            <h4>pinky:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$20.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes5.jpg','trainers','30.00','4'); 
        fnct('$name')\"><img src=\"clothes5.jpg\" alt=\"clothes1\"></a>
            <h4>trainers:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$30.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes22.jpg','grey skirt','12.00','4'); 
        fnct('$name')\"><img src=\"clothes22.jpg\" alt=\"clothes1\"></a>
            <h4>grey skirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$12.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes6.jpg','trainers','30.00','4'); 
        fnct('$name')\"><img src=\"clothes6.jpg\" alt=\"clothes1\"></a>
            <h4>trainers:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$30.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes23.jpg','orange skirt','10.00','4'); 
                                      fnct('$name')\"><img src=\"clothes23.jpg\" alt=\"clothes1\"></a>
            <h4>orange skirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$10.00</p>
        </div>
</div>
<br>
<a href=\"#\"><button class=\"button button1\">1</button></a>
<a href=\"entre2.php\"onclick=\"fnct('$name')\"><button class=\"button button1\">2</button></a>
<a href=\"entre3.php\"onclick=\"fnct('$name')\"><button class=\"button button1\">3</button></a>
<a href=\"#\"><button class=\"button button1\">...</button></a>
</div>
</body>
</html>";
?>
