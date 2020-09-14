function uploadFile(file_select,type){
  var tmp = $('#submit').attr('onclick')
  $('#submit').attr('onclick', '')
  $('#submit').addClass('onclick')
  $('#'+file_select+'_name').html($('#'+file_select)[0].files[0].name)
  var file = $('#'+file_select)[0].files[0];
  var formdata = new FormData();
  formdata.append(file_select, file);
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", function () {
    res = $.parseJSON(event.target.responseText);
    // /$("#status").innerHTML = res.msg;
    //$("#progressBar").value = 0;
    if (res.code!='error') {
      $("#"+file_select+'_path').val(res.data)
    }else{
      // swal({
      //   title: "ผิดพลาด",
      //   text: 'ชนิดไฟล์ไม่ถูกต้อง',
      //   icon: "error",
      // }).then(()=>{
      //   $("#"+file_select+'_path').val('')
      //   $('#'+file_select+'_name').html('Choose file')
      // });
      console.log('error');
    }

    $('#submit').attr('onclick', tmp)
    $('#submit').removeClass('onclick')
    $('#spinner').fadeOut('fast');
  }, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", base_url+"uploads/file/"+type);
  ajax.send(formdata);
}
function progressHandler(event){
  var percent = (event.loaded / event.total) * 100;
  $("progressBar").value = Math.round(percent);
}
function errorHandler(event){
  $("#status").innerHTML = "Upload Failed";
}
function abortHandler(event){
  res = $.parseJSON(event.target.responseText);
  $("#status").innerHTML = "Upload Aborted";
}