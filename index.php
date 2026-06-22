<?php include 'include/header.php'; ?>
<?php include 'include/navbar.php'; ?>
<?php

$conn = new mysqli("localhost", "root", "", "url_shortener");

$url = $_POST['url'] ?? "";

if($url != ''){

    // Random characters
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    $shortCode = "";

    // 6 character short code generate
    for($i = 1; $i <= 6; $i++){

        $shortCode .= $chars[rand(0, strlen($chars) - 1)];

    }
    //   echo $shortCode;
    // Database me save
    $q = "INSERT INTO url (long_url, short_code)
          VALUE ('$url', '$shortCode')";
          $conn->query($q);
 };
      ?>

<!-- Hero Section -->
 <section class="hero-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card card-custom mt-5 p-4 shadow border-0">

                    <div class="text-center mb-4">

                        <i class="bi bi-link-45deg text-primary" style="font-size: 60px;"></i>

                        <h2 class="fw-bold mt-3">
                            URL Shortener
                        </h2>

                        <p class="text-muted">
                            Convert long URLs into short and shareable links instantly.
                        </p>

                    </div>

                    <form action="" method="POST">

                        <div class="mb-3">
                            <input
                                type="url"
                                name="url"
                                class="form-control form-control-lg rounded-3"
                                placeholder="Paste your URL here..."
                                required>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg rounded-3" type="submit">
                                <i class="bi bi-scissors me-2"></i>
                                Generate Short URL
                            </button>
                        </div>

                    </form>

                    <?php if(isset($shortCode) && $shortCode != ''): ?>

                    <div class="alert alert-success mt-4 text-center">

                        <h5 class="mb-3">
                            ✅ URL Generated Successfully
                        </h5>

                        <p class="mb-0">
                            Your Short URL:
                        </p>
                            <a href="redirect.php?code=<?php echo $shortCode; ?>"
                            class="text-decoration-none fw-bold text-primary fs-5"
                            target="_blank">

                                <i class="bi bi-link-45deg"></i>
                                <?php echo $shortCode; ?>

                            </a>

                    </div>

                     <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
</section>


                </body>
            </html>