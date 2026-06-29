<?php
session_start();

$conn = new mysqli("localhost", "root", "", "url_shortener");

$error = "";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $result = $conn->query($q);

    if($result->num_rows > 0){

        $_SESSION['admin'] = $username;

        header("Location: urls.php");
        exit;

    }else{

        $error = "Invalid Username or Password!";
    }
};
?>

<?php include '../include/header.php'; ?>
<?php include '../include/admin_navbar.php'; ?>

<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="card card-custom shadow border-0 mt-5 p-4">

                    <div class="text-center mb-4">

                        <i class="bi bi-shield-lock-fill text-primary"
                           style="font-size:60px;"></i>

                        <h2 class="fw-bold mt-3">
                            Admin Login
                        </h2>

                        <p class="text-muted">
                            Please login to manage URLs
                        </p>

                    </div>

                    <?php if($error != ""): ?>

                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>

                    <?php endif; ?>

                    <form method="POST">

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Username
                            </label>

                            <input type="text"
                                   name="username"
                                   class="form-control form-control-lg"
                                   placeholder="Enter Username"
                                   required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Password
                            </label>

                            <input type="password"
                                   name="password"
                                   class="form-control form-control-lg"
                                   placeholder="Enter Password"
                                   required>

                        </div>

                        <div class="d-grid">

                            <button type="submit"
                                    name="login"
                                    class="btn btn-primary btn-lg">

                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Login

                            </button>

                        </div>

                    </form>

                    <div class="text-center mt-4">

                        <a href="../index.php"
                           class="text-decoration-none">
                            ← Back to Home
                        </a>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<?php include '../include/footer.php'; ?>