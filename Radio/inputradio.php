<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Type Radio</title>

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

        .form-container {
            max-width: 400px;
            background-color: #b2beb5;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        input[type="radio"] {
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
            font-size: 16px;
            margin: 5px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="prosesradio.php" method="post" name="input">
            <h2>Pilih Program Studi</h2>
            <label><input type="radio" name="prodi" value="TIF"> Teknik Informatika</label>
            <label><input type="radio" name="prodi" value="TI"> Teknik Industri</label>
            <label><input type="radio" name="prodi" value="TE"> Teknik Elektro</label>
            <label><input type="radio" name="prodi" value="Teksip"> Teknik Sipil</label>
            <label><input type="radio" name="prodi" value="Tekkim"> Teknik Kimia</label><br><br>
            <input type="submit" name="Pilih" value="Pilih">
            <input type="reset" name="reset" value="Reset">
        </form>
    </div>
</body>

</html>