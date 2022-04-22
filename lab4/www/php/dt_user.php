<?php
require('../query/conDB.php');
?>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM td_user ORDER BY age ASC";
        $result = $mysqli->query($sql);
        $i = 1;
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['sname'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['sex'] ?></td>
                <td>
                <button> class="btn-user" data-name=""<?= $row['name'] ?>">DEL</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
    $(".btn-del").click(function(){
        $data = $(this).data("name")
        // alert(data);
        $.ajax({
            url:"./query/user_del.php",
            method: "POST",
            data: {
                name: date
            },
            success: function(){
                $("#div_content").load("./php/dt_user.php");
            }
        });
    });
</script>    