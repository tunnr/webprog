<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <title>Multipurpose database website</title>

        <!--this script please save another js file-->
        <script>
            function stateProvide(){
                if (/*SQL query is 1*/) {
                    document.getElementById("showState").src="homepage/homepage.htm";
                }else{
                    document.getElementById("showState").src="homepage/firstlogin.html";
                }
            }
        </script>
    </head>
    <body>
    <div id="oldal">
        <header>
            <div id="head">
                <div id="logout">
                    <a action="" href="" id="exit">
                        <img src="../img/logout.png" width="25" height="25" title="Log-out">
                    </a>
                    <a action="" href="" id="user">
                        <img src="../img/user.png" width="25" height="25" title="Profile">
                    </a>
                </div>
				<div id="home">
                        <img src="../img/logo.png" alt="logo" id="logo">
                        <a href="index.php" id="index">
                            <img src="../img/home.png" alt="home" id="haziko" width="25" height="25" title="Home">
                        </a>
                </div>
            </div>
        </header>
        <div id="frame">
            <div align="center" id="framesite">
                <article>
                    <section>
                        <iframe id="showState" src="" scrolling="no"></iframe>
                    </section>
                </article>
            </div>
        </div>
        <div id="nav" scrollable="yes">
            <div class="navtab" scrollable="yes">
                <button class="btn btn-default btn-sm" onclick="window.location.href='#'">User Management</button>
                <button class="btn btn-default btn-sm" onclick="window.location.href='#'">Content Management</button>
                <button class="btn btn-default btn-sm" onclick="window.location.href='#'">System Management</button>
            </div>
        </div>
        <!-- first type modal -->
        <!--<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#alertmodalgood">Open Modal</button>-->
        <div id="alertmodalgood" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Success!</h4>
                    </div>
                <div class="modal-body">
                    <p>Operation success.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
        <div id="alertmodalbad" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Unsuccessful</h4>
                    </div>
                <div class="modal-body">
                    <p>Operation unsuccessful.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div> -->
        <!-- 2nd alerts modals
        <div class="container" align="center">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×</button>
                        <span class="glyphicon glyphicon-ok"></span> <strong>Success</strong>
                        <hr class="message-inner-separator">
                        <p>
                        Operation successful</p>
                    </div>
                </div>
            <div class="col-sm-6 col-md-6">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                    <span class="glyphicon glyphicon-info-sign"></span> <strong>Info Message</strong>
                    <hr class="message-inner-separator">
                    <p>
                        This is an Info alert.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="alert alert-warning">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                    <span class="glyphicon glyphicon-record"></span> <strong>Warning</strong>
                    <hr class="message-inner-separator">
                    <p>
                        Something bad.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                    <span class="glyphicon glyphicon-hand-right"></span> <strong>Danger Message</strong>
                    <hr class="message-inner-separator">
                    <p>
                        Unsuccessful operation, check</p>
                </div>
            </div>
            </div>
        </div> -->
        <article>
        </article>
        <aside>
        </aside>
        <footer>
        </footer>
    </div>
    </body>
</html>
