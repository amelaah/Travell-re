<?php
// lidhja me db
include 'database.php';

class user{

 private $conn;
//  konstruktori
    public function __construct($conn){
        $this->conn=$conn;
    }

    // book
    public function register($first_name, $last_name, $email, $password, $remember_me) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//   sql statment per me i insertu te dhanat ne databaz
        $stmt = $this->conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        //  ktu qato ? i kthen ne actual users data edhe i tregon sql se jon string(ssss)
        $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);

        if ($stmt->execute()) {
            //fillon sessions edhe i shtin ID edhe firstname per me i rujt 
            session_start();
            $_SESSION['user_id'] = $this->conn->insert_id;
            $_SESSION['first_name'] = $first_name;

            setcookie('is_logged_in', 'true', time() + (86400 * 30), '/');

            // nese remember me osht e prekun e run te dhanat per 30 dit
            if ($remember_me) {
                setcookie("user_email", $email, time() + (86400 * 30), "/");
            }
            return true;
        } else {
            return false;
        }
    }

    // log in
    public function login($email, $password, $remember_me) {
        // sql statment
        $stmt = $this->conn->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
        // tregon qe email eshte string 
        $stmt->bind_param("s", $email);

        $stmt->execute();
        $stmt->store_result();

        // kontrollon se a ka user me qato te dhana

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $first_name, $hashed_password);
            $stmt->fetch();

            // kontrollon password
            if (password_verify($password, $hashed_password)) {
                // fillon session
                session_start();
                $_SESSION['user_id'] = $user_id;
                $_SESSION['first_name'] = $first_name;

                setcookie('is_logged_in', 'true', time() + (86400 * 30), '/');

                if ($remember_me) {
                    setcookie("user_email", $email, time() + (86400 * 30), "/");
                }
                return true;
            }
        }
        return false;
    }

// log out
public function logout() {
    session_start();
    // shkatrron sessions
    session_unset();
    session_destroy();

    // shkatrron cookies tu i kthy mbrapa 1 or
    setcookie("user_email", "", time() - 3600, "/");
    setcookie("is_logged_in", "", time() - 3600, "/");

    header("Location: ../html/travelly.php");
    exit();
}
public function updateEmail($user_id, $new_email) {
    $stmt = $this->conn->prepare("UPDATE users SET email = ? WHERE id = ?");
    $stmt->bind_param("si", $new_email, $user_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

public function deleteUser($user_id) {
    $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
}
?>
