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
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Job Search Assistance</h2>
                    <p class="lg:text-lg my-6 text-black">We have matched thousands of individuals with the right jobs by helping them get connected to the right opportunities at the right time. We have career experts with a vast amount of experience, diverse qualifications and a wide spread network in various sectors.</p>
                    <p class="lg:text-lg my-6 text-black">1- Qualified career consultants to help you find the opportunities matching your requirements and specifications.</p>
                    <p class="lg:text-lg my-6 text-black">2- A variety of job opportunities to explore and choose from.</p>
                    <p class="lg:text-lg my-6 text-black">3- Exposure to global opportunities in popular and established companies.</p>


                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img10.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">

            <div class="col-span-2">
                <h2 class="text-4xl text-[#19468A] font-semibold my-6">Why We?</h2>
                <p class="lg:text-lg mb-2">Save a lot of time applying for vacancies and it becomes easier for consultants to reach you Our team of experienced professionals who come from HR/Recruitment background works as your relationship manager. Job Guide Assistant where we go extra mile for candidates. This service will provide you the personal relationship manager, who will help you at every step of your job seeking – right from Job Search, profile optimization to company research. Job Search Management is equipped to efficiently manage your job hunt so that you reach your career goals effortlessly. The relationship manager working with you will have interactions with you, in span of 1 month to start your job search.</p>
                <p class="lg:text-lg mb-2">1. The Relationship Manager will search for the relevant and matching job vacancies using your profile details, preferences and on the basis of market availability. Candidates can expect 4-5 job openings per month according to their profile within the time frame of 1 month.</p>
                <p class="lg:text-lg mb-2">2. Verifier verifies the product and activates the service.</p>
                <p class="lg:text-lg mb-2">3. Once the reply is received we prepare the verification report and share the same with you.</p>
                <p class="lg:text-lg mb-2">4. If there is any change, you can call us or mail us regarding the same. The relationship manager will submit applications on your behalf, once you approve the job which has been searched by him/her and your relationship manager will also provide the company profile details to you on the basis of availability. Relationship Manager will get in touch with you within 48 to 72 working hours of order activation.</p>
            </div>
        </section>


        <section class="py-10">
            <h2 class="text-4xl text-[#19468A] text-center font-semibold my-6">Choose your pricing plan</h2>

            <div class="grid lg:grid-cols-2 gap-6 lg:mx-20 md:mx-10 mx-4">
                <div>
                    <form action="mannage_cart.php" method="POST">
                        <div class="block text-center rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                Job Assistance India
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 18,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Job Assistance India">
                            <input type="hidden" name="price" value="18999">
                        </div>
                    </form>
                </div>
                <div>
                    <form action="mannage_cart.php" method="POST">
                        <div class="block text-center rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                Job Assistance International
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 35,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Job Assistance International">
                            <input type="hidden" name="price" value="35999">
                        </div>
                    </form>
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
3

</html>