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
<body onload=\"fnct2();\">
    <div class=\"header\">
    <div class=\"container\">
    <div class=\"navbar\">
    <div class=\"row\">
        <img src=\"profile_pic.png\" alt=\"logo\" width=\"125px\" class=\"profile\">
        <b id=\"demo\" style=\"color:#555;\"></b>
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
                <a href=\"log_in.html\" class=\"align\"  onclick=\"fnct12();\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\" style=\"margin-right: 10px;\"></i>log out</a>
                </div>
              </div>
        </li>
        </ul>
    </nav>
    <a href=\"profile.php\"><img src=\"shopping.jpg\" alt=\"shopping\" width=\"30px\" height=\"30px\"></a>
    </div>
    </div>
    </div>

<div class=\"small-container\">
    <h2 class=\"title\">our products:</h2>
    <div class=\"row\">
    <div class=\"col-4\">
    <a href=\"produit.html\"onclick=\"fnct5('clothes2.jpg','srwal dsport','11.00','3'); 
                                      \"><img src=\"clothes2.jpg\" alt=\"clothes1\"></a>
    <h4>srwal sport:</h4>
    <div class=\"rating\">
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star\"></i>
        <i class=\"fa fa-star-o\"></i>
        <i class=\"fa fa-star-o\"></i>
    </div>
    <p>$11.00</p>
</div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes4.jpg','adidas shoes','21.00','4'); 
        \"><img src=\"clothes4.jpg\" alt=\"clothes11\"></a>
            <h4>adidas shoes:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$21.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes15.jpg','black glasses','6.00','3'); 
                                      \"><img src=\"clothes15.jpg\" alt=\"clothes1\"></a>
            <h4>black glasses:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$6.00</p>
        </div>

    </div>
    <div class=\"row\">
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes16.jpg','white pants','10.00','2'); 
        \"><img src=\"clothes16.jpg\" alt=\"clothes1\"></a>
            <h4>white pants:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$10.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes29.jpg','blue sky dress','9.00','4'); 
                                      \"><img src=\"clothes29.jpg\" alt=\"clothes1\"></a>
            <h4>blue sky dress:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$9.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes32.jpg','blue skirt','8.00','4'); 
                                      \"><img src=\"clothes32.jpg\" alt=\"clothes1\"></a>
            <h4>blue skirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$8.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes35.jpg','yellow glasses','17.00','5'); 
                                      \"><img src=\"clothes35.jpg\" alt=\"clothes1\"></a>
            <h4>yellow glasses:</h4>
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
        <a href=\"produit.html\"onclick=\"fnct5('clothes39.jpg','grey hoddie','17.00','3'); 
                                     \"><img src=\"clothes39.jpg\" alt=\"clothes33\"></a>
            <h4>grey hoddie:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$17.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes43.jpg','white watch','20.00','5'); 
                                     \"><img src=\"clothes43.jpg\" alt=\"clothes1\"></a>
            <h4>white watch:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </div>
            <p>$20.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes46.jpg','grey shoes','21.00','4'); 
        \"><img src=\"clothes30.jpg\" alt=\"clothes1\"></a>
            <h4>old skirt:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$21.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('tshirts.jpg','tshirt adidas','16.00','5'); 
        \"><img src=\"tshirts.jpg\" alt=\"clothes1\"></a>
            <h4>tshirt adidas:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </div>
            <p>$16.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('clothes12.jpg','blue casquete','7.00','3'); 
        \"><img src=\"clothes12.jpg\" alt=\"clothes12\"></a>
            <h4>blue casquete:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$10.00</p>
        </div>
        <div class=\"col-4\">
        <a href=\"produit.html\"onclick=\"fnct5('suits.webp','suits','25.00','5'); 
                                   \"><img src=\"suits.webp\" alt=\"clothes1\"></a>
            <h4>suits:</h4>
            <div class=\"rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star-o\"></i>
            </div>
            <p>$25.00</p>
        </div>
</div>
<br>
<a href=\"entre.php\"><button class=\"button button1\">1</button></a>
<a href=\"entre2.php\"><button class=\"button button1\">2</button></a>
<a href=\"#\"><button class=\"button button1\">3</button></a>
<a href=\"#\"><button class=\"button button1\">...</button></a>
</div>
</body>
</html>";
?>