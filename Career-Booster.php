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
                    <h2 class="text-4xl text-[#19468A] font-semibold my-6">Career Booster</h2>
                    <p class="lg:text-lg mb-4 text-black">The “Career Booster” is specifically built for individuals who neither have time nor the expertise to design their unique profile to make it stand out from the crowd. Based on our experience, we put together an easy-to-use and powerful methodology that creates compelling and engaging content, which addresses your clients objections, solves their challenges and completely differentiates you from the competition.</p>


                </div>
                <div>
                    <div class="h-full w-full">
                        <img src="assets/services_img/img3.png" data-te-img="assets/services_img/resume-2-1.png" alt="Table Full of Spices" class="w-full cursor-zoom-in rounded shadow-sm data-[te-lightbox-disabled]:cursor-auto" />
                    </div>
                </div>
        </section>

        <section class="py-10 lg:mx-20 md:mx-10 mx-4">


            <div class="">
                <h2 class="text-4xl text-[#19468A] font-semibold my-6">Why Us?</h2>
                <h2 class="text-black mb-2 text-2xl text-semibold my-4"><b>1.</b> Advantage of using profile booster services</h2>
                <p class="lg:text-lg mb-2">There are millions of recruiters and the job seekers as well. But the problem for the job seekers and the recruiters is that they do not have the resources to contact to reach to each and every right recruiter and job seeker.</p>
                <p class="lg:text-lg mb-2">We have the largest database of recruiters and can assist you in getting your resume in front of the recruiters. Within hours of using goals for career the recruiters will reach to you matching your best suitable interests and qualifications.</p>
                <h2 class="text-black mb-2 text-2xl text-semibold my-4"><b>2.</b> Helping hand during recession</h2>
                <p class="lg:text-lg mb-2">In a recession, there are still numerals of opportunities, but the challenge is to contact the right recruiter at the right time. By using goals for career, you can be confident enough that you will be getting best opportunity in the market, even in the recession.</p>
                <h2 class="text-black mb-2 text-2xl text-semibold my-4"><b>3.</b> Service on your desk</h2>
                <p class="lg:text-lg mb-2">At our platform, it is our task to track every single recruiter in every area of India and abroad that could possibly contact you. Though, you can do it all yourself, but it may take you several days, weeks and even months to shortlist the industries, then companies and then the correct information of the company. But we have the large and correct information of the recruiters as your all hassle is ours. We never send the resumes in bulk rather we send one resume at a time, so that it can put the right remark on the recruiter.</p>
                <h2 class="text-black mb-2 text-2xl text-semibold my-4"><b>4.</b> User of Profile Booster</h2>
                <p class="lg:text-lg mb-2">Smart professionals use goals for career because goals for career is the most efficient way to reach out to the matching recruiters with which your potentials highly match</p>
                <h2 class="text-black mb-2 text-2xl text-semibold my-4"><b>5.</b> Result / Call for Job</h2>
                <p class="lg:text-lg mb-2">If a recruiter has an opportunity which is best suiting to your qualifications, experience, salary expectations and other factors, then you will certainly get a job. But taking our service does not mean that you will get a job, it means that your resume will float all over the market and reach to the maximum numbers of recruiter. Anyone purchasing our services may not necessarily get job because of the limited offers and maximum competition in the market.</p>

            </div>

        </section>


        <section class="py-10">
            <div class="grid lg:grid-cols-3 gap-6 lg:mx-20 md:mx-10 mx-4">
                <div></div>
                <div>
                    <form action="mannage_cart.php" method="POST">
                        <div class="block text-center rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                            <h5 class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                                Career Booster
                            </h5>
                            <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 49,999</h2>

                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                Inclusive Of all Taxes
                            </p>
                            <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                                Select This Package
                            </button>
                            <input type="hidden" name="Service" value="Career Booster">
                            <input type="hidden" name="price" value="49999">
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