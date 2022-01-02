foreach ($menus as $valus){
                   foreach($valus->submenu as $value){
                       echo $value->menuName;
                   }
                }




                <?php foreach ($menus as $valu) {
                    // print("<pre>".print_r($valu,true)."</pre>"); exit;
                    // $submenu = $this->db->where('parentId', $valu['id'])->get('menu')->result();

                ?>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav  mb-2 mb-lg-0 mt-2 ">
                            <li class="nav-item">
                                <a class="nav-link " href="#"><?php echo  $valu->menuName; ?></a>
                            </li>
                            <?php if (!empty($valu->submenu)) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo  $valu['menuName']; ?>
                                    </a>
                                    <?php  //print("<pre>".print_r($submenus,true)."</pre>");
                                    ?>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php foreach ($valu->submenu as $value) { ?>
                                            <li><a class="dropdown-item" href="#"><?php echo $value->menuName ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>


                        </ul>
                        <!-- <a href="<?php echo  $valu['btn_link']; ?>"><button type="button" class="btn btn-color-nav  "><?php echo  $valu['signin']; ?>
                                <span class="grater "><i class="ml-3 <?php echo  $valu['icon']; ?> "></i></span></button></a> -->
                    </div>
                <?php } ?>
                <!-- </div> -->