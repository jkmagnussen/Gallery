    <div class="container-fluid">

        <!-- Page Headingghhhhggg -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin
                    <small>Dashboard</small>
                </h1>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $session->count; ?> </div>
                                        <div>New Views</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">

                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Photo::count_all(); ?></div>
                                        <div>Photos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="photos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Photos in Gallery</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo User::count_all(); ?>

                                        </div>

                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Comment::count_all(); ?></div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div>
                <!--First Row-->

                <div class="row">

                    <div id="piechart" style="width: 900px; height: 500px;"></div>

                </div>

                <<<<<<< HEAD // $user=new User(); new class instance // $user->username = "Modern";
                    // $user->password = "PHP";
                    // $user->first_name = "PHP book";
                    // $user->last_name = "OREILLY";

                    // $user->create();

                    // $user = User::find_user_by_id(2);
                    // $user->last_name = "Magnussen";

                    // $user->update();

                    // $user = User::find_user_by_id(6);
                    // $user->delete();

                    // $user = User::find_user_by_id(2);

                    // $user->username = "JKMagnussen";
                    // $user->save();

                    // $user = new User();

                    // $user->username = "BobRoss";
                    // $user->save();

                    // $photos = Photo::find_all();

                    // foreach ($photos as $photo){
                    // echo $photo->title;
                    // }

                    // $photo = new Photo();

                    // $photo->title = "Example";
                    // $photo->description = "Example1";
                    // $photo->filename = "image.jpg";
                    // $photo->type = "image";
                    // $photo->size = "13";

                    // $photo->create();

                    // echo SITE_ROOT . "<br>";




                    ?>

                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                    =======
                    >>>>>>> 3f0e9f49bdcd226df49997052296eb1746130ef3
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->