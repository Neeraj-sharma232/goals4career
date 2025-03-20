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

        <section class="py-10 bg-[#EAEAEA]">
            <div class="grid lg:grid-cols-3 gap-6 lg:mx-20 md:mx-10 mx-4">
                <div class="lg:col-span-2">
                    <h2 class="text-3xl text-[#19468A] font-semibold my-6">SOCIAL MEDIA OPTIMIZATION (SMO)</h2>
                    <p class="lg:text-lg mb-4 text-black">Snetwork marketing has evolved in recent years and is said to be a highly influential marketing tool for generating awareness via powerful SMO strategy. With Goalsforcareer.com, you can generate higher website traffic, more users, and enhanced online visibility with compelling SEO services. SMO is one of the most significant features of online marketing, and Goalsforcareer.com will design a campaign that is effective and relevant to the brand needs and industry.</p>
                    <p class="lg:text-lg mb-4 text-black">Social Media is powerful tool to promote events, products, and services of a brand by engaging the target audiences through all the popular social media networks like LinkedIn, Facebook, Twitter, Google+ and more. The power of social media is no longer limited to a casual networking process. In recent times, it has become an integral part of any and every business's online marketing strategy. So, making a stronghold on various social platforms and aggressively promoting it to attract better consumer engagement to get the desired business results is the need of the hour!</p>


                </div>
                <div>
                    <img src="assets/services_img/smo.webp" alt="" class="w-full h-full" />
                </div>
            </div>
        </section>



        <p class="text-center lg:mx-20 md:mx-10 mx-4 mt-10">As a SMO Company in India, we understand the need of power and effectiveness of social media in every sphere of our lives. In today’s scenario, people spend most of their time on social media, therefore your mere presence will not help you win them as potential consumers, you can gain them only with optimization of social media by using any social media services.

        </p>


        <section class="flex justify-center py-10">
            <form action="mannage_cart.php" method="POST">
                <div class="block text-center rounded-lg lg:w-96 bg-white p-6 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] dark:bg-neutral-700">
                    <h5 class="mb-2 text-xl font-semibold leading-tight text-neutral-800 dark:text-neutral-50">
                        Top Management
                    </h5>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        10+ Years Experience
                    </p>
                    <h2 class="text-3xl text-[#19468A] font-semibold my-2">RS 99,999</h2>

                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        Inclusive Of all Taxes
                    </p>
                    <button type="submit" name="add_to_cart" class="inline-block rounded bg-[#19468A] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-[#FEC516] hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" data-te-ripple-init data-te-ripple-color="light">
                        <i class="fa-solid fa-cart-shopping"></i> Select This Package
                    </button>
                    <input type="hidden" name="Service" value="SMO Marketing Services (Top Management 10+ Year Experience) ">
                    <input type="hidden" name="price" value="99999">
                </div>
            </form>
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