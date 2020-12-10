<?php require APPROOT . '/views/inc/header.php'; ?>

<div >
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Nickname</th>
        <th scope="col">Birthday</th>
        <th scope="col">Native place</th>
        <th scope="col">Sex</th>
        <th scope="col">Ethnic</th>
        <th scope="col">ID card</th>
        <th scope="col">Job</th>
        <th scope="col">Job place</th>
        <th scope="col">Household ID</th>
        <th scope="col">Householder relationship</th>
        <th scope="col">Since</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data as $item) :?>
        <tr>
        <td><?php echo $item->name ?></td>
        <td><?php echo $item->nickname ?></td>
        <td><?php echo $item->birth_day ?></td>
        <td><?php echo $item->native_place ?></td>
        <td><?php echo $item->sex ?></td>
        <td><?php echo $item->ethnic ?></td>
        <td><?php echo $item->id_card_no ?></td>
        <td><?php echo $item->job ?></td>
        <td><?php echo $item->job_place ?></td>
        <td><?php echo $item->household_id ?></td>
        <td><?php echo $item->householder_relationship ?></td>
        <td><?php echo $item->since ?></td>
   
        <td><a href="<?php echo URLROOT;?>/people/edit/<?php echo $item->id?>">Edit</a></td>
        <td>
            <form action="<?php echo URLROOT;?>/people/delete/<?php echo $item->id ?>" method="post">
                <input type="submit" value="Delete" >
            </form>
        </td>
        </tr>

        <?php endforeach; ?>
    </tbody>
    </table>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>