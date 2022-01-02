

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
                <select name="parentId" class="form-control select_box select2-hidden-accessible" style="width: 100%" data-parsley-id="18" tabindex="-1" aria-hidden="true">
                    <option value=" ">None</option>
                    <?php
                    $data = $this->db->where('parentId', 0)->order_by('id', 'ASC')->get('menu')->result();
                    // print("<pre>".print_r($submenu,true)."</pre>"); exit;
                    if (!empty($data)) {
                        foreach ($data as $valu) {
                    ?>
                            <option value="<?php echo $valu->id; ?>" ><?php echo $valu->menuName; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong> Page Link</strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('page_link', $page_link); ?>" id="page_link" name="page_link" placeholder="e.g Enter your text ..">
                <span class="required text-danger"><?php echo form_error("page_link") ?></span>

            </div>
        </div>
       
            

        
        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Add</button>
            <br><br>
        </div>
    </form>
</div>







      