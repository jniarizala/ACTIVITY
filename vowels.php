<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Mohave:wght@300;400;500&display=swap"
        rel="stylesheet">
    <title>Remove Vowels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./resources/css/vowels-style.css">

</head>

<body>
    <div class="wrapper">
        <div class="background-image"></div>
        <div class="container1">
            <img src="./resources/img/title.png" class="img" alt="Centered Image">
        </div>
        <div class="container">
            <img src="./resources/img/center.png" class="img" alt="Centered Image">
            <div class="container2">
                <img src="./resources/img/cloudword.png" class="img" alt="Centered Image">
            </div>
            <div class="content">
                <form method="post" action="">
                    <div class="textbox">
                        <input class="box" type="text" name="word" id="word" class="form-control" required maxlength="50">
                    </div>
                    <button type="submit" class="btn btn-custom custom-button">
                        <img src="./resources/img/btn-vowel.png" alt="Remove Vowels" class="normal-image">
                        <img src="./resources/img/hover-vowel.png" alt="Hover Button" class="hover-image">
                    </button>
                </form>
                <div class="container4">
                    <div class="result-text-container">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $word = $_POST["word"];
                            $result = removeVowels($word);
                            echo "<p class='result-text'>$result</p>";
                        }

                        function removeVowels($word)
                        {
                            $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
                            return str_replace($vowels, '', $word);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="bottom">
            <img src="./resources/img/bottom-cloud.png" class="img" alt="Centered Image">
        </div>
        <div class="top">
            <img src="./resources/img/top-cloud.png" class="img" alt="Centered Image">
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>