<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        display: flex;
        flex-direction: column;
        width: 300px;
    }

    label {
        margin-bottom: 10px;
    }
    body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
    display: flex;
    justify-content: center;
    padding: 40px;
}

form {
    background: #ffffff;
    padding: 20px;
    width: 400px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

label {
    display: flex;
    flex-direction: column;
    margin-bottom: 12px;
    font-size: 14px;
}

input,
textarea,
select {
    margin-top: 5px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

input[type="radio"],
input[type="checkbox"] {
    margin-right: 5px;
}

label input[type="radio"] {
    display: inline-block;
}

input[type="submit"],
input[type="reset"],
input[type="button"] {
    margin-top: 10px;
    padding: 10px;
    border: none;
    background: #007bff;
    color: #fff;
    cursor: pointer;
    border-radius: 4px;
}

input[type="reset"] {
    background: #6c757d;
}

input[type="button"] {
    background: #28a745;
}

input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover {
    opacity: 0.9;
}

</style>
<body>
    <form action="welcome.php" method="post">
        <label>Name: <input type="text" name="name"></label>
        <label>Email: <input type="text" name="email"></label>
        <label>Website: <input type="text" name="website"></label>
        <label>Comments: <textarea name="comments" rows="5" cols="40"></textarea></label>
        <label>Radio: <input type="radio" name="radio" value="option 1">Option 1</label>
        <label>Radio: <input type="radio" name="radio" value="option 2">Option 2</label>
        <label>Gender: 
        <select name="gender">
            <option value="">Select Gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select></label>
        <label>Checkbox: <input type="checkbox" name="checkbox"></label>
        <label>Date: <input type="date" name="date"></label>
        <label>Email 2: <input type="email" name="email2"></label>
        <label>Number: <input type="number" name="number"></label>
        <label>Password: <input type="password" name="password"></label>
        <label>Range: <input type="range" name="range" min="0" max="100"></label>
        <label>Search: <input type="search" name="search"></label>
        <input type="submit">
    </form>
</body>

</html>