<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>

    <form action="signup.php" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Sign Up</button>

    </form>

    <p>Already registered?
        <a href="login.php">Login here</a>
    </p>
</div>

</body>
</html>

