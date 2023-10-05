<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
</head>
<body>

    <h2>Update Employee</h2>

    <?php if ($employeeObject) { ?>

        <form action="?action=update" method="post">

            <input type="hidden" name="id" value="<?php echo $employeeObject->getId() ?>">

            Full Name: <input type="text" name="fullname" value="<?php echo $employeeObject->getFullName() ?>" required><br>

            Email: <input type="email" name="email" value="<?php echo $employeeObject->getEmail() ?>" required><br>

            Phone: <input type="phone" name="phone" value="<?php echo $employeeObject->getPhone() ?>" required><br>
            
            Introduce: <textarea name="introduce" required rows="4" cols="5"><?php echo $employeeObject->getIntroduce() ?></textarea><br>

            <input type="submit" value="Update Employee">
        </form>
        <?php
    } else {

        echo "Employee not found.";

    }
    ?>
</body>
</html>
