<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <?php
    include('link.php');
    ?>
</head>

<body style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <?php
    include('header.php');


    ?>
    <section class="lg:mx-20 md:mx-10 mx-2 py-10">
        <h2 class="text-4xl text-[#19468A] text-center my-10 font-semibold">My Cart</h2>
        <div class="grid lg:grid-cols-3 gap-4">
            <div class="lg:col-span-2">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-left text-sm font-light">
                                    <thead class="border-2 text-center  text-xl text-black font-medium  border-indigo-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">sr no</th>
                                            <th scope="col" class="px-6 py-4">Service</th>
                                            <th scope="col" class="px-6 py-4">Price</th>
                                            <!-- <th scope="col" class="px-6 py-4">Quantity</th> -->
                                            <th scope="col" class="px-6 py-4"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $total = 0;
                                        if (isset($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $key => $value) {
                                                $sr = $key + 1;
                                                $total = $total + $value['price'];
                                                echo "
                                
                                <tr class='border-2 text-center text-black bg-[#EAEAEA] border-b-1 border-indigo-500'>
                                <td>$sr</td>
                                <td>$value[Service]</td>
                                <td>$value[price]</td>
                                
                                <td> <form method='POST' action='mannage_cart.php'>
                                <button name='remove_service' type='submit' class='inline-block rounded bg-[#FE025B] px-6 pb-2 pt-2.5 my-2 text-xs font-medium uppercase leading-normal text-white )]'>Remove</button></td>
                                <input type='hidden' name='Service' value='$value[Service]'>
                                </form>
                            </tr>
                                ";
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="border-2 bg-[#EAEAEA] p-5 rounded shadow-5-strong">
                <h2 class="text-4xl text-[#19468A] m-2 font-semibold">Total - <span class="float-right"><?php
                                                                                                        echo $total;
                                                                                                        ?></span></h2>
                <hr class="border-b-2 border-indigo-500 mb-4">



                <?php
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                ?>

                    <form action="checkout.php" method="POST">
                        <div class=" relative mb-6" data-te-input-wrapper-init>
                            <input type="text" name="name" required class="peer block min-h-[auto] w-full rounded border-0 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Example label" />
                            <label for="exampleFormControlInputText" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Enter Your Name
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="email" name="email" required class="peer block min-h-[auto] w-full rounded border-0 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Example label" />
                            <label for="exampleFormControlInputEmail" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Enter Your Email
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="tel" name="phone" required class="peer block min-h-[auto] w-full rounded border-0 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Example label" />
                            <label for="exampleFormControlInputTel" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Enter Your Phone
                            </label>
                        </div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" name="address" required class="peer block min-h-[auto] w-full rounded border-0 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-[#d2284a] data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-[#d2284a] [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Example label" />
                            <label for="exampleFormControlInputTel" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-black transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-[#FEC516] peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-[#d2284a]">Address
                            </label>
                        </div>
                        <input type="hidden" name="Service" value="<?php $value['Service'] ?>">
                        <input type="hidden" name="price" value="<?php $value['price']  ?>">
                        <input type="hidden" name="total_price" value="<?php echo $total; ?>">
                        <button type='submit' name="purchase" class='inline-block float-right rounded bg-[#19468A] hover:bg-[#FEC516] px-6 pb-2 pt-2.5 my-2 text-xs font-medium uppercase leading-normal text-white )]'>Make Purchase</button>
                    </form>


                <?php
                }
                ?>
            </div>
        </div>

    </section>
    <?php
    include('footer.php');
    include('f_link.php');
    ?>

</body>

</html>