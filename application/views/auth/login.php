


<div class="row" style="margin-top: 10%;">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="well bs-component">
      <div class="bs-component">
        <?php echo form_open("auth/login");?>
        <div class="form-group label-floating is-empty">
          <label class="control-label" for="focusedInput1">Username</label>
          <input class="form-control" autocomplete="off" name="identity" value="" id="identity">
        </div>

        <div class="form-group label-floating is-empty">
          <label class="control-label" for="focusedInput1">Password</label>
          <input class="form-control" name="password" id="password" type="Password">
        </div>

        <button style="width: 100%;" type="submit" class="btn btn-primary">Login</button>
        <?php echo form_close();?>
        <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
          </div>
        </div>
      </div>
    </div>
  <div class="col-md-4"></div>


