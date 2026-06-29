<?php include __DIR__ . '/../include/header.php'; ?>
<?php include __DIR__ . '/../include/admin_navbar.php'; ?>
   <!-- session -->
        <?php
         session_start();

        if(!isset($_SESSION['admin'])){
            header("Location: login.php");
            exit;
        };
         ?>
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">
            Manage URLs
        </h2>

        <!-- <a href="dashboard.php" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i>
            Dashboard
        </a> -->
    </div>

    <!-- Search Box -->
    <!-- <div class="card card-custom mb-4">
        <div class="card-body">

            <div class="input-group mt-3">
                <span class="input-group-text">
                    <i class="bi bi-search"></i>
                </span>

                <input type="text"
                       class="form-control"
                       placeholder="Search URLs...">
            </div>

        </div>
    </div> -->

    <!-- URLs Table -->
    <div class="card card-custom">

        <div class="card-body">
          <button class="btn btn-sm mb-2 btn-outline-primary"><a href="../index.php">Add+</a></button>
            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>
                            <th>ID</th>
                            <th>Long URL</th>
                            <th>Short URL</th>
                            <th>Actions</th>
                        </tr>

                    </thead>
                         <?php
                                $conn=new mysqli("localhost", "root", "", "url_shortener");
                                $q="select * from url order by id desc";
                                $result=$conn->query($q);
                                $count="";
                                ?>
                    <tbody>
                          <?php
                          $count=0;
                           foreach($result as $row){
                            $count++;
                            ?>
                        <tr>
                            <td><?php echo $count?></td>

                            <td><?php echo $row['long_url']?></td>

                            <td><a href="../redirect.php?code=<?php echo $row['short_code']; ?>"
                                  target="_blank">

                                    <?php echo $row['short_code']; ?>

                                </a> 
                            </td>

                            <td>
                                 <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    <a class="text-danger" href="../actions/delete.php?id=<?php echo $row['id'];?>">Delete</a>
                                </button>

                            </td>
                       
                        </tr>
                              <?php }; ?>
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php include __DIR__ . '/../include/footer.php'; ?>
