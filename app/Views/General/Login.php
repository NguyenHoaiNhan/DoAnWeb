<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="<?= base_url() ?>/app/css/General/login.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <input id="loginname" type="text" class="input-field" placeholder="User ID" require>
                <input id="loginpass" type="password" class="input-field" placeholder="Password" require>
                <!-- <input type="checkbox" class="check-box"><span>Hiện mật khẩu</span> -->
                <div id="btn_login" class="submit-btn"><b>Log in</b></div>
            </form>
            <form id="register" class="input-group">
                <input id="regname" type="text" class="input-field" placeholder="User ID" require>
                <input id="regpass1" type="email" class="input-field" placeholder="Password" require>
                <input id="regpass2" type="text" class="input-field" placeholder="Confirm password" require>
                <input id="fullname" type="text" class="input-field" placeholder="Full name" require>
                <input id="isCoach" type="checkbox" class="check-box"><span>Là giáo viên</span>
                <div id="btn_register" class="submit-btn"><b>Register</b></div>
            </form>
        </div>
    </div>
    <script>
        var LoginTab = document.getElementById("login");
        var RegisterTab = document.getElementById("register");
        var CurrentTab = document.getElementById("btn");

        function openLogin() {
            LoginTab.style.left = '50px';
            RegisterTab.style.left = "450px";
            CurrentTab.style.left = "0px";
        }

        function openRegister() {
            LoginTab.style.left = '-400px';
            RegisterTab.style.left = "50px";
            CurrentTab.style.left = "110px";
        }

        $(document).ready(function() {
            $('#btn_login').click(function() {
                console.log('bat su kien');
                // alert(getUserName() + " " + getPass());

                var username = getUserName();
                var pass = getPass();
                // location.href = 'coach/home';

                $.ajax({
                    type: "POST",
                    url: "login",
                    dataType: 'json',
                    data: {
                        user: username,
                        pass: pass
                    },
                    success: function(data) {
                        console.log(data);
                        if (data == 0) {
                            alert('Tài khoản hoặc mất khẩu không đúng');
                        } else {
                            console.log('ID: ' + data['userid']);
                            console.log('iscoach: ' + data['iscoach']);
                            console.log('name: ' + data['name']);


                            localStorage.setItem('currentUID', data['userid']);
                            localStorage.setItem('isCoach', data['iscoach']);
                            localStorage.setItem('name', data['name']);

                            if (data['iscoach'] == 0) {
                                location.href = 'student/home';

                            } else if (data['iscoach'] == 1) {
                                location.href = 'coach/home';

                            }
                        }
                    }
                });


            })

            $('#btn_register').click(function() {
                console.log('call ajax...');
                // alert(getNewUserName() + " " + getPass1() + ' ' + getPass2() + ' ' + getFullName() + " " + isCoach());
                var username = getNewUserName();
                var pass1 = getPass1();
                var pass2 = getPass2();
                var fullname = getFullName();
                var iscoach = isCoach();

                $.ajax({
                    type: "POST",
                    url: "signup",
                    dataType: 'json',
                    data: {
                        username: username,
                        pass1: pass1,
                        fullname: fullname,
                        iscoach: iscoach
                    },
                    success: function(data) {
                        console.log('Kết quả trả về register: ' + data);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(xhr.responseText);
                        console.log(thrownError);
                    }
                });
            })


            function getUserName() {
                return $("#loginname").val();
            }

            function getPass() {
                return $("#loginpass").val();
            }

            function getNewUserName() {
                return $("#regname").val();
            }

            function getPass1() {
                return $("#regpass1").val();
            }

            function getPass2() {
                return $("#regpass2").val();
            }

            function getFullName() {
                return $('#fullname').val();
            }

            function isCoach() {
                if ($("#isCoach").is(':checked')) {
                    return 1;
                }
                return 0;
            }
        })
    </script>
</body>

</html>