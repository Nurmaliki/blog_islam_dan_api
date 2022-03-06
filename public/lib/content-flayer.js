$(function() {
    var e = $("#datapage").DataTable({
            responsive: {
                details: !1
            },
            "processing": true,
            "serverSide": true,
            "ordering": true,
            "responsive": true,
            "order": [[ 0, 'desc' ]], 
            dom: '<"row"<"col-md-3 col-xl-3"<B>><"col-md-3 col-xl-3"l><"col-md-6 col-xl-6"f>>rt<"row"<"col-md-6 col-xl-6"i><"col-md-6 col-xl-6"p>>',
            "ajax":{
            "url":_base_url+"Status-table/flayer", 
            "type": "POST",
            },
            "deferRender": true,
            "aLengthMenu": [[10, 50, 100],[ 10, 50, 100]], 
            buttons: [
                { extend: 'copy', className: 'btn-primary btn-sm ladda-button',titleAttr:'Copy Data' ,text: '<i class="fa fa-clone" aria-hidden="true"></i>',init: function(api, node, config) { $(node).removeClass('dt-button')} },
                { extend: 'csv', className: 'btn-primary btn-sm ladda-button',titleAttr:'Save To CSV',text: '<i class="feather icon-file-text"></i>',init: function(api, node, config) { $(node).removeClass('dt-button')} },
                { extend: 'print', className: 'btn-primary btn-sm ladda-button',titleAttr:'Print Data',text: '<i class="fa fa-print" aria-hidden="true"></i>',init: function(api, node, config) { $(node).removeClass('dt-button')} },
                {text: '<i class="feather icon-refresh-cw"></i>',className:'btn-primary btn-sm ladda-button',titleAttr:'' ,
                init: function(api, node, config) { $(node).removeClass('dt-button')},
                action: function ( e, dt, node, config ) {
                    $('#datapage').DataTable().search('').draw().ajax.reload();
                    },
                },
                {text: '<i class="feather icon-plus"></i>',className:'btn-primary btn-sm ladda-button',titleAttr:'Tambah Segement' ,
                init: function(api, node, config) { $(node).removeClass('dt-button')},
                action: function ( e, dt, node, config ) {
                    SegementAdd();
                    },
                },
            ],
        });
});

function SegementAdd(id=""){
    $('.modal-body').html('');
    $.post(_base_url+"StatusAdd/flayer/"+id,function(e){
        $('.modal-body').html(e);
        $('.modal-dialog').css("max-width","60%");
        $(".modal-title").text("Content Management");
         $('.selectpicker').selectpicker();
        $('#Modalpanel').modal('show');	
    });
}

$(document).on("submit", "#Statusfrom", function (e) { 
	e.preventDefault();
	Hxr(this);
});	

function EditPage(id){
    $('.modal-body').html('');
    $.post(_base_url+"StatusEdit/"+id,function(e){
        $('.modal-body').html(e);
        $('.modal-dialog').css("max-width","60%");
        $(".modal-title").text("Content Management");
         $('.selectpicker').selectpicker();
        $('#Modalpanel').modal('show');	
    });
}

function Hxr(data){
    $.ajax({
        type: 'POST',
        url: _base_url+"StatusPos",
        data: new FormData(data),
        processData: false,
        contentType: false,	
        success: function(e) {
            alert(e.errmsg);
           if(e.errcode==200){
                $('#datapage').DataTable().ajax.reload();
                }
                $('#Modalpanel').modal('hide');
                }
            });		

}