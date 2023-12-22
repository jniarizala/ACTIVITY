<!DOCTYPE html>
<html>
<head>
    <title>Number to Words Translator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Number to Words Translator</h1>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="numberInput">Enter a number:</label>
                    <input type="number" class="form-control" id="numberInput" placeholder="Enter a number">
                </div>
                <button class="btn btn-primary" id="translateButton">Translate</button>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-4">
                <div class="alert alert-success" id="result" style="display: none;"></div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap and jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Include number-to-words library -->
    <script src="https://cdn.jsdelivr.net/npm/number-to-words@1.5.2/numberToWords.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/big-integer/1.6.48/BigInteger.min.js"></script>


    <script>
    $(document).ready(function () {
        const numberInput = $('#numberInput');
        const translateButton = $('#translateButton');
        const result = $('#result');

        // Define a custom function for number-to-words conversion
        function numberToWords(inputNumber) {
            if (inputNumber === 0) {
                return "Zero";
            }

            // Create a big integer from the input
            const bigIntNumber = bigInt(inputNumber);

            // Implement your custom logic here to convert the bigIntNumber into words

            // For very large numbers, you may want to use a specialized library
            // or create your own algorithm for this conversion.

            return "Custom translation for large numbers";
        }

        translateButton.on('click', function () {
            const inputNumber = parseInt(numberInput.val(), 10);
            const words = numberToWords(inputNumber);
            result.text(words);
            result.show();
        });
    });
</script>

</body>
</html>
