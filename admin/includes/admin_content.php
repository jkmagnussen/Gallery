    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin
                    <small>Subheading</small>
                </h1>

                <?php 





                // $user = new User();

                // $user->username = "Maxweb"; 
                // $user->password = "123"; 
                // $user->first_name = "Maxweb"; 
                // $user->last_name = "Solutions"; 

                // $user->create();

                // $user = User::find_user_by_id(4);
                // $user->last_name = "Williams";

                // $user->update();

                $user = User::find_user_by_id(4);
                $user->delete();

                ?>


                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->