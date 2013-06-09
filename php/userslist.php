<?php
    $usersSql = "SELECT id, user_name, user_type, user_status, password, timestamp FROM users  " ;
    $usersItem = db_execute($dbh, $usersSql);
    $userDetails = $usersItem->fetchAll(PDO::FETCH_ASSOC);
    //print_r($userDetails);
 ?>
    
<header class="head">
                <div class="search-bar">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="search-bar-inner">
<!--                                <a id="menu-toggle" href="#menu" data-toggle="collapse" class="accordion-toggle btn btn-inverse visible-phone" rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                                    <i class="icon-sort"></i>
                                </a>

                                <form class="main-search">
                                    <input class="input-block-level" type="text" placeholder="Live search...">
                                    <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                                    </button>
                                </form>-->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ."main-bar -->
                <div class="main-bar">
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span12">
                                <h3><i class="icon-edit"></i> Users List</h3>
                            </div>
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.main-bar -->
            </header>
<div id="content" class="">
                <!-- .outer -->
                <div class="container-fluid outer">
                    <div class="row-fluid">
                        <!-- .inner -->
                        <div class="span12 inner">
                            <!--BEGIN INPUT TEXT FIELDS-->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="box">
                                        <header>
                                            <div class="icons"><i class="icon-list-alt"></i></div>
                                            <h5>Users List</h5>
                                        </header>
                                        <div id="collapse4" class="body">
                                            <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Sl No</th>
                                                        <th>Username</th>
                                                        <th>Status</th>
                                                        <th>User Type</th>
                                                        <th>Created On</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $i = 1;
                                                    foreach($userDetails as $user) { 
                                                        $userName = $user['user_name'];
                                                        $userTypeCode = $user['user_type'];
                                                        $userType = "";
                                                        if($userTypeCode == "1") {
                                                            $userType = "Super Admin";
                                                        } else if($userTypeCode == "2") {
                                                            $userType = "User";
                                                        }
                                                        $userStatusCode = $user['user_status'];
                                                        $userStatus = "";
                                                        if($userStatusCode == "1") {
                                                            $userStatus = "Active";
                                                        } else if($userStatusCode == "2") {
                                                            $userStatus = "Inactive";
                                                        }
                                                        $userTimestamp = !empty($user['timestamp']) ? date("Y M d", $user['timestamp']): '';
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $userName; ?></td>
                                                        <td>
                                                            <?php echo $userStatus; ?>
                                                        </td>
                                                        <td><?php echo $userType; ?></td>
                                                        <td><?php echo $userTimestamp; ?></td>
                                                    </tr>
                                                    <?php 
                                                    $i++;
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.outer -->
            </div>

                
                <script type="text/javascript">
	  $(document).ready(function(){
			
		});
	  </script>