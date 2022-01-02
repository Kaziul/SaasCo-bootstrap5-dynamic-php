<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">


        <?php if(!empty($askedQuestion_title)){ ?>
            <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Title </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('askedQuestion_title', $askedQuestion_title); ?>" id="askedQuestion_title" name="askedQuestion_title" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("askedQuestion_title") ?></span>
            </div>
        </div>
        
            <?php } ?>
        <?php if(!empty($askedQuestion_desc)){ ?>

        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('askedQuestion_desc', $askedQuestion_desc); ?>" id="askedQuestion_desc" name="askedQuestion_desc" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("askedQuestion_desc") ?></span>

            </div>
        </div>
        <?php } ?>
        <?php if(!empty($askedQuestion_btnTxt)){ ?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Text </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('askedQuestion_btnTxt', $askedQuestion_btnTxt); ?>" id="askedQuestion_btnTxt" name="askedQuestion_btnTxt" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("askedQuestion_btnTxt") ?></span>

            </div>
        </div>
        <?php } ?>
        <?php if(!empty($askedQuestion_btnLink)){ ?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Link </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('askedQuestion_btnLink', $askedQuestion_btnLink); ?>" id="askedQuestion_btnLink" name="askedQuestion_btnLink" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("askedQuestion_btnLink") ?></span>

            </div>
        </div>
        <?php } ?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Collapse Title </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('askedQuestion_col', $askedQuestion_col); ?>" id="askedQuestion_col" name="askedQuestion_col" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("askedQuestion_col") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Collapse Text</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('askedQuestion_colTxt', $askedQuestion_colTxt); ?>" id="askedQuestion_colTxt" name="askedQuestion_colTxt" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("askedQuestion_colTxt") ?></span>

            </div>
        </div>

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>