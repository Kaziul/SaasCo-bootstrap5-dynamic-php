<div class="container-fluid px-4">
    <h1 class="mt-4">User Form</h1> <br><br>
    <form role="form" action="" method="POST" data-parsley-validate="" novalidate="" id="userform" enctype="multipart/form-data" action="" method="POST" class="form-horizontal form-groups-bordered">
        <input type="hidden" id="username_flag" value="">
        <input type="hidden" id="user_id" name="user_id" value="">
        <input type="hidden" name="account_details_id" value="">
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Title </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('newsCardsCol_title', $newsCardsCol_title); ?>" id="newsCardsCol_title" name="newsCardsCol_title" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("newsCardsCol_title") ?></span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label"><strong>Date </strong><span class="text-danger">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="input-sm form-control " value="<?php echo set_value('newsCardsCol_date', $newsCardsCol_date); ?>" id="newsCardsCol_date" name="newsCardsCol_date" placeholder="e.g Enter your  text ..">
                <span class="required text-danger"><?php echo form_error("newsCardsCol_date") ?></span>

            </div>
        </div>

        <br>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <br><br>
        </div>
    </form>
</div>