

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Place the form code here -->
        <div class="col-lg-8">
          <div class="bg-light text-center p-5">
            <form>
              <div class="row g-3">
                <div class="col-12 col-sm-6">
                  <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                  <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                </div>
                <div class="col-12 col-sm-6">
                  <div class="date" id="date" data-target-input="nearest">
                    <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Call Back Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="time" id="time" data-target-input="nearest">
                    <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Call Back Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                  </div>
                </div>
                <div class="col-12">
                  <textarea class="form-control border-0" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">Submit Request</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

