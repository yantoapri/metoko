   <div class="album py-3 bg-light pu">
        <div class="container" style="padding: 10px">

          <div class="row">
            <div class="col-md-12" style="padding-bottom: 10px">
                 <div style="float: left"><h3>Marketing</h3></div>
                <div style="float: right;"><a href="#"  class="btn btn-lg btn-outline-info">See More </a></div>
            </div>
      <?php for($i=1;$i<=4;$i++) {?>
   

            <div class="col-md-3" >
              <div class="card mb-2 box-shadow">
                <img class="img img-responsive" style="width: 100%;"  src="<?php echo base_url(); ?>assets/img/gambar.png" />
                <div class="card-body">
                  <p class="card-text">This is a wider card with.
                    <br>
                    <a href="#">Rp.2000.000.000</a>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Download</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
      <?php }?>
           </div>
        </div>
      </div>
       