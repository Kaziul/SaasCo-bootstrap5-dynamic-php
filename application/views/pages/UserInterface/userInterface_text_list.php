<div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">User Interface List</li>
                        </ol>
                        <p>
                            <?php

                            $messeage = $this->session->userdata('messeage');
                            if ($messeage) {
                                echo  "<span class='alert alert-danger'>$messeage</span>";
                                $this->session->unset_userdata('messeage');
                            }
                            ?>
                        </p><br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description 1</th>
                                            <th>Description 2</th>
                                            <th>Description 3</th>
                                            <th>Button</th>
                                            <th>Button Link</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($all_userInterface_info as $valu) {   ?>

                                            <tr>

                                                <td><?php echo $valu['userInterface_img']; ?></td>
                                                <td><?php echo $valu['userInterface_title']; ?></td>
                                                <td><?php echo $valu['userInterface_desc1']; ?></td>
                                                <td><?php echo $valu['userInterface_desc2']; ?></td>
                                                <td><?php echo $valu['userInterface_desc3']; ?></td>
                                                <td><?php echo $valu['userInterface_btn']; ?></td>
                                                <td><?php echo $valu['userInterface_btnLink']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>userInterfaceEdit/<?php echo $valu['id'] ?>" class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="<?php echo base_url(); ?>userInterfaceDelete/<?php echo $valu['id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>

                                                </td>
                                            <?php    }
                                            ?>

                                            <script>
                                                function ConfirmDelete() {
                                                    var x = confirm("Are you sure you want to delete?");
                                                    if (x)
                                                        return true;
                                                    else
                                                        return false;
                                                }
                                            </script>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>