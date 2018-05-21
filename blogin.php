<?php
	session_start();
?>
<html lang="en">
<head>
  <title>Mr.Burger</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Fruktur" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Devonshire" rel="stylesheet">
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
     <script type="text/javascript">
        function validate_form() {  
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.emp.email.value)) {
                alert("You have entered an invalid email address!")
                return (false);
            }
            if( document.emp.password.value=="") {
                alert("Invalid password");
                return false;
            }
            alert("sucessfully Submitted");
            
        }
            return true;
        }
        
    </script>
    <style>
    @font-face{
            font-family:"DCC-Ash";
            src:url("fonts/DCC - Ash.otf");
        }
    .navbar-default{
         position: fixed;
         top: 0;
        left: 0;
        width: 100%;
        z-index: 800;
        background: rgba(255, 255, 255, 0.8);
      }
      .navbar-brand{
         
          font-weight: 700;
      }
      .navbar{
          padding: 10px;
      }
body{
    background-image: url(office_lunch.jpg);
    background-attachment: fixed;
    margin:0
        }
.form{
  width:370px;
  height:400px;
  background:rgba(255,255,255, 0.86);
  border-radius:8px;
  box-shadow:0 0 40px -10px #000;
  margin:calc(50vh - 220px) auto;
  padding:20px 30px;
  max-width:calc(100vw - 40px);
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
  position:relative
}
h3{
  margin:10px 0;
  padding-bottom:10px;
  width:290px;
  color:#78788c;
  border-bottom:1px solid #630426
}
input{
  width:100%;
  padding:10px;
  box-sizing:border-box;
  background:none;
  outline:none;
  resize:none;
  border:0;
  font-family:'Montserrat',sans-serif;
  transition:all .3s;
  border-bottom:2px solid #bebed2
}
input:focus{border-bottom:2px solid #630426}
p:before{content:attr(type);
  display:block;
  margin:28px 0 0;
  font-size:14px;
  color:#5a5a5a
}
button{
    float:right;
  padding:8px 12px;
  margin:8px 0 0;
  font-family:'Montserrat',sans-serif;
  border:2px solid #630426;
  background:0;
  color:#630426;
  cursor:pointer;
  transition:all .3s}
button:hover
{
  background:#630426;
  color:white;
}
 h3{
     color: #630426;
     font-family: DCC-Ash;
     font-size:2em;
    text-align: center;
        }
    
    </style>
     </head>
    <body class="container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="burger.html" style="color:#630426;font-family: DCC-Ash;font-size:2.6em "><bold>Mr. BurGer</bold></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" >
       <li ><a href="burger.html" style="color: #630426;font-family: DCC-Ash;font-size:2em ">HOME</a></li>
        <li><a href="#services" style="color:#630426;font-family: DCC-Ash;font-size:2em ">CATERING</a></li>
        <li><a href="Aboutus.html" style="color:#630426;font-family: DCC-Ash;font-size:2em ">LOYALITY</a></li>
        <li><a href="contact.html" style="color:#630426;font-family: DCC-Ash;font-size:2em ">CONTACT</a></li>
        <li><a href="blogin.php" style="color:#630426;font-family: DCC-Ash;font-size:2em ">LOGIN</a></li>
        <li><a href="bregister.html" style="color: #630426;font-family: DCC-Ash;font-size:2em ">REGISTER</a></li>
      </ul> 
    </div>
  </div>
</nav>
<form class="form" name="emp" action="bl.php" onsubmit="return validate_form();" method="post">
  <h3>REGISTER NOW</h3>
  <p type="Email Address:"><input name="email" type="email" placeholder="Email Address"></p>
  <p type="Password:"><input type="password" name="password" placeholder="Password"></p>
  <button type="submit" name="login">LOGIN!</button>
</form>
</body>
</html>