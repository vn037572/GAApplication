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
            <div class="container-fluid" style="padding-top: 100px">
                <!--頁面代碼內容-->
                <div class="row">
                    <div class="page-header-feit" style="margin-left: 18px">
                        <label>GAApplicationEfly Create Page</label>
                    </div>
                </div>
                <div id="divnavFEIT" class="text-center navbar-feit-back" style="margin: 3px 0 0 0">
                    <nav class="navbar navbar-feit-bottom  navbar-fixed-top" role="navigation" style="margin-top: 55px;
                        height: 50px; background-color: #5bc0de">
                    
                        <div class="col-xs-12" style="padding-top: 5px;">
                            <div class="form-group input-group">
                    <!--Button Save-->
                    <button type="button" onclick="SaveDraft('msg');" class="btn btn-success lbChinabtn" style="margin-left:4px" >
                        <i class="fa fa-floppy-o fa-fw"></i>
                        <label>Save</label>
                    </button>
                    <!--Button Submit-->
                    <button type="button" onclick="Submit();" class="btn btn-warning lbChinabtn" style="margin-left:5px">
                        <i class="fa fa-floppy-o fa-fw"></i>
                        <label>Submit</label>
                    </button>
                    <!--Button Delete -->
                    <button type="button" onclick="" class="btn btn-danger lbChinabtn" style="margin-left:5px">
                        <i class="fa fa-trash fa-fw"></i>
                        <label>Delete</label>
                    </button>
                    <!--Button Close-->
                    <button type="button" onclick="CloseCF('You want to close ?','key');" class="btn btn-default lbChinabtn" style="margin-left:5px">
                        <i class="fa fa-sign-out fa-fw"></i>
                        <label>Close</label>
                    </button>
                            </div>
                        </div>
                  
                </nav>
                </div>
                <!--Create 4 Labels-->
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="input-group">
                        <!--Label CreateID-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">CreateTime:</label>
                            <label class="lbChinaGriditem"></label>
                        </span>
                        <!--Label CreateDate-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">CreateUser:</label>
                            <label class="lbChinaGriditem"></label>
                        </span>
                        <!--Label LastModify ID-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">LastModify ID:</label>
                            <label class="lbChinaGriditem"></label>
                        </span>
                        <!--Label LastModify Date-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">LastModifyDate:</label>
                            <label class="lbChinaGriditem"></label>
                        </span>
                    </div>
                </div>
                <!--Basic Information-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead','divContentInfo','<%=language%>');"
                    style="cursor: pointer;">
                    <div class="col-xs-10" style="margin-top: 10px; text-align: left">
                        <span class="badge">1</span>
                            <label class="lbChinaControl">Basic Information.</label>
                    </div>
                    <div class="col-xs-2" style="margin-top: 10px;text-align:right">
                        <label class="lbChinaControl" id="divhead">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo" style="border: solid 1px #d7d7d7; border-top: 0px;">
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <!--GAMS Code-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">                                    
                                <label class="lbChinaControl" style="width: 165px"> GAMS Code:</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                        <!--DDL Supplier-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Supplier Name:</label>
                                </span>
                                <select class="form-control lbChinaControl">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px;">
                        <!--Company-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Company:</label>
                                </span>
                                <select class="form-control lbChinaControl">
                                </select>
                            </div>
                        </div>
                        <!--Urgent-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Urgent:</label>
                                </span>
                                <select class="form-control lbChinaControl">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
  
                <!--Waiting Purchase List-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead1','divContentInfo1','<%=language%>');"
                    style="cursor: pointer;margin-top:5px">
                    <div class="col-xs-10" style="margin-top: 10px;text-align:left">
                        <span class="badge">2</span><label class="lbChinaControl">Waiting Purchase List.</label>
                    </div>
                    <div class="col-xs-2" style="margin-top: 10px;text-align:right">
                        <label id="divhead1" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo1" style="border: solid 1px #d7d7d7; border-top: 0px;">
                    <div class="row btn-group" style="padding-left: 5px; padding-top: 10px; padding-right: 5px;
                        padding-bottom: 5px; margin: 0px">
                        <!--Button Query-->
                        <button type="button" onclick="Query();" class="btn btn-default lbChinabtn">
                            <i class="fa fa-search fa-fw"></i>
                            <label>Query</label>
                        </button>
                        <!--Button Add-->
                        <button type="button" onclick="AddNewDetail();" class="btn btn-default lbChinabtn">
                            <i class="fa fa-plus fa-fw"></i>
                            <label>Add</label>
                        </button>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; margin-top: 10px">
                        <!--Delivery Date From-->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class="input-group date" id="StartDate">
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl">Delivery Date(From):</label>
                                    </span>
                                    <input type="text" class="form-control lbChinaControl">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--Delivery Date Till-->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <div class='input-group date' id='EndDate'>
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl">Delivery Date(Till):</label>
                                    </span>
                                    <input type="text" class="form-control lbChinaControl">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Table Waiting Purchase List-->
                    <table id="tblWaitingPurchase" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #999999">
                                <th>
                                    <label class="lbChinaGridHeader">All</label>
                                    <input type="checkbox" onclick="SetCheckAll(this);" />
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">View</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">MaterialType</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">MaterialName</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Total.Qty</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">TotalAmount</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Unit</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tblWaitingPurchaseBody">
                            <tr>
                                <td class="lbChinaGriditem" style="text-align: center">
                                    <input type="checkbox" name="check" onclick="" />
                                </td>
                                <!--Open Order Information modal-->
                                <td class="lbChinaGriditem" style="text-align: center">
                                    <button type="button" id="btnViewDetail" class="btn btn-default btn-xs glyphicon glyphicon-eye-open">
                                    </button>
                                </td>
                                <!--Get MaterialType data-->
                                <td class="lbChinaGriditem">
                                </td>
                                <!--Get MaterialName data-->
                                <td class="lbChinaGriditem" id="tdMaterialName">
                                </td>
                                <!--Get Total data-->
                                <td class="lbChinaGriditem" style="text-align: right">
                                </td>
                                <!--Get Price data-->
                                <td class="lbChinaGriditem" style="text-align: right">
                                </td>
                                <!--Get Unit data-->
                                <td class="lbChinaGriditem" style="text-align: left">
                                </td>
                            </tr>
                            <tfoot>
                        </tbody>
                    </table>
                </div>
                
                <!--Details Information-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead2','divContentInfo2','<%=language%>');"
                    style="cursor: pointer;margin-top:5px">
                    <div class="col-xs-10" style="margin-top: 10px;text-align:left">
                        <span class="badge">3</span><label class="lbChinaControl">Details Information.</label>
                    </div>
                    <div class="col-xs-2" style="margin-top: 10px;text-align:right">
                        <label id="divhead2" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo2" style="border: solid 1px #d7d7d7; border-top: 0px;">
                    <div class="row btn-group" style="padding-left: 5px; padding-top: 10px; padding-right: 5px;
                        margin: 0px;">
                        <!--Button Remove-->
                        <button type="button" id="btRemove" onclick="Remove();" class="btn btn-default lbChinabtn">
                            <i class="fa fa-trash fa-fw"></i>
                            <label>Remove</label>
                        </button>
                        <!--Button Calculate-->
                        <button type="button" id="btCalculate" onclick="Calcu()" class="btn btn-success lbChinabtn">
                            <i class="glyphicon glyphicon-phone"></i>
                            <label>Calculate</label>
                        </button>
                    </div>
                    <!--Estimate Amount-->
                    <div class="row" style="padding-left: 5px; padding-right: 5px; margin-top: 10px">
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Estimated Amount:</label>
                                </span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <!--Table Details Information-->
                    <table id="tblDetailInformation" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #999999">
                                <th>
                                    <label class="lbChinaGridHeader">All</label>
                                    <input type="checkbox" onclick="SetCheckAll1(this);" />
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">lbitemNo</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">View</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">MaterialName</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Apply.Qty</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Qty</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Price</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Unit</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Currency</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Amount</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">Rate</label>
                                </th>
                                <th>
                                    <label class="lbChinaGridHeader">PurchaseAmountVND</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tblDetailInformationBody">
                           
                            <tfoot>
                        </tbody>
                    </table>
                    </tfoot>
                </div>
                <!-- Next Person-->
                  
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead3','divContentInfo3','<%=language%>');"
                    style="cursor: pointer;margin-top:5px">
                    <div class="col-xs-10" style="margin-top: 10px;text-align: left">
                        <span class="badge">4</span><label class="lbChinaControl">Sign Person.</label>
                    </div>
                    <div class="col-xs-2 " style="margin-top: 10px;text-align: right">
                        <label id="divhead3" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo3" style="border: solid 1px #d7d7d7; border-top: 0px;">
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <div class="col-xs-6" style="margin-left: 10px">
                        <div class="form-group input-group" id="Div3">
                            <!--Sign Person label -->
                            <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Sign Person</label>
                            </span>
                            <!--Sign Person Dropdownlist -->
                            <input type="text" class="form-control lbChinaControl">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!--頁面代碼內容-->
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- /#主體page-wrapper -->
    <!--Hidden Layout1-->
    <div class="modal fade" id="modalInformation" tabindex="-1" role="dialog" aria-labelledby="myModalL1Label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!--header-->
                <div class="modal-header-feit">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalL1Label">
                        <!-- 彈出層名稱 -->
                        <label class="lbChinaLayerHeader"> Order Information</label>
                    </h4>
                </div>
                <!--body-->
                <div class="modal-body">
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <table id="tblOrderInformation" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr style="background-color: #999999">
                                    <th>
                                        <label class="lbChinaGridHeader">Company</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">Department</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">OrderCode</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">MaterialType</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">MaterialName</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">QTY</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">TotalAmount</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">DeliveryDate</label>
                                    </th>
                                    <th>
                                        <label class="lbChinaGridHeader">Creator</label>
                                    </th>
                                    <th>                                        
                                        <label class="lbChinaGridHeader">Urgent</label>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="tblOrderInformationBody">
                                <tr>
                                    <!--Get Company  data-->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Get Department  data-->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Get OrderCode  data-->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Get Material Type  data-->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Get Material Name  data-->
                                    <td class="lbChinaGriditem">
                                    </td>
                                    <!--Get Quantity data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get Price  data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get Delivery Date  data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get Creator  data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                        </td>
                                    <!--Get Urgent  data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                        </td>
                                </tr>
                                <tfoot>
                            </tbody>
                        </table>
                    </div>
                    </tfoot>
                    <div class="modal-footer" style="text-align: right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Hidden Layout1-->
    <!--****Foot層****-->
    <div>
        <?php include 'Include/UC_Footer.php'?>
    </div>
    <!--****Foot層****-->
    <!--****Body End***-->
    </form>
</body>
</html>