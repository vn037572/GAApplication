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
    <script language="javascript" type="text/javascript">
         function onClickAdd() {
          
            //set msg and txtMaterialID = ''
           // $("#txtmsg").val('');
            //$("#txtMaterialID").val('');
            //聲明層不可以點擊灰色區域關閉
            // clear function
            //clearData();
            document.getElementById("btnSaveCountinue").style.display = "";
            $('#divOpenLayout3').modal({ backdrop: 'static', keyboard: false });
            //顯示層
            $('#divOpenLayout3').modal('show');
        };
    </script>
   <!--****Body Start***-->
    <!--Header-->
    <?php include 'Include/UC_Header.php' ?>
    <!-- /.Header -->
    <div id="wrapper">
        <!--comment tree左側命令樹-->
        <div id="sidebar-wrapper">
            <?php include 'Include/UC_CommandTree.php' ?>
        </div>
        <!--page header主體-->
        <div id="page-content-wrapper">
            <div class="container-fluid" id="divcontainerFEIT" style="padding-top: 55px;">
                <!--Page header-->
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="page-header-feit">
                            <label>Query Page (Draft)</label>
                        </h5>
                    </div>
                </div>
                <!--Web form control-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead','divContentInfo','<%=language %>');"
                    style="cursor: pointer; margin-left: 5px; margin-right: 5px">
                    <div class="col-xs-8 text-left" style="padding-top: 8px">
                        <span class="badge">1</span><label class="lbChinaControl" style="width: 165px">Quey Condition</label>
                    </div>
                    <div class="col-xs-4 text-right" style="padding-top: 8px">
                        <label id="divhead" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo" style="border: solid 1px #d7d7d7; border-top: 0px;margin-left: 5px; margin-right: 5px">
                    <!-- Strat button Query and Create-->
                    <div class="row" style="padding-top: 10px; padding-left: 15px;">
                        <div class="col-xs-12 btn-group">
                            <button id="Query" type="button" runat="server" class="btn btn-default lbChinabtn"
                                onclick="ButtonClickQuery();">
                                <i class="fa fa-search fa-fw"></i>
                                <label>Query</label></button>
                            <button id="btnCreate" type="button" runat="server" onclick="SetDataMaterialIDLink('new');"
                                class="btn btn-default lbChinabtn">
                                <i class="fa fa-plus fa-fw"></i>
                                <label>Create</label></button>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px; padding-top: 15px;">
                        <!--DDL Company-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                <label class="lbChinaControl" style="width: 165px">Company:</label></span>
                                <select name="ddlisUrgent" id="lb" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                        <!--DDL Status-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Status:</label></span>
                                <select name="ddlisUrgent" id="lb" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px">
                        <!--Delivery date(from) -->
                        <div class="col-xs-6 ">
                            <div class="form-group input-group" id='datetimepicker2' onclick="DateTimePicker('');">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Delivery Date(From):</label>
                                </span>
                                    <input type="text" class="form-control lbChinaControl" placeholder="YYYY-MM-DD">
                                <span class="input-group-addon" style="cursor: pointer"><span class="glyphicon glyphicon-calendar">
                                </span></span>
                            </div>
                        </div>
                        <!--Delivery Date(Till)-->
                        <div class="col-xs-6">
                            <div class="form-group input-group" id='datetimepicker3' onclick="DateTimePicker('datetimepicker3');">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Delivery Date(Till):</label>
                                </span>
                                    <input type="text" class="form-control lbChinaControl" placeholder="YYYY-MM-DD">
                                <span class="input-group-addon" style="cursor: pointer"><span class="glyphicon glyphicon-calendar">
                                </span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End query form control-->
                <!--Start Table result-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead2','divInfomation','<%=language %>');"
                    style="cursor: pointer; margin-left: 5px; margin-right: 5px; margin-top: 5px;">
                    <div class="col-xs-8 text-left" style="padding-top: 8px">
                        <span class="badge">2</span><label class="lbChinaControl" style="width: 165px">Query Result</label>
                    </div>
                    <div class="col-xs-4 text-right" style="padding-top: 8px">
                        <label class="lbChinaControl" id="divhead2">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divInfomation" style="border: solid 1px #d7d7d7; border-top: 0px;
                    margin-left: 5px; margin-right: 5px">
                    <div class="col-xs-12" style="margin-top: 15px;">
                        <!--Table result-->
                        <label id="rptResult"></label>
                            <HeaderTemplate>
                                <div class="panel-body">
                                    <table id="tblResult" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <!--Header-->
                                            <tr>
                                                <th style="text-align: center">
                                                    <label class="lbChinaGridHeader">View</label>
                                                </th>
                                                <th style="text-align: center">
                                                    <label class="lbChinaGridHeader">Edit</label>
                                                </th>
                                                <th style="text-align: center">
                                                    <label class="lbChinaGridHeader">GAMS Code</label>
                                                </th>
                                                <th style="text-align: center">
                                                    <label class="lbChinaGridHeader">Creator</label>
                                                </th>
                                                <th style="text-align: center">
                                                    <label class="lbChinaGridHeader">Last Update Time</label>
                                                </th>
                                                <th style="text-align: center">
                                                    <label class="lbChinaGridHeader">Status</label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                            </HeaderTemplate>
                            <ItemTemplate>
                                <!--Content Table-->
                                <tr>
                                    <td class="lbChinaGriditem" style="text-align: center; width: 50px">
                                        <button type="button" class="btn btn-default" id="btnView">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </button>
                                    </td>
                                    <td class="lbChinaGriditem" style="text-align: center; width: 50px">
                                        <button type="button" class="btn btn-default" id="btnEdit">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </button>
                                    </td>
                                    <td class="lbChinaGriditem" style="text-align: left; width: 100px">
                                    </td>
                                    <td class="lbChinaGriditem" style="text-align: left; width: 100px">
                                    </td>
                                    <td class="lbChinaGriditem" style="text-align: left; width: 100px">
                                    </td>
                                    <td class="lbChinaGriditem" style="text-align: left; width: 100px">
                                    </td>
                                </tr>
                            </ItemTemplate>
                            <FooterTemplate>
                                </tbody> </table> </div> </div>
                            </FooterTemplate>
                    </div>
                </div>
            </div>
            <!--End table result-->
        </div>
        <!--Footer-->
        <div>
            <?php include 'Include/UC_Footer.php'?>
        </div>
    </div>
    </form>
</body>
</html>