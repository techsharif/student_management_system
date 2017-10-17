<?php

function add_data($id, $name, $phone)
{
    $data = sprintf('%10d%60s%15s', $id, $name, $phone);
    $file = fopen('db.txt', 'a');
    fwrite($file, $data);
    fclose($file);
}


function get_data()
{
    $file = fopen('db.txt', 'r');
    $filesize = filesize('db.txt');
    $data = fread($file, $filesize);
    fclose($file);
//    echo $data;
    $ln = strlen($data);
    $students = [];
    for ($i = 0; ; $i++) {
        $start = $i * 85;
        $extra = 85;
        if ($start + $extra > $ln) {
            break;
        }

        $student_info = substr($data, $start, $extra);
        $id = trim(substr($student_info, 0, 10));
        $name = trim(substr($student_info, 10, 60));
        $phone = trim(substr($student_info, 70, 15));
//        echo "<br>id: $id - Name: $name - Phone: $phone";
        $student['name'] = $name;
        $student['id'] = $id + 0;
        $student['phone'] = $phone;
        $students[] = $student;

    }
    return $students;
}

