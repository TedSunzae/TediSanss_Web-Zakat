<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
<div class="pull-left image">
    <img src="<?= base_url() ?>/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

</div>

           <?php
                $session = session();
                $user_name = $session->get('user_name');
            ?>
            <div class="pull-left info">
                <p><?= $user_name ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <style>
    .btn-login, .btn-register {
        display: inline-block;
        padding: 6px 12px;
        border: none;
        border-radius: 3px;
        background-color: #3c8dbc;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.2s ease;
        margin: 0 10px;
    }

    .btn-login:hover, .btn-register:hover {
        background-color: #367fa9;
    }
    
    .btn-container {
        text-align: center;
    }
</style>

<div class="btn-container">
    <a href="login" class="btn-login"><i class="fa fa-sign-in"></i> Login</a>
    <a href="register" class="btn-register"><i class="fa fa-user-plus"></i> Register</a>
</div>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
       
            <ul class="sidebar-menu" data-widget="tree">
            <li class="header">OTHER NAVIGATION</li>
            
            <!-- Tombol Beranda Zakat Fitrah -->
            <?php if (!empty($user_name)) { ?>
                <li>
                    <a href="data">
                        <i class="fa fa-home"></i> <span>Beranda Zakat </span>
                    </a>
                </li>
            <?php } ?>
                        
            <!-- Tombol Tambah Data Zakat Fitrah -->
            <?php if (!empty($user_name)) { ?>
                <li>
                    <a href="<?= base_url('data/insertDataFitrah/') ?>">
                        <i class="fa fa-plus"></i> <span>Tambah Data Zakat</span>
                    </a>
                </li>
            <?php } ?>
                  
            <!-- Tombol Print Data Zakat Fitrah -->
            <?php if (!empty($user_name)) { ?>
                <li>
                    <a href="<?= base_url('report') ?>">
                        <i class="fa fa-print"></i> <span>Print Data</span>
                    </a>
                </li>
            <?php } ?>  
 
                    <!-- Menu keluar (logout) -->
        <?php if (!empty($user_name)) { ?>
            <li>
                <?php
                // Menghapus nilai dari variabel 'user_name' pada session
                $session->remove('user_name');
                ?>
                <a href="<?= base_url('login') ?>">
                    <i class="fa fa-sign-out"></i> <span>Keluar</span>
                </a>
            </li>
        <?php } ?>
    </ul>
    <?php 
    // Cek apakah pengguna sudah login atau belum
    if(empty($user_name)) {
        echo '<div class="alert alert-warning">Silakan login terlebih dahulu untuk dapat menggunakan fitur OTHER NAVIGATION.</div>';
    } 
?>

</section>

</section>
<!-- /.sidebar -->
</aside>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>

    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Your Page Content Here -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
                   
