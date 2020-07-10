<?php
include 'config.php';

?>
<html>

<head>
    <title>Verify Number </title>
    <!-- for bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>History of all the previous search</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Country Name</th>
                    <th>Country Code</th>
                    <th>Number</th>
                    <th>Carrier</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $pdo = PDO();
                $sql = 'SELECT * FROM numbers';
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['country_name']; ?></td>
                    <td><?php echo $row['country_code']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['carrier']; ?></td>
                </tr>

                <?php }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-danger">Search Page</a>
    </div>

</body>

</html>