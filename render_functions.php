<?php


function show_data()
{
    $students = get_data();
    foreach ($students as $student) {
        echo $student['id'] . '<br>';
    }

}

function show_data_by_id($id)
{
//    $flag = 0;
    $students = get_data();
    foreach ($students as $student) {
        if ($student['id'] == $id) {
            echo $student['name'] . '<br>';
            return;
        }
    }
//    if ($flag == 0){
    echo "No Data Found at roll $id";
//    }

}

function render_student_info()
{
    $data = get_data();
    if (count($data) > 0) {
        echo "
            <table border=\"1\" width=\"100%\">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
        </tr>

        ";
        foreach ($data as $data) {
            $id = $data['id'];
            $name = $data['name'];
            $phone = $data['phone'];
            echo "
        <tr>
            <td>$id</td>
            <td>$name</td>
            <td>$phone</td>
        </tr>
    ";


        }
        echo "</table>";
    }
}

?>