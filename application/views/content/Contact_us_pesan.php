<div class="row">
 <div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h5><?php echo  strtoupper(str_replace("-"," ",$this->uri->segment(1)));?></h5>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
            
                <table class="display table nowrap table-striped table-hover" style="width:100%" id="datapage">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama <?php //echo  strtolower(str_replace("-"," ",$this->uri->segment(1)));?></th>
                            <th>Email </th>
                            <th>Pesan <?php //echo  strtolower(str_replace("-"," ",$this->uri->segment(1)));?></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</div>
</div>     

<div id="Modalpanel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left" data-backdrop="static" data-keyboard="false">
<div role="document" class="modal-dialog" style="max-width: 70%;">
<div class="modal-content">
  <div class="modal-header">
    <h4 id="exampleModalLabel" class="modal-title">..</h4>
    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
  </div>
  <div class="modal-body">
  
  </div>

</div>
</div>
</div>  
