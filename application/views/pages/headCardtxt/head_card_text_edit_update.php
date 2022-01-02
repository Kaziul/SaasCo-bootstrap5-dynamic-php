<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">
       
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Title</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('title_head', $title_head); ?>" id="title_head" name="title_head" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("title_head") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('desc_head', $desc_head); ?>" id="desc_head" name="desc_head" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("desc_head") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> button Text</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('btn_txt_head', $btn_txt_head); ?>" id="btn_txt_head" name="btn_txt_head" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("btn_txt_head") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> button Link</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('btn_link', $btn_link); ?>" id="btn_link" name="btn_link" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("btn_link") ?></span>

            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Card Text </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('card_head', $card_head); ?>" id="card_head" name="card_head" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("card_head") ?></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                
                <label class="control-label"><strong>Image</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="img_head" name="img_head"><br>
                <?php
                if (!empty($img_head)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $img_head; ?>" alt=""><br>
                <?php    }
                ?>
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