var stepper1Node = document.querySelector('#stepper1')
var stepper1 = new Stepper(document.querySelector('#stepper1'))
stepper1Node.addEventListener('show.bs-stepper', function(event) {
  let step = event.detail.indexStep
  let lastStep = event.detail.from
  if ($("#error").html() != "") {
    $("#error").html("");
  }
  check1();
  // if (lastStep == 0) {
  //   // 設定參數
  //   check1();
  // } else if (lastStep == 1) {
  //   // 匯入司機資料
  // } else if (lastStep == 2) {
  //   // 匯入客戶資料
  // }
  console.log(event)
})
stepper1Node.addEventListener('shown.bs-stepper', function(event) {
  console.warn('shown.bs-stepper', event)
})

function check1() {
  var depotStart = $("#depotStart").val(), // 總部開始時間
    depotEnd = $("#depotStart").val(), // 總部結束時間
    S1 = $("#S1").val(), // 大車固定成本
    S2 = $("#S2").val(), // 小車固定成本
    Q1 = $("#Q1").val(), // 大車限重
    Q2 = $("#Q2").val(), // 小車限重
    Service01 = $("#Service01").val(), // 大車上貨時間
    Service02 = $("#Service02").val() // 小車上貨時間

  if (isNaN(S1)) {
    $("#error").append(errorMessage("大車固定成本錯誤！"))
  }
  if (isNaN(S2)) {
    $("#error").append(errorMessage("小車固定成本錯誤！"))
  }
  if (isNaN(Q1)) {
    $("#error").append(errorMessage("大車限重錯誤！"))
  }
  if (isNaN(Q2)) {
    $("#error").append(errorMessage("小車限重錯誤！"))
  }
  if (isNaN(Service01)) {
    $("#error").append(errorMessage("大車上貨時間錯誤！"))
  }
  if (isNaN(Service02)) {
    $("#error").append(errorMessage("小車上貨時間錯誤！"))
  }

}

function errorMessage(err) {
  return "<div class=\"alert alert-danger\" role=\"alert\">" + err + "</div>"
}

$(function() {
  $('#depotStart').datetimepicker({
    format: 'LT'
  });
  $('#depotEnd').datetimepicker({
    format: 'LT'
  });
});

// read excel
$("#driverInput").on("change", function(e) {
  //Reference the FileUpload element.
  var fileUpload = $("#driverInput")[0];
  $("label[for='driverInput']").html(e.target.files[0].name);

  fileopen(fileUpload, 0);
});

$("#customerInput").on("change", function(e) {
  var fileUpload = $("#customerInput")[0];
  $("label[for='customerInput']").html(e.target.files[0].name);

  fileopen(fileUpload, 1);
})

$("#orderInput").on("change", function(e) {
  var fileUpload = $("#orderInput")[0];
  $("label[for='orderInput']").html(e.target.files[0].name);

  fileopen(fileUpload, 2);
})

function fileopen(fileUpload, step) { // step = 0 => 司機, 1 => 客戶, 2 => 訂單
  if (typeof(FileReader) != "undefined") {
    var reader = new FileReader();

    //For Browsers other than IE.
    if (reader.readAsBinaryString) {
      reader.onload = function(e) {
        ProcessExcel(e.target.result, step);
      };
      reader.readAsBinaryString(fileUpload.files[0]);
    } else {
      //For IE Browser.
      reader.onload = function(e) {
        var data = "";
        var bytes = new Uint8Array(e.target.result);
        for (var i = 0; i < bytes.byteLength; i++) {
          data += String.fromCharCode(bytes[i]);
        }
        ProcessExcel(data, step);
      };
      reader.readAsArrayBuffer(fileUpload.files[0]);
    }
  } else {
    alert("This browser does not support HTML5.");
  }
}

function ProcessExcel(data, step) {
  //Read the Excel File data.
  var workbook = XLSX.read(data, {
    type: 'binary'
  });

  //Create a HTML Table element.
  var table = $("<table class=\"table\"/>");
  //Add the header row.
  var row = $(table[0].insertRow(-1));

  //Add the header cells.
  if (step == 0) {
    //Fetch the name of First Sheet.
    var firstSheet = workbook.SheetNames[0];
    //Read all rows from First Sheet into an JSON array.
    var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("車種");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("司機姓名");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("車牌號碼");
    row.append(headerCell);

    //Add the data rows from Excel file.
    for (var i = 0; i < excelRows.length; i++) {
      console.log(excelRows[i]);
      //Add the data row.
      var row = $(table[0].insertRow(-1));

      //Add the data cells.
      var cell = $("<td />");
      cell.html(excelRows[i]["車種"]);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i]["司機姓名"]);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i]["車牌號碼"]);
      row.append(cell);
    }

    var dvExcel = $("#driverTable");
    dvExcel.html("");
    dvExcel.append(table);

  } else if (step == 1) {
  	//Fetch the name of First Sheet.
    var firstSheet = workbook.SheetNames[1];
    //Read all rows from First Sheet into an JSON array.
    var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("顧客編號");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("顧客姓名");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("顧客地址");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("能否用大車運送(1:可以 0:不能)");
    row.append(headerCell);

    //Add the data rows from Excel file.
    for (var i = 0; i < excelRows.length; i++) {
      console.log(excelRows[i]);
      //Add the data row.
      var row = $(table[0].insertRow(-1));

      //Add the data cells.
      var cell = $("<td />");
      cell.html(excelRows[i]["顧客編號"]);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i]["顧客姓名"]);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i]["顧客地址"]);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i]["能否用大車運送(1:可以 0:不能)"]);
      row.append(cell);
    }

    var dvExcel = $("#customerTable");
    dvExcel.html("");
    dvExcel.append(table);

  } else if (step == 2) {
  	//Fetch the name of First Sheet.
    var firstSheet = workbook.SheetNames[0];
    //Read all rows from First Sheet into an JSON array.
    var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[firstSheet]);
  	
    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("姓名");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("身分證字號");
    row.append(headerCell);

    var headerCell = $("<th scope=\"col\"/>");
    headerCell.html("e-mail");
    row.append(headerCell);

    //Add the data rows from Excel file.
    for (var i = 0; i < excelRows.length; i++) {
      console.log(excelRows[i]);
      //Add the data row.
      var row = $(table[0].insertRow(-1));

      //Add the data cells.
      var cell = $("<td />");
      cell.html(excelRows[i].姓名);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i].身分證字號);
      row.append(cell);

      cell = $("<td />");
      cell.html(excelRows[i]["e-mail"]);
      row.append(cell);
    }

    var dvExcel = $("#orderTable");
    dvExcel.html("");
    dvExcel.append(table);
  }

};