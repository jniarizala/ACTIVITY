<!DOCTYPE html>
<html>

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Mohave:wght@400;500&display=swap"
        rel="stylesheet">

    <title>How Many Even Numbers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/even-style.css">

</head>

<body>

    <?php
    function countEvenDigits($word)
    {
        $evenCount = 0;

        // Iterate through each character in the string
        for ($i = 0; $i < strlen($word); $i++) {
            $char = $word[$i];

            // Check if the character is a digit
            if (is_numeric($char)) {
                $digit = (int) $char;

                // Check if the digit is even
                if ($digit % 2 === 0) {
                    $evenCount++;
                }
            }
        }

        return $evenCount;
    }

    // Check if a word is submitted by the user
    if (isset($_POST['word'])) {
        $userWord = $_POST['word'];
        $evenCount = countEvenDigits($userWord);
    }
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="container3">
                <h1>How many even numbers are there?</h1>
            </div>
            <form method="POST">
                <div class="form-group">
                    <div class="ts">
                        <label class="type" for="word">Type something:</label>
                    </div>
                    <input class="box" type="text" name="word" id="word" class="form-control" required>
                </div>
                <button type="submit" class="btn-custom">Submit</button>
            </form>
            <div class="container4">
                <div class="result-text-container">
                    <?php
                    if (isset($evenCount)) {
                        if ($evenCount == 0){
                            echo "<p class='result-text'>'$userWord' contains no even numbers.</p>";
                        }
                        else{
                            echo "<p class='result-text'>'$userWord' contains $evenCount even numbers.</p>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="container1">
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>