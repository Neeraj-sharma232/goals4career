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
                    <h2 class="text-3xl text-[#19468A] font-semibold my-6">DIGITAL MARKETING</h2>
                    <p class="lg:text-lg mb-4 text-black">Goals for career is a unique hands-on company to help customers with all aspects of digital marketing strategy, social media marketing, search engine marketing (SEO and PPC) and email marketing. A digital marketing company should have a practical, functioning design that has the potential to take your brand to the next level. Our special digital marketing team works to increase your conversions, increase traffic, and expand your online visibility.</p>
                    <p class="lg:text-lg mb-4 text-black">Craze of social networking sites like Facebook, Twitter, Google Plus, Instagram, etc. has brought a revolution in Market industry as well. There is a great need of Digital marketing services to boost your business at the increasing online marketing. It is very important for business owners to become social with users to generate online market.</p>
                    <p class="lg:text-lg mb-4 text-black">Our expert team of Digital Marketing services provider will setup and manage your online profile and make popular your products via advertising campaign on huge social media networks and search engine.</p>


                </div>
                <div>
                    <img src="assets/services_img/digital-marketing.webp" alt="" class="w-full h-full" />

                </div>
            </div>
        </section>



        <p class="text-center lg:mx-20 md:mx-10 mx-4 mt-10">We implement digital marketing campaigns with established, mature & proven strategies thereby ensuring your website gains online visibility enough to meet business objectives. We approach Digital Marketing a little differently. Though we may use techniques like PPC at get started with research since it provides faster results, but our ultimate objective is to ensure long term gained via organic success and other inbound marketing techniques. Our overall objective is to quickly finalize a combination of digital marketing techniques & build a robust digital marketing strategy which works exclusively for your online business & provides best results.

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
                    <input type="hidden" name="Service" value="Digital Marketing Services (Top Management 10+ Year Experience)">
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