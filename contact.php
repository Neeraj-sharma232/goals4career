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



        <!-- user form  -->
        <section class=" lg:my-20 md:my-10">
            <div class="grid lg:grid-cols-2 md:grid-cols-1 lg:mx-20 gap-8">
                <div class="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7006.351273459427!2d77.00215744220534!3d28.59450732299951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d10062edff77d%3A0xe36312d42117c917!2sShyam%20Vihar%20Post%20Office!5e0!3m2!1sen!2sin!4v1701251755883!5m2!1sen!2sin" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="">
                    <h2 class="lg:text-5xl lg:font-semibold  text-2xl text-[#19468A] mb-4">Please Get In Touch</h2>
                    <p class="lg:text-xl mb-8">If You Have Any Questions Simply Use The Following Contact Details.</p>
                    <form action="" method="post" onsubmit="contect(); reset(); return false;">
                        <div class=" relative mb-6" data-te-input-wrapper-init>
                            <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="Name" placeholder="Example label" />
                            <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Enter Your Name
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="email" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="Email" placeholder="Example label" />
                            <label for="exampleFormControlInputEmail" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Entert Your Email
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="tel" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="Contact" placeholder="Example label" />
                            <label for="exampleFormControlInputTel" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Enter Your Phone
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" required class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="subject" placeholder="Example label" />
                            <label for="exampleFormControlInputTel" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">subject
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <textarea class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="message" rows="3" placeholder="Your message"></textarea>
                            <label for="exampleFormControlTextarea1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#FEC516]">Message</label>
                        </div>
                        <button type="button" value="button" onclick="Send()" class="inline-block rounded bg-[#19468A] px-20 pb-3 pt-3 text-xl font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-[#FEC516] focus:bg-[#FEC516] focus:outline-none focus:ring-0 active:bg-[#FEC516]">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </section>



        <!-- contact details  -->
        <section class="my-10">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 gap-4 lg:mx-20 text-black">
                <div class="bg-[#fff] p-4 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] rounded"><i class="mr-3 lg:text-5xl md:text-4xl sm:text-3xl fa-solid fa-envelope fa-bounce" style="color: #FEC516;"></i> <a href="mailto:info@goalsforcareer.com" class="lg:text-xl text-black hover:text-[#FEC516]">info@goalsforcareer.com</a></div>
                <div class="bg-[#fff] font-family:sans-serif p-4 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] rounded"><i class="mr-3 lg:text-5xl md:text-4xl sm:text-3xl fa-solid fa-phone-volume fa-beat-fade" style="color: #FEC516;"></i> <a href="tel:+91-872 607 0963" class="lg:text-xl text-black hover:text-[#FEC516]"> +91-872 607 0963</a></div>
                <div class="bg-[#fff] p-4 shadow-[0_2px_15px_-3px_rgba(47,100,215,1.02),0_10px_20px_-2px_rgba(47,100,215,1.01)] rounded"><i class="mr-3 lg:text-5xl md:text-4xl sm:text-3xl fa-solid fa-location-dot fa-fade" style="color: #FEC516;"></i> <a href="" class="lg:text-xl text-black hover:text-[#FEC516]">1500/A/Shyam vihar, Najafgarh industrial area, PH-1, New Delhi.110043</a></div>
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