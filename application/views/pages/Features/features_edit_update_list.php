<div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Features List</li>
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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($all_features_info as $valu) {   ?>
                                            <tr>
                                                <td><?php echo $valu['features_title']; ?></td>
                                                <td><?php echo $valu['features_desc']; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>featuresEdit/<?php echo $valu['id'] ?>" class="btn btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="<?php echo base_url(); ?>featuresDelete/<?php echo $valu['id'] ?>" class="btn btn-danger" id="delete" Onclick="return ConfirmDelete();">
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