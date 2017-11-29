<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/login.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <script src="./js/bootstrap.min.js"></script>
        <title>Multipurpose database website</title>
    </head>
    <body>
        <header>
            <h1>Welcome to our Database!</h1>
        </header>
        <!-- The login file doesn't have <nav> tag -->
        <article>
            <section id="login">
                <!-- Here comes the login form -->
                <!-- We want this in the center -->
                <div class="container">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-wrap">
                                    <h1>Please Sign-in to continue..</h1>
                                        <form role="form" method="post" id="login-form" action="./login.inc.php">
                                            <div class="form-group">
                                                <label for="email" class="sr-only"><b>Username or email</b></label>
                                                <input type="text" id="email" placeholder="Enter Username or Email" name="uname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="key" class="sr-only"><b>Password</b></label>
                                                <input type="password" placeholder="Enter Password" name="psw"  id="key" required>
                                            </div>
                                            <button type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block">Sign-in</button>
                                            <div id="forgot">
                                                <a href="./forgatpw.html">I forgot my password</a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </article>
        <!-- The login file doesn't have <aside> and <footer> tag -->
    </body>
</html>