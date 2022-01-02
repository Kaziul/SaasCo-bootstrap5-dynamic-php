<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br>
    <p>
        <?php
        $messeage = $this->session->userdata('messeage');
        if ($messeage) {
            echo  "<span class='alert alert-danger'>$messeage</span>";
            $this->session->unset_userdata('messeage');
        }
        ?>
    </p><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Title</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_title', $planItems_title); ?>" id="planItems_title" name="planItems_title" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("planItems_title") ?></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <?php
                if (!empty($planItems_img)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $planItems_img; ?>" alt=""><br>
                <?php    }
                ?>

                <label class="control-label"><strong>Image</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="planItems_img" name="planItems_img"><br>
                <span class="required text-danger"><?php echo form_error("planItems_img") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Amount </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_amount', $planItems_amount); ?>" id="planItems_amount" name="planItems_amount" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("planItems_amount") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_desc', $planItems_desc); ?>" id="planItems_desc" name="planItems_desc" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("planItems_desc") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description 1</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_desc1', $planItems_desc1); ?>" id="planItems_desc1" name="planItems_desc1" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("planItems_desc1") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description 2</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_desc2', $planItems_desc2); ?>" id="planItems_desc2" name="planItems_desc2" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("planItems_desc2") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description 3</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_desc3', $planItems_desc3); ?>" id="planItems_desc3" name="planItems_desc3" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("planItems_desc3") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> Button Text</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_btnTxt', $planItems_btnTxt); ?>" id="planItems_btnTxt" name="planItems_btnTxt" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("planItems_btnTxt") ?></span>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Icon </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_btnIcon', $planItems_btnIcon); ?>" id="planItems_btnIcon" name="planItems_btnIcon" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("planItems_btnIcon") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Link </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('planItems_btnLink', $planItems_btnLink); ?>" id="planItems_btnLink" name="planItems_btnLink" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("planItems_btnLink") ?></span>
            </div>
        </div>

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>