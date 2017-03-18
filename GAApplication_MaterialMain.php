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
                            <label>Materials Management</label>
                        </h5>
                    </div>
                </div>
                <!--End page Header-->
                <!--Button Query and button Close-->
                <div class="row">
                    <div class="col-xs-12 btn-group">
                        <button id="Query" runat="server" class="btn btn-default lbChinaControl" type="button"
                            onclick="ButtonClickQuery('btnQuery')">
                            <i class="fa fa-search fa-fw"></i>
                            <label>Query</label></button>
                        <button id="btnCreate" runat="server" class="btn btn-default lbChinaControl" type="button"
                            onclick="AddNewBrowser('GAApplicationMaterials_Create.aspx');">
                            <i class="fa fa-plus fa-fw"></i>
                            <label>Create</label></button>
                    </div>
                </div>
                <!--Form Control-->
                <div class="row" style="margin-top: 10px; margin-left: -5px;">
                    <div class="row titlebar" onclick="ControlAreaShowLang('divhead1','divContentInfo1','en-US');"
                        style="cursor: pointer; margin-left: 5px; margin-right: 5px">
                        <div class="col-xs-8 text-left" style="padding-top: 8px">
                            <span class="badge">1</span><label class="lbChinaControl" style="width: 165px">Query Condition</label>
                        </div>
                        <div class="col-xs-4 text-right" style="padding-top: 8px">
                            <label id="divhead1" class="lbChinaControl">-Collapse</label>
                        </div>
                    </div>
                    <div class="row" id="divContentInfo1" style="border: solid 1px #d7d7d7; border-top: 0px;
                        margin-left: 5px; margin-right: 5px;">
                        <div class="row" style="padding-top: 10px; padding-left: 15px; padding-right: 15px;">
                            <div class="col-xs-6">
                                <!--DDL Company Code-->
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Company Code:</label>
                                    </span>
                                    <select name="" class="form-control lbChinaControl">
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <!--DDL Status-->
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">Status:</label>
                                    </span>
                                    <select name="" class="form-control lbChinaControl">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-left: 15px; padding-right: 15px;">
                            <div class="col-xs-6">
                                <!--DDL Material Type-->
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">Material Type:</label>
                                    </span>
                                    <select name="" class="form-control lbChinaControl">
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <!--TextBox Material Name-->
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">Material Name:</label>
                                    </span>
                                    <input type="text" class="form-control lbChinaControl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Form Control-->
                <!--Start Table result-->
                <div class="row" style="margin-top: 5px; margin-left: -5px;">
                    <div class="row titlebar" onclick="ControlAreaShowLang('divhead2','divInfomation','<%=language %>');"
                        style="cursor: pointer; margin-left: 5px; margin-right: 5px">
                        <div class="col-xs-8 text-left" style="padding-top: 8px">
                            <span class="badge">2</span><label class="lbChinaControl">Query Result</label>
                        </div>
                        <div class="col-xs-4 text-right" style="padding-top: 8px">
                            <label id="divhead2" class="lbChinaControl">-Collapse</label>
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
                                                        <label class="lbChinaGridHeader">Edit</label>
                                                    </th>
                                                    <th style="text-align: center">
                                                        <label class="lbChinaGridHeader">Material Name</label>
                                                    </th>
                                                    <th style="text-align: center">
                                                        <label class="lbChinaGridHeader">Material Type</label>
                                                    </th>
                                                    <th style="text-align: center">
                                                        <label class="lbChinaGridHeader">Price</label>
                                                    </th>
                                                    <th style="text-align: center">
                                                        <label class="lbChinaGridHeader">Unit</label>
                                                    </th>
                                                    <th style="text-align: center">
                                                        <label class="lbChinaGridHeader">Currency</label>
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
                                            <button type="button" class="btn btn-default" id="btnEdit">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </button>
                                        </td>
                                        <td class="lbChinaGriditem" style="text-align: left; width: 100px">
                                        </td>
                                        <td class="lbChinaGriditem" style="text-align: left; width: 100px">
                                        </td>
                                        <td class="lbNumGriditem" style="text-align: right; width: 100px">
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
                <!--End table-->
            </div>
            <!--UC_footer-->
            <?php include 'Include/UC_Footer.php.php'?>
        </div>
    </div>
    </form>
</body>
</html>