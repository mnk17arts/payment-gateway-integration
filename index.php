<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MESSI FOUNDATION</title>
    <link rel="stylesheet" href="bits/styles/bootstrap.min.css">
    <link rel="stylesheet" href="bits/styles/index.css">
</head>

<body>
    <?php include 'bits/_navbar.php' ?>

    <div class="container p-2 indexdiv">
        <div class="container indexindiv">

            <div class="container donatetxt">
                <h1 class="text-center">
                    Come, Help us <br> to reachout more lives <br> Lets donate for a cause...</h1>
            </div>

            <div class="container donatediv">
                <form>
                    <script src="https://checkout.razorpay.com/v1/payment-button.js"
                        data-payment_button_id="pl_HkkR97sgKJD17S" async> </script>
                </form>
            </div>

            <div class="container pt-4 smiles">
                <h2 class="text-center">The Number Of Smiles</h2>
                <div class="smilesbox">
                    <div class="box text-center">
                        <span class="no">3,000,000+</span><br>
                        <span class="txt">Meals Provided</span>
                    </div>
                    <div class="box text-center">
                        <span class="no">1,000+</span><br>
                        <span class="txt">Stray Adoption</span>
                    </div>
                    <div class="box text-center">
                        <span class="no">15,000+</span><br>
                        <span class="txt">Families fed</span>
                    </div>
                    <div class="box text-center">
                        <span class="no">50,000+</span><br>
                        <span class="txt">Migrants Transported</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include 'bits/_footer.php' ?>
</body>

</html>