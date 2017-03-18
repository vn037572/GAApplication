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
                    <div class="col-xs-12">
                        <h5 class="page-header-feit">
                            <span>To Do List APP</span>
                        </h5>
                    </div>
                </div>
                <!--button Refersh to reload page-->
                <div class="row"> 
                     <div class="col-xs-12">
                            <button id="btnRefresh" type="button" class="btn btn-default lbChinabtn" onclick="onRefresh()" >
                                <i class="fa fa-refresh"></i>
                                <span>Refresh</span>
                            </button>
                     </div>
                </div>
                <div class="row titlebar" onclick="ControlAreaShowLang('divhead','divContentInfo','en-US');" style="cursor: pointer; margin-left: 5px; margin-right: 5px; margin-top:10px">
                    <div class="col-xs-8 text-left" style="padding-top: 8px">
                        <span class="badge">1</span>
                            <span class="lbChinaControl">Information</span>
                        </asp:Label>
                    </div>
                    <div class="col-xs-4 text-right" style="padding-top: 8px">
                        <span id="divhead" class="lbChinaControl">-Collapse</span>
                    </div>
                </div>
               <div class="row" id="divContentInfo" style="border: solid 1px #d7d7d7; border-top: 0px; 
                    margin-left: 5px; margin-right: 5px" >
                    <div class="row" style=" padding-left: 10px;">
                        <div class="col-xs-12">
                             <span id="rptGAApplicationToDoList"></span>
                             <HeaderTemplate>
                                <div class="panel-body"> 
                                     <table id="tblGAApplicationToDoList" class="table table-striped table-bordered table-hover" >
                                         <thead>
                                             <tr>
                                            <th>
                                                <span class="lbChinaGridHeader">Signed</span>
                                            </th>
                                            <th>
                                                 <span class="lbChinaGridHeader">Company</span>
                                            </th>
                                            <th>
                                                 <span class="lbChinaGridHeader">Department</span>
                                            </th>
                                            <th>
                                                 <span class="lbChinaGridHeader">GA Code</span>
                                            </th>
                                            <th>
                                                 <span class="lbChinaGridHeader">VietNam Total Amount</span>
                                            <th>
                                                 <span class="lbChinaGridHeader">Creator</span>
                                            </th>
                                            <th>
                                                 <span class="lbChinaGridHeader">Application Date</span>
                                            </th>
                                        </tr>
                                         </thead>
                                         <tbody>
                                         </HeaderTemplate>
                                         <ItemTemplate>
                                             <tr>
                                               <td class="center" style="text-align: center;width: 7%;"> 
                                                     <button type="button" class="btn btn-default" id="btnSign">
                                                        <i class="glyphicon glyphicon-edit"></i>
                                                     </button>
                                                </td>
                                                <td class="lbChinaGriditem"></td>
                                                
                                                <td class="lbChinaGriditem"></td>
                                                
                                                <td class="lbChinaGriditem"></td>
                                                
                                                <td class="lbChinaGriditem" style="text-align:right"></td>
                                                
                                                <td class="lbChinaGriditem"></td>
                                                
                                                <td class="lbChinaGriditem"></td>
                                            </tr>
                                         </ItemTemplate>
                                         <FooterTemplate>
                                         </tbody>
                                    </table>
                                </div>
                           </FooterTemplate>
                        </div>
                    </div>
               </div>
           </div>
           <?php include 'Include/UC_Footer.php'?>
        </div>
   </div>
    </form>
</body>
</html>