<?php
include("header.php");
include("config.php");
$sql='SELECT * from user_login';
$users=$conn->prepare($sql);
$users->execute();
$userData=$users->fetchAll();

?>

<style>
table{
    border: 1px solid black;
}
tr,td,th{
    border: 1px solid black;
}
table,tr,td{
    border-collapse: collapse;
}
td{

}



</style>



<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sicky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
</a>
                    <li>
                        <a class="nav-link" href="profile.php">
                            <span data-feather="file"></span>
                            Edit Profile
                        </a>
                </li>
          </ul>
        </div>
    </nav>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <tables>
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        foreach($userData as $user){

        ?>
        <tbody>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['surname'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td>Delete | Edit</td>

            </tr>
            <?php
        }
            ?>


        </tbody>


    </tables>
</div>
</main>

</div>


</div>


<?php include("footer.php")
?>