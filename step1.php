<div id="sf1" class="frm">
    <fieldset>
        <legend>PERSONAL INFORMATION</legend>
        <div class="form-group">
            <label class="col-lg-4 control-label" for="user_name">Your Name: </label>
            <div class="col-lg-8">
                <input type="text" placeholder="Your Name" id="user_name" name="user_name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label" for="birth">Date of birth: </label>
            <div class="col-lg-8">
                <div class='input-group date' id='datetimepicker1'>
                <input type="text" placeholder="Date of birth" id="birth" name="birth" class="form-control">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label" for="email">Email: </label>
            <div class="col-lg-8">
                <input type="text" placeholder="Email" id="email" name="email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label" for="phone">Phone: </label>
            <div class="col-lg-8">
                <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-4 control-label" for="skype">Skype: </label>
            <div class="col-lg-8">
                <input type="text" placeholder="Skype" id="skype" name="skype" class="form-control">
            </div>
        </div>
        <legend>EDUCATION</legend>
        <div class="form-group">
            <label class="col-lg-4 control-label" for="education">Education </label>
            <div class="col-lg-8">
                <div class="add-education">
                    <div class="entry input-group col-xs-8">
                        <input type="text" placeholder="School, university, certificates, etc..." id="education" name="education[]" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button" target-id="add-education">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-primary open1" type="button">Next <span class="fa fa-arrow-right"></span></button>
            </div>
        </div>
    </fieldset>
</div>