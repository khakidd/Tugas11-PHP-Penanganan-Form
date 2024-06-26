<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .error {
            color: #FF0000;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin: 0 10px;
        }

        .radio-group {
            margin: 10px 0;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            background-color: #e7f3fe;
            padding: 10px;
            border-left: 6px solid #2196F3;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $nameErr = $emailErr = $genderErr = $websiteErr = $phoneErr = $dobErr = "";
        $name = $email = $gender = $comment = $website = $phone = $dob = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["phone"])) {
                $phoneErr = "Phone number is required";
            } else {
                $phone = test_input($_POST["phone"]);
                if (!preg_match("/^[0-9]*$/", $phone)) {
                    $phoneErr = "Only numbers are allowed";
                }
            }

            if (empty($_POST["dob"])) {
                $dobErr = "Date of birth is required";
            } else {
                $dob = test_input($_POST["dob"]);
                $dobFormat = DateTime::createFromFormat('Y-m-d', $dob);
                if (!$dobFormat || $dobFormat->format('Y-m-d') !== $dob) {
                    $dobErr = "Invalid date format, expected YYYY-MM-DD";
                }
            }

            if (empty($_POST["website"])) {
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                    $websiteErr = "Invalid URL";
                }
            }

            if (empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2>PHP Form Validasi</h2>
        <p><span class="error">* required field.</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span><br><br>

            Email: <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span><br><br>

            Phone Number: <input type="text" name="phone" value="<?php echo $phone; ?>">
            <span class="error">* <?php echo $phoneErr; ?></span><br><br>

            Date of Birth: <input type="date" name="dob" value="<?php echo $dob; ?>">
            <span class="error">* <?php echo $dobErr; ?></span><br><br>

            Website: <input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span><br><br>

            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea><br><br>

            Gender:
            <div class="radio-group">
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
            </div>
            <span class="error">* <?php echo $genderErr; ?></span><br><br>

            <input type="submit" class="button" name="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($dobErr) && empty($genderErr) && empty($websiteErr)) {
            echo "<div class='result'>";
            echo "<h2>Your Input:</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Phone Number: " . $phone . "<br>";
            echo "Date of Birth: " . $dob . "<br>";
            echo "Website: " . $website . "<br>";
            echo "Comment: " . $comment . "<br>";
            echo "Gender: " . $gender . "<br>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>