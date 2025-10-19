



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8" />
        <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        App favicon
        <link rel="shortcut icon" href="<?= ASET;?>/images/favicon.ico"> -->

    <meta charset="utf-8" />
    <title>Unikit - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= ASET;?>/images/favicon.ico">



    <!-- App css -->
    <link href="<?= ASET;?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= ASET;?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= ASET;?>/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-menu -->
    <?php include("aplikasi/views/espresso/kiri.php")?>
    
    <?php include("aplikasi/views/espresso/atas.php")?>

    <?php include("aplikasi/views/espresso/kanan.php")?>
    
    <?php include("aplikasi/views/espresso/bawah.php")?>
    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                
            
                <?= $content ?? '' ?>

            </div><!-- container -->

            

        
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    <!-- App js -->
    <script src="<?= ASET;?>/js/app.js"></script>

</body>
<!--end body-->

</html>