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
    <!--Header-->
    <?php include 'Include/UC_Header.php'?>
    <!-- /.Header -->
    <div id="page-content-wrapper" style="background-color: #ffffff">
        <div id="divcontainerFEIT" class="container-fluid" style="padding-top: 55px">
            <!-- Navigator bar div-->
            <nav class="navbar navbar-feit-bottom navbar-fixed-top" role="navigation" style="margin-top: 55px;
                height: 55px; background-color: #5bc0de">
                
                <div id="divnavFEIT" class="text-center navbar-feit-back">
                        <div class="col-xs-12" style="padding-top: 5px;margin-left:5px;margin-top:5px">
                            <div class="form-group input-group">
                            <!--Save button -->
                            <button type="button"  onclick="SaveDraft();" class="btn btn-success lbChinabtn">
                                <i class="fa fa-save fa-fw"></i>
                                <!--Save Label -->
                                <span class="lbChinaControl">Save</span></button>
                         <!--Submit button -->
                            <button type="button" id="btnSubmit"  onclick="SubmitButton();"  class="btn btn-warning lbChinabtn"
                                style="margin-left: 5px">
                                <i class="fa fa-save fa-fw"></i>
                         <!--Submit label -->
                            <span class="lbChinaControl">Submit</span></button>
                            <!--Delete button -->
                            <button type="button" id="bnDelete" onclick="Delete();"  class="btn btn-danger lbChinabtn"
                                style="margin-left: 5px">
                                <i class="fa fa-trash fa-fw"></i>
                                <!--Delete Label -->
                                <span class="lbChinaControl">Delete</span></button>
                          <!--Close button -->
                            <button type="button" id="btnClose" onclick="CloseButton();" runat="server" class="btn btn-default lbChinaControl"
                                style="margin-left: 5px;">
                                <i class="fa fa-sign-out fa-fw"></i>
                                <!--Close label -->
                                <span class="lbChinaControl">Close</span></button>
                                
                             </div>
                        </div>
                    </div>
                    
                </nav>
            <!--Header Title Page -->
            <div class="row">
                <div class="row page-header-feit" style="padding-top: 10px; margin-top: 20px; margin-left: 5px;
                    margin-right: 5px">
                    <!--Header Title Label -->
                        <span>GA Application Create Page</span>
                </div>
            </div>
            <div class="row" style="padding-top: 5px; padding-bottom: 5px">
                <div class="input-group">
                    <!--CreateTime label -->
                    <span class="input-group-addon lbChinaGriditem">
                            <span class="lbChinaGriditem">CreateTime:</span>
                        <!--CreateTime label text -->
                        <label></label></span>
                    <span class="input-group-addon lbChinaGriditem">
                        <!--CreateUser label -->
                            <span class="lbChinaControl">CreateUser:</span>
                        <!--CreateUser label text -->
                        </span> 
                    <span class="input-group-addon lbChinaGriditem">
                        <!--LastUpdateUser label -->
                        <span class="lbChinaGriditem">LastUpdateUser:</span>
                        <!--LastUpdateUser label text -->
                        </span> 
                        <span class="input-group-addon lbChinaGriditem">
                        <!--LastUpdateTime label -->
                        <span class="lbChinaGriditem">LastUpdateTime:</span>
                                        <!--LastUpdateTime label text -->
                        </span>
                </div>
            </div>
            <!--Close or Open Basic information Title-->
            <div class="row titlebar" onclick="ControlAreaShowLang('lbBasicInfo','divBasic','<%=language %>')"
                style="cursor: pointer; padding-top: 5px;">
                <div class="col-xs-10" style="text-align: left;">
                    <!--Basic information title bar title text -->
                    <span class="badge">1</span><span class="lbChinaControl">Basic Information</span></div>
                <div class="col-xs-2" style="text-align: right">
                    <!--Div title bar basic information -->
                        <span id="lbBasicInfo" class="lbChinaControl">-Collapse</span>
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
                                <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">GA Code:</label>
                                </span>
                                <!--GA Code textbox -->
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <!--Application Date-->
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="ApplicationDate">
                                <!--ApplicationDate label -->
                                <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px;">Application Date:</label>
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
                                        <label class="lbChinaControl" style="width: 165px">Username:</label>
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
                                        <label class="lbChinaControl" style="width: 165px">Delivery Date:</label>
                                </span>
                                <!--Delivery Date textbox -->
                                <input type="text" class="form-control lbChinaControl" style="cursor: pointer;">
                                <span class="input-group-addon" style="cursor: pointer"><span class="fa fa-calendar fa-fw">
                                </span></span>
                            </div>
                        </div>
                    </div>
                    <!--Urgent-->
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="Urgent">
                                <!--Urgent label -->
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Urgent:</label>
                                    </span>
                                <!--Urgent DropDownList -->
                                <select name="ddlisUrgent" id="lb" class="form-control lbChinaControl"></select>
                            </div>
                        </div>
                        <!--Department-->
                        <div class="col-xs-6">
                            <div class="form-group input-group" id="Department">
                                <!--Department label -->
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Deparment:</label>
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
                                    <span class="lbChinaControl">Reason:</span>
                                    </span>
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
                                    <label class="lbChinaControl" style="width: 165px">Describe:</label>
                                </span>
                                <!--Describe textbox -->
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Close or Open Detail Information Title-->
            <div class="row titlebar" onclick="ControlAreaShowLang('lbCustomInfo','divCustomInfo','en-US')"
                style="cursor: pointer; margin-top: 5px; padding-top: 5px">
                <div class="col-xs-10" style="text-align: left">
                    <!--Detail Information Title label -->
                    <span class="badge">2</span>
                    <span class="lbChinaControl">Detail Infomation</span>
                </div>
                <div class="col-xs-2" style="text-align: right">
                    <!--Div tag Detail Infoamtion Title -->
                    <span id="lbCustomInfo" class="lbChinaControl">-Collapse</span>
                </div>
            </div>
            <!--Button ADD Detail-->
            <div class="row" style="border: solid 1px #d7d7d7" id="divCustomInfo">
                <div class="row" style="text-align: left; margin-left: 0px; margin-right: 10px; padding-top: 10px">
                    <!--Button ADD Detail-->
                    <button type="button" id="btnAdd" onclick="onClickAdd();" class="btn btn-default lbChinabtn"
                        style="margin-left: 15px; text-align: right">
                        <i class="fa fa-plus fa-fw"></i>
                        <!--Button ADD Label-->
                        <span class="lbChinaControl">Add Detail</span>
                    </button>
                </div>
                <!--Estimated Amount -->
                <div class="row" style="text-align: left; margin-right: 10px; padding-top: 10px">
                    <div class="col-xs-6" style="margin-left: 15px">
                        <div class="form-group input-group" id="Div1">
                            <!--Estimated Amount Label-->
                            <span class="input-group-addon">
                                <label class="lbChinaControl" style="width: 165px">Estimated Amount:</label>
                            </span>
                            <!--Estimated Amount textbox-->
                                <input type="text" class="form-control lbChinaControl">
                            <span class="input-group-addon">
                                <span class="lbChinaControl">VND</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-xs-6" style="margin-left: 15px">
                    </div>
                </div>
                <div class="row" style="margin-left: 15px; margin-right: 15px; padding-top: 10px">
                    <!--Table Detail Information-->
                    <table id="tblQueryResult" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #999999">
                                <th style="width: 10%">
                                    <!--Edit label -->
                                    <label class="lbChinaGridHeader">Edit</label>
                                </th>
                                <th>
                                    <!--Delete label -->
                                    <label class="lbChinaGridHeader">Delete</label>
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
                                    <!--MaterialName label -->
                                    <label class="lbChinaGridHeader">MaterialName</label>
                                </th>
                                <th>
                                    <!--Quantity label -->
                                    <label class="lbChinaGridHeader">Quantity</label>
                                </th>
                                <th>
                                    <!--Price label -->
                                    <label class="lbChinaGridHeader">Price</label>
                                </th>
                                <th>
                                    <!--Amount label -->
                                    <label class="lbChinaGridHeader">Amount</label>
                                </th>
                                <th>
                                    <!--Unit label -->
                                    <label class="lbChinaGridHeader">Unit</label>
                                </th>
                                <th>
                                    <!--LocalAmount label -->
                                    <label class="lbChinaGridHeader">LocalAmount</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tblQueryResultBody">
                            <tfoot>
                        </tbody>
                    </table>
                </div>
                </tfoot>
            </div>
            <!--Close and open Group Name title -->
            <div class="row titlebar" onclick="ControlAreaShowLang('lbGroupName','divNextPerson','en-US')"
                style="cursor: pointer; margin-top: 5px; padding-top: 5px;">
                <div class="col-xs-10" style="text-align: left">
                    <span class="badge">3</span>
                    <span class="lbChinaControl">Next Person</span>
                </div>
                <div class="col-xs-2" style="text-align: right">
                        <label id="lbGroupName" class="lbChinaControl">-Collapse</label>
                </div>
            </div>
            <!-- Next Person-->
            <div class="row" style="border: solid 1px #d7d7d7;" id="divNextPerson">
                <div class="row" style="text-align: left; padding-top: 10px; margin-right: 15px">
                    <div class="col-xs-6" style="margin-left: 10px">
                        <div class="form-group input-group" id="Div3">
                            <!--Sign Person label -->
                            <span class="input-group-addon">
                                <asp:Label ID="lbNextPerson" runat="server" CssClass="lbChinaControl" Text="Sign Person:"
                                    Width="165px" meta:resourcekey="lbNextPersonResource1"></asp:Label>
                                <label class="lbChinaControl" style="width: 165px">Sign Person</label>
                            </span>
                            <input type="text" class="form-control lbChinaControl">
                            <!--Sign Person Dropdownlist 
                            <uc2:UC_WKControlMiniV2 ID="CheckCtrl" runat="server" style="width: 300px;" />-->
                        </div>
                    </div>
                    <div class="col-xs-6" style="margin-left: 10px">
                    </div>
                </div>
            </div>
            <!--Close and open Attachment title 
            <div>
                <uc1:UC_DocumentList runat="server" ID="UC_DocumentList" />
            </div>-->
        </div>
        <!--Layout HIDE 3-->
        <div class="modal fade" id="divOpenLayout3" tabindex="-1" role="dialog" aria-labelledby="modalBasicInfoLayout"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!--header-->
                    <div class="modal-header-feit">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hiden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="H2">
                            <!--Popup Title-->
                            <label class="lbChinaLayerHeader">Add Detail Information</label>
                            </h4>
                    </div>
                    <!--BODY-->
                    <div class="modal-body">
                        <!--DIV row1-->
                        <div class="row" style="margin-left: 10px; margin-right: 10px; padding-top: 10px">
                            <div class="row">
                                <!--Materials Type -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Materials Type label -->
                                        <span class="input-group-addon">
                                            <label id="lblMaterialsType" class="lbChinaControlRed" style="width: 165px" >Materials Type:</label>
                                        </span>
                                        <!--Materials Type textbox -->
                                        <select name="ddMaterialType" id="lb" class="form-control lbChinaControl"></select>
                                    </div>
                                </div>
                                <!-- Materials -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Materials label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControlRed" style="width: 165px;">Materials:</label>
                                        </span>
                                        <!--Materials textbox-->
                                        <select name="ddlMaterials" id="lb" class="form-control lbChinaControl"></select>
                                        <span class="input-group-addon">
                                            <!--State text-->
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Price -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Price label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Price:</label>
                                        </span>
                                        <!--Price textbox -->
                                            <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                                <!--Unit -->
                                <div class="col-xs-6">
                                    <!--Unit label-->
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Unit:</label>
                                        </span>
                                        <!--Unit textbox-->
                                        <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Currency -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Currency label-->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Currency:</label>
                                        </span>
                                        <!--Currency textbox-->
                                        <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                                <!--Amount -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Amount label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Amount:</label>        
                                        </span>
                                        <!--Amount Textbox-->
                                        <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Exchangel -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Exchangel label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Exchangel:</label>
                                        </span>
                                        <!--Exchangel Textbox -->
                                            <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                                <!--Quantity -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Quantity Label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Quantity:</label>
                                        </span>
                                        <!--Quantity Textbox -->
                                        <input type="text" class="form-control lbChinaControl" placeholder="Input Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- LocalAmount -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--LocalAmount Label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">LocalAmount:</label>
                                        </span>
                                        <!--LocalAmountPopup Textbox -->
                                        <input type="text" class="form-control lbChinaControl">
                                        <!--VND Label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 30px">VND</label>
                                        </span>
                                    </div>
                                </div>
                                <!-- Dept Quantity -->
                                <div class="col-xs-6">
                                    <div class="form-group input-group">
                                        <!--Dept Quantity Label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControlRed" style="width: 165px">Dept Quantity</label>
                                        </span>
                                        <!--Dept Quantity Textbox -->
                                        <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                            </div>
                            <!--Description -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group input-group" id="Div2">
                                        <!--Description label -->
                                        <span class="input-group-addon">
                                            <label class="lbChinaControl" style="width: 165px">Description:</label>
                                        </span>
                                        <!--Description Textbox -->
                                        <input type="text" class="form-control lbChinaControl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end modal-->
                        <div class="modal-footer">
                            <!--Button Save & Countinue-->
                            <button type="button" id="btnSaveCountinue" onclick="SaveandContinueButton();" class="btn btn-success lbChinabtn">
                                <i class="fa fa-floppy-o fa-fw"></i>
                                <label>Save & Countinue</label>
                            </button>
                            <!--Button Save & Close-->
                            <button type="button" id="btnSaveClose" onclick="SaveandCloseButton();" class="btn btn-success lbChinabtn">
                                <i class="fa fa-floppy-o fa-fw"></i>
                                <label>Save & Close</label>
                            </button>
                            <!-- Button Cancel -->
                            <button type="button" id="btnClosePopup" onclick="ClosePopupAddDetail();" class="btn btn-default lbChinaControl">
                                <i class="fa fa-sign-out fa-fw"></i>
                                <label>Cancel</label>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <div>
        <?php include 'Include/UC_Footer.php'?>
    </div>
    <!-- /.Footer -->
    </form>
</body>
</html>