<htmL>
<head>
<link rel="stylesheet" href="particle.css">
<link rel="stylesheet" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
   
    $("#sign_area").hide();
    $("#signup_area").hide();
    
   
  $("#login").click(function()
  {
        $("#text").hide();
        $("#signup_area").hide();
        $("#sign_area").slideDown(1000);

         
  });

  $("#signup_bttn").click(function()
  {
        $("#text").hide();
        $("#sign_area").hide();
        $("#signup_area").slideDown(1000);

         
  });

  
});
</script>
</head>
<body>
<header>
    <div id="image"></div>
    <div id="option">
        <ul type="none" id="select">
        <li><button id="login">LOGIN</button>
        <li><button id="signup_bttn">SIGNUP</button>
        <li><button id="about">ABOUT</button>
        </ul>
    </div>
</header>
<div id="particle-container">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>


    
</div>
<div id="main">
<div id="text"><p>ORGANISE AND MANAGE YOURSELF WITH US<br><br>BY CUSTOMIZING YOUR DAILY ACTIVITIES.</p></div>
<br>
<center>
<div id="sign_area">
<div id="sign"><img src="sign.png"></div>
    <div id="input">
    <form action="start.php" method="post">
    <input type="text" placeholder="UserId">
    <br>
    <input type="password" placeholder="Password">
    <br>
    <br>
    <button>SUBMIT</button>
    </form>
    </div>
</div>
</center>


<center>
<div id="signup_area">
<div id="sign"><img src="sign.png"></div>
    <div id="input">
    <form action=" " method="post">
    <input type="text" placeholder="Username">
    <br>
    <input type="password" placeholder="Password">
    <br>
    <br>
    <button>SUBMIT</button>
    </form>
    </div>
</div>
</center>

</div>


</body>
</htmL>
