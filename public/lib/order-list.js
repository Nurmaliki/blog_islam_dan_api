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
            dom: '<"row"<"col-sm-3"<B>><"col-sm-3"l><"col-sm-6"f>>rt<"row"<"col-sm-6"i><"col-sm-6"p>>',
            "ajax":{
            "url":_base_url+"order-list-table", 
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
            ],
        });
});

$(document).on("submit", "#form-Level-input", function (e) { 
	e.preventDefault();
	Hxr(this);
});	

function Hxr(data){
    $.ajax({
        type: 'POST',
        url: _base_url+"Brand-createData",
        data: new FormData(data),
        processData: false,
        contentType: false,	
        success: function(e) {
            alert(e.errmsg);
           if(e.errcode==200){
                $('#datatable1').DataTable().ajax.reload();
                }
                $('#modal-input').modal('hide');
                }
            });		

}
$(document).on("hidden.bs.modal","#modal-input",function(){
    $("#form-Level-input").trigger("reset");
});

function activestatus(id){
    Swal.fire({
            title: 'Perhatian..!',
            text: "Apakah Anda Yakin Mengaktifkan status ini",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Aktifkan'
          }).then((result) => {
            if (result.value) {
               $.post(_base_url+"Order/ActiveStat",{
                    'id':id
                    },function(e){
                        if(e.error=="200"){
                            $('#datapage').DataTable().ajax.reload();
                        }else{
                                Swal.fire(e.msg,'Maf Status Pembayaran anda','warning')
                        }
                    }); 
            }
          });
}

function XrEditdta(e){
    let id=e.id;
    $("#id").val(id);
    $("#brand-group-nama").val($("#"+id).data('brand'));
    $("#brand-group-pic").val($("#"+id).data('pic'));
    $("#brand-group-ket").val($("#"+id).data('ket'));
    $('#modal-input').modal('show');

}
function XrDelete(e){
    let id=e.id;
    $.post(_base_url+"Brand-Delete",{
        'id':id
		},function(e){
			if(e.errcode==200){
			Swal.fire(e.errmsg,'','success')
			$('#datatable1').DataTable().ajax.reload();
			}else{
				Swal.fire('Delete Problem Cek','','warning')
			}
		});

}