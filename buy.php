<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="profile.css">
<script src="codejs.js"></script>
</head>
<body onload="fnct14();
               fnct4();">

<div class="about-section">
  <h1>full price is : </h1>
  <b style="font-size: 30px;">$<p id="somme">heere</p></b>
  <p id="error" style="color:red; font-size:larger"></p>
</div>
<div class="row" style="margin-left: 40%;">
  <div class="column" style="width: 60%; height: 80%; ;">
    <div class="card" style="width: 60%; height: 80%; ">
      <img src="profile_pic.png" alt="" style="width:100%;">
      <div class="container">
        <h2 id="demo1"></h2>
        <p id="demo2"></p>
        <p id="demo3"></p>
        <p id="demo4"></p>
        <form method="POST" action="email.php">
            <input type="text" name="credit_card" id="credit_card" placeholder="credit_card" style="width: 100%;
            height: 30px;
            border-radius: 10px;
            background-color: rgb(74, 201, 80);
            color: whitesmoke;
            font-size: 17px;
            text-align: center;
            margin-bottom: 0px;">
        <br>
        <br>
        <input type="submit" name="buy now" value="buy now" class="button">
        </form>
      </div>
    </div>
    </div>

</div>
</body>
</html>

