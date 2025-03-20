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
        <section class="py-10  bg-[#EAEAEA]">
            <div class="grid lg:grid-cols-3 gap-6 lg:mx-20 md:mx-10 mx-4">
                <div class="lg:col-span-2 my-auto">
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">interview preparation</h2>
                    <p class="lg:text-lg my-6 text-black">Our Interview Training Service is designed to help you overcome nerves, build your confidence and increase your success rate at job interviews. The course will help you prepare, practice and perform more effectively at interviews and give you skills and techniques to stand out from other applicants.</p>
                    <p class="lg:text-lg my-6 text-black"><b>Key Features </b><br>Unlimited access to online content / Certifications developed by Industry professional and academicians / Content updated as per evolving Industry requirements / Career boost for professional.</p>

                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img11.webp" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="h-full w-full">
                    <img src="assets/services_img/img12.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                </div>
                <div class="col-span-2">
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Table of Content</h2>
                    <p class="lg:text-lg mb-2"><b>1. </b>How to do research on a prospective employer company?</p>
                    <p class="lg:text-lg mb-2"><b>2. </b>Tell me something about yourself?</p>
                    <p class="lg:text-lg mb-2"><b>3. </b>Why should we hire you?</p>
                    <p class="lg:text-lg mb-2"><b>4. </b>What are your salary expectations.</p>
                    <p class="lg:text-lg mb-2"><b>5. </b>What are your strengths?</p>
                    <p class="lg:text-lg mb-2"><b>6. </b>What are your weaknesses?</p>
                    <p class="lg:text-lg mb-2"><b>7. </b>Why do you want to leave your current job?</p>
                </div>
            </div>
        </section>


        <section class="py-10">
            <h2 class="text-4xl text-[#19468A] font-semibold my-6 text-center">Choose your pricing plan</h2>

            <div class="grid lg:grid-cols-3 gap-6 lg:mx-20 md:mx-10 mx-4">
                <div></div>
                <div>
                    <form action="mannage_cart.php" method="POST">
                        <div class="block text-center rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                Interview Preparation
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 22,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Interview Preparation">
                            <input type="hidden" name="price" value="22999">
                        </div>
                    </form>
                </div>
                <div></div>

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
3

</html>