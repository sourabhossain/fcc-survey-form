<?php 

require_once("db.php");

?>

<table id="dataTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th class="text-center" width="8%">Action</th>
            <th class="text-center" width="12%">Name</th>
            <th class="text-center" width="12%">Email</th>
            <th class="text-center" width="8%">Age</th>
            <th class="text-center" width="10%">Current Status</th>
            <th class="text-center" width="15%">Recommend Friend</th>
            <th class="text-center" width="10%">Favorite Feature</th>
            <th class="text-center" width="13%">See Improved</th>
            <th class="text-center" width="12%">Suggestions</th>
        </tr>
    </thead>

    <tbody>

        <?php 
        
            $query = $conn->prepare("SELECT * FROM `registration` ORDER BY `id` ASC "); 
            $query->execute();
            $fetch_list = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($fetch_list AS $fetch) {

        ?>    

        <tr <?= (!empty($_GET['id']) && $fetch['id'] == $_GET['id'])? 'style="background: #1f2d3d; color: #ffffff;"' : '' ?>>
            <td  class="text-center">
                <a class="btn btn-info btn-sm" href="index.php?update=update&id=<?=$fetch['id'];?>">
                    <i class="far fa-edit"></i>
                </a>
                
                <a class="btn btn-danger btn-sm" href="javascript:delete_confirm('<?=$fetch['id'];?>');">
                    <i class="far fa-trash-alt"></i>
                </a>
            </td>

            <td class="text-center"><?= $fetch['name']; ?></td>
            <td class="text-center"><?= $fetch['email']; ?></td>
            <td class="text-center"><?= $fetch['age']; ?></td>
            <td class="text-center"><?= $fetch['current_role']; ?></td>
            <td class="text-center"><?= $fetch['recommend_friend']; ?></td>
            <td class="text-center"><?= $fetch['favorite_feature']; ?></td>
            <td class="text-center"><?= $fetch['suggestions']; ?></td>
            <td class="text-center"><?= $fetch['see_improved']; ?></td>
        </tr>

        <?php

            }

        ?>
    </tbody>
</table>