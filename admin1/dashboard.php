<?php include '../include/header.php'; ?>
<?php include '../include/admin_navbar.php'; ?>
        <!-- session -->
         
    <?php
        //     session_start();

        //  if(!isset($_SESSION['admin'])){
        //         header("Location: login.php");
        //         exit;
        //     };
         $conn=new mysqli("localhost","root","","url_shortener");
        $totalUrls = $conn->query("SELECT COUNT(*) AS total FROM url");
        $total = $totalUrls->fetch_assoc();

        $todayUrls = $conn->query(" SELECT COUNT(*) AS today FROM url WHERE DATE(created_at)=CURDATE()");
        $today = $todayUrls->fetch_assoc();
    ?>

    <div class="container py-5">

        <h2 class="fw-bold mb-4">
            Dashboard
        </h2>

        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card dashboard-card bg-primary p-4">
                    <h5>Total URLs</h5>
                    <h2><?php echo $total['total']; ?></h2>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card dashboard-card bg-success p-4">
                    <h5>Today's URLs</h5>
                    <h2><?php echo $today['today']; ?></h2>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card dashboard-card bg-warning p-4">
                    <h5>Redirects</h5>
                    <h2>25</h2>
                </div>
            </div>
            <div class="row mt-4">

           <div class="col-md-6 mb-3">
               <a href="login.php" class="btn btn-primary w-100 p-3" style="margin-left:300px;">
                <i class="bi bi-link-45deg"></i>
                Manage URLs
               </a>
            </div>

        </div>
        <!-- Internship Card -->
        <div class="card border-0 bg-primary text-white">

            <div class="card-body text-center p-5">

                <i class="bi bi-award-fill fs-1"></i>

                <h3 class="fw-bold mt-3">
                    NexLink Smart URL Shortener Project
                </h3>

                <p class="mb-0">
                    This project is being developed to demonstrate frontend & backend
                development skills.
                </p>

            </div>

        </div>

    </div>

<?php include '../include/footer.php'; ?>
