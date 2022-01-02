<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">


       
        <?php if(!empty($addressFooter_logo)) {?>
            <div class="control-group">
            <div class="controls">
                <?php
                if (!empty($addressFooter_logo)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $addressFooter_logo; ?>" alt=""><br>
                <?php    }
                ?>
                <label class="control-label"><strong>Image</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="addressFooter_logo" name="addressFooter_logo"><br>

                <!-- <span class="required text-danger"><?php echo form_error("img_head") ?></span> -->
            </div>
        </div>
            <?php } ?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Address</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('addressFooter_country', $addressFooter_country); ?>" id="addressFooter_country" name="addressFooter_country" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("addressFooter_country") ?></span>

            </div>
        </div>
    
        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>