<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">


    
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Text</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('mediaFooter_text', $mediaFooter_text); ?>" id="mediaFooter_text" name="mediaFooter_text" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("mediaFooter_text") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Text Color </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('mediaFooter_textColor', $mediaFooter_textColor); ?>" id="mediaFooter_textColor" name="mediaFooter_textColor" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("mediaFooter_textColor") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Icon 1</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('mediaFooter_icon1', $mediaFooter_icon1); ?>" id="mediaFooter_icon1" name="mediaFooter_icon1" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("mediaFooter_icon1") ?></span>

            </div>
        </div>
        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>