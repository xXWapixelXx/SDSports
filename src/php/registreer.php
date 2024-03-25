<!DOCTYPE html>
<html>
    <head>
        <title>Registreren</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="/css/rythm.css">
        <link  href="../styles/stylee.css" rel='stylesheet'>
        <style>
            
ul {
    display: inline;
    text-align: left;
    margin-left: 0;
    padding-left: 0;
    margin-top: 0;
}


body {
    background-image: url(../assets/running1.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-attachment: fixed;
    box-sizing: border-box;
    
    }

.Logo {
    text-align: center;
    margin-top: 150px;
}

.Play1 {
    text-align: center;
}

.Login {
    float: inline-end;
    color:red;
}


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}  


.registreren {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.wrapper {
    width: 420px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    backdrop-filter: blur(20px);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36px;
    text-align: center;
}

.wrapper .input-box {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}
.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder {
    color: #fff ;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
} 

.wrapper .remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;

}

.remember-forgot label input {
    accent-color: #fff;
    margin-left: 3px;
}



.wrapper .btn {
    width: 100%;
    height: 45px;
    background:     #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.wrapper .Register-link {
    font-size: 14.5;
    text-align: center;
    margin: 20px 0 15px;
}

.Register-link p a {
    color: gray;
    text-decoration: none;
    font-weight: 600;
}

.Register-link p a:hover {
    text-decoration: underline;
}


        </style>
    </head>

<body>
<header>
        <a href="../index.php" class="logo"><img class="imglogo" src="../img/logo.png" alt="logo"></a>
        <ul>
            <li><a href="./feedback.php">feedback</a></li>
            <li><a href="./login.php">login</a></li>
        </ul>
    </header>

   <section class="registreren">
    <div class="wrapper">
    <form action="action.php" method="post">
            <h1>registreren</h1>
            <div class="input-box">
            <label for="username"></label>
            <input type="username" name="username" placeholder="username" required/>
            <i class='bx bxs-envelope' ></i>
        </div>
        <div class="input-box">
            <label for="email"></label>
            <input type="email" name="email" placeholder="@gmail.com" required/>
            <i class='bx bxs-envelope' ></i>
        </div>
        <div class="input-box">
            <label for="wachtwoord"></label>
            <input type="password" id="password" name="password" placeholder="password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>
        <div class="input-box">
            <label for="wachtwoord2"></label>
            <input type="bevestig password" id="wachtwoord2" name="wachtwoord2" placeholder="bevestig password" required>
            <i class='bx bxs-lock-alt' ></i>
        </div>

        <button type="submit" class="btn" name="submit">registreren</button>

    </form>
    </div>
   </section>

   <!--hier begint de footer-->
   <footer>
            <div class="container">
                <div class="secoverons">
                    <h2>Over ons</h2>
                    <p>Hallo allemaal, mijn naam is Mnr.Sport ik ga al 10+ jaar
                        naar de sportschool en heb ook mijn eigen sportschool.
                        Maar ik vond altijd dat er niet genoeg betrouwbare websites
                        zijn voor mensen die naar de gym gaan. Daarom heb ik deze website laten maken.
                        Voor iedereen die ernaar wilt kijken.
                    </p>
                </div>
                <div class="locatie">
                    <h2>locatie</h2>
                    <p>Mijn gym heet: International-sport. je kan ons vinden bij Haarsteegsestraat 141 5254 JN.</p>

                    <div id="logo2"><a><img class="imglogo2" src="../img/x.png"></a></div>
                    <div id="logo3"><a><img class="imglogo3" src="../img/linked1.png"></a></div>
                    <div id="logo4"><a><img class="imglogo4" src="../img/face1.png"></a></div>

                </div>
            </div>
        </footer>
</body>

<!--dit is de javascript voor het navbar-->
<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0)
    })
</script>
</html>
