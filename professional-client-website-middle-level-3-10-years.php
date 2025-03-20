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
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Professional Client Website Middle Level (3-10 Years)</h2>
                    <p class="lg:text-lg my-6 text-black">You are obviously looking to change your workplace and owning a personal portfolio website gives you an opportunity to represent yourself in a more modulated way than your resume. This gives you an online presence and an impression that you are serious towards your career.</p>

                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img14.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="h-full w-full">
                    <img src="assets/services_img/img15.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                </div>
                <div class="col-span-2">
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Why Us?</h2>
                    <p class="lg:text-lg mb-2"><b>1. </b>Only 4% of the job seekers own a personal website.</p>
                    <p class="lg:text-lg mb-2"><b>2. </b>56% of the hiring managers are more impressed with a personal website.</p>
                    <p class="lg:text-lg mb-2"><b>3. </b>90% of the first impression happens online in the present era.</p>
                    <p class="lg:text-lg mb-2"><b>4. </b>Communicate globally 24×7!</p>
                    <p class="lg:text-lg mb-2"><b>5. </b>The website will be valid for one year, after which you will have to pay for renewal.</p>
                    <p class="lg:text-lg mb-2"><b>6. </b>One time modification available in next 25 days.</p>
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
                                Professional Client Website
                                Middle Level (3-10 Years)
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 59,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Professional Client Website Middle Level (3-10 Years)">
                            <input type="hidden" name="price" value="59999">
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