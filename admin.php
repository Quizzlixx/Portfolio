<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
require('/home/klowgree/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <!-- Data tables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <title>Admin</title>
</head>
<body>
<!-- Nav bar -->
<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
    <div class="">
        <ul class="navbar-nav">
            <li class="text-monospace navbar-brand">KL</li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php#bio" class="nav-link">Bio</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php#portfolio" class="nav-link">Portfolio</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="klow-resume.html" class="nav-link">Resume</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="guestbook.php" class="nav-link">Guestbook</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="logout.php" class="nav-link">Log Out</a></li>

        </ul>
    </div>
</nav>
<!-- Header -->
<div id="header" class="container-fluid jumbotron jumbotron-fluid">
    <h1 class="text-center text-monospace">Admin</h1>
</div>
<div class="container">

    <?php
    $sql = "SELECT sign_date, first_name, last_name, title, company, linkedIn, mailing_list, email, comment, how_meet
        FROM guestbook";
    $result = mysqli_query($cnxn, $sql);
    ?>
    <table id="guestbook-table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Name</th>
            <th>Title</th>
            <th>Company</th>
            <th>LinkedIn</th>
            <th>Mailing List</th>
            <th>Email</th>
            <th>Comment</th>
            <th>How Did We Meet?</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $date = $row['sign_date'];
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $title = $row['title'];
            $company = $row['company'];
            $linkedin = $row['linkedIn'];
            $mailingList = $row['mailing_list'];
            $email = $row['email'];
            $comment = $row['comment'];
            $meet = $row['how_meet'];

            $name = $firstName . ' ' . $lastName;

            echo "<tr>
                      <td>$date</td>
                      <td>$name</td>
                      <td>$title</td>
                      <td>$company</td>
                      <td>$linkedin</td>
                      <td>$mailingList</td>
                      <td><a href='mailto:$email'>$email</a></td>
                      <td>$comment</td>
                      <td>$meet</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Data tables -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $('#guestbook-table').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (row) {
                        var data = row.data();
                        return 'Details for ' + data[0] + ' ' + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll()
            }
        }
    });
</script>
<!-- My script -->
<script src="scripts/guestbook.js"></script>
</body>
</html>