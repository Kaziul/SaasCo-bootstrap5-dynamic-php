<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">


        <?php if($customers_text1) {?>
            <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Customers Title </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('customers_text1', $customers_text1); ?>" id="customers_text1" name="customers_text1" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("customers_text1") ?></span>
            </div>
        </div>
            <?php } ?>
        <?php if($customers_text2) {?>

        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Total Numbers </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('customers_text2', $customers_text2); ?>" id="customers_text2" name="customers_text2" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("customers_text2") ?></span>
            </div>
        </div>
        <?php } ?>
        <?php if($customers_text3) {?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Customers Title last</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('customers_text3', $customers_text3); ?>" id="customers_text3" name="customers_text3" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("customers_text3") ?></span>
            </div>
        </div>
        <?php } ?>

        <div class="control-group">
            <div class="controls">
                <?php
                if (!empty($customers_img1)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $customers_img1; ?>" alt=""><br>
                <?php    }
                ?>
                <label class="control-label"><strong>Image 1</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="customers_img1" name="customers_img1"><br>

                <!-- <span class="required text-danger"><?php echo form_error("img_head") ?></span> -->
            </div>
        </div>
       

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>