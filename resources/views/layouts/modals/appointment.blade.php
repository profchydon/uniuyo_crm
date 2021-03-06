<div class="modal fade appointment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Book Appointment</h4>
      </div>

      <div class="modal-body customercare-body">

          <form class="" action="/book-appointment" method="post">

              {{ csrf_field() }}

              <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="material-icons">merge_type</i></span>
                  <select class="form-control" name="">
                      <option value="option">Appointment Type</option>
                  </select>
              </div>

              <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="material-icons">home</i></span>
                  <select class="form-control" name="">
                      <option value="option">Select Department</option>
                  </select>
              </div>

              <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="material-icons">person</i></span>
                  <select class="form-control" name="">
                      <option value="option">Select Lecturer</option>
                  </select>
              </div>

              <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="material-icons">person</i></span>
                  <input type="text" class="form-control" placeholder="Please provide your name" aria-describedby="basic-addon1">
              </div>

              <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><i class="material-icons">person</i></span>
                  <select class="form-control" name="">
                      <option value="option">Purpose for appoinment</option>
                  </select>
              </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>

    </div>

  </div>
</div>
