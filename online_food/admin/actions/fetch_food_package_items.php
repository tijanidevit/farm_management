<?php
$id = $_POST['id'];
include_once '../../core/food_package_items.class.php';
$food_package_item_obj = new Food_package_items();

$food_package_items = $food_package_item_obj->fetch_food_package_items($id);

?>

<?php foreach ($food_package_items as $food_package_item): ?>
    <tr>
        <td><?php echo $food_package_item['food_item'] ?></td>
        <td><a href="actions/delete_food_package_item.php?id=<?php echo $food_package_item['id'] ?>&p_id=<?php echo $id ?>" class="btn btn-danger btn-sm"><span class="material-icons">delete</span> Delete</a></td>
    </tr>
<?php endforeach ?>