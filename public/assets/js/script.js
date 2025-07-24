function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
}



$(document).ready(function() {

    $('select').select2();

    $('textarea').summernote({
        tabsize: 2,
        height: 400
    });

    $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',  minDate: "0"  });


    $('.datatable').DataTable({
        dom: 'Blfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print', 'colvis'
        ]
    });

    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );




timeago().render($('.time_ago'));


});



var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5a859b984b401e45400cf58b/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
})();





function printContent(el){
    var restorepage = $('body').html();
    var printcontent = $('#' + el).clone();
    $('body').empty().html(printcontent);
    window.print();
    $('body').html(restorepage);
}


function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write('<html><head><title>Print</title>');
    mywindow.document.write('<link rel="stylesheet" href="http://localhost/pgl/project_cornerstone3/public/assets/css/bootstrap.min.css" media="screen, print" type="text/style">');
    mywindow.document.write('<link rel="stylesheet" href="../../../assets/look_css/css/look_base_v2.css" type="text/style">');
    mywindow.document.write('<link rel="stylesheet" href="../../../assets/css/style.css" type="text/style">');

    mywindow.document.write(" <style>* {font-family: 'Times New Roman' !important; font-size:15px !Important; }body{padding: 20px 70px !Important;color:#000 !Important}body a{color:#000 !Important;}.font-weight-900{font-weight: 900 !Important;} .float-right{float:right !Important} .m-0{ margin:0 !Important } body p font,  p font b, p b u,  p b{font-family: 'Times New Roman' !important;font-size: 16px !Important;}img{font-family: 'Times New Roman' !important;-webkit-print-color-adjust: exact !Important;font-size: 14px !Important;margin-bottom: 20px !Important;}</style>");
    mywindow.document.write('</head><body >');
    mywindow.document.write(content);
    mywindow.document.write('</body></html>');

    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    //mywindow.close();
    return true;
}

function printElem2(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write('<html><head><title>Print</title>');
    mywindow.document.write('<link rel="stylesheet" href="http://localhost/pgl/project_cornerstone3/public/assets/css/bootstrap.min.css" media="screen, print" type="text/style">');
    mywindow.document.write('<link rel="stylesheet" href="../../../assets/look_css/css/look_base_v2.css" type="text/style">');
    mywindow.document.write('<link rel="stylesheet" href="../../../assets/css/style.css" type="text/style">');


    mywindow.document.write('</head><body >');
    mywindow.document.write(content);
    mywindow.document.write('</body></html>');

    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    //mywindow.close();
    return true;
}


 toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};