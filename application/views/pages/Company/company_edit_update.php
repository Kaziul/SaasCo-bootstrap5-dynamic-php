<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">
        <?php if(!empty($Company_title)) {?>
            <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Country</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('Company_title', $Company_title); ?>" id="Company_title" name="Company_title" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("Company_title") ?></span>
            </div>
        </div>
            <?php } ?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Company Menu</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('Company_text1', $Company_text1); ?>" id="Company_text1" name="Company_text1" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("Company_text1") ?></span>
            </div>
        </div>
        <br>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>