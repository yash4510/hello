<html>

<head>
    <title>wave.log in</title>
    <style> 
        h1 {
            size: 10px;
            color: lightblue;
        }

        .container {
            
            width: 410px;
            height: 210px;
        }

        .username {
            
            width: 100%;
            text-align-last: left
        }

        .password {
            
            width: 100%;
            text-align-last: left
        }
        .login{
            
        }
        .forgot{
            width: 100%;
            text-align-last: left
        }
    </style>
</head>

<body>
    <center>
        <h1>wave<br>sign in</h1>
    </center>
    <form>
        <center><div class="container">
                <div class="username">
                   
                    <input style="min-height:40px;width:100%" type="text" placeholder="enter username" name="uname" required>
                </div>
                <br>
                <div class="password">
                   
                    <input style="min-height:40px;width: 100%"type="password" placeholder="enter password" name="psw" required>
                </div>
                <br><div class="forgot"><a href="forgotit.php";style="color:#1f7eea;text-align:left;width:100%;font">forgot it</a></div>
                <br>
                <label>
                   <div class=login>
                        <button style="background-color:#0f529f ;width:100%;color: white;margin-top:8px;border:1px solid transparent;box-shadow: 0 0 0 3px rgba(19,106,205,0.3);outline: 0;border-radius: 500px;padding: 8px 20px"margin-top:8px type="submit" class="signupbtn">log in</button></div>
                    </lable>
            </div>
            </center>
    </form>
</body>

</html>