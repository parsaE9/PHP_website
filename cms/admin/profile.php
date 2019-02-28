<?php include "includes/admin_header.php"; ?>

<?php
if(isset($_SESSION['username'])){
}

?>


    <div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    <h1 class="page-header">
                        Posts
                        <small>Subheading</small>
                    </h1>


                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="author">Firstname</label>
                            <input type="text" value="<?php echo $user_firstname ?>" class="form-control" name="user_firstname">
                        </div>

                        <div class="form-group">
                            <label for="post_status">Lastname</label>
                            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                        </div>

                        <div class="form-group">
                            <select name="user_role" id="">
                                <?php
                                if ($user_role == 'admin'){
                                    echo "<option value='admin'>Admin</option>";
                                    echo "<option value='subscriber'>Subscriber</option>";
                                }
                                else{
                                    echo "<option value='subscriber'>Subscriber</option>";
                                    echo "<option value='admin'>Admin</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!--    <div class="form-group">
                                <label for="post_image">Post Image</label>
                                <input type="file" name="image">
                            </div>
                        -->
                        <div class="form-group">
                            <label for="post_tags">Username</label>
                            <input type="text" value="<?php echo $username ?>" class="form-control" name="username">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Password</label>
                            <input type="password" value="<?php echo $user_password ?>" class="form-control" name="user_password">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Email</label>
                            <input type="email" value="<?php echo $user_email ?>" class="form-control" name="user_email">
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="edit_user" value="Update User">
                        </div>

                    </form>



                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>