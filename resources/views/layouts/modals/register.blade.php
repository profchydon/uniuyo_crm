<div class="modal fade registerform" id="registerform" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">student Registeration</h4>
      </div>

      <div class="modal-body customercare-body">

          <form class="form-group" action="/student/register" method="post">

                {{ Csrf_field() }}

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstName" class="control-label">First Name</label>
                      <input id="firstName" type="text" class="form-control" name="firstName" required autofocus>
                  </div>

                  <div class="form-group">
                      <label for="lastName" class="control-label">Last Name</label>
                      <input id="lastName" type="text" class="form-control" name="lastName" required autofocus>
                  </div>

                  <div class="form-group">
                      <label for="regNo" class="control-label">Registration Number</label>
                      <input id="regNo" type="text" class="form-control" name="regNo" required>
                  </div>

                  <div class="form-group">
                      <label for="password" class="control-label">Password</label>
                      <input id="password" type="password" class="form-control" name="password" required>
                  </div>

                  <div class="form-group">
                      <label for="department" class="control-label">Department</label>
                      <input id="department" type="text" class="form-control" name="department" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="email" class="control-label">E-Mail Address</label>
                      <input id="email" type="email" class="form-control" name="email" required autofocus>
                  </div>


                  <div class="form-group">
                      <label for="mobile" class="control-label">Mobile</label>
                      <input id="mobile" type="text" class="form-control" name="mobile" required autofocus>
                  </div>

                  <div class="form-group">
                      <label for="parentName" class="control-label">Parent Name</label>
                      <input id="parentName" type="text" class="form-control" name="parentName" required autofocus>
                  </div>

                  <div class="form-group">
                      <label for="parentMobile" class="control-label">Parent Mobile</label>
                      <input id="parentMobile" type="text" class="form-control" name="parentMobile" required autofocus>
                  </div>

                  <div class="form-group">
                      <label for="parentEmail" class="control-label">Parent Email</label>
                      <input id="parentEmail" type="email" class="form-control" name="parentEmail" required>
                  </div>

                </div>

                <div class="container">

                    <div class="row">



                    </div>

                </div>


              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block">
                          Register
                      </button>
                  </div>
              </div>

          </form>
      </div>

      <div class="modal-footer">

        <div class="col-md-6">
            <a href="#" class="sub-a" data-toggle="modal" data-target=".lecturerregisterform">Register as a Lecturer</a>
        </div>

        <div class="col-md-6 text-left">
            <a href="#" class="sub-a" data-toggle="modal" data-target=".stakeholderregisterform">Register as a Stakeholder</a>
        </div>

      </div>

    </div>

  </div>
</div>
