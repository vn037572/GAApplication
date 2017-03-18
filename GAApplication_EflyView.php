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
   <!--Header-->
     <?php include 'Include/UC_Header.php'?>
    <!-- /.Header -->
        <div id="page-content-wrapper" style="background-color: #ffffff">
            <div class="container-fluid" style="padding-top: 100px">
                <!--頁面代碼內容-->
                <div class="row">
                    <div class="page-header-feit" style="margin-left: 18px">
                        <asp:Label runat="server" ID="lbpageheader" Text="GAApplicationEfly View Page"></asp:Label>
                    </div>
                </div>
                <nav class="navbar navbar-feit-bottom  navbar-fixed-top" role="navigation" style="margin-top: 55px;
                    height: 50px; z-index: 1000; background-color: #5bc0de">
                    <div id="divnavFEIT" class="text-center navbar-feit-back"  style="margin:3px 0 0 0">
                        <div class="col-xs-12" style="padding-top: 5px;">
                            <div class="form-group input-group">
                                <button type="button" onclick="CloseCF('You want to close ?','key');" class="btn btn-default lbChinabtn" style="margin-left:5px">
                                    <i class="fa fa-sign-out fa-fw"></i>
                                    <label class="lbChinaControl">Close</label>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--Create 4 Labels-->
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="input-group">
                         <!--Label CreateID-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">CreateTime:</label>
                            <label class="lbChinaGriditem"></label></span>
                        <!--Label CreateDate-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">CreateUser:</label>
                            <label class="lbChinaGriditem"></label></span></span>
                        <!--Label LastModify ID-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">LastModify ID:</label>
                            <label class="lbChinaGriditem"></label></span></span>
                        <!--Label LastModify Date-->
                        <span class="input-group-addon lbChinaGriditem">
                            <label class="lbChinaGriditem">LastModifyDate:</label>
                            <label class="lbChinaGriditem"></label></span></span>
                    </div>
                </div>
                <!--Basic Information-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead','divContentInfo','en-US');"
                    style="cursor: pointer;">
                    <div class="col-xs-10" style="margin-top: 10px;text-align:left">
                        <span class="badge">1</span><label class="lbChinaControl">Basic Information.</label></div>
                    <div class="col-xs-2" style="margin-top: 10px;text-align:right">
                        <label id="divhead" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo" style="border: solid 1px #d7d7d7; border-top: 0px;">
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">
                        <!--GAMS Code-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">GAMS Code:</label>
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
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                </div>
               
                <!--Details Information-->
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead2','divContentInfo2','en-US');"
                    style="cursor: pointer;margin-top:5px">
                    <div class="col-xs-10" style="margin-top: 10px ; text-align:left">
                        <span class="badge">2</span><label class="lbChinaControl">Details Information</label>
                    </div>
                    <div class="col-xs-2" style="margin-top: 10px;text-align:right">
                       <label id="divhead2" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo2" style="border: solid 1px #d7d7d7; border-top: 0px;">
                    <!--Estimate Amount-->
                    <div class="row" style="padding-left: 5px; padding-right: 5px; margin-top: 10px">
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Estimated Amount:</label></span>
                                <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 5px; padding-right: 5px; margin-top: 10px">
                        <!--Table Details Information-->
                         <label id="rptDetailInformation"></label>
                            <HeaderTemplate>
                                <div class="panel-body">
                                    <table id="tblDetailInformation" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr style="background-color: #999999">
                                                 <th>
                                                    <label class="lbChinaGridHeader">MaterialName</label>
                                                </th>
                                                <th>
                                                    <label class="lbChinaGridHeader">ApplyQuantity</label>
                                                </th>
                                                <th>
                                                    <label class="lbChinaGridHeader">PurchaseQuantity</label>
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
                                        <tbody>
                            </HeaderTemplate>
                            <ItemTemplate>
                                <tr>
                                   <!--Get Material Name data-->
                                    <td class="lbChinaGriditem" style="text-align: left">
                                    </td>
                                    <!--Get ApplyQuantity data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!-- Quantity textbox-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get Price data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get Unit data-->
                                    <td class="lbChinaGriditem" style="text-align: left">
                                    </td>
                                    <!--Get Currency data-->
                                    <td class="lbChinaGriditem" style="text-align: left">
                                    </td>
                                    <!--Get Amount data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get Rate data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                    <!--Get PurchaseAmountVND data-->
                                    <td class="lbChinaGriditem" style="text-align: right">
                                    </td>
                                </tr>
                            </ItemTemplate>
                            <FooterTemplate>
                                </tbody> </table> </div> </div>
                            </FooterTemplate>
                        </anthem:Repeater>
                    </div>
                    <!--頁面代碼內容-->
                </div>
                
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead1','divContentInfo1','en-US');"
                    style="cursor: pointer; margin-right:0px;padding-left:15px;margin-top:5px">
                    <div class="col-xs-10" style="margin-top: 10px;text-align:left">
                        <span class="badge">3</span><label class="lbChinaControl">Sign Person</label></div>
                    <div class="col-xs-2" style="margin-top: 10px;text-align:right">
                        <label id="divhead1" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                <div class="row" id="divContentInfo1" style="border: solid 1px #d7d7d7; border-top: 0px;margin-right:0px">
                    <div class="row" style="padding-left: 5px; padding-right: 5px; padding-top: 10px">                   
                        <!--DDL SignPerson-->
                        <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165">Sign Person:</label></span>
                               <input type="text" class="form-control lbChinaControl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#主體page-wrapper -->
        <div>
             <?php include 'Include/UC_Footer.php'?>
        </div>
        <!--****Foot層****-->
        <!--****Body End***-->
    </div>
    <!--****Foot層****-->
    </form>
</body>
</html>