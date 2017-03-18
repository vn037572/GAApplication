<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!--BootStrap CSS引用-->
    <link href="../Style/JS/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!--系統CSS引用-->
    <link href="../Style/JS/M1/dist/css/sb-admin-2.css" rel="stylesheet" type="text/css" />
    <!--圖形css-->
    <link href="../Style/JS/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--左側命令樹 CSS引用-->
    <link href="../Style/JS/M1/dist/css/simple-sidebar.css" rel="stylesheet" type="text/css" />
    <link href="../Style/JS/metisMenu/metisMenu.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>
<body>
    <script src="../Style/JS/bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>

    <!--BootStrap JS引用-->

    <script src="../Style/JS/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!--左側命令樹 JS引用-->

    <script src="../Style/JS/metisMenu/metisMenu.js" type="text/javascript"></script>

    <!--Message&控件驗證 JS引用-->

    <script src="..//Style/JS/JS/bootbox.js" type="text/javascript"></script>
    <nav class="navbar navbar-feit navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="Mainlink" class="navbar-brand" style="cursor:pointer;" onclick="ToDefaultPage();">
                    
                        <span class="fa-stack fa-lg"  style="margin-top: -12px;" >
                           <i class="fa fa-circle fa-stack-2x" style="color: #ff4500" ></i>  
                            <i class="fa fa-shield  fa-stack-1x fa-cubes" style="color:White;" ></i>  
                           </span>
                            <span class="lbChinaHead">GA Materials Management</span>
                </a>
            </div>
            <div class="navbar-collapse collapse">
            <ul class="nav navbar-top-links navbar-right" style="padding-right: 10px">
                <li>
                    <!--大小字切換-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-font fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a onclick="changefont('');"  style="cursor:pointer;"><i class="fa fa-th fa-fw"></i>
                        <asp:Label runat="server" Text="一般字体" ID="lblNormalFont" CssClass="lbChinaControl" meta:resourcekey="lblNormalFontResource1" 
                                 ></asp:Label>
                        </a>
                        </li>
                        <li><a onclick="changefont('Large');" style="cursor:pointer;"><i class="fa fa-th-large fa-fw"></i>
                         <asp:Label runat="server" Text="较大字体" ID="lblLargerFont" CssClass="lbChinaControl" meta:resourcekey="lblLargerFontResource1" 
                        ></asp:Label>
                         </a></li>
                    </ul>
                </li>
                <li>
                    <!--命令樹收縮-->
                    <a onclick="Menutoggle();" style="cursor: pointer">
                       <i class="fa fa-arrows-alt"></i> 
                    </a>
                </li>
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                    
                        <li><a onclick="ToLoginInfoPage();"><i class="fa fa-sign-out fa-fw"></i>
                             <span class="lbChinaControl">Log out</span></a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            </div>
            <!-- /.navbar-top-links -->
            <div style="width: 100%; height: 5px; background-color: #ff4500">
            </div>
        </div>
    </nav>
</body>
</html>