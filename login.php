<html>

<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Camera DDNS || LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<header>
    <div class="wrap_login_header">
        <a href="login.php"><img align="center" src="./images/cameraddns.png"></a>
        <img align="right" src="./images/logo.png">

        <p><span><FONT size="4"><i>Dịch vụ DDNS của GREENVISION Việt Nam</i></FONT></span></p>
        </BR>
    </div>
</header>
<div id="login-box">
    <div class="left" style="padding-top: 44px">
        <div id='TextHer1' style="font-size: 30px; padding-bottom: 20px">Đăng Nhập</div>
        <input type="text" id="email" name="email" placeholder="E-mail" />
        <input type="password" id="password" name="password" placeholder="Password" />

        <input type="submit" id='login' name="login" value="Login" />

    </div>

    <div class="right" style="padding-top: 50px">
        <div>
            <img src="./images/anhCam.png" alt="" width="200px" height="180px">
        </div>
        <button class="social-signin google"><a href="register.php" style="color: white; text-decoration: none">TẠO TÀI KHOẢN</a></button>
    </div>
    <div class="or">OR</div>
</div>
<div class="footerText">
    Copyrights © 2022 greenvision.vn . All Rights Reserved. Designed by GreenVision
</div>
</body>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
    import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-auth.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyAE0WZkuHD_JHxNU5MDb12QHx7320v-Zis",
        authDomain: "greenvisioncameratest.firebaseapp.com",
        databaseURL: "https://greenvisioncameratest-default-rtdb.firebaseio.com",
        projectId: "greenvisioncameratest",
        storageBucket: "greenvisioncameratest.appspot.com",
        messagingSenderId: "958754578177",
        appId: "1:958754578177:web:e346c6c78470d6eb938500",
        measurementId: "G-952CRWGRS8"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app);
    const auth = getAuth();

    login.addEventListener('click',(e)=>{
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                // Signed in
                const user = userCredential.user;

                const dt = new Date();
                update(ref(database, 'users/' + user.uid),{
                    last_login: dt,
                })
                window.location = "index.php";
                // ...
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;

                alert('Mật khẩu hoặc Email không đúng !');
            });

    });

</script>
</html>
