<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Employees</title>
</head>
<body>
    <h2>List of Employees</h2>

    <?php if ($arr) {

            echo "<ul>";

            foreach ($arr as $each) {

                $id = $each->getId();

                $fullname = $each->getFullName();

                $email = $each->getEmail();

                $phone = $each->getPhone();

                echo "<li> $fullname - $email - $phone (<a href='?action=edit&id=$id'>Update</a>)</li>";
                
            }

            echo "</ul>";

    } else {

        echo "No employees found.";

    }
    ?>
    <p><a href="?action=create">Add New Employee</a></p>
</body>
</html>
