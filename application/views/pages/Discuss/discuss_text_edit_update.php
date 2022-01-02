<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">


        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Icon</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_icon', $discuse_icon); ?>" id="discuse_icon" name="discuse_icon" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("discuse_icon") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Icon Text </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_iconTxt', $discuse_iconTxt); ?>" id="discuse_iconTxt" name="discuse_iconTxt" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("discuse_iconTxt") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Number</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_num', $discuse_num); ?>" id="discuse_num" name="discuse_num" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("discuse_num") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> Title </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_title', $discuse_title); ?>" id="discuse_title" name="discuse_title" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("discuse_title") ?></span>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Text </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_btn', $discuse_btn); ?>" id="discuse_btn" name="discuse_btn" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("discuse_btn") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Icon </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_btnicon', $discuse_btnicon); ?>" id="discuse_btnicon" name="discuse_btnicon" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("discuse_btnicon") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Link </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('discuse_link', $discuse_link); ?>" id="discuse_link" name="discuse_link" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("discuse_link") ?></span>
            </div>
        </div>

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>