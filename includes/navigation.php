<body>
<!--
<div class="text-center ab-alert alert alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  We will be closed July 3rd to July 12th in observation of the Independence Day Holiday</div>
    -->

    <div class="navbar navbar-default" role="navigation">
        <div class="container" id="navfluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a href="http://rtsenviro.com/"><img itemprop="image" src="img/logo.png"/></span></a>
            </div>
            <div class="collapse navbar-collapse" id="navigationbar" ng-controller="HeaderController">
                <ul class="nav navbar-nav nav-pills">
                    <li><a href="../index.php">Welcome</a>
                    </li>
                    <li><a href="../about.php">About RTS</a>
                    </li>
                    <li><a href="../mold.php">Mold Services</a>
                    </li>
                    <li><a href="../asbestos.php">Asbestos Services</a>
                    </li>
                    <li><a href="../faq.php">FAQ</a>
                    </li>
					</li>
                    <li><a href="../blog/" target="_blank">Blog</a>
                    </li>
                </ul>
            </div>
            <div ng-view></div>
            <!-- /.navbar-collapse  -->
        </div>
    </div>

<!--     <div class="hidden-lg hidden-xs navbar-fix"></div> -->