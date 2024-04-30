<?php
include("templates/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="dashboard">
<div class="posts-list w-100 p-5">
<?php
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
  ?>
    <table class="table table-bordered w-100">
        <thead>
            <tr>
                <th class="bg-dark text-light" style="width:15%;">Publication Date</th>
                <th class="bg-dark text-light" style="width:15%;">Title</th>
                <th class="bg-dark text-light" style="width:45%;">Summary</th>
                <th class="bg-dark text-light" style="width:25%;">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            include('../connect.php');
            $sqlSelect = "SELECT * FROM posts";
            $result = mysqli_query($conn,$sqlSelect);
            while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $data["date"]?></td>
            <td><?php echo $data["title"]?></td>
            <td><?php echo $data["summary"]?></td>
            <td class="text-center">
                <a class="btn btn-info" href="view.php?id=<?php echo $data["id"]?>">View</a>
                <a class="btn btn-warning"  href="edit.php?id=<?php echo $data["id"]?>">Edit</a>
                <a class="btn btn-danger" href="delete.php?id=<?php echo $data["id"]?>">Delete</a>
            </td>
            </tr>
            <?php
            }
            ?>
           
        </tbody>
    </table>
</div>

</body>
</html>

<?php
include("templates/footer.php");
?>