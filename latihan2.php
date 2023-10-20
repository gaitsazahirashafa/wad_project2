<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2 PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-top: 50px;
        }
        .result-box {
            background-color: #e5e5e5;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kalkulator Sederhana</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="angka1">Angka Pertama :</label>
                <input type="text" name="angka1" class="form-control">
            </div>
            
            <!-- Dropdown untuk Operator Perhitungan -->
            <div class="form-group">
                <label for="operator">Operator :</label>
                <select name="operator" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="angka2">Angka Kedua :</label>
                <select name="angka2" class="form-control">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </div>

            <input type="submit" name="Hitung" value="Hitung" class="btn btn-primary">
        </form>

        <?php
        $hasil = ""; // Inisialisasi variabel $hasil dengan string kosong

        if (isset($_POST['Hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];
        
            // Lakukan perhitungan berdasarkan operator yang dipilih
            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                default:
                    $hasil = "Operator tidak valid";
            }
        }
        
        ?>
        <div class="result-box" >
            <p style="color: darkolivegreen;" class="result">Hasil Perhitungan : <?php echo $hasil; ?></p>
        </div>
    </div>
</body>
</html>