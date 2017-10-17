<?php
// for data add


if (isset($_GET['add-data'])) {
    $id = $_GET['id'] + 0;
    $name = $_GET['name'];
    $phone = $_GET['phone'];
    add_data($id, $name, $phone);

}

if (isset($_GET['search-data'])){
    $id = $_GET['search-id'];
//    show_data_by_id($id);
}else{
//    show_data();
}
?>
