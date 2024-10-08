<?php
include_once('dashboard_pro/functionsproduct.php');
$fetchdata = new DB_con();
$sql = $fetchdata->fetchdata();
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-1">
    <h1 class="information-heading">show product</h1>
       
        <table id="mytable" class="table">
            <thead class="table-dark">
                <tr style="text-align: center;">
                    <th>#</th> 
                    <th>Name</th>
                    <th>Price</th>
                    <!-- <th>Posting Date</th> -->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr style="text-align: center;">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <!-- <td><?php echo $row['postingdate']; ?></td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body>
</html>