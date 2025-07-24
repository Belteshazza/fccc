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

$("#add_participant").click(function () {
    $("#training_form_participants").append("<div class='bg-gray p-3 mb-3'> <div class='form-group'> <label>Participant name</label> <input type='text' class='form-control' required='required' name='participants[]'> </div> <div class='form-group'> <label>Participant email</label> <input type='email' class='form-control' required='required' name='participants_email[]'> </div> <div class='form-group'> <label>Participant phone</label> <input type='text' class='form-control' onkeypress='return isNumber(event)' name='participants_phone[]'></div></div>");
});



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
    mywindow.document.write('<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" media="screen, print" type="text/style">');
    //mywindow.document.write('<link rel="stylesheet" href="../../../assets/look_css/css/look_base_v2.css" type="text/style">');
    mywindow.document.write('<link rel="stylesheet" href="../../../assets/css/style.css" type="text/style">');

    mywindow.document.write(" <style>* {font-family: 'Times New Roman' !important; font-size:15px !Important}body{padding: 20px 70px !Important;color:#000 !Important}body a{color:#000 !Important;}.font-weight-900{font-weight: 900 !Important;}body p font,  p font b, p b u,  p b{font-family: 'Times New Roman' !important;font-size: 16px !Important;}img{font-family: 'Times New Roman' !important;-webkit-print-color-adjust: exact !Important;font-size: 14px !Important;margin-bottom: 20px !Important;}</style>");
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