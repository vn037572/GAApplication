<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="Style/JS/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--系統CSS引用-->
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
    <script language="javascript">
        $(document).ready(function() {
            function SetInitData() {
            InitDataTable('tblQueryGA_Order', 'en-US', true, true);
            }

        });
    </script>
    <form action="#">
     <!--Header-->
    <?php include 'Include/UC_Header.php' ?>
    <!-- /.Header -->
    <!--****Body Start***-->
    <div id="wrapper">
        <!--command tree左側命令樹-->
        <div id="sidebar-wrapper">
            <?php include 'Include/UC_CommandTree.php' ?>
        </div>
        <!--page header主體-->
        <div id="page-content-wrapper" style="background-color: #ffffff">
            <div id="divcontainerFEIT" class="container-fluid" style="padding-top: 55px">
                <!--Header Title Page -->
                <div class="row page-header-feit">
                    <!--Header Title Label -->
                    <label>Query GA Application</label>
                </div>
                <div class="row" style="margin-top: 10px">
                    <!--Query button -->
                    <button type="button" id="Query" onclick="QueryResult();" runat="server" class="btn btn-default lbChinabtn">
                        <i class="fa fa-search fa-fw"></i>
                        <!--Query Label -->
                        <label class="lbChinaControl">Query</label></button>
                </div>
                <!--Close or Open Query Condition Title-->
                <div class="row titlebar" onclick="ControlAreaShowLang('lbQueryInfo','divBasic','<%=language %>')"
                    style="cursor: pointer; padding-top: 10px; margin-top: 10px">
                    <div class="col-xs-10" style="text-align: left;">
                        <span class="badge">1</span><label class="lbChinaControl">Query Condition</label></div>
                    <div class="col-xs-2" style="text-align: right">
                        <label id="lbQueryInfo" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <!--Body-->
                <div class="row" id="divBasic" style="border: solid 1px #d7d7d7;">
                    <div class="row" style="border: #ffffff; margin-left: 15px; margin-right: 15px; padding-top: 10px;">
                        <!--Company-->
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group input-group" id="GaCode">
                                    <!--Company label -->
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">Company:</label>
                                    </span>
                                    <!--Company dropdownlist -->
                                    <select name="" id="" class="form-control lbChinaControl"></select>
                                </div>
                            </div>
                            <!--Department -->
                            <div class="col-xs-6">
                                <div class="form-group input-group" id="ApplicationDate">
                                    <!--Department label -->
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">Department:</label>
                                    </span>
                                    <!--Department dropdownlist -->
                                    <select name="" id="" class="form-control lbChinaControl"></select>
                                </div>
                            </div>
                        </div>
                        <!--Create Date From-->
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class='input-group date' id='StartDate'>
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">CreateDate(From):</label>
                                        </span>
                                       <input type="text" class="form-control lbChinaControl">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--Create Date Till-->
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class='input-group date' id='EndDate'>
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">CreateDate(Till):</label>
                                        </span>
                                        <input type="text" class="form-control lbChinaControl">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--State-->
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group input-group" id="Div2">
                                    <!--State label -->
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">State:</label>
                                    </span>
                                    <!-- State dropdownlist -->
                                    <select name="" id="" class="form-control lbChinaControl"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Close or Open Query Result Title-->
                <div class="row titlebar" onclick="ControlAreaShowLang('lbQueryResult','divQueryResult','<%=language %>')"
                    style="cursor: pointer; margin-top: 5px; padding-top: 5px">
                    <div class="col-xs-10" style="text-align: left">
                        <span class="badge">2</span><label class="lbChinaControl">Query Result</label>
                    </div>
                    <div class="col-xs-2" style="text-align: right">
                        <label class="lbChinaControl" id="lbQueryResult">-Collapse</label>
                    </div>
                </div>
                <div class="row" style="border: solid 1px #d7d7d7" id="divQueryResult">
                    <div class="row" style="margin-left: 15px; margin-right: 15px; padding-top: 10px">
                        <!--Table Detail Information-->
                            <HeaderTemplate>
                                <table id="tblQueryResult" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr style="background-color: #999999">
                                            <th style="width: 10%">
                                                <!--View label -->
                                                <label class="lbChinaGridHeader">View</label>
                                            </th>
                                            <th>
                                                <!--GA Code label -->
                                                <label class="lbChinaGridHeader">GACode</label>
                                            </th>
                                            <th>
                                                <!--Company label -->
                                                <label class="lbChinaGridHeader">Company</label>
                                            </th>
                                            <th>
                                                <!--Department label -->
                                                <label class="lbChinaGridHeader">Department</label>
                                            </th>
                                            <th>
                                                <!--CreateDate label -->
                                                <label class="lbChinaGridHeader">CreateDate</label>
                                            </th>
                                            <th>
                                                <!--DeliveryDate label -->
                                                <label class="lbChinaGridHeader">DeliveryDate</label>
                                            </th>
                                            <th>
                                                <!--State label -->
                                                <label class="lbChinaGridHeader">State</label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tblQueryResultBody">
                            </HeaderTemplate>
                            <ItemTemplate>
                                <tr>
                                    <!--Button Image View -->
                                    <td class="lbChinaGriditem" style="text-align: center">
                                        <a class="btn btn-default btn-xs glyphicon glyphicon-eye-open"></a>
                                    </td>
                                    <!--GACode Text -->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Company Text -->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Department Text -->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--CreateDate Text -->
                                    <td class="lbChinaGriditem" style="text-align: center">
                                    </td>
                                    <!--DeliveryDate Text -->
                                    <td class="lbChinaGriditem" style="text-align: center">
                                    </td>
                                    <!--State Text -->
                                    <td class="lbChinaGriditem" style="text-align: center">
                                    </td>
                                </tr>
                            </ItemTemplate>
                            <FooterTemplate>
                                </tbody> </table> </div>
                            </FooterTemplate>
                        </anthem:Repeater>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--****/Body Start***-->
    <!--footer-->
    <div>
        <?php include 'Include/UC_Footer.php'?>
    </div>
    <!--/footer-->
    </form>
</body>
</html>