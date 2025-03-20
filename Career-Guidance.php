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
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Career Guidance</h2>
                    <p class="lg:text-lg my-6 text-black">Save a Lot of Time applying for Vacancies and it becomes easier for Consultants to reach you Our team of experienced professionals who come from HR/Recruitment background works as your Relationship Manager. Career Guidance where we go extra mile for candidates. This Service will provide you the personal Relationship Manager, who will help you at every step of your job seeking – right from Career Guidance, profile optimization to company research. Career Guidance Management is equipped to efficiently manage your job hunt so that you reach your career goals effortlessly.</p>


                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img8.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="h-full w-full">
                    <img src="assets/services_img/img9.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                </div>
                <div class="col-span-2">
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Why We?</h2>
                    <p class="lg:text-lg mb-2">The Relationship Manager working with you will have interactions with you, in span of 3/6 months to start your Career Guidance. The Relationship Manager will search for the relevant and matching job vacancies using your profile details, preferences and on the basis of market availability. Candidates can expect 4-5 JOB OPENINGS per month according to their profile within the time frame of 3/6 months.</p>
                    <p class="lg:text-lg mb-2">The Relationship Manager will submit applications on your behalf, once you approve the job which has been searched by him/her and your Relationship Manager will also provides the Company Profile details to you on the basis of availability. Relationship Manager will get in touch with you within 48 to 72 working hours of Order Activation.</p>
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
                                Career Guidance
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 8,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Career Guidance">
                            <input type="hidden" name="price" value="8999">
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