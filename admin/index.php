<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <title>Multipurpose database website</title>

        //this script please save another js file
        <script>
            function stateProvide(){
                var state;
                if (/*SQL query is 1*/) {
                    state = "homepage/homepage.php";
                }else{
                    state = "homepage/firstlogin.html";
                }
                return state;
            }
        </script>
        
    </head>
    <body>
        <header>
            <nav>
                //this icon is aligned to the left
                <i>
                //this menu is aligned to the right
                <ul>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <section>
                //here is a JS variable, please initial homepage/homepage.php
                <iframe src="stateProvide()" scrolling="no"></iframe>
            </section>
        </article>
        <aside>
            <ul>
              <li><a href="#">User management</a></li>
              <li><a href="#">Content management</a></li>
              <li><a href="#">System management</a></li>
            </ul>
        </aside>
        <footer>

        </footer>
    </body>
</html>
