<?php
include_once '../connectcheck/conncheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
<div id="wholecontent">
    <div class="dropdown">
        <div>
            <button id="teachers" class="dropdown-btn">Teacher</button>
        </div>
        <div class="dropdown-menu">
            <ul>
               <a href="../enrollT.php"> <li>Enroll teacher</li></a>
                <li>Edit/delete</li>
            </ul>
        </div>
    </div>
    <div class="dropdown">
        <div>
            <button id="student" class="dropdown-btn">Student</button>
        </div>
        <div class="dropdown-menu">
            <ul>
             <a href="enrollS.php">  <li>Enroll students</li></a> 
                <li>Edit/delete</li>
                <li>Fee Management</li>
            </ul>
        </div>
    </div>

    <div class="dropdown">
        <div>
            <button id="program" class="dropdown-btn">program</button>
        </div>
        <div class="dropdown-menu">
            <ul>
                <a href="programADD.html"><li>Add</li></a>
                <li>Edit/delete</li>
            </ul>
        </div>
    </div>
    <div class="dropdown">
        <div>
            <button id="course" class="dropdown-btn">course add</button>
        </div>
        <div class="dropdown-menu">
            <ul>
                <a href="courseADD.php"><li>Add</li></a>
                <li>Edit/delete</li>
            </ul>
        </div>
    </div>
</div>
</div>
    <div id="displayhere"> </div>
</head>

<body>
</body>
<script>
// let semI_sub_nums = prompt("How many subjects in sem I?")
// document.create.element(input);
// input.type = text;

// for (int i = 0; i <= semI_sub_nums; i++) {
//     create element input.type[text] <
//         input type = "text" >
// }
</script>

</html>