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


    
        <?php if(!empty($services_title)) {?>
            <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Country</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('services_title', $services_title); ?>" id="services_title" name="services_title" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("services_title") ?></span>

            </div>
        </div>
            <?php } ?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Text 1</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('services_text1', $services_text1); ?>" id="services_text1" name="services_text1" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("services_text1") ?></span>

            </div>
        </div>
        
        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>