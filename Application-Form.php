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
    <style>
        * {
            box-sizing: border-box;
        }

        .animate__animated.animate__bounce {
            --animate-duration: 2s;
        }

        input[type=text],
        input[type=email],
        input[type=tel],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=button] {
            background-color: #19468A;
            color: white;
            padding: 12px 50px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }

        input[type=button]:hover {
            background-color: #FEC516;
        }
    </style>

    <main>

        <section class="py-10 lg:mx-20 md:mx-10 mx-2">
            <h2 class="lg:text-6xl md:text-5xl text-3xl font-semibold my-5 text-center text-[#19468A]">Application Form
            </h2>
            <p class="text-xl text-center">Your Information will be confidential so. your are in the safe place.</p>

            <div class="container">
                <form action="">

                    <label for="Name">Name</label>
                    <input type="text" id="Name" placeholder="Enter Your Name....">

                    <label for="Email">Email</label>
                    <input type="email" id="Email" placeholder="Enter Your Email...">

                    <label for="Contact">Contact Number</label>
                    <input type="tel" id="Contact" placeholder="Enter Your Contact number...">

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="Enter Your Subject...">

                    <label for="Experience">Year of Experience</label>
                    <input type="text" id="Experience" placeholder="Enter Your Year of Experience...">

                    <label for="Resume">Resume</label><br>
                    <input type="file" id="Resume" class="mb-5"><br>

                    <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="Enter Your Message" style="height: 200px;"></textarea>
                    <input type="button" value="Submit">
                </form>
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