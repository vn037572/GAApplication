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
    <?php include 'Include/UC_Header.php'?>
    <!--Header-->
    <div id="wrapper">
    
        <!--command tree左側命令樹-->
        <div id="sidebar-wrapper">
            <?php include 'Include/UC_CommandTree.php'?>
        </div>
        
        
         <div id="page-content-wrapper">
            <div class="container-fluid" id="divcontainerFEIT" style="padding-top: 20px;">
                <!--page header主體-->               
                <div class="row page-header-feit" style="padding-top: 10px; margin-top: 30px; padding-left:10px">
                    <label>Application Draft</label>
                </div>
                 <div class="row" style="padding-top: 5px; padding-bottom: 5px;margin-top:5px"> 
                    <div class="col-lg-12 btn-group">
                    
                        <!--Create button that open the GAApplicationCreatePage.aspx-->
                        <button id="btnCreate" type="button" class="btn btn-default lbChinabtn" onclick="openNew('btnCreate') " >
                            <i class="fa fa-plus"></i>
                            <span>Create</span>
                        </button>
                        <!-- Query button-->
                       <button id="btnQuery" type="button" class="btn btn-default lbChinabtn" onclick="SearchDT();" >
                            <i class="fa fa-search"></i>
                            <span>Query</span>
                        </button>
                        
                    </div>
                </div>

                
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;margin-top:10px">
                    <div class="row titlebar" onclick="ControlAreaShowLang('divhead1','divContentInfo1','<%=language %>');" style="cursor: pointer; margin-left: 5px; margin-right: 5px">
                        <div class="col-xs-8 text-left" style="padding-top: 8px">
                            <span class="badge"></span>
                                <span class="lbChinaControl">Query Result</span>
                         </div>
                         <div class="col-xs-4 text-right" style="padding-top: 8px">
                                <span class="lbChinaControl" id="divhead1">-Collapse</span>
                         </div>
                     </div>
                     
                    <!-- table result-->
                   <div class="row" id="divContentInfo1" style="border: solid 1px #d7d7d7;
                         border-top: 0px;margin-left: 5px; margin-right: 5px;">
                        <span id="rptQueryGA_Order"></span>
                            <HeaderTemplate>
                                <div class="panel-body">
                                     <table id="tblQueryGA_Order" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="lbChinaGridHeader">View</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">Edit</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">GACode</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">Company</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">Department</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">Create Date</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">Delivery Date</span>
                                                </th>
                                                <th>
                                                    <span class="lbChinaGridHeader">State</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        </thead>
                                        <tbody>
                                        </HeaderTemplate>
                                        <ItemTemplate>
                                            <tr>
                                                <th class="center" style="text-align: center; width: 7%;">
                                                    <button type="button" class="btn btn-default" id="btnView">
                                                        <i class="glyphicon glyphicon-eye-open"></i>
                                                    </button>
                                                </th>
                                                <th class="center" style="text-align: center; width: 7%;">
                                                    <button type="button" class="btn btn-default" id="btnEdit">
                                                        <i class="glyphicon glyphicon-edit"></i>
                                                    </button>
                                                </th>
                                                <th class="lbChinaGriditem"></th>
                                                
                                                <th class="lbChinaGriditem"></th>
                                                
                                                <th class="lbChinaGriditem"></th>
                                                
                                                <th class="lbChinaGriditem"></th>
                                                
                                                <th class="lbChinaGriditem"></th>
                                                
                                                <th class="lbChinaGriditem"></th>
                                         </tr>
                                        </ItemTemplate>
                                        <FooterTemplate>
                                        </tbody>
                                     </table>
                                     
                                   </div> 
                                 </div>
                             </FooterTemplate>
                    </div>
                </div>
                <div>
                   <?php include 'Include/UC_Footer.php'?>
                 </div>
            </div>
        </div>
      
    </div>
    </form>
</body>
</html>