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
    <!--主體-->
    <div id="page-content-wrapper" style="background-color: #ffffff">
        <div class="container-fluid" style="padding-top: 55px">
            <div class="row">
                <nav class="navbar navbar-feit-bottom navbar-fixed-top" role="navigation" style="margin-top: 55px;
                    height: 50px; background: #5bc0de">
                        
                <div class="col-xs-12" style="padding-top: 5px;margin-left: 10px;margin-top:2px;">  
                       <!-- Button Save -->   
                    <button id="btSave" type="button" onclick="Save();" class="btn btn-success lbChinabtn">
                        <i class="fa fa-floppy-o fa-fw"></i>Save</button>
                       <!-- Button Delete-->
                    <button id="btnDelete" type="button" onclick="Delete('Do you want to delete?');" class="btn btn-danger lbChinabtn">
                        <i class="fa fa-trash fa-fw"></i>Delete</button>
                    <!--Button Close-->
                    <button id="btnClose" type="button" onclick="Close('Do you want to close? ');" class="btn btn-default lbChinabtn">
                        <i class="fa fa-sign-out fa-fw"></i>Close</button>
                </div>
                </nav>
            </div>
            <!--頁面代碼內容-->
            <div class="row">
                <div class="page-header-feit" style="margin-bottom: 20px; margin-top: 40px; margin-left: 5px">
                    <asp:Label runat="server" ID="lbpageheader" Text="Create Materials"></asp:Label>
                </div>
            </div>
            <div class="row" style="padding-top: 5px; padding-bottom: 5px; margin-left: -10px;
                margin-right: -10px;">
                <div class="input-group">
                    <!--Create Time label -->
                    <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaControl">Create Time:</label>
                        <!--Create Time label text -->
                        <label class="lbChinaControl"></label></span>
                    <span class="input-group-addon lbChinaGriditem">
                        <!--CreateDate label -->
                            <label class="lbChinaControl">Create User:</label>
                        <!--CreateDate label text -->
                        <label class="lbChinaControl"></label></span>
                    <span class="input-group-addon lbChinaGriditem">
                        <!--LastModify ID label -->
                            <label class="lbChinaControl">Last Update Time:</label>
                        <!--LastModify ID label text -->
                        <label class="lbChinaControl"></label></span>
                    <span class="input-group-addon lbChinaGriditem">
                        <!--LastModifyDate label -->
                            <label class="lbChinaControl">Last Update User:</label>
                        <!--LastModifyDate label text -->
                        <anthem:Label CssClass="lbChinaGriditem" runat="server" ID="lbLastUpdateUser"></anthem:Label>
                        <label class="lbChinaControl"></label>
                        </span>
                </div>
            </div>
            <!-- Create Materials Info-->
            <div class="row" style="margin-top: 15px">
                <div class="row titlebar" onclick="ControlAreaShowLang('divHead','divName','en-US');"
                    style="cursor: pointer; margin-left: 5px; margin-right: 5px;">
                    <div class="col-xs-10 text-left" style="padding-top: 8px">
                        <span class="badge">1</span>&nbsp<label class="lbChinaControl">Materials Info</label>
                    </div>
                    <div class="col-xs-2 text-right" style="padding-top: 8px">
                        <label class="lbChinaControl" id="divhead">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divName" style="border: solid 1px #d7d7d7; border-top: 0px;
                    margin-left: 5px; margin-right: 5px">
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6">
                            <!--Materials Name-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControlRed" style="width: 165px">Materials Name:</label>
                                        </span>
                                    <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <!--Materials Type-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControlRed" style="width: 165px">Materials Type:</label>
                                    </span>
                                <select name="ddl" id="" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6">
                            <!-- Price-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControlRed" style="width: 165px">Price</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <!--Material Unit-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Unit:</label>
                                </span>
                                <select name="ddl" id="" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6">
                            <!--Currency-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Currency:</label>
                                </span>
                                <select name="ddl" id="" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <!--Contact No-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Contact No:</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6">
                            <!--Supplier-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Supplier:</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <!--Supplier Phone-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Supplier Phone:</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6">
                            <!--Company Code-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Company Code:</label>
                                </span>
                                <select name="ddl" id="" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <!--State-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Status:</label>
                                </span>
                                <select name="ddl" id="" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6">
                            <!--Company Code-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Type Of QUantity:</label>
                                </span>
                                <select name="ddl" id="" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-12">
                            <!--Decription-->
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Decription:</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--頁面代碼內容-->
            <!--****Foot層****-->
            <div>
                <?php include'Include/UC_Footer.php' ?>
            </div>
            <!--****Foot層****-->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!--****Body End***-->
    </form>
</body>
</html>