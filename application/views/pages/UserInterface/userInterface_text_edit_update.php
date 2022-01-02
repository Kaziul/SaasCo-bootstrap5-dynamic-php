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

        <div class="control-group">
            <div class="controls">
                <?php
                if (!empty($userInterface_img)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $userInterface_img; ?>" alt=""><br>
                <?php    }
                ?>

                <label class="control-label"><strong>Image</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="userInterface_img" name="userInterface_img"><br>

                <!-- <span class="required text-danger"><?php echo form_error("img_head") ?></span> -->
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Title</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('userInterface_title', $userInterface_title); ?>" id="userInterface_title" name="userInterface_title" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("userInterface_title") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description 1 </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('userInterface_desc1', $userInterface_desc1); ?>" id="userInterface_desc1" name="userInterface_desc1" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("userInterface_desc1") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description 2</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('userInterface_desc2', $userInterface_desc2); ?>" id="userInterface_desc2" name="userInterface_desc2" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("userInterface_desc2") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> Description 3</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('userInterface_desc3', $userInterface_desc3); ?>" id="userInterface_desc3" name="userInterface_desc3" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("userInterface_desc3") ?></span>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('userInterface_btn', $userInterface_btn); ?>" id="userInterface_btn" name="userInterface_btn" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("userInterface_btn") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Link </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('userInterface_btnLink', $userInterface_btnLink); ?>" id="userInterface_btnLink" name="userInterface_btnLink" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("userInterface_btnLink") ?></span>
            </div>
        </div>

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>