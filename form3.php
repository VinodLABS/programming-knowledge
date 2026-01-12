<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>

<body>

    <?php
    if (isset($_GET['errors'])) {
        $errors = $_GET['errors'];
    }
    if (isset($_GET['old'])) {
        $old = $_GET['old'];
    }
    ?>
    <form action="allowed.php" method="POST" enctype="multipart/form-data">

        Firstname:
        <input type="text" name="firstname"
            value="<?= htmlspecialchars($old['firstname'] ?? '') ?>">
        <span style="color:red;">
            <?= $errors['firstname'] ?? '' ?>
        </span>
        <br><br>

        Lastname:
        <input type="text" name="lastname"
            value="<?= htmlspecialchars($old['lastname'] ?? '') ?>">
        <span style="color:red;">
            <?= $errors['lastname'] ?? '' ?>
        </span>
        <br><br>

        Email:
        <input type="text" name="email"
            value="<?= htmlspecialchars($old['email'] ?? '') ?>">
        <span style="color:red;">
            <?= $errors['email'] ?? '' ?>
        </span>
        <br><br>

        Profile Photo:
        <input type="file" name="photo">
        <span style="color:red;">
            <?= $errors['photo'] ?? '' ?>
        </span>
        <br><br>

        Resume:
        <input type="file" name="resume">
        <span style="color:red;">
            <?= $errors['resume'] ?? '' ?>
        </span>
        <br><br>
        <p>Skills:</p>

        <input type="checkbox" name="skills[]" value="PHP course"
            <?= in_array('PHP', $old['skills'] ?? []) ? 'checked' : '' ?>>
        PHP

        <input type="checkbox" name="skills[]" value="JS course"
            <?= in_array('JS', $old['skills'] ?? []) ? 'checked' : '' ?>>
        JavaScript

        <input type="checkbox" name="skills[]" value="React course"
            <?= in_array('React', $old['skills'] ?? []) ? 'checked' : '' ?>>
        React

        <?php if (isset($errors['skills'])): ?>
            <small style="color:red"><?= $errors['skills'] ?></small>
        <?php endif; ?>

        <p>Gender:</p>

        <input type="radio" name="gender" value="Male"
            <?= ($old['gender'] ?? '') === 'Male' ? 'checked' : '' ?>>
        Male

        <input type="radio" name="gender" value="Female"
            <?= ($old['gender'] ?? '') === 'Female' ? 'checked' : '' ?>>
        Female

        <?php if (isset($errors['gender'])): ?>
            <small style="color:red"><?= $errors['gender'] ?></small>
        <?php endif; ?>


        <p>Country:</p>

        <select name="country">
            <option value="">Select</option>

            <option value="India"
                <?= ($old['country'] ?? '') === 'In' ? 'selected' : '' ?>>
                India
            </option>

            <option value="USA"
                <?= ($old['country'] ?? '') === 'USA' ? 'selected' : '' ?>>
                united state
            </option>

            <option value="UK"
                <?= ($old['country'] ?? '') === 'UK' ? 'selected' : '' ?>>
                United Kingdom
            </option>
        </select>
        <?php if (isset($errors['country'])): ?>
            <small style="color:red"><?= $errors['country'] ?></small>
        <?php endif; ?>


        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>