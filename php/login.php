

<?php

session_start();

require_once "db.php";
// ===============================
// POPUP FUNCTION
// ===============================

function showError($message)
{
    echo "<script>
        alert(" . json_encode($message) . ");
        window.history.back();
    </script>";

    exit;
}


// ===============================
// LOGIN PROCESS
// ===============================

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Get form values
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    $rememberMe = isset($_POST["rememberMe"]);


    // ===============================
    // VALIDATE EMAIL
    // ===============================

    if (empty($email)) {
        showError("Please enter your email address.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        showError("Please enter a valid email address.");
    }


    // ===============================
    // VALIDATE PASSWORD
    // ===============================

    if (empty($password)) {
        showError("Please enter your password.");
    }

    if (strlen($password) < 6) {
        showError("Password must be at least 6 characters.");
    }


    // ===============================
    // FIND USER
    // ===============================

    $stmt = $conn->prepare(
        "SELECT id, email, password
         FROM users
         WHERE email = ?"
    );

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $result = $stmt->get_result();


    // ===============================
    // CHECK USER
    // ===============================

    if ($result->num_rows === 0) {

        $stmt->close();
        $conn->close();

        showError("Invalid email or password.");
    }


    // Get user
    $user = $result->fetch_assoc();


    // ===============================
    // VERIFY PASSWORD
    // ===============================

    if (!password_verify($password, $user["password"])) {

        $stmt->close();
        $conn->close();

        showError("Invalid email or password.");
    }


    // ===============================
    // LOGIN SUCCESS
    // ===============================

    $_SESSION["user_id"] = $user["id"];
    $_SESSION["user_email"] = $user["email"];


    // ===============================
    // REMEMBER ME
    // ===============================

    if ($rememberMe) {

        setcookie(
            "remember_email",
            $email,
            time() + (30 * 24 * 60 * 60),
            "/"
        );
    }


    $stmt->close();
    $conn->close();


    // ===============================
    // SUCCESS POPUP
    // ===============================

    echo "<script>
        alert('Login successful!');
        window.location.href = '../index/index.php';
    </script>";

    exit;
}

?>