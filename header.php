<?php
session_start();
$_SESSION = "neeraj Sharma";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company</title>

</head>

<body>
    <!-- Main navigation container -->
    <nav class="flex-no-wrap relative flex w-full items-center justify-between bg-[#FBFBFB] py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4">
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button class="block border-0 bg-transparent px-2 text-[#00276a] hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden" type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto" id="navbarSupportedContent1" data-te-collapse-item>
                <!-- Logo -->
                <a class="mb-4ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0" href="index.php">
                    <img src="assets/logo/logo.jpeg" style="height: 64px" alt="TE Logo" loading="lazy" />
                </a>
                <!-- right navigation links -->
                <ul class="list-style-none ml-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                    <li class="mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref>
                        <!-- home link -->
                        <a class="font-semibold text-[#00276a] transition duration-200 hover:text-[#fec516] hover:ease-in-out focus:text-[#fec516] disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400" href="index.php" data-te-nav-link-ref>Home</a>
                    </li>

                    <!-- about link -->
                    <li class="mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref>
                        <a class="font-semibold text-[#00276a] transition duration-200 hover:text-[#fec516] hover:ease-in-out focus:text-[#fec516] disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="about.php" data-te-nav-link-ref>About</a>
                    </li>

                    <!-- Services link -->
                    <li class="static mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref data-te-dropdown-ref>
                        <a class="flex items-center whitespace-nowrap text-[#00276A] font-semibold pr-1  transition duration-150 ease-in-out hover:text-[#fec516] focus:text-[#fec516] dark:hover:text-white dark:focus:text-white lg:px-2" href="#" data-te-ripple-init data-te-ripple-color="light" type="button" id="dropdownMenuButtonX" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref>Services
                            <span class="ml-2 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <div class="absolute left-0 right-0 top-full z-[1000] mt-0 hidden w-full border-none bg-white bg-clip-padding text-neutral-600 shadow-lg dark:bg-[#fec516] dark:text-neutral-200 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButtonX" data-te-dropdown-menu-ref>
                            <div class="px-6 py-5 lg:px-8">
                                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 text-black">
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Resume Service</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="resume-writing.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Resume Writing</a>
                                        <a href="resume-india.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Resume India</a>
                                        <a href="zap-your-profile.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Zap your profile </a>
                                        <a href="Resume-Broadcasting.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Resume Broadcasting</a>
                                        <a href="International-Resume.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Resume International</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Profile Services</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="Career-Booster.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Career Booster</a>
                                        <a href="Social-Profiler.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Social Profiler</a>
                                        <a href="Priority-Application.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Priority Application</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Career Assistance</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="Career-Guidance.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Career Guidance</a>
                                        <a href="Job-Search-Assistance.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Job Serch Assistance</a>
                                        <a href="interview-preparation.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Interview Preparation</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Verification Services</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <!-- <a href="Verification.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Document Verification</a> -->
                                        <a href="current-employment-verification.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Current Employment Verification</a>
                                        <a href="previous-employment-verification" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Previous Employment verification</a>
                                        <a href="#!" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Education verification</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Professional Client Website</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="professional-client-website-fresher-level-0-3-years.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Professional Client Website <br>&nbsp;&nbsp;&nbsp;&nbsp; Fresher Level (0-3 Years)</a>
                                        <a href="professional-client-website-middle-level-3-10-years.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Professional Client Website <br>&nbsp;&nbsp;&nbsp;&nbsp; Middle Level (3-10 Years)</a>
                                        <a href="professional-client-website-senior-level-10-years.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Professional Client Website <br>&nbsp;&nbsp;&nbsp;&nbsp; Senior Level (10+ Years)</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Top Management Profile</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="top-management-profile-1-month.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Top Management Profile​ (1 Month)</a>
                                        <a href="top-management-profile-2-month.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Top Management Profile​ (2 Month)</a>
                                        <a href="top-management-profile-3-month.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Top Management Profile [3 Month]</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <!-- SEO link -->
                    <li class="mb-4 pl-2 lg:mb-0 lg:pl-0 lg:pr-3" data-te-nav-item-ref data-te-dropdown-ref>

                        <a class="flex items-center text-[#00276a] font-semibold transition duration-200 hover:text-[#fec516] hover:ease-in-out focus:text-[#fec516] disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false">
                            SEO
                            <span class="ml-1 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-[#fec516] [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <li>
                                <a href="seo-marketing.php" class="block w-full py-2 px-5 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] ">SEO Marketing</a>
                            </li>
                            <li>
                                <a href="smo-marketing.php" class="block w-full py-2 px-5 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] ">SMO Marketing</a>
                            </li>
                            <li>
                                <a href="digital-marketing.php" class="block w-full py-2 px-5 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] ">Digital Marketing</a>
                            </li>
                        </ul>
                    </li>


                    <!-- Hiring link -->
                    <li class="static mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref data-te-dropdown-ref>
                        <a class="flex items-center whitespace-nowrap text-[#00276A]  font-semibold pr-1  transition duration-150 ease-in-out hover:text-[#fec516] focus:text-[#fec516] dark:hover:text-white dark:focus:text-white lg:px-2" href="#" data-te-ripple-init data-te-ripple-color="light" type="button" id="dropdownMenuButtonX" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref>Hiring
                            <span class="ml-2 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <div class="absolute left-0 right-0 top-full z-[1000] mt-0 hidden w-full border-none bg-white bg-clip-padding text-neutral-600 shadow-lg dark:bg-[#fec516] dark:text-neutral-200 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButtonX" data-te-dropdown-menu-ref>
                            <div class="px-6 py-5 lg:px-8">
                                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 text-black">
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Placement Categpry</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="IT-Placement.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; IT Placement</a>
                                        <a href="Marketing-Placement.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Marketing Placement</a>
                                        <a href="Sales-Placement.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Sales Placement</a>
                                        <a href="HR-Placement.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; HR Placement</a>
                                        <a href="Engineering-Placement.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Engineering Placement</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Place Location</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="Placement-in-Bangalore.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Placement in Bangalore</a>
                                        <a href="Placement-in-Delhi.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Placement in Delhi</a>
                                        <a href="placement-in-haryana.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Placement in Haryana</a>
                                        <a href="placement-in-hyderabad.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Placement in Hyderabad</a>
                                        <a href="placement-in-pune.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Placement in Pune</a>
                                        <a href="placement-in-kolkata.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Placement in Kolkata</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Demanded Placement</h2>
                                        <hr class="border-1 my-3 border-black mr-32">
                                        <a href="android-developer.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Android Developer</a>
                                        <a href="#!" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; java Developer</a>
                                        <a href="#!" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; PHP Developer</a>
                                        <a href="#!" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Python Developer</a>
                                        <a href="web-developer.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Web Developer</a>
                                        <a href="#!" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; WordPress Developer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Compainies link -->
                    <li class="static mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref data-te-dropdown-ref>
                        <a class="flex items-center whitespace-nowrap text-[#00276A]  font-semibold pr-1  transition duration-150 ease-in-out hover:text-[#fec516] focus:text-[#fec516] dark:hover:text-white dark:focus:text-white lg:px-2" href="#" data-te-ripple-init data-te-ripple-color="light" type="button" id="dropdownMenuButtonX" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref>Companies
                            <span class="ml-2 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <div class="absolute left-0 right-0 top-full z-[1000] mt-0 hidden w-full border-none bg-white bg-clip-padding text-neutral-600 shadow-lg dark:bg-[#fec516] dark:text-neutral-200 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButtonX" data-te-dropdown-menu-ref>
                            <div class="px-6 py-5 lg:px-8">
                                <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3 lg:mx-20 md:mx-10 text-black">
                                    <div>
                                        <a href="ey.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; EY</a>
                                        <a href="itc.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; ITC</a>
                                        <a href="woovly.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Woobly</a>
                                        <a href="indigo.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; IndiGo</a>
                                        <a href="scalers.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; The Scalers</a>
                                    </div>
                                    <div>
                                        <a href="bigone.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Big One Digital</a>
                                        <a href="honeywell.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Honeywellr</a>
                                        <a href="lt.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; L&T</a>
                                        <a href="porter.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Porter</a>
                                        <a href="bharat.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; BharatPe</a>
                                    </div>
                                    <div>
                                        <a href="infosys.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Infosys</a>
                                        <a href="wipro.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Wipro</a>
                                        <a href="katalyst.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Katalyst Marcom</a>
                                        <a href="nykaa.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Nykaa</a>
                                        <a href="more-compainies.php" aria-current="true" class="block w-full py-2 text-[#00276A] transition duration-150 ease-in-out hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; More Companies <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- CV Tips links -->
                    <li class="static mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref data-te-dropdown-ref>
                        <a class="flex items-center whitespace-nowrap text-[#00276A]  font-semibold pr-1  transition duration-150 ease-in-out hover:text-[#fec516] focus:text-[#fec516] dark:hover:text-white dark:focus:text-white lg:px-2" href="#" data-te-ripple-init data-te-ripple-color="light" type="button" id="dropdownMenuButtonX" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref>CV Tips
                            <span class="ml-2 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <div class="absolute z-[1000] float-left rounded mt-0 hidden  border-none bg-white bg-clip-padding text-neutral-600 shadow-lg dark:bg-[#fec516] dark:text-neutral-200 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButtonX" data-te-dropdown-menu-ref>
                            <div class="px-6 py-5 lg:px-8">
                                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2 text-black">
                                    <div>
                                        <a href="basic_writting_resume.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Basics of Writing a Resume</a>
                                        <a href="cover_letter_etiquette.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Cover Letter Etiquette</a>
                                        <a href="resume_prepration.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Resume Preparation</a>

                                        <h2 class="text-xl text-[#00276A] font-semibold">Resume Mistakes</h2>
                                        <a href="tips_to_avoid_resume.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Tips to avoid resume mistake</a>
                                        <a href="why_do_you_need_resume.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Why Do You Need a Resume</a>
                                        <a href="sample_cover_letter.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Sample Cover Letter</a>
                                    </div>
                                    <div>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Basic Etiquette</h2>
                                        <a href="8_red_flags.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; 8 RED FLAGS</a>
                                        <a href="5_steps.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; 5 Steps</a>
                                        <a href="does_dont.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Do's & Don't </a>
                                        <a href="15_golden_tips.php" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; 15 Golden </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Interview Tips  -->
                    <li class="static mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref data-te-dropdown-ref>
                        <a class="flex items-center whitespace-nowrap text-[#00276A]  font-semibold pr-1  transition duration-150 ease-in-out hover:text-[#fec516] focus:text-[#fec516] dark:hover:text-white dark:focus:text-white lg:px-2" href="#" data-te-ripple-init data-te-ripple-color="light" type="button" id="dropdownMenuButtonX" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref>Interview Tips
                            <span class="ml-2 w-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </a>
                        <div class="absolute z-[1000] float-left rounded mt-0 hidden  border-none bg-white bg-clip-padding text-neutral-600 shadow-lg dark:bg-[#fec516] dark:text-neutral-200 [&[data-te-dropdown-show]]:block" aria-labelledby="dropdownMenuButtonX" data-te-dropdown-menu-ref>
                            <div class="px-6 py-5 lg:px-8">
                                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2 text-black">
                                    <div>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; HR Interview</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; How TO Face Interview</a>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Phone Interview</h2>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Etiquette</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Mistakes</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Interview Preparation Tips</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Interview Body Language</a>
                                    </div>
                                    <div>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Types Of Questions</a>
                                        <h2 class="text-xl text-[#00276A] font-semibold">Tips for Interview</h2>

                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Bank Interview Questions</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Campus Interview</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Panal Interview Question</a>
                                        <a href="#" aria-current="true" class="block w-full py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-[#FEC516] "><i class="fa-solid fa-caret-right"></i> &nbsp; Interview Dressing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Contact link -->
                    <li class="mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref>
                        <a class="font-semibold text-[#00276a] transition duration-200 hover:text-[#fec516] hover:ease-in-out focus:text-[#fec516] disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="contact.php" data-te-nav-link-ref>Contact</a>
                    </li>
                    <!-- Account link -->
                    <li class="mb-4 lg:mb-0 lg:pr-3" data-te-nav-item-ref>
                        <a class="font-semibold text-[#00276a] transition duration-200 hover:text-[#fec516] hover:ease-in-out focus:text-[#fec516] disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400" href="#" data-te-nav-link-ref>Account</a>
                    </li>

                </ul>
            </div>
            <div class="relative flex items-center">
                <!-- Cart Icon -->
                <?php

                $count = 0;
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                }
                ?>

                <a class=" relative mr-4 text-[#00276A] text-xl transition duration-200  hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none dark:text-neutral-200 " href="mycart.php">
                    <p class="absolute bottom-auto left-auto right-0 top-0 z-10 inline-block -translate-y-1/2 translate-x-2/4 rotate-0 skew-x-0 skew-y-0 scale-x-100 scale-y-100 whitespace-nowrap rounded-full bg-[#FE025B] px-2 py-1 text-center align-baseline text-xs font-bold leading-none text-white">
                        <?php

                        echo $count;
                        ?>
                    </p>
                    <span class="[&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </nav>


</body>

</html>