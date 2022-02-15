<html>

<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Camera DDNS || Đăng Ký</title>
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
    <div id='TextHer'><b>Đăng ký tài khoản</b></div>
    <div class="left">
        <input type="text" id="email" name="email" placeholder="E-mail" />
        <input type="password" id="password" name="password" placeholder="Password" />
        <input type="password" id="re_password" name="re_password" placeholder="Nhập lại Password" />




        <div style="color: #1b65d4">Nếu đã có tài khoản xin mời <a href="login.php" style="color: red!important;">login</a></div>

    </div>
    <div class="right">
        <input type="text" id="name" name="name" placeholder="Name" />
        <input type="text" id="phone" name="phone" placeholder="Phone-Number" />
        <input type="submit" id='create' name="create" value="SAVE" />
    </div>
    <div class="or">VS</div>
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

    create.addEventListener('click',(e) => {

        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var re_password = document.getElementById('re_password').value;
        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        if (password != re_password){
            alert("Mật khẩu không khớp");
        }
        else{
            createUserWithEmailAndPassword(auth, email, password)
                .then((userCredential) => {
                    // Signed in
                    const user = userCredential.user;

                    set(ref(database, 'users/' + user.uid),{
                        email: email,
                        name: name,
                        phone: phone
                    })

                    alert('Tạo tài khoản thành công, mời bạn xác nhận để tiếp tục');
                    window.location = "login.php";
                    // ...
                })
                .catch((error) => {
                    const errorCode = error.code;
                    const errorMessage = error.message;

                    alert("Tạo tài khoản không thành công, mời bạn thử lại" + errorMessage);
                    // ..
                });
        }
    });


    const user = auth.currentUser;
    onAuthStateChanged(auth, (user) => {
        if (user) {
            // User is signed in, see docs for a list of available properties
            // https://firebase.google.com/docs/reference/js/firebase.User
            const uid = user.uid;
            //bla bla bla
            // ...
        } else {
            // User is signed out
            // ...
            //bla bla bla
        }
    });

</script>
</html>
