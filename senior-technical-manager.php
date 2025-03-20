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


            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">
                <div class="col-span-2">
                    <div class="flex flex-row rounded-lg bg-white hover:shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] transition duration-300 ease-in-out shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-xl md:flex-row">
                        <img class="rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg" src="assets/company/infos.jpg" alt="" />
                        <div class="flex flex-col justify-start p-6">
                            <h2 class="mb-2 text-xl font-semibold text-[#19468A] dark:text-neutral-50">
                                Senior Technical Manager (Infosys)
                            </h2>
                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                [Full Time]
                            </p>
                        </div>
                    </div>


                    <h2 class="text-2xl text-[#19468A] font-semibold mt-6">Job Description :</h2>

                    <p class="mb-4">Ability to Interact with UX team members to translate User experience wireframes into HTML, CSS templates & production ready prototypes.</p>


                    <p class="mb-4">Good knowledge of optimizing html, CSS / JS for building high performance websites.</p>
                    <p class="mb-4">Multi-browser testing for html /CSS prototypes</p>
                    <p class="mb-4">Interact with developers to translate prototypes into actual angular code.</p>
                    <p class="mb-4">Responsive / Adaptive website knowledge, Less, Sass etc.</p>

                </div>
                <div class="">
                    <h2 class="text-2xl text-[#19468A] font-semibold mt-6">Qualification</h2>
                    <p class="mb-4">You should be an MBA from a recognized university/college.</p>
                    <p class="mb-4">Your years of experience, pedigree, last role is all good to know. But, what we truly value is your knowledge, ideation, agility, team-spirit, can-do attitude and farsightedness.</p>



                    <h2 class="text-2xl text-[#19468A] font-semibold mt-6">Job Requirement</h2>
                    <p class="mb-4">Experience: 4 Year</p>
                    <p class="mb-4">Gender: Both</p>
                    <p class="mb-4">Industry: Development</p>
                    <p class="mb-4">Qualification: Master’s Degree
                    </p>
                    <p class="mb-4">Career Level: Others</p>

                    <h2 class="text-2xl text-[#19468A] font-semibold mt-6">Application Ends: Feb 25 2024</h2>
                    <div class="mt-10">
                        <a href="Application-Form.php" class="bg-[#19468A] px-7 py-3 text-white rounded text-xl hover:bg-[#FEC516]">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
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