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
        <!-- slider -->
        <div class="relative h-96 overflow-hidden bg-cover bg-no-repeat p-12 text-center lg:h-screen" style="background-image: url('./assets/index-img/slider1.jpg'); background-attachment: fixed;">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(2, 56, 53, 0.4)">
                <div class="flex h-full items-center">
                    <div data-aos="fade-up" class="text-white text-left lg:mx-20 md:mx-10 mx-5">
                        <h2 class="mb-4 lg:text-7xl md:text-5xl text-3xl">
                            We Guide You To The Right Path
                        </h2>
                        <h4 class="mb-6 lg:text-4xl md:text-3xl text-2xl">
                            Achieve your dreams with us
                        </h4>
                        <!-- <p class="lg:text-xl">Over 1 million interactions, 500 success stories Make yours now. We give the customer what is best suited for their career.</p> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- slider -->

        <!-- Make Your Success Story With Us section  -->
        <section class="py-10 bg-[#e5dccf]">
            <div class="grid lg:grid-cols-2 md:grid-cols-1 lg:mx-20 md:mx-10 mx-5 gap-4">
                <div class="my-auto">
                    <h2 class="mb-5 font-semibold lg:text-5xl md:text-3xl text-2xl text-[#19468A]">
                        Make Your Success Story With Us
                    </h2>
                    <p class="">We at Goalsforcareer.com are working to bridge the skills gap, by helping the right employees meet the right employers and vice versa. Our services are designed to help the professional skill development get equipped with the tools to give them an edge over other applicants.</p>

                </div>
                <div class="">
                    <img src="assets/index-img/bg_2.jpg" alt="" class="" width="100%">
                </div>
            </div>
        </section>


        <!-- Career Guidance With Recommendations section  -->
        <section class="py-10">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold text-center text-[#19468A]">Career Guidance With Recommendations</h2>
            <div data-aos="fade-up" class="grid lg:grid-cols-3 my-10 md:grid-cols-1 lg:mx-20 md:mx-10 mx-5 gap-4">
                <div class="block hover:bg-[#FEC516] transition duration-300 ease-in-out shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)]  text-black text-center hover:text-white bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-2.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Find The Right Job
                    </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        Finding the right job is the first step to move ahead.
                    </p>
                </div>
                <div class="block hover:bg-[#FEC516] transition duration-300 ease-in-out shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] text-black text-center hover:text-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-3.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Make A Career Change
                    </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        Second step is to change your career with the right knowledge.
                    </p>
                </div>
                <div class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] text-black text-center hover:text-white bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-4.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Improve Your Profile
                    </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        Final Step is to improve your profile for better opportunity
                    </p>
                </div>

            </div>
        </section>


        <!-- Why You Choose Us section  -->

        <section class="py-10 bg-[#e5dccf]">
            <div class="grid lg:grid-cols-2 md:grid-cols-1 lg:mx-20 md:mx-10 mx-5 gap-4">
                <div class="">
                    <img src="assets/index-img/bg_3.jpg" alt="" class="" width="100%">
                </div>
                <div class="my-auto mx-5">
                    <h2 class="mb-5 font-semibold lg:text-5xl md:text-5xl text-2xl text-[#19468A]">
                        Why You Choose Us?</h2>
                    <h3 class="mb-2 text-[#19468A] lg:text-3xl md:text-2xl"><i class="fa-solid fa-check"></i> Over 1 Million Interactions</h3>
                    <p class="mb-5">Our mission is to reach most of the population of the county to make them stand on their feet.</p>
                    <h3 class="mb-2 text-[#19468A] lg:text-3xl md:text-2xl"><i class="fa-solid fa-check"></i> 500 Success Stories</h3>
                    <p class="">Each success stories makes us work even harder as seeing other success make us feel proud of us.</p>
                </div>
            </div>
        </section>


        <!-- Our Best Services For You section  -->
        <section class="py-10">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold text-center text-[#19468A]">Our Services For You</h2>
            <p class="lg:text-xl text-center my-5">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.A wonderful serenity</p>
            <div class="grid lg:grid-cols-3 my-10 md:grid-cols-1 lg:mx-20 md:mx-10 mx-5 gap-4">
                <div data-aos="zoom-in" class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  text-black text-center hover:text-white bg-white py-12 px-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-2.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Resume Writing
                    </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        The job seekers are able to foster the growth and can get a professional resume that can enhance their prospects with our resume writing modules. </p>
                </div>
                <div data-aos="zoom-in" class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  text-black text-center hover:text-white py-12 px-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-3.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Verification Services
                    </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        This profile verification provides the much needed confidence to recruiters, who are searching for profile like yours.
                    </p>
                </div>
                <div data-aos="zoom-in" class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  text-black text-center hover:text-white bg-white py-12 px-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-4.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Profile Services </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        The objective is to help individuals in developing their personal brand and creating a strong online presence. </p>
                </div>

                <div data-aos="zoom-in" data-aos-duration="3000" class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  text-black text-center hover:text-white bg-white py-12 px-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-2.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Professional Client Website </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        There is increasing need to be around on the web, as organizations are shifting from hard copies to soft copies and online easy access to candidate details

                    </p>
                </div>
                <div data-aos="zoom-in" data-aos-duration="3000" class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  text-black text-center hover:text-white py-12 px-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-3.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Top Management Profile </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        Make a strong impact with a compelling headline, powerful summary and keyword rich profile. </p>
                </div>
                <div data-aos="zoom-in" data-aos-duration="3000" class="block hover:bg-[#FEC516] transition duration-300 ease-in-out  text-black text-center hover:text-white bg-white py-12 px-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <img src="assets/index-img/img-4.png" alt="" class="w-24 rounded-full mx-auto border-4 bg-white mb-5 border-[#19468A]">
                    <h5 class="mb-2 lg:text-3xl text-2xl font-semibold leading-tight text-[#19468A] font-bold dark:text-neutral-50">
                        Other Services </h5>
                    <p class="mb-4 text-base dark:text-neutral-200">
                        This Service will provide you the personal Relationship Manager, who will help you at every step of your job seeking – right from Career Guidance, profile optimization to company research. </p>
                </div>

            </div>
        </section>


        <!-- services section  -->
        <!-- <section class="overflow-hidden bg-cover bg-no-repeat" style="background-image: url('./assets/index-img/bg_2.jpg'); background-attachment: fixed;">
            <div class="py-10" style="background-color: rgba(34, 35, 36, 0.5)">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-12 gap-5 lg:mx-20 md:mx-10 mx-5">
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/New-Project-2-1.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/fdvd.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/aws.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/qasd.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/qaz-1.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/qwa.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/rty.png" alt=""></div>
                    <div data-aos="flip-right"><img class="w-60 mx-auto transition duration-300 ease-in-out hover:scale-110" src="assets/index-img/vdfvfd.png" alt=""></div>
                </div>
            </div>
        </section> -->


        <!-- services section  -->
        <section class="overflow-hidden bg-cover bg-no-repeat" style="background-image: url('./assets/index-img/bg_2.jpg'); background-attachment: fixed;">
            <div class="py-10" style="background-color: rgba(34, 35, 36, 0.5)">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-12 gap-5 lg:mx-20 md:mx-10 mx-5">
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-building-columns"></i>
                            <h2 class="text-2xl">Banking</h2>
                            <p class="">110 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-receipt"></i>
                            <h2 class="text-2xl">Accounting</h2>
                            <p class="">122 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-hands"></i>
                            <h2 class="text-2xl">Designing</h2>
                            <p class="">112 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-school"></i>
                            <h2 class="text-2xl">Education</h2>
                            <p class="">182 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-person-digging"></i>
                            <h2 class="text-2xl">Construction</h2>
                            <p class="">152 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-registered"></i>
                            <h2 class="text-2xl">Recruitment</h2>
                            <p class="">142 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-user-doctor"></i>
                            <h2 class="text-2xl">Healthcare</h2>
                            <p class="">172 Open Position</p>
                        </div>
                    </div>
                    <div data-aos="flip-right">
                        <div class="text-center bg-[#3061AF] hover:bg-[#fec516] transition duration-300 ease-in-out p-6 text-white">
                            <i class="text-3xl fa-solid fa-gauge-high"></i>
                            <h2 class="text-2xl">Automative</h2>
                            <p class="">162 Open Position</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonials section  -->
        <section class="py-10">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-10 text-center text-[#19468A]">What Our Clint Says</h2>

            <!--Carousel-->
            <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
                <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!--First Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                        <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
                            " Goals for career is the convenient tips that are on the site for example what is applicable to the extent that experience. Exceptionally supportive. I trust that out of all vocation site. Brilliant Calling will be the one that I find profitable work that I like."
                        </p>
                        <div class="mb-6 mt-12 flex justify-center">
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">- Anna Morian</p>
                    </div>

                    <!--Second Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
                            Goals for career has provided us with a comprehensive, fast and well planned marketing strategy that has yielded great results in terms of Social Media. His team are a pleasure to work with, as well as being fast to respond.
                        </p>
                        <div class="mb-6 mt-12 flex justify-center">
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">- Teresa May</p>
                    </div>

                    <!--Third Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
                            “I really like Goals for career. I like the handy tips that are on the site for instance what is relevant as far as experience. Very helpful. I believe that out of all career website. Goals for career will be the one that I find gainful employment that I like.”
                        </p>
                        <div class="mb-6 mt-12 flex justify-center">
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">- Kate Allise</p>
                    </div>

                    <!--fourth Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
                            "Goals for career services has got everything I need. Placement career services is worth much more than I paid. Needless to say we are extremely satisfied with the results." </p>
                        <div class="mb-6 mt-12 flex justify-center">
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">- Kate Allise</p>
                    </div>

                    <!--fifth estimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
                            "Goals for career has literally changed my perspective and has given me a reality check in career options. It helped me to opt for an appropriate career taking into consideration my skills and personality to find the best Job. "
                        </p>
                        <div class="mb-6 mt-12 flex justify-center">
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">- Kate Allise</p>
                    </div>

                    <!--sixth Testimonial / Carousel item-->
                    <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                        <p class="mx-auto max-w-4xl text-xl italic text-neutral-700 dark:text-neutral-300">
                            "It really saves me time and effort. Goals for career services is exactly what our business has been lacking. After using Goals for career services my business skyrocketed!"
                        </p>
                        <div class="mb-6 mt-12 flex justify-center">
                        </div>
                        <p class="text-neutral-500 dark:text-neutral-300">- Kate Allise</p>
                    </div>
                </div>

                <!--Carousel Controls - prev item-->
                <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                </button>
                <!--Carousel Controls - next item-->
                <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-white dark:opacity-50 dark:hover:text-white dark:focus:text-white" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                    <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                </button>
            </div>

        </section>

        <!-- Top Companies are Available section  -->
        <section class="pt-10 pb-28 bg-[#EAEAEA]">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-10 text-center text-[#19468A]">Top Companies are Available </h2>
            <div class="grid lg:grid-cols-10 md:grid-cols-5 grid-cols-2 gap-5 lg:mx-20 md:mx-10 mx-5">
                <div><img src="assets/index-img/c-1.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-2.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-3.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-4.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-5.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-6.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-7.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-8.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-9.png" alt="" class="w-28 mx-auto"></div>
                <div><img src="assets/index-img/c-10.png" alt="" class="w-28 mx-auto"></div>
            </div>
            <div class="float-right lg:mx-20 md:mx-10 mx-5 mt-10">
                <a href="more-compainies.php" class="bg-[#19468A] px-7 py-3 text-white rounded text-xl hover:bg-[#FEC516]">More Company <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>


        <!-- We are enriched with our awesome funfacts section  -->
        <section class="py-10">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-5 text-center text-[#19468A]">We are enriched with our awesome funfacts </h2>
            <p class="text-xl text-center mb-10">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.A wonderful serenity</p>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-5 lg:mx-20 md:mx-10 mx-5">
                <div class="text-center shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700 bg-white py-5">
                    <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-4 text-center text-[#19468A]"><span class="counter">24</span>K+</h2>
                    <h3 class="text-2xl">Happy Clients</h3>
                </div>

                <div class="text-center shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700 bg-white py-5">
                    <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-4 text-center text-[#19468A]"><span class="counter">27</span>+</h2>
                    <h3 class="text-2xl">Expert Team</h3>
                </div>

                <div class="text-center shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700 bg-white py-5">
                    <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-4 text-center text-[#19468A]"><span class="counter">17</span>+</h2>
                    <h3 class="text-2xl">Awards Winner</h3>
                </div>

                <div class="text-center shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700 bg-white py-5">
                    <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-4 text-center text-[#19468A]"><span class="counter">154</span>+</h2>
                    <h3 class="text-2xl">Positive Reviews</h3>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('footer.php');
    include('f_link.php');
    ?>

    <!-- counter cdn js  -->


</body>

</html>