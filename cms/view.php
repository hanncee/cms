<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-dark p-4 w">
  <h1><a class="navbar-brand text-light fs-3    " href="#">
    <span class="text-info">ART</span>ICLE.COM
  </a></h1>
  <div>
    <h1 class="text-light">BLOG</h1>
    </div>
  <div class="menu">
                    <a href="logout.php" class="btn btn-info">Logout</a>
                </div>
</nav>
    <div class="dashboard d-flex justify-content-between mr-5 w-100 " >
        <div class="sidebar bg-dark vh-100">
        <div class="footer bg-dark p-4 mt-4 d-flex justify-content-between">
        <a href="admin/index.php"class="text-light text-decoration-none text-center"><strong>Admin Panel</strong></a>
    </div>
        </div>
    <div class="post-list mt-5 w-100">
        <div class="container">
            <?php
                $id = $_GET['id'];
                if ($id) {
                    include("connect.php");
                    $sqlSelect = "SELECT * FROM posts WHERE id = $id";
                    $result = mysqli_query($conn,$sqlSelect);
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                       <div class="post bg-light p-4 mt-5">
                        <h1><?php echo $data['title']; ?></h1>
                        <p><?php echo $data['date']; ?> </p>
                        <p><?php echo $data['summary']; ?> </p>
                        <p><?php echo $data['content']; ?> </p>
                       </div>
                    <?php
                    }
                }else{
                    echo "No post found";
                }
            ?>
         </div>
    </div>

</body>
</html>