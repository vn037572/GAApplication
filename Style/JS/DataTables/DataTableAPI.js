
jQuery.fn.dataTableExt.oApi.fnGetColumnData = function(oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty) {
    // check that we have a column id
    if (typeof iColumn == "undefined") {
        return [];
    }

    // by default we only wany unique data
    if (typeof bUnique == "undefined") {
        bUnique = true;
    }

    // by default we do want to only look at filtered data
    if (typeof bFiltered == "undefined") {
        bFiltered = true;
    }

    // by default we do not wany to include empty values
    if (typeof bIgnoreEmpty == "undefined") {
        bIgnoreEmpty = true;
    }

    // list of rows which we're going to loop through
    var aiRows;

    if (oSettings == null)
        return null;

    // use only filtered rows
    if (bFiltered === true) {
        aiRows = oSettings.aiDisplay;
    }
    // use all rows
    else {
        aiRows = oSettings.aiDisplayMaster; // all row numbers
    }

    // set up data array    
    var asResultData = [];

    for (var i = 0, c = aiRows.length; i < c; i++) {
        var iRow = aiRows[i];
        var sValue = this.fnGetData(iRow, iColumn);

        // ignore empty values?
        if (bIgnoreEmpty === true && sValue.length === 0) {
            continue;
        }

        // ignore unique values?
        else if (bUnique === true && jQuery.inArray(sValue, asResultData) > -1) {
            continue;
        }

        // else push the value onto the result data array
        else {
            asResultData.push(sValue);
        }
    }

    return asResultData;
};

//獲取列的合計
jQuery.fn.dataTableExt.oApi.fnGetColumnSum = function(oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty) {
    // check that we have a column id
    if (typeof iColumn == "undefined") {
        return [];
    }

    // by default we only wany unique data
    if (typeof bUnique == "undefined") {
        bUnique = true;
    }

    // by default we do want to only look at filtered data
    if (typeof bFiltered == "undefined") {
        bFiltered = true;
    }

    // by default we do not wany to include empty values
    if (typeof bIgnoreEmpty == "undefined") {
        bIgnoreEmpty = true;
    }

    // list of rows which we're going to loop through
    var aiRows;

    if (oSettings == null)
        return null;

    // use only filtered rows
    if (bFiltered === true) {
        aiRows = oSettings.aiDisplay;
    }
    // use all rows
    else {
        aiRows = oSettings.aiDisplayMaster; // all row numbers
    }

    // set up data array    
    var asResultData = 0;

    for (var i = 0, c = aiRows.length; i < c; i++) {
        var iRow = aiRows[i];
        var sValue = this.fnGetData(iRow, iColumn);

        // ignore empty values?
        if (bIgnoreEmpty === true && sValue.length === 0) {
            continue;
        }

        // ignore unique values?
        else if (bUnique === true && jQuery.inArray(sValue, asResultData) > -1) {
            continue;
        }

        // else push the value onto the result data array
        else {
            try {
                asResultData += parseFloat(sValue);
            } catch (e) {

            }
        }
    }

    return asResultData;
};



jQuery.fn.dataTableExt.oApi.fnCheckedAll = function(oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty) {
    if (typeof iColumn == "undefined") {
        return [];
    }

    // by default we only wany unique data
    if (typeof bUnique == "undefined") {
        bUnique = true;
    }

    // by default we do want to only look at filtered data
    if (typeof bFiltered == "undefined") {
        bFiltered = true;
    }

    // by default we do not wany to include empty values
    if (typeof bIgnoreEmpty == "undefined") {
        bIgnoreEmpty = true;
    }

    // list of rows which we're going to loop through
    var aiRows;

    // use only filtered rows
    if (bFiltered === true) {
        aiRows = oSettings.aiDisplay;
    }
    // use all rows
    else {
        aiRows = oSettings.aiDisplayMaster; // all row numbers
    }
//    for (var i = 0, c = oSettings.aiDisplayMaster.length; i < c; i++) {
//        var iRow = oSettings.aiDisplayMaster[i];
//        var sValue = this.fnGetNodes(iRow);
//        var check = sValue.getElementsByTagName('input')[0];
//        check.checked = false;
//        
//        //check.setAttribute('checked', false);
//    }

    // set up data array
    var asResultData = [];
    
    try {
        for (var i = 0, c = aiRows.length; i < c; i++) {
            var iRow = aiRows[i];
            var sValue = this.fnGetNodes(iRow);
            var check = sValue.getElementsByTagName('input')[0];
            check.checked = iColumn == 0 ? true : false;
            check.defaultValue = iColumn == 0 ? "MYCHOOSE" : "";
        }
    } catch (e) {
        alert("Choose Error:" + e);
    }


    return asResultData;
};

jQuery.fn.dataTableExt.oApi.fnCheckedClearAll = function(oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty) {

    // set up data array
    var asResultData = [];

    try {
        for (var i = 0, c = oSettings.aiDisplayMaster.length; i < c; i++) {
            var iRow = oSettings.aiDisplayMaster[i];
            var sValue = this.fnGetNodes(iRow);
            var check = sValue.getElementsByTagName('input')[0];
            check.checked = false;
            check.defaultValue = "";
        }
    } catch (e) {
        alert("Choose Error:" + e);
    }


    return asResultData;
};

