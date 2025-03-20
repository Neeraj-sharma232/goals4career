<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>company</title>
    <?php
    include('link.php');
    ?>
</head>


<body>
    <script>
        AOS.init({
            duration: 1500
        });
    </script>
    <?php
    include('header.php');
    ?>
    <main>
        <div class="text-center py-5 text-black lg:mx-20 md:mx-10 mx-5">
            <h1 class="text-2xl lg:text-4xl">Online Payment</h1>
            <h2 class="text-xl">Payments towards opted services can be made through all Apps.</h2>
            <p class="">Please choose the payment mode as per convenience and use the given QR Codes to transfer the payment.</p>
            <h3>Select Your Mode of Payment *</h3>
            <hr class="border-1 border-black mt-4">
        </div>
        <h2 class="text-2xl lg:text-4xl text-black text-center">ALL UPI PAYMENT ACCEPTED HERE</h2>
        <div class="grid lg:grid-cols-2 grid-cols-1 lg:mx-20 md:mx-10 mx-5 my-5">

            <div class="">
                <img src="assets/company/phonepe.jpg" alt="s" class="w-96">
            </div>

            <div class="my-auto text-black">
                <p class="mb-2">Note: After completing the transaction, kindly share the Payment Reference Number to our Support Team for needful activation.</p>
                <p class="text-black mvb-2">If you have any issue related to payment Then you can Email us on : info@goalsforcareer.com</p>
                <ul style="list-style-type: disc;">
                    <li class="mb-2">We are never asking OTP of UPI or Bank.</li>
                    <li class="mb-2">Please don’t share your OTP to Others.</li>

                </ul>
                <p class="">SCAN QR CODE THROUGH UPI APPS</p>
            </div>
        </div>
    </main>


    <?php
    include('footer.php');
    include('f_link.php');
    ?>
</body>

</html>