<div class="modal fade loginform" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Login</h4>
      </div>

      <div class="modal-body customercare-body">

          <form class="form-group" action="/student/login" method="post">

                {{ Csrf_field() }}

              <div class="form-group">
                  <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              </div>

              <div class="form-group">
                  <label for="password" class="col-md-4 control-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" required>
              </div>

              <div class="form-group">

                <div class="text-center">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
              </div>

              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary">
                          Login
                      </button>

                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          Forgot Your Password?
                      </a>
                  </div>
              </div>

          </form>
      </div>

    </div>

  </div>
</div>
