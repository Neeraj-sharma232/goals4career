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
                <div class="lg:col-span-2">
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Priority Application</h2>
                    <p class="lg:text-lg my-6 text-black"><b>Service Highlights: </b><br>
                        Get the best jobs delivered to you which matches your criteria / weekly updates on jobs available in the market / Access job updates from all leading portals and not only from placementcareer.in / Apply for jobs on the move from your phone / customized job alert option as per your profile / increased chances of job interview call by 3x.</p>


                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img6.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="h-full w-full">
                    <img src="assets/services_img/img7.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                </div>
                <div class="col-span-2">
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Why We?</h2>
                    <h2 class="text-2xl text-black font-semibold my-6">About Priority Appplication: 90 Days</h2>
                    <p class="lg:text-lg mb-2">Job searching is the toughest and difficult work for any degree holders or any individual. Though thousands of jobs are available in the market but job seekers miss the opportunity of working with big brands since they are not able to search the best jobs available in the market due to 2 reasons:</p>
                    <p class="lg:text-lg mb-2"><b>1. </b>Lack of knowledge of jobsearch</p>
                    <p class="lg:text-lg mb-2"><b>2. </b>Lack of time</p>
                </div>
            </div>
        </section>


        <section class="py-10">
            <div class="grid lg:grid-cols-3 gap-6 lg:mx-20 md:mx-10 mx-4">
                <div></div>
                <div>
                    <form action="mannage_cart.php" method="POST">
                        <div class="block text-center rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                Priority Application
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 22,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Priority Application">
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