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
                
                <label class="control-label"><strong>Image</strong><span class="text-danger">*</span></label><br>
                <input type="file" class="input-xlarge mb-3" value="" id="membersDsc_img" name="membersDsc_img"><br>
                <?php
                if (!empty($membersDsc_img)) { ?>
                    <img style="width: 240px; height:120px;" src="<?php echo base_url('back-end/uploads/') . $membersDsc_img; ?>" alt=""><br>
                <?php    }
                ?>
                <!-- <span class="required text-danger"><?php echo form_error("img_head") ?></span> -->
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Title</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('membersDsc_name', $membersDsc_name); ?>" id="membersDsc_name" name="membersDsc_name" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("membersDsc_name") ?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('membersDsc_about', $membersDsc_about); ?>" id="membersDsc_about" name="membersDsc_about" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("membersDsc_about") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Description Text Color</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <select name="membersDsc_aboutColor" class="form-control select_box select2-hidden-accessible" style="width: 100%" data-parsley-id="18" tabindex="-1" aria-hidden="true">
                    <option value=" ">Please Select </option>
                    <?php
                    $data = $this->db->where('membersDsc_aboutColor', 0)->order_by('id', 'ASC')->get('membersdsc')->result();
                    // print("<pre>".print_r($submenu,true)."</pre>"); exit;
                    if (!empty($data)) {
                        foreach ($data as $valu) {
                    ?>
                            <option value="<?php echo $valu->membersDsc_aboutColor; ?>" ><?php echo $valu->membersDsc_aboutColor; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            

            </div>
        </div>
        
        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>