<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../../Public/css/General/login.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="openLogin()">Login</button>
                <button type="button" class="toggle-btn" onclick="openRegister()">Register</button>
            </div>
            <!-- <div class="social-icons">
                <img src="fb.png">
                <img src="google.png">
            </div> -->
            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="User ID" require>
                <input type="text" class="input-field" placeholder="Password" require>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" onclick="login()">Log in</button>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="User ID" require>
                <input type="email" class="input-field" placeholder="Email" require>
                <input type="text" class="input-field" placeholder="Password" require>
                <!-- <input type="checkbox" class="check-box"><span>Remember Password</span> -->
                <button type="submit" class="submit-btn" onclick="register()">Register</button>
            </form>
        </div>
    </div>
    <script>
        var LoginTab = document.getElementById("login");
        var RegisterTab = document.getElementById("register");
        var CurrentTab = document.getElementById("btn");

        function openLogin(){
            LoginTab.style.left = '50px';
            RegisterTab.style.left = "450px";
            CurrentTab.style.left = "0px";
        }

        function openRegister(){
            LoginTab.style.left = '-400px';
            RegisterTab.style.left = "50px";
            CurrentTab.style.left = "110px";
        }

        function login(){
            window.alert("Directing to homepage...");
        }

        function register(){
            window.alert("Creating your account...");
        }

    </script>
</body>

</html>