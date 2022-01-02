<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
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
            <label class="col-sm-3 control-label"><strong>Menu Name</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('menuName', $menuName); ?>" id="menuName" name="menuName" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("menuName") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Parent Id</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('parentId', $parentId); ?>" id="parentId" name="parentId" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("parentId") ?></span>

            </div>
        </div>
        <br>
        <!-- <div class="form-group">
            <label class="col-sm-3 control-label"><strong> Active</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('active', $active); ?>" id="active" name="active" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("active") ?></span>

            </div>
        </div> -->
       <?php if(!empty($logo)){?>
            <div class="control-group">
            <div class="controls">
                <?php
                if (!empty($logo)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $logo; ?>" alt=""><br>
                <?php    }
                ?>
                <label class="control-label"><strong>Logo</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge " value="" id="logo" name="logo">
                <span class="required text-danger"><?php echo form_error("logo") ?></span>
            </div>
            </div>

     <?php   } ?>
        
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Page Link</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('page_link', $page_link); ?>" id="page_link" name="page_link" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("page_link") ?></span>
            </div>
        </div>

        <?php if(!empty($btn_txt)){?>
            <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Button Text </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('btn_txt', $btn_txt); ?>" id="btn_txt" name="btn_txt" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("btn_txt") ?></span>
            </div>
        </div>
        <?php  } ?>
        <?php if(!empty($btn_icon)){?>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> Button Icons </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('btn_icon', $btn_icon); ?>" id="btn_icon" name="btn_icon" placeholder="e.g Enter your text..">
                <span class="required text-danger"><?php echo form_error("btn_icon") ?></span>
            </div>
        </div>
        <?php  } ?>
        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Add</button>
            <br><br>
        </div>
    </form>
</div>