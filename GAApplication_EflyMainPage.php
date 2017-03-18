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
    <?php include 'Include/UC_Header.php'?>
    <!-- /.Header -->
    
     <div id="wrapper">
     
        <!--command tree左側命令樹-->
        <div id="sidebar-wrapper">
            <?php include 'Include/UC_CommandTree.php'?>
        </div>
        
        <!--page header主體-->
        <div id="page-content-wrapper">
            <div class="container-fluid" id="divcontainerFEIT" style="padding-top: 55px;">

                <!--Page name-->
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="page-header-feit">
                            <label>CombineAPP.Query</label>
                        </h5>
                    </div>
                </div>

                
                <!--Create button Query by conditions-->
                <div class="row"> 
                     <div class="col-lg-12">
                        <button id="btnQuery" type="button" class="btn btn-default lbChinabtn" onclick="buttonclicktoServer();"  >
                            <i class="fa fa-search"></i>
                            <label class="lbChinaControl" style="cursor: pointer;">Query</label>
                        </button>
                     </div>
                </div>
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead','divContentInfo','en-US');"
                    style="cursor: pointer; margin-left: 5px; margin-right: 5px; margin-top:10px">
                    <div class="col-xs-8 text-left" style="padding-top: 8px">
                        <span class="badge">1</span>
                            <label class="lbChinaControl" style="width: 165px">Query Condition</label>
                    </div>
                    <div class="col-xs-4 text-right" style="padding-top: 8px">
                        <label id="divhead" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                
                <div class="row" id="divContentInfo" style="border: solid 1px #d7d7d7; border-top: 0px;  margin-left: 5px; margin-right: 5px">
                   <div class="row" style="padding-top: 10px; padding-left: 15px;margin-right: 5px">
                        <div class="row" style="padding-left: 10px; padding-right: 5px;">
                        
                         <!--condition1: dropdow list Company-->
                         <div class="col-xs-6">
                            <div class="form-group input-group">
                                <span class="input-group-addon">
                                    <asp:Label ID="lblCompany" Width="165px" runat="server" Text="Company:" CssClass="lbChinaControl">
                                    </asp:Label>
                                    <label class="lbChinaControl" style="width: 165px">Company:</label>
                                </span>
                                     <select name="ddlisUrgent" id="lb" class="form-control lbChinaControl"></select>
                            </div>
                         </div>
                         
                         <!--condition2: dropdow list Status-->
                         <div class="col-xs-6">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <asp:Label ID="lbStatus" Width="165px" runat="server" Text="Status:" CssClass="lbChinaControl">
                                        </asp:Label>
                                        <label class="lbChinaControl" style="width: 165px">Status:</label>
                                    </span>
                                    <select name="ddl1" class="form-control lbChinaControl"></select>
                                </div>
                         </div>
                        </div>
                        
                        <div class="row" style="padding-left: 10px; padding-right: 5px;">
                         <!--con dition3: datetime picker Delivery Date from-->
                            <div class="col-xs-6">
                                <div class="form-group input-group"  id="dtpkDateFrom" onclick="DateTimePicker('');">
                                    <span class="input-group-addon">
                                        <label class="lbChinaControl" style="width: 165px">Delivery Date(From):</label>
                                    </span>
                                    <input type="text" placeholder="YYYY-MM-DD" class="form-control lbChinaControl">
                                        <span class="input-group-addon" style="cursor: pointer">
                                        <span class="glyphicon glyphicon-calendar">
                                        </span>
                                        </span>
                                </div>
                         </div>
                         
                            <div class="col-xs-6">
                             <div class="form-group input-group"  id="dtpkDateTill" onclick="DateTimePicker('');">
                                <span class="input-group-addon">
                                    <label class="lbChinaControl" style="width: 165px">Delivery Date (Till):</label>
                                </span>
                                <input type="text" placeholder="YYYY-MM-DD" class="form-control lbChinaControl">
                                <span class="input-group-addon" style="cursor: pointer"><span class="glyphicon glyphicon-calendar">
                                </span>
                            </div>
                         </div>
                        </div>
                        
                        <!--<div class="row" style="padding-left: 10px; padding-right: 5px;">
                            <div class="col-xs-6">
                              <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <asp:Label ID="lbCreator" Width="165px" runat="server" Text="Creator:" CssClass="lbChinaControl">
                                        </asp:Label>
                                    </span>
                                    <anthem:DropDownList runat="server" AutoCallBack="true" ID="ddlCreator"  CssClass="form-control lbChinaControl">
                                    </anthem:DropDownList>
                              </div>
                                <div class="col-xs-6"></div>
                            </div>
                        </div>-->
                        
                   </div>
                </div>
                
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead2','divContentInfo2','en-US');"
                    style="cursor: pointer; margin-left: 5px; margin-right: 5px; margin-top:10px">
                    <div class="col-xs-8 text-left" style="padding-top: 8px">
                        <span class="badge">2</span>
                        <asp:Label Width="170px" ID="Label1" runat="server" CssClass="lbChinaControl"  Text="Query Result">
                        </asp:Label>
                        <label class="lbChinaControl" style="width: 165px">Query Result</label>
                    </div>
                    <div class="col-xs-4 text-right" style="padding-top: 8px">
                        <label id="divhead2" class="lbChinaControl">-Collapse</label>
                    </div>
                </div>
                
                <div class="row" id="divContentInfo2" style="border: solid 1px #d7d7d7; border-top: 0px;  margin-left: 5px; margin-right: 5px">                
                   <div class="row" style=" padding-left: 10px;">
                        <div class="col-lg-12">
                            <label id="rptQueryMainPage"></label>
                            <HeaderTemplate>
                                <div class="panel-body">
                                    <table id="tblQueryMainPage" class="table table-striped table-bordered table-hover" >
                                        <thead>
                                            <tr>
                                            <th>
                                                <label class="lbChinaGridHeader">View</label>
                                            </th>
                                            <th>
                                                <label class="lbChinaGridHeader">GAMSCode</label>
                                            </th>
                                            <th>
                                                <label class="lbChinaGridHeader">Creator</label>
                                            </th>
                                            <th>
                                                <label class="lbChinaGridHeader">Last Update Time</label>
                                            </th>
                                            <th>
                                                 <label class="lbChinaGridHeader">Status</label>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </HeaderTemplate>
                                        <ItemTemplate>
                                            <tr>
                                                <th class="center" style="text-align: center;width: 7%;">
                                                     <button type="button" class="btn btn-default" id="btnView">
                                                     <i class="glyphicon glyphicon-eye-open"></i>
                                                     </button>
                                                </th>
                                                <th class="lbChinaGriditem" ></th>
                                                <th class="lbChinaGriditem" ></th>
                                                <th class="lbChinaGriditem" ></th>
                                                <th class="lbChinaGriditem" ></th>
                                             </tr>
                                        </ItemTemplate>
                                        <FooterTemplate>
                                        </tbody>
                                    </table>
                                </div>
                            </FooterTemplate>
                            </anthem:Repeater>
                        </div>
                   </div>  
                </div>
                
            <!--footer-->
            <div>
               <?php include 'Include/UC_Footer.php'?>
            </div>
            <!--./footer-->
                
        </div>
        </div>
    </div>
    </form>
</body>
</html>