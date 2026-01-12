<?php

$errors = [];
print_r($_POST);
if (isset($_POST['submit'])) {

    $firstname = trim($_POST['firstname']);
    $lastname  = trim($_POST['lastname']);
    $email     = trim($_POST['email']);
    $skills  = $_POST['skills'] ?? [];
    $gender  = $_POST['gender'] ?? '';
    $country = $_POST['country'] ?? '';


    // text validation
    if ($firstname === '') $errors['firstname'] = 'Required';
    if ($lastname === '')  $errors['lastname']  = 'Required';
    if ($email === '')     $errors['email']     = 'Required';
    // checkbox
    if (empty($skills)) {
        $errors['skills'] = 'Required';
    }

    // radio
    if ($gender === '') {
        $errors['gender'] = 'Required';
    }

    // select
    if ($country === '') {
        $errors['country'] = 'Required';
    }

    // photo validation
    if ($_FILES['photo']['error'] === 0) {

        $profilephoto = $_FILES['photo']['name'];
        $profilesize  = $_FILES['photo']['size'];
        $profiletmp   = $_FILES['photo']['tmp_name'];

        $allowedimg = ['jpg', 'jpeg', 'png'];
        $imgext = strtolower(pathinfo($profilephoto, PATHINFO_EXTENSION));

        if (!in_array($imgext, $allowedimg)) {
            $errors['photo'] = 'Invalid file';
        }

        if ($profilesize > 2 * 1024 * 1024) {
            $errors['photo'] = 'Too large';
        }
    } else {
        $errors['photo'] = 'Required';
    }

    // resume validation
    if ($_FILES['resume']['error'] === 0) {

        $resume = $_FILES['resume']['name'];
        $resumesize = $_FILES['resume']['size'];
        $resumetmp = $_FILES['resume']['tmp_name'];

        $alloweddocs = ['pdf', 'docx'];
        $resumeext = strtolower(pathinfo($resume, PATHINFO_EXTENSION));

        if (!in_array($resumeext, $alloweddocs)) {
            $errors['resume'] = 'Invalid file';
        }

        if ($resumesize > 1 * 1024 * 1024) {
            $errors['resume'] = 'Too large';
        }
    } else {
        $errors['resume'] = 'Required';
    }


    if (!empty($errors)) {

        $query = http_build_query([

            'errors' => $errors,

            'old' => [
                'firstname' => $firstname,
                'lastname'  => $lastname,
                'email'     => $email,
                'skills'    => $skills,
                'gender'    => $gender,
                'country'   => $country

            ]

        ]);

        header("Location: form3.php?$query");
        exit;
    }


    $uploaddir = "uploads/";
    move_uploaded_file($profiletmp, $uploaddir . $profilephoto);
    move_uploaded_file($resumetmp, $uploaddir . $resume);
}
?>
<!DOCTYPE html>
<html>

<body>
    <h3>Form Data</h3>
    <p>Firstname: <?= htmlspecialchars($firstname) ?></p>
    <p>Lastname: <?= htmlspecialchars($lastname) ?></p>
    <p>Email: <?= htmlspecialchars($email) ?></p>
    <img src="uploads/<?= htmlspecialchars($profilephoto) ?>" width="150">
    <p>
        Resume:
        <a href="uploads/<?= htmlspecialchars($resume) ?>" download>
            <?= htmlspecialchars($resume) ?>
        </a>
    </p>
    <p>Gender: <?= htmlspecialchars($gender) ?></p>
    <p>Country: <?= htmlspecialchars($country) ?></p>

    <p>Skills:</p>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?= htmlspecialchars($skill) ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
