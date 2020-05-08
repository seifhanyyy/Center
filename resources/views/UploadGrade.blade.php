<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

echo "<table class = 'table'>
<tr>
<th>Student Name</th>
<th>Student Year</th>
<th>Course Id</th>
<th>Quiz week</th>
<th>Grade</th>
</tr>";
foreach ($uploadgrade as $uploadgrade) {
    //echo "<form method='POST' action=''>";
    echo "<tr>";
    echo "<td>" . $uploadgrade->name . "</td>";
    echo "<td>" . $uploadgrade->email . "</td>";
    echo "<td>" . $uploadgrade->id . "</td>";
    echo "<td>" . "<input type='text' name='QuizWeek' id='QuizWeek'>" . "</td>";
    echo "<td>" . "<input type='text' name='Grade' id='Grade'>" . "</td>";
    echo "<td>" . "<button type='submit' onclick='update()'>submit</button>" . "</td>";
    echo "</tr>";
    //echo "</form>";
}
echo "</table>";
function update()
{
    DB::update("update grades set quizweek=3 where sid=3");
}
