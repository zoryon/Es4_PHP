<!DOCTYPE html>
<html lang="en">

<head>
    <!-- settings -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>PHP page</title>
</head>

<body>
    <?php
        // id info
        $firstName = isset($_GET["firstName"]) ? $_GET["firstName"] : "Non inserito";
        $lastName = isset($_GET["lastName"]) ? $_GET["lastName"] : "Non inserito";

        // subject
        $subject = isset($_GET["subject"]) ? $_GET["subject"] : "Non inserito";

        // display variables
        echo "Nome: " . $firstName;
        echo "<br />";
        echo "Cognome: " . $lastName;
        echo "<p><strong>Materia preferita:</strong> " . $subject . "</p>";
    ?>
</body>

</html>