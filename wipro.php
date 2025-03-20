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
    <?php
    include('header.php');
    ?>
    <script>
        AOS.init({
            duration: 1500
        });
    </script>
    <main>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-5 text-center text-[#19468A]">Wipro</h2>


            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

                <div class="flex flex-col rounded-lg bg-white hover:shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] transition duration-300 ease-in-out shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-xl md:flex-row">
                    <img class=" rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg" src="assets/company/wipro.jpg" alt="" />
                    <div class="flex flex-col justify-start p-6">
                        <a href="senior-technical-manager.php" class="mb-2 text-xl font-semibold text-[#19468A] hover:text-[#FEC516] dark:text-neutral-50">
                            Technical Lead <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                            [Full Time]
                        </p>
                    </div>
                </div>


            </div>
        </section>


    </main>
    <?php
    include('footer.php');
    ?>
    <?php
    include('f_link.php');
    ?>
</body>

</html>