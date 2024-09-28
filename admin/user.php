<?php
include("../admin/includes/header.php");

?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Danh sách tài khoản</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <?php 
                            include_once '../Model/connect.php';
                            $conn = dbConnection();
                            $stmt = $conn->query("SELECT * FROM user");
                            $total_rows = $stmt->rowCount();
                            if ($total_rows > 0) {
                                echo '<table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">ID</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Name</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">Phone</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">Address</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">Username</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-10 ps-2">Password</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">Email</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-10">edit</th>
                                                    </tr>;
                                                    
                                                </thead>';
                                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                                    extract($row);
                                                    echo "<tr>
                                <td>{$id}</td>
                                <td>{$name}</td>
                                <td>{$phone}</td>
                                <td>{$address}</td>
                                <td>{$uname}</td>
                                <td>{$pword}</td>
                                <td>{$email}</td>";
                                echo "<td>";

                                    // read product button
                                    echo "<a href='../admin/updateuser.php?id={$id}' class='btn btn-primary left-margin'>
                                        <span class='glyphicon glyphicon-list'></span> Chỉnh sửa 
                                    </a>";

                                    // edit product button
                                    echo "<a href='../admin/m_xoa.php?id={$id}' class='btn btn-info left-margin'>
                                    <span class='glyphicon glyphicon-edit'></span> Xóa
                                </a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>