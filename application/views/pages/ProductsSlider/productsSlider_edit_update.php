<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">


        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('productsSlider_desc', $productsSlider_desc); ?>" id="productsSlider_desc" name="productsSlider_desc" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("productsSlider_desc") ?></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <?php
                if (!empty($productsSlider_img)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $productsSlider_img; ?>" alt=""><br>
                <?php    }
                ?>
                <label class="control-label"><strong>Image</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="productsSlider_img" name="productsSlider_img"><br>

                <!-- <span class="required text-danger"><?php echo form_error("img_head") ?></span> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Name </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('productsSlider_name', $productsSlider_name); ?>" id="productsSlider_name" name="productsSlider_name" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("productsSlider_name") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Position </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('productsSlider_Dev', $productsSlider_Dev); ?>" id="productsSlider_Dev" name="productsSlider_Dev" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("productsSlider_Dev") ?></span>

            </div>
        </div>

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>