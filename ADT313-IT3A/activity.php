<h1>Hands-on Activity</h1>

<?php
$table = array(
    "header" => array(
        "Student Id",
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "YearLevel"
    ),
    "body" => [
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),
        array(
            "firstname" => "Firstname",
            "middlename" => "Middlename",
            "lastname" => "Lastname",
            "section" => "Section",
            "course" => "Course",
            "yearlevel" => "YearLevel"
        ),

    ]
)

    ?>

<table border="1">


    <thead>
        <?php foreach ($table['header'] as $header): ?>
            <th> <?php echo $header ?> </th>
        <?php endforeach ?>


    </thead>

    <tbody>
        <?php for ($i = 0; $i <= count($table['body']) - 1; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $table["body"][$i]["firstname"] . "</td>";
            echo "<td>" . $table["body"][$i]["middlename"] . "</td>";
            echo "<td>" . $table["body"][$i]["lastname"] . "</td>";
            echo "<td>" . $table["body"][$i]["section"] . "</td>";
            echo "<td>" . $table["body"][$i]["course"] . "</td>";
            echo "<td>" . $table["body"][$i]["yearlevel"] . "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>

</table>