<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Type List Box</title>

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
            background-color: #778ba5;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            height: auto;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Pilih Makanan Favorit Anda</h2>
        <form action="proseslistbox.php" method="post" name="input">
            <select name="makanan" size="2">
                <option value="Bakso">Bakso</option>
                <option value="Nasi Goreng">Nasi Goreng</option>
                <option value="Mie Goreng">Mie Goreng</option>
                <option value="Kwetiau">Kwetiau</option>
                <option value="Ayam Bakar">Ayam Bakar</option>
            </select>
            <input type="submit" name="Pilih" value="Pilih">
        </form>
    </div>
</body>

</html>