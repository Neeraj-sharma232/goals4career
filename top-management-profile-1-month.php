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
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Top Management Profile​ (1 Month)</h2>
                    <p class="lg:text-lg my-6 text-black">For senior level job seeker it’s too hard to garb relevant job opening from the international market side. Also its very hard making professional profile which can show high impact in the international market. For that We focus on your area of interest from industries to job location. We have recruiters & consultancies across different industries and locations.</p>

                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img16.png" alt="" class="w-full  rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">


            <div class="">
                <h2 class="text-4xl text-[#19468A] font-semibold my-6">Why Us?</h2>
                <p class="lg:text-lg mb-2"><i>Our expert will call you and will do Telephonic discussion to assess your career objective. According to your profile. Will develop your portfolio as per international market standard.</i></p>
                <p class="lg:text-lg mb-2">Our professional portfolio writers will develop your portfolio that will highlight your achievements, strengths, elaborate work experiences, key responsibilities, loaded with industry keywords and describe your job profile to international employers/ recruiters, so that you get maximum responses for your profile from international market.</p>
                <p class="lg:text-lg mb-2">This service would provide online presence on the top 4 to 5 job portals of your target country so that top recruiters there can search you for relevant openings. Make sure your resume and profile meets the standard of recruiters & company so you will be get a good opportunities according your profile as per your market availabilities’</p>
                <p class="lg:text-lg mb-2 font-semiboldtext-black">Important Advantage</p>
                <ul style="list-style-type: disc;">
                    <li class="mb-2">Make a high impact with a compelling powerful summary of your experience and keyword rich profile.</li>
                    <li class="mb-2">You will get proper summary of your experience.</li>
                    <li class="mb-2">Showcase your vision, core values and aspirations.</li>
                    <li class="mb-2">Be noticed for relevant career opportunities by top recruiters.</li>
                    <li class="mb-2">Our expert having 25+ exp in the writing top management portfolio.</li>
                    <li class="mb-2">Our International expert team updates your profile on the top 4 to 5 job portals of your target country.</li>
                </ul>
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
                                Top Management Profile​ (1 Month)
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 32,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Top Management Profile​ (1 Month)">
                            <input type="hidden" name="price" value="32999">
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