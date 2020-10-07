<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@600&display=swap" rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">



        <title>Admin Section - Add Users</title>
    </head>

    <body>
        
       <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
       


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add User</a>
                    <a href="index.php" class="btn btn-big">Manage Users</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Add User</h2>

                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                    
                    <form action="create.php" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                        </div>
                        <div>
                          <label>Email</label>
                          <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                      </div> 
                      <div>
                          <label>Password</label>
                          <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                      </div>   
                      <div>
                          <label>Password Confirmation</label>
                          <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                      </div>        
                      <div>
                        <?php if (isset($admin) && $admin == 1): ?>
                        <label>
                             <input type="checkbox" name="admin">
                             Admin
                        </label>
                        <?php else: ?>

                        <?php endif; ?>

                      </div>

                        <div>
                            <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->


        </div>
        <!-- // Page Wrapper -->
        

        <!-- JQuary -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Ckeditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

        <!-- Custem Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>
</html>