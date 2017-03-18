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
    <?php include 'Include/UC_Header.php'?>
    <!-- /.Header -->
    <div id="page-content-wrapper" style="background-color: #ffffff">
        <div id="divcontainerFEIT" class="container-fluid" style="padding-top: 55px">
            <!--Header Title Page -->
            <div class="row page-header-feit" style="padding-top: 10px; margin-top: 55px">
                <!--Header Title Label -->
            </div>
            <!-- Navigator bar div-->
             <div class="row" style="padding-top: 5px; padding-bottom:5px;margin-top: 15px">
                <div class="input-group">
                    <!--CreateID label -->
                    <span class="input-group-addon lbChinaGriditem">
                        <span class="lbChinaGriditem">CreateID:</span></span>
                    <span class="input-group-addon lbChinaGriditem">
                        <!--CreateDate label -->
                        <span class="lbChinaGriditem">CreateDate:</span></span>
                        <!--CreateDate label text -->
                    <span class="input-group-addon lbChinaGriditem">
                        <!--LastModify ID label -->
                        <span class="lbChinaGriditem">LastModify ID:</span></span>
                        <!--LastModify ID label text -->
                    <span class="input-group-addon lbChinaGriditem">
                        <!--LastModifyDate label -->
                        <span class="lbChinaGriditem">LastModifyDate:</span></span>
                        <!--LastModifyDate label text -->
                </div>
            </div>
            <!--Close or Open Basic information Title-->
            <div class="row titlebar" onclick="ControlAreaShowLang('lbBasicInfo','divBasic','en-US')" style="cursor: pointer;padding-top: 5px;margin-top:15px">
                <div class="col-xs-10" style="text-align: left;">
                    <span class="badge">1</span><span class="lbChinaControl">Basic Information</span>
                </div>
                <div class="col-xs-2" style="text-align: right">
                    <span class="lbChinaControl" id="lbBasicInfo">-Collapse</span>
                </div>
            </div>
            <!--Body-->
            <div class="row" id="divBasic" style="border: solid 1px #d7d7d7;">
                <div class="row" style="border: #ffffff; margin-left: 15px; margin-right: 15px; padding-top: 10px;">
                    <!--GA Code-->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="GaCode">
                                <!--GA Code label -->
                                <span class="input-group-addon" style="width: 165px">
                                    <span class="lbChinaControl" >GA Code:</span>
                                </span>
                                <!--GA Code textbox -->                                  
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <!--Application Date-->
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="ApplicationDate">
                                <!--ApplicationDate label -->
                                <span class="input-group-addon" >
                                    <span class="lbChinaControl" style="width: 165px;">Application Date:</span>
                                </span>
                                <!--ApplicationDate textbox -->
                                    <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <!--Application Username -->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="ApplicationUsername">
                                <!--Application Username label -->
                                <span class="input-group-addon">
                                        <span class="lbChinaControl">Application Username:</span>
                                </span>
                                <!--Application Username textbox -->
                                    <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <!--Delivery Date-->
                        <div class="col-xs-6">
                            <div class="form-group input-group date" id="DeliveryDate">
                                <!--Delivery Date label -->
                                <span class="input-group-addon">
                                        <span style="width: 165px" class="lbChinaControl">Delivery Date:</span>
                                </span>
                                <!--Delivery Date textbox -->
                                    <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <!--Urgent-->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="Urgent">
                                <!--Urgent label -->
                                <span class="input-group-addon">
                                    <span class="lbChinaControl">Urgent:</span></span>
                                <!--Urgent Text Label -->
                                    <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <!--Department-->
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="Department">
                                <!--Department label -->
                                <span class="input-group-addon">
                                        <span class="lbChinaControl">Department:</span>
                                </span>
                                <!--Department textbox -->
                                    <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <!--Reason-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group input-group" id="Reason">
                                <!--Reason label -->
                                <span class="input-group-addon">
                                        <span class="lbChinaControl">Reason:</span></span>
                                <!--Reason textbox -->
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <!--Describe-->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group input-group" id="Describe">
                                <!--Describe label -->
                                <span class="input-group-addon">
                                    <span class="lbChinaControl">Describe:</span>
                                        </span>
                                <!--Describe textbox -->
                                <input type="text" class="form-control lbChinaControl">  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Close or Open Detail Information Title-->
                <div class="row titlebar" onclick="ControlAreaShowLang('lbCustomInfo','divCustomInfo','en-US')" style="cursor: pointer; margin-top:5px; padding-top: 5px">
                    <div class="col-xs-10" style="text-align: left">
                        <span class="badge">2</span>
                        <span class="lbChinaControl">Detail Infomation</span>
                    </div>
                    <div class="col-xs-2" style="text-align: right">
                        <span class="lbChinaControl" id="lbCustomInfo">-Collapse</span>
                    </div>
                </div>
            <!--Button ADD Detail-->
            <div class="row" style="border: solid 1px #d7d7d7" id="divCustomInfo">
                <!--Estimated Amount -->
                <div class="row" style="text-align: left; margin-right: 10px; padding-top: 10px">
                    <div class="col-xs-6" style="margin-left: 15px">
                        <div class="form-group input-group" id="Div1">
                            <!--Estimated Amount Label-->
                            <span class="input-group-addon">
                                    <span class="lbChinaControl">Estimated:</span>
                            </span>
                            <!--Estimated Amount textbox-->
                                <input type="text" class="form-control lbChinaControl">
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-left: 15px; margin-right: 15px; padding-top: 10px">
                    <!--Table Detail Information-->
                    <span id="rptQueryResult"></span>
                        <HeaderTemplate>
                            <table id="tblQueryResult" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr style="background-color: #999999">
                                        <th>
                                            <!--Company label -->
                                            <span class="lbChinaGridHeader">Company</span>
                                        </th>
                               
                                        <th>
                                            <!--MaterialName label -->
                                            <span class="lbChinaGridHeader">MaterialName</span>
                                        </th>
                                        <th>
                                            <!--Quantity label -->
                                            <span class="lbChinaGridHeader">Quantity</span>
                                        </th>
                                        <th>
                                            <!--Price label -->
                                            <span class="lbChinaGridHeader">Price</span>
                                        </th>
                                        <th>
                                            <!--Amount label -->
                                            <span class="lbChinaGridHeader">Amount</span>
                                        </th>
                                        <th>
                                            <!--Unit label -->
                                            <span class="lbChinaGridHeader">Unit</span>
                                        </th>
                                        <th>
                                            <!--LocalAmount label -->
                                            <span class="lbChinaGridHeader">LocalAmount</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                        </HeaderTemplate>
                        <ItemTemplate>
                            <tr>
                                <!--Company Text -->
                                <td class="lbChinaGriditem">
                                </td>
                                <!--Department Text -->
                         
                                <!--MaterialName Text -->
                                <td class="lbChinaGriditem" style="cursor: pointer;text-align:left">
                                </td>
                                <!--Quantity Text -->
                                <td class="lbChinaGriditem" style="text-align: right">
                                </td>
                                <!--Price Text -->
                                <td class="lbChinaGriditem" style="text-align: right">
                                </td>
                                <!--Amount Text -->
                                <td class="lbChinaGriditem" style="text-align: right">
                                </td>
                                <!--Unit Text -->
                                <td class="lbChinaGriditem">
                                </td>
                                <!--LocalAmount Text -->
                                <td class="lbChinaGriditem" style="text-align: right" >
                             
                                </td>
                            </tr>
                        </ItemTemplate>
                        <FooterTemplate>
                            </tbody> </table> </div>
                        </FooterTemplate>
                </div>
                <!-- Next Person-->
            </div>
            <!--Close and open Group Name title -->

        </div>
        <!--Layout HIDE 3-->
    </div>
    <!--Footer-->
    <div>
        <?php include 'Include/UC_Footer.php'?>
    </div>
    <!-- /.Footer -->
    </form>
</body>
</html>