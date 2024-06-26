<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Type CheckBox</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="checkbox"] {
            margin: 10px 0;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: calc(50% - 10px);
            margin: 10px 5px;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="prosescheckbox.php" method="post" name="input">
            <h2>Pilih Tiktokers Kesukaan Anda</h2>
            <input type="checkbox" name="tiktok1" value="Iben"> Iben<br>
            <input type="checkbox" name="tiktok2" value="Ivan Lav"> Ivan Lav<br>
            <input type="checkbox" name="tiktok3" value="Anselma"> Anselma<br>
            <input type="checkbox" name="tiktok4" value="Abe Cia"> Abe Cia<br>
            <input type="checkbox" name="tiktok5" value="Cellosz"> Cellosz<br><br>
            <input type="submit" name="Pilih" value="Pilih">
            <input type="reset" name="reset" value="Reset">
        </form>
    </div>
</body>

</html>