//獲取選中的對象
jQuery.fn.dataTableExt.oApi.fnGetCheckedData = function(oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty) {
    // check that we have a column id
    if (typeof iColumn == "undefined") {
        return [];
    }

    // by default we only wany unique data
    if (typeof bUnique == "undefined") {
        bUnique = true;
    }

    // by default we do want to only look at filtered data
    if (typeof bFiltered == "undefined") {
        bFiltered = true;
    }

    // by default we do not wany to include empty values
    if (typeof bIgnoreEmpty == "undefined") {
        bIgnoreEmpty = true;
    }

    // list of rows which we're going to loop through
    var aiRows = oSettings.aiDisplayMaster; // all row numbers

    // set up data 
    var chosseitem = '';
    try {
        for (var i = 0, c = aiRows.length; i < c; i++) {
            var iRow = aiRows[i];
            var sValue = this.fnGetNodes(iRow);
            var check = sValue.getElementsByTagName('input')[0];

            if (check.defaultValue != '') {
                chosseitem += check.title + ";"; //GUID
            }
        }
        

    } catch (e) {
        alert("Choose Error:" + e);
        return '';
    }


    return chosseitem;
};

//選擇事件變更value
function mycheck(p) {
    if (p.checked) {
        p.defaultValue = "MYCHOOSE";
    } else {
        p.defaultValue = "";
    }
}

function InitDataTable(tabid, lang, bPaginate, bFilter) {
    var tab = $('#' + tabid);
    tab.dataTable({
    "paging": bPaginate, //开关，是否显示分页
    "searching": bFilter, //开关，是否启用客户端过滤器 Main頁面開啟，需要有匯總欄位的不開啟報表
    stateSave: true,
    "lengthMenu": [[5,10, 25, -1], [5,10, 25, "All"]],
    "pagingType": "simple_numbers",
    "language": DataTable_Lang(lang)

     });
 }
 
 function InitDataTableFixed(tabid, lang, bPaginate, bFilter) {
     var tab = $('#' + tabid);
     tab.dataTable({
         "paging": bPaginate, //开关，是否显示分页
         "searching": bFilter, //开关，是否启用客户端过滤器 Main頁面開啟，需要有匯總欄位的不開啟報表
         stateSave: true,
         "lengthMenu": [[ 10], [10]],
         "pagingType": "simple_numbers",
         "language": DataTable_Lang(lang)

     });
 }


 function InitDataTableWithScroll(tabid, lang, bPaginate, bFilter) {
     var tab = $('#' + tabid);
     tab.dataTable({
        "paging": bPaginate, //开关，是否显示分页
        "ordering": true, //排序
        "info": true,
         "searching": bFilter, //开关，是否启用客户端过滤器 Main頁面開啟，需要有匯總欄位的不開啟報表
         stateSave: true,
         "lengthMenu": [[10, 25, -1], [10, 25, "All"]],
         "pagingType": "simple_numbers",
         "scrollX": true,
         "scrollY" : 400,
         "language": DataTable_Lang(lang)

     });
 }


function DataTable_Lang(lang) {
    switch (lang) {
        case 'zh-TW':
            return { 'lengthMenu': '每頁顯示 _MENU_ 條記錄', 'zeroRecords': '沒有檢索到信息', 'search': '模糊查詢:', 'info': '當前顯示 _START_ 到 _END_ 條，共 _TOTAL_ 條記錄', 'infoFiltered': '數據表中共為 _MAX_ 條記錄', 'paginate': { 'previous': '前一頁', 'next': '後一頁'} };
        case 'en':
            return { 'lengthMenu': 'Each page shows _MENU_ records', 'zeroRecords': 'no records', 'search': 'Fuzzy query:', 'info': 'Current shows from _START_ to _END_ ，total: _TOTAL_ records', 'infoFiltered': 'Total _MAX_ records in the data table', 'paginate': { 'previous': 'Previous page', 'next': 'Next page'} };
        case 'en-US':
            return { 'lengthMenu': 'Each page shows _MENU_ records', 'zeroRecords': 'no records', 'search': 'Fuzzy query:', 'info': 'Current shows from _START_ to _END_ ，total: _TOTAL_ records', 'infoFiltered': 'Total _MAX_ records in the data table', 'paginate': { 'previous': 'Previous page', 'next': 'Next page'} };
        case 'zh-CN':
            return { 'lengthMenu': '每页显示 _MENU_ 条记录', 'zeroRecords': '没有检索到数据', 'search': '模糊查詢:', 'info': '当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录', 'infoFiltered': '数据表中共为 _MAX_ 条记录', 'paginate': { 'previous': '前一页', 'next': '后一页'} };
        default:
            return { 'lengthMenu': 'Each page shows _MENU_ records', 'zeroRecords': 'no records', 'search': 'Fuzzy query:', 'info': 'Current shows from _START_ to _END_ ，total: _TOTAL_ records', 'infoFiltered': 'Total _MAX_ records in the data table', 'paginate': { 'previous': 'Previous page', 'next': 'Next page'} };

    }
    
    
    
    
    
}

