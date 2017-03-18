<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="Style/JS/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="Style/JS/M1/dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <!--圖形css-->
    <link href="Style/JS/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--左側命令樹 CSS引用-->
    <link href="Style/JS/M1/dist/css/simple-sidebar.css" rel="stylesheet" type="text/css">
    <link href="Style/JS/metisMenu/metisMenu.css" rel="stylesheet" type="text/css">
    <link href="Style/JS/css/box.css" rel="stylesheet" type="text/css">
	<title>Document</title>
</head>
<body>
	<script src="Style/JS/bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>

    <!--BootStrap JS引用-->

    <script src="Style/JS/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!--左側命令樹 JS引用-->

    <script src="Style/JS/metisMenu/metisMenu.js" type="text/javascript"></script>

    <!--Message&控件驗證 JS引用-->

    <script src="Style/JS/JS/bootbox.js" type="text/javascript"></script>
    <form id="form_GAApplication_Index" runat="server">
    <!--jquery引用-->

    <script src="../JS/bootstrap/js/jquery-1.11.2.min.js" type="text/javascript"></script>

    <!--BootStrap JS引用-->

    <script src="../JS/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!--左側命令樹 JS引用-->

    <script src="../JS/metisMenu/metisMenu.js" type="text/javascript"></script>

    <!--Message&控件驗證 JS引用-->

    <script src="../JS/JS/bootbox.js" type="text/javascript"></script>

    <!-- /.Header -->
    <?php include 'Include/UC_Header.php'?>
    <div id="wrapper">
        <!--comment tree左側命令樹-->
        <div id="sidebar-wrapper">
        	<?php include 'Include/UC_CommandTree.php'?>
        </div>
        <!--page header主體-->
        <div id="page-content-wrapper">
            <div class="container-fluid" id="divcontainerFEIT" style="padding-top: 55px;">
                <div class="row">
                    <div class="col-xs-8">
                        <div style="height: 10px">
                        </div>
                        <div class="row">
                            <div class="col-xs-11">
                                <div class="row" style="background-color: #27A9E3; height: 160px">
                                    <div class="col-xs-2">
                                        <img src="Style/Image/jhsm.png" />
                                    </div>
                                    <div class="col-xs-5" style="padding-top: 30px">
                                        <div style="height: 5px">
                                        </div
                                        <!-- label GMaterials Application-->
                                        <div class="row">
                                            <div class="col-xs-12">
                                                &nbsp&nbsp<strong><a href="#" style="color: #ffffff; font-size: 20px"><span>Materials Application</span></a></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div style="height: 15px">
                                        </div>
                                        <!--Strat Button-->
                                        <div class="row">
                                            <div class="col-xs-3">
                                            </div>
                                            <div class="col-xs-9">
                                                <!-- button GA Application-->
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button type="button" class="btn btn-default" id="btnApplicationGAMS" style="width: 100%;
                                                            text-align: left" onclick="ToBrowser('create')">
                                                            <i class="fa fa-plus fa-fw"></i>
                                                            <span class="lbChianaControl">Create Application</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- button Query-->
                                                <div class="row" style="margin-top: 10px">
                                                    <div class="col-xs-12">
                                                        <button type="button" class="btn btn-default" id="btnQuery" onclick="ButtonClickQuery('btnQuery')"
                                                            style="width: 100%; text-align: left">
                                                            <i class="fa fa-search fa-fw"></i>
                                                            <span class="lblQuery"> Query my App</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Button-->
                                    </div>
                                </div>
                                <!--安排計畫-->
                            </div>
                            <div class="col-xs-1">
                            </div>
                        </div>
                        <!--計畫圖形功能-->
                        <div style="height: 15px">
                        </div>
                        <!--考試圖形功能-->
                        <div class="row">
                            <div class="col-xs-11">
                                <!--安排考試-->
                                <div class="row" style="background-color: #28B779; height: 160px">
                                    <div class="col-xs-2">
                                        <img src="Style/Image/kssm.png" />
                                    </div>
                                    <div class="col-xs-5" style="padding-top: 30px">
                                        <div style="height: 5px">
                                        </div>
                                        <!-- Label Materials Management-->
                                        <div class="row">
                                            <div class="col-xs-12">
                                                &nbsp;<strong><a href="#" style="color: #ffffff; font-size: 20px">
                                                    <span>Materials Management</span>
                                                </a></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5">
                                        <div style="height: 10px">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                            </div>
                                            <!--Strat Button-->
                                            <div class="col-xs-9">
                                                <!-- Button Query GAMS-->
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button type="button" id="btnQueryGAMS" class="btn btn-default" onclick="ToBrowser('efly_query')"
                                                            style="width: 100%; text-align: left">
                                                            <i class="glyphicon glyphicon-list"></i>
                                                            <span>Query GAMS</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Button-->
                                        </div>
                                    </div>
                                </div>
                                <!--安排考試-->
                            </div>
                            <div class="col-xs-1">
                            </div>
                        </div>
                        <!--考試圖形功能-->
                        <div style="height: 15px">
                        </div>
                        <!--統計面板-->
                    </div>
                    <!--左邊區域-->
                    <!--右邊區域-->
                    <div class="col-xs-4">
                        <div class="row">
                            <div style="height: 10px">
                            </div>
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <div class="panel-body">
                                    <p>
                                        <h4>
                                            <span class="glyphicon glyphicon-edit" style="font-size:30px;"></span>
                                            <span>Waiting list for authoriztion</span>
                                            </h4>
                                    </p>
                                </div>
                                <!-- List group -->
                                <ul class="list-group" id="lblHidenToDoList" onclick = "clickToDoList()" style="cursor: pointer;">
                                    <a class="list-group-item"><span class="badge" style="background-color: red">
                                        <span id="lblTodDoList">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;
                                        <span id="TodDoList">To Do List</span></a>
                                </ul>
                                <!--show ToDolistApp-->
                                <ul class="list-group" id="HiddenToDolistApp">
                                    <a class="list-group-item" href="GAApplicationCreate_Todolist.aspx" style="padding-left:30px;"><span class="badge" style="background-color: red">
                                        <span id="lblToDolistApp">0</span>
                                    </span><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp; <span id="ToDolistApp">To Do List GA App</span></a>
                                </ul>
                                <!--show ToDolistCombinAPP-->
                                <ul class="list-group" id="hiddenToDolistCombinAPP" >
                                    <a class="list-group-item" href="GAApplicationEfly_Todolist.aspx" style="padding-left:30px;"><span class="badge" style="background-color: red">
                                        <span id="lblToDolistCombinAPP">0</span>
                                    </span><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp; <span id="ToDolistCombinAPP">To Do List GA Combine App</span></a>
                                </ul>
                                <!--lbl waitting and count waitting-->
                                 <ul class="list-group" id="hiddenGAWaitting">
                                    <a class="list-group-item" href="GAApplicationQueryAll.aspx"><span class="badge" style="background-color: red">
                                        <span id="lblWaitingGACombine">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;
                                     <span id="lbWaitting">GA Signed</span></a>
                                </ul>
                                 <!--lbl GA Reject and count GA Reject-->
                                 <ul class="list-group" id="hiddenGAReject">
                                    <a class="list-group-item" href="GAApplication_QueryPage.aspx"><span class="badge" style="background-color: red">
                                        <span id="lblGAReject">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;
                                     <span id="GAReject"> GA Reject</span></a>
                                </ul>
                                <!--lbl submit and count submit-->
                                <ul class="list-group" id="hiddenGASubmit">
                                    <a class="list-group-item" href="GAApplicationQueryAll.aspx"><span class="badge" style="background-color: red">
                                        <span id="lblGAProcessing">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp; 
                                        <span id="lbSubmit">GA Processing</span></a>
                                </ul>
                                <!--lbl efly waitting and count waitting-->
                                <ul class="list-group" id="hiddenEflySubmit" >
                                    <a class="list-group-item" href="GAApplicationEfly_MainPage.aspx"><span class="badge" style="background-color: red">
                                        <span id="lblEflyWaittingPurchase">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;
                                        <span id="lblWaitting">GAMS Signed</span></a>
                                </ul>
                                <!--lbl efly waitting and count submit-->
                                 <ul class="list-group" id="hiddenEflyReject">
                                    <a class="list-group-item" href="GAApplicationEfly_Query.aspx"><span class="badge" style="background-color: red">
                                        <asp:Label runat="server" ID="lblEflyReject" Text="0"></asp:Label>
                                        <span id="lblEflyReject">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp; 
                                    <span id="lbldraft">GAMS Reject</span></a>
                                </ul>
                                <!--lbl efly waitting and count submit-->
                                 <ul class="list-group" id="hiddenEflyProcessing">
                                    <a class="list-group-item" href="GAApplicationEfly_Query.aspx"><span class="badge" style="background-color: red">
                                        <asp:Label runat="server" ID="lblEflyProcessing" Text="0"></asp:Label>
                                        <span id="lblEflyProcessing">0</span>
                                    </span><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp; 
                                    <span id="EflyProcessing">GAMS Processing</span></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--右邊區域-->
                </div>
            </div>
            <!--UC_footer-->
            <?php include 'Include/UC_Footer.php'?>
        </div>
    </div>
    </form>
</body>
</html>