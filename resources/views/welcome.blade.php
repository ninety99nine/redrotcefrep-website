@extends('layouts.app')

@section('content')

    <!-- Part 1: Introduction -->
    <div class="overflow-hidden">

        <div class="relative h-full">

            <div class="absolute z-10 w-full h-full cover-image-1"></div>
            <div class="absolute z-20 w-full h-full blur-effect"></div>
            <div class="absolute z-30 w-full h-full bg-black opacity-80"></div>

            <div class="relative lg:h-screen h-max z-50 grid grid-cols-12">

                <div class="md:col-start-3 md:col-span-8 col-start-2 col-span-10">

                    <div class="relative w-40 h-40 mt-20 scale-125">
                        <img class="absolute w-36 z-10 top-2 right-2 logo-rotate-animation" src="{{ asset('/images/app-logo-black-transparent.png') }}">
                        <img class="absolute z-20" src="{{ asset('/images/magic-spinning-particles.gif') }}" loading="lazy">
                    </div>

                    <div class="relative">
                        <h1 class="lg:text-6xl md:text-4xl text-2xl font-semibold italic text-white mt-12">
                            <span class="block">BRINGING E-COMMERCE</span>
                            <span class="block">
                                <span>CLOSER TO</span>
                                <span class="text-gold-500 lg:mr-4 md:mr-3">HOME</span>
                            </span>
                            <span class="block font-extrabold typewrite" data-period="2000" data-type='[ "*250#", "#OpenShop", "#receiveOrders", "#takePayments", "#growFollowers" ]'>
                                <span class="wrap">*250#</span>
                            </span>

                        </h1>
                    </div>

                    <div>
                        <h6 class="lg:text-xl text-md text-white mt-4">For just P2.00 per day, create your store and start selling</h6>
                        <div class="flex items-center mt-4">
                            <h6 class="lg:text-xl text-md text-gold-500 mr-4">~ Available to Orange subscribers</h6>
                            <span class="lg:text-5xl text-3xl">🤩</span>
                        </div>
                    </div>

                </div>

                <div class="md:col-start-3 md:col-span-8 col-start-2 col-span-10 mt-4">

                    <div class="lg:flex lg:justify-between lg:items-center">

                        <a href="https://play.google.com" target="_blank" class="flex justify-center items-center w-60 text-white bg-blue-500 hover:bg-blue-400 active:bg-blue-300 rounded p-4 lg:mb-0 mb-6 google-play-store-button-animation">
                            <img class="w-8 mr-2" src="{{ asset('/images/google-play-icon.png') }}">
                            <div>
                                <span class="semi-bold">Get It On</span>
                                <span class="font-bold">Google Play</span>
                            </div>
                        </a>

                        <div class="flex lg:justify-between justify-start items-center space-x-4">
                            <a href="https://www.orange.co.bw" target="_blank">
                                <img class="w-16" src="{{ asset('/images/orange-logo.png') }}">
                            </a>
                            <a href="https://www.stanbicbank.co.bw" target="_blank">
                                <img class="w-16" src="{{ asset('/images/stanbic-logo.png') }}">
                            </a>
                            <a href="https://www.stanbicbank.co.bw" target="_blank" class="w-32">
                                <span class="text-white">Stanbic Bank Accelerate</span>
                            </a>
                        </div>

                    </div>

                </div>

                <div class="md:col-start-3 md:col-span-8 col-start-2 col-span-10 mt-8">


                    <div class="lg:flex lg:justify-center lg:items-center lg:space-x-4">

                        <span class="lg:inline-block lg:mb-0 lg:text-sm block mb-4 text-xs text-white">Check Us Out</span>

                        <div class="flex lg:justify-center justify-start items-center lg:mb-0 mb-4 space-x-4">
                            <a href="https://www.facebook.com/profile.php?id=61552503999976" class="social-icon-animation-1" target="_blank">
                                <img class="w-12" src="{{ asset('/images/facebook-icon.png') }}">
                            </a>
                            <a href="https://twitter.com/perfectorderbw" class="social-icon-animation-2" target="_blank">
                                <img class="w-12" src="{{ asset('/images/twitter-icon.png') }}">
                            </a>
                            <a href="https://www.tiktok.com/@perfectorderbotswana?is_from_webapp=1&sender_device=pc" class="social-icon-animation-3" target="_blank">
                                <img class="w-14" src="{{ asset('/images/tik-tok-icon.png') }}">
                            </a>
                            <a href="https://www.instagram.com/perfect_order_botswana?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-icon-animation-2" target="_blank">
                                <img class="w-12" src="{{ asset('/images/instagram-icon.png') }}">
                            </a>
                            <a href="https://www.youtube.com/channel/UCK26mdv76tr3Aa28P_s97sg" class="social-icon-animation-1" target="_blank">
                                <img class="w-14" src="{{ asset('/images/youtube-icon.png') }}">
                            </a>
                        </div>

                        <span class="lg:inline-block lg:mb-0 lg:text-sm block mb-8 text-xs text-white">And Join The Movement</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Part 2: Problem -->
    <div class="overflow-hidden">

        <div class="grid grid-cols-12 bg-black relative">

            <div class="absolute z-10 w-full h-full cover-image-1x"></div>
            <div class="absolute z-20 w-full h-full blur-effect-10px"></div>
            <div class="absolute z-30 w-full h-full bg-black/95 opacity-90"></div>


            <div class="relative z-50 col-start-2 col-span-10 pt-12 md:pb-16 pb-4">
                <h1 class="lg:text-6xl md:text-4xl text-3xl font-semibold italic text-gold-500 mb-6 rise-up-animation">PROBLEM</h1>

                <h2 class="lg:text-xl text-md text-white italic mb-6 rise-up-animation">Westernised E-commerce Is Not Tailored For the avarage motswana</h2>
                <p class="lg:text-4xl text-lg text-white text-justify mb-8 rise-up-animation">The primary reason for low e-commerce adoption is that Western solutions don't fit the <span class="font-semibold">needs</span>, <span class="font-semibold">behaviours</span>, and <span class="font-semibold">local culture</span> of Botswana and Africa</p>

                <div class="grid grid-cols-12 lg:gap-16">

                    <div class="lg:col-span-6 col-span-12 relative">
                        <div class="image-soft-edges rise-up-animation">
                            <img src="{{ asset('/images/seller-with-customer.jpg') }}" class="rounded-2xl">
                        </div>
                    </div>

                    <div class="lg:col-span-6 col-span-12">

                        <div class="flex mt-8 mb-8">
                            <span class="lg:text-5xl text-3xl mr-4 rise-up-animation">🙁</span>
                            <span class="lg:text-2xl text-md text-white rise-up-animation">Websites are typically too complex for non-tech savvy people to setup</span>
                        </div>

                        <div class="flex mb-8">
                            <span class="lg:text-5xl text-3xl mr-4 rise-up-animation">😔</span>
                            <span class="lg:text-2xl text-md text-white rise-up-animation">Constant need for data and Wi-Fi is cutting off most rural communities</span>
                        </div>

                        <div class="flex mb-8">
                            <span class="lg:text-5xl text-3xl mr-4 rise-up-animation">😭</span>
                            <span class="lg:text-2xl text-md text-white rise-up-animation">Mobile money payments which are more popular in developing countries are less supported by international e-commerce sites</span>
                        </div>

                    </div>



                </div>

            </div>

        </div>
    </div>

    <!-- Part 3: SO WHAT WORKS -->
    <div class="overflow-hidden">

        <div class="grid grid-cols-12 bg-black relative">

            <div class="absolute z-10 w-full h-full cover-image-2"></div>
            <div class="absolute z-20 w-full h-full blur-effect"></div>
            <div class="absolute z-30 w-full h-full bg-black opacity-80"></div>

            <div class="col-start-2 col-span-10 relative pt-4 pb-16 z-40">

                <div class="grid grid-cols-12 gap-6">

                    <div class="lg:col-span-6 col-span-12">

                        <h1 class="lg:text-6xl md:text-4xl text-3xl font-semibold italic text-gold-500 mt-6 mb-4 rise-up-animation">SO WHAT WORKS?</h1>
                        <p class="md:text-xl text-md text-white mb-6 rise-up-animation">The day to day motswana is used to using mobile services to buy airtime, mobile data, purchase electricity, pay for DSTV, access banking services and send money</p>
                        <p class="md:text-xl text-md italic text-gold-500 mb-6 rise-up-animation">~ because it works!</p>

                        <div class="grid grid-cols-12 lg:gap-4">

                            <div class="md:col-span-6 col-span-12 lg:mb-0 mb-8">
                                <img src="{{ asset('/images/lady-with-bicycle.jpg') }}" class="rounded-xl shadow-sm shadow-gray-50 lg:mt-8 md:mb-6 rise-up-animation w-60" data-animation-delay="0.2">
                            </div>

                            <div class="md:col-span-6 col-span-12">

                                <div class="rise-up-animation">

                                    <div class="relative mx-auto border-gray-500 dark:border-gray-500 bg-gray-500 border-[8px] rounded-[1.8rem] w-min h-min">
                                        <div class="h-[24px] w-[4px] bg-gray-500 dark:bg-gray-500 absolute -start-[12px] top-[58px] rounded-s-sm"></div>
                                        <div class="h-[34px] w-[4px] bg-gray-500 dark:bg-gray-500 absolute -start-[12px] top-[100px] rounded-s-sm"></div>
                                        <div class="h-[34px] w-[4px] bg-gray-500 dark:bg-gray-500 absolute -start-[12px] top-[144px] rounded-s-sm"></div>
                                        <div class="h-[48px] w-[4px] bg-gray-500 dark:bg-gray-500 absolute -end-[12px] top-[114px] rounded-e-sm"></div>
                                        <div class="rounded-[1.5rem] overflow-hidden w-[220px] h-[455px] bg-white dark:bg-gray-500">

                                            <div class="relative flex items-center w-full h-full pb-40 phone-bg">

                                                <div class="absolute z-10 top-0 left-0 right-0 bottom-0 phone-blur-effect"></div>

                                                <div class="ussd-simulator relative z-20 w-full">

                                                    <div class="bg-white mx-4 px-4 rounded-xl py-4 rise-up-animation">

                                                        <div class="ussd-simulator-content">

                                                            <p class="text-xs ussd-simulator-text whitespace-pre-line">
                                                                Select your choice

                                                                1. Buy data
                                                                2. Buy airtime
                                                                3. Buy electricity
                                                            </p>

                                                            <div class="ussd-simulator-reply w-full flex items-center border-b-2 mt-6 mb-4">
                                                                <p class="text-sm ussd-simulator-reply-text whitespace-nowrap"></p>
                                                                <div class="ussd-simulator-reply-cursor typing-cursor blinking"></div>
                                                            </div>

                                                            <div class="ussd-simulator-actions flex justify-center items-center space-x-6">
                                                                <p class="text-xs cursor-pointer hover:opacity-50">Cancel</p>
                                                                <p>|</p>
                                                                <p class="text-xs ussd-simulator-send-action cursor-pointer hover:opacity-50">Send</p>
                                                            </div>

                                                        </div>

                                                        <div class="ussd-loader hidden">
                                                            <div class="flex justify-center items-center">
                                                                <svg aria-hidden="true" class="w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                                                </svg>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="ussd-simulator-outer-progress-bar relative h-1 bg-gray-300 mt-4 mx-8 rounded-xl overflow-clip rise-up-animation">
                                                        <div class="absolute z-10 left-0 right-0 -top-2 bottom-0 text-gray-500">
                                                            <div class="ussd-simulator-progress-bar-divider flex justify-evenly"></div>
                                                        </div>
                                                        <div class="ussd-simulator-inner-progress-bar absolute z-20 h-full bg-green-500" style="width:0;"></div>
                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="lg:col-span-6 col-span-12">

                        <h1 class="md:text-4xl text-2xl font-semibold italic text-gold-500 mt-12 mb-4 rise-up-animation">MOBILE COMMERCE FOR ALL</h1>
                        <p class="md:text-xl text-md text-white mb-6 rise-up-animation">We've therefore transformed this simple, inclusive technology into a powerful e-commerce ecosystem to empower batswana to sell conveniently, like selling event tickets as easy as airtime</p>
                        <div class="flex space-x-4 md:text-xl text-md italic text-gold-500 mb-6 whitespace-break-spaces rise-up-animation">
                            <span class="rise-up-animation" data-animation-delay="0">#OpenShop</span>
                            <span class="rise-up-animation" data-animation-delay="0.1">#receiveOrders</span>
                            <span class="rise-up-animation" data-animation-delay="0.2">#takePayments</span>
                        </div>

                        <div class="grid grid-cols-12 lg:gap-4">

                            <div class="md:col-span-6 col-span-12">

                                <div class="rise-up-animation">

                                    <div class="lg:scale-down-phone origin-top-left">
                                        <div class="relative line mx-auto border-gray-500 dark:border-gray-800 bg-gray-500 dark:bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                                            <div class="h-[32px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                                            <div class="h-[46px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                                            <div class="h-[46px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                                            <div class="h-[64px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                                            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">

                                                <div class="relative flex items-center w-full h-full pb-40 phone-bg">

                                                    <div class="absolute z-10 top-0 left-0 right-0 bottom-0 phone-blur-effect"></div>

                                                    <div class="ussd-simulator relative z-20 w-full"
                                                        data-content=
                                                        "
                                                        Gabz Marathon
                                                        Select your ticket

                                                        1. VIP - P500.00
                                                        2. VVIP - P1000.00
                                                        3. Standard - P200.00

                                                        |

                                                        How many do you want of VIP?

                                                        0.Back

                                                        |

                                                        Total: P1,500.00
                                                        ---
                                                        1. Checkout - Place order
                                                        2. View basket (1)
                                                        3. Apply coupon
                                                        0. Back

                                                        |

                                                        Total: P1,500.00 - Once your order is ready we will contact you. Please confirm to place order

                                                        1. Confirm

                                                        |

                                                        Your order #00001 has been received, we will contact you soon. Thank you :)
                                                        "
                                                        data-reply="1 | 3 | 1 | 1"
                                                        data-reply-delay="1000 | 1000 | 1000 | 1000"
                                                        data-content-delay="5000 | 3000 | 3000 | 5000"
                                                    >

                                                        <div class="bg-white mx-4 px-4 rounded-xl py-4 rise-up-animation">

                                                            <div class="ussd-simulator-content">

                                                                <p class="text-sm ussd-simulator-text whitespace-pre-line"></p>

                                                                <div class="ussd-simulator-reply w-full flex items-center border-b-2 mt-6 mb-4">
                                                                    <p class="text-sm ussd-simulator-reply-text whitespace-nowrap"></p>
                                                                    <div class="ussd-simulator-reply-cursor typing-cursor blinking"></div>
                                                                </div>

                                                                <div class="ussd-simulator-actions flex justify-center space-x-10">
                                                                    <p class="text-sm cursor-pointer hover:opacity-50">Cancel</p>
                                                                    <p>|</p>
                                                                    <p class="text-sm ussd-simulator-send-action cursor-pointer hover:opacity-50">Send</p>
                                                                </div>

                                                            </div>

                                                            <div class="ussd-loader hidden">
                                                                <div class="flex justify-center items-center">
                                                                    <svg aria-hidden="true" class="w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                                                    </svg>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="ussd-simulator-outer-progress-bar relative h-1 bg-gray-300 mt-4 mx-8 rounded-xl overflow-clip rise-up-animation">
                                                            <div class="absolute z-10 left-0 right-0 -top-2 bottom-0 text-gray-500">
                                                                <div class="ussd-simulator-progress-bar-divider flex justify-evenly"></div>
                                                            </div>
                                                            <div class="ussd-simulator-inner-progress-bar absolute z-20 h-full bg-green-500" style="width:0;"></div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="md:col-span-6 col-span-12">

                                <div class="flex lg:justify-normal justify-center items-center space-x-4 lg:mt-4 lg:mb-0 mt-8 mb-8">
                                    <img src="{{ asset('/images/app-logo-black-transparent.png') }}" class="md:w-24 w-12 rise-up-animation" data-animation-delay="0.1">
                                    <p class="md:text-xl text-md text-white italic rise-up-animation" data-animation-delay="0.2">Get your tickets!</p>
                                </div>

                                <img src="{{ asset('/images/marathon.jpg') }}" class="rounded-xl shadow-sm shadow-gray-50 lg:mt-8 md:mb-6 rise-up-animation" data-animation-delay="0.2">

                                <p class="text-sm text-white text-justify rise-up-animation">
                                    <span>Imagine creating a store for your marathon event and listing your tickects in just 2 minutes! Then allowing over</span>
                                    <span class="text-gold-500 text-2xl block">1.7 million subscribers</span>
                                    <span>to buy your tickets in just seconds</span>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Part 4: DIAL *250# -->
    <div class="overflow-hidden">

        <div class="grid grid-cols-12 bg-black relative border-t border-white border-opacity-100">

            <div class="absolute z-10 w-screen h-full cover-image-3"></div>
            <div class="absolute z-20 w-screen h-full blur-effect"></div>
            <div class="absolute z-30 w-screen h-full bg-black opacity-80"></div>

            <div class="col-start-2 col-span-10 relative py-20 z-40">

                <div class="flex items-center justify-center">

                    <div class="text-xl font-semibold text-white rise-up-animation flex flex-col items-center justify-center w-40 h-40 rounded-full border border-white bg-white/5">
                        <h1>DIAL</h1>
                        <h1 class="text-4xl">*250#</h1>
                        <span class="text-4xl">😍</span>
                    </div>

                </div>

                <div class="grid grid-cols-12 gap-6">

                    <div class="col-span-4 h-full">

                        <div class="overflow-hidden space-y-4 p-1 -skew-y-1 rounded-2xl border border-white/25 border-white bg-white/10">
                            <div class="overflow-hidden space-y-2 p-6 rounded-2xl border">

                                <h1 class="text-4xl font-semibold italic text-gold-500 rise-up-animation">HOW DOES IT WORK?</h1>

                                <div class="flex space-x-4 text-white">
                                    <h2 class="text-5xl font-semibold italic text-gold-500 rise-up-animation">1</h2>
                                    <h3 class="mt-4 rise-up-animation">
                                        <span>Create your store and subscribe for just</span>
                                        <span>P2.00</span>
                                        <span>per day</span>
                                    </h3>
                                </div>

                                <div class="flex space-x-4 text-white">
                                    <h2 class="text-5xl font-semibold italic text-gold-500 rise-up-animation">2</h2>
                                    <h3 class="mt-4 rise-up-animation">
                                        <span>Enrich your store with various</span>
                                        <span>products</span>
                                        <span>and</span>
                                        <span>services</span>
                                        <span>to offer to potential customers</span>
                                    </h3>
                                </div>

                                <div class="flex space-x-4 text-white">
                                    <h2 class="text-5xl font-semibold italic text-gold-500 rise-up-animation">3</h2>
                                    <h3 class="mt-4 rise-up-animation">
                                        <span>Your store is instantly published under your mobile number and is easily accessible like this</span>
                                        <span>*250*72882229#</span>
                                    </h3>
                                </div>

                                <div class="flex space-x-4 text-white">
                                    <h2 class="text-5xl font-semibold italic text-gold-500 rise-up-animation">4</h2>
                                    <h3 class="mt-4 rise-up-animation">
                                        <span>Customers dial your store and get instant access to choose from one or more products or services to place their order</span>
                                        <span>in seconds</span>
                                    </h3>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-span-4">

                        <div class="rise-up-animation">

                            <div class="lg:scale-down-phone origin-center">
                                <div class="relative line mx-auto border-gray-500 dark:border-gray-800 bg-gray-500 dark:bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
                                    <div class="h-[32px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-500 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
                                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800">

                                        <div class="relative flex items-center w-full h-full pb-40 phone-bg">

                                            <div class="absolute z-10 top-0 left-0 right-0 bottom-0 phone-blur-effect"></div>

                                            <div id="ussd-simulator-tutorial-display" class="ussd-simulator relative z-20 w-full">

                                                <div class="bg-white mx-4 px-4 rounded-xl py-4 rise-up-animation">

                                                    <div class="ussd-simulator-content">

                                                        <p class="text-sm ussd-simulator-text whitespace-pre-line"></p>

                                                        <div class="ussd-simulator-reply w-full flex items-center border-b-2 mt-6 mb-4">
                                                            <p class="ussd-simulator-reply-text whitespace-nowrap"></p>
                                                            <div class="text-sm ussd-simulator-reply-cursor typing-cursor blinking"></div>
                                                        </div>

                                                        <div class="ussd-simulator-actions flex justify-center space-x-10">
                                                            <p class="text-sm cursor-pointer hover:opacity-50">Cancel</p>
                                                            <p>|</p>
                                                            <p class="text-sm ussd-simulator-send-action cursor-pointer hover:opacity-50">Send</p>
                                                        </div>

                                                    </div>

                                                    <div class="ussd-loader hidden">
                                                        <div class="flex justify-center items-center">
                                                            <svg aria-hidden="true" class="w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="ussd-simulator-outer-progress-bar relative h-1 bg-gray-300 mt-4 mx-8 rounded-xl overflow-clip rise-up-animation">
                                                    <div class="absolute z-10 left-0 right-0 -top-2 bottom-0 text-gray-500">
                                                        <div class="ussd-simulator-progress-bar-divider flex justify-evenly"></div>
                                                    </div>
                                                    <div class="ussd-simulator-inner-progress-bar absolute z-20 h-full bg-green-500" style="width:0;"></div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-span-4 h-full">

                        <div class="overflow-hidden space-y-4 p-1 skew-y-1 rounded-2xl border border-white/25 border-white bg-white/10">
                            <div class="overflow-hidden p-6 rounded-2xl border">

                                <h1 class="text-2xl font-semibold italic text-white rise-up-animation">Getting Started</h1>

                                <div class="text-white/50 space-x-4 my-4 rise-up-animation">
                                    <span class="cursor-pointer underline text-gold-500">Seller</span>
                                    <span>|</span>
                                    <span class="cursor-pointer">Buyer</span>
                                </div>

                                <h1 class="text-md font-semibold italic text-white mb-4 rise-up-animation">How To...</h1>

                                <div class="space-y-2">

                                    <div class="flex items-center space-x-2 cursor-pointer text-gold-500 rise-up-animation" data-tutorial-name="create account">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected hidden"></div>
                                        <span>Create account</span>

                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation" data-tutorial-name="create store">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Create a store</span>

                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation" data-tutorial-name="add products">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Add products</span>

                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation" data-tutorial-name="view product">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>View product</span>

                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation" data-tutorial-name="receive orders">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Receive orders</span>

                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Manage orders</span>

                                    </div>

                                    <div class="flex items-center space-x-2 rise-up-animation">
                                        <span class="text-white/80 italic">Discounts</span>
                                        <div class="border-t border-dotted w-full"></div>
                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Add discounts & promotions</span>

                                    </div>

                                    <div class="flex items-center space-x-2 rise-up-animation">
                                        <span class="text-white/80 italic">Payments</span>
                                        <div class="border-t border-dotted w-full"></div>
                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Receive Orange Money payments</span>

                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Receive Card payments</span>

                                    </div>

                                    <div class="flex items-center space-x-2 rise-up-animation">
                                        <span class="text-white/80 italic w-16">Ask AI</span>
                                        <div class="border-t border-dotted w-full"></div>
                                    </div>

                                    <div class="flex items-center space-x-2 cursor-pointer text-white/50 hover:text-gold-500 rise-up-animation">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ussd-simulator-tutorial-selected w-6 h-6 hidden">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <div class="w-3 h-3 mx-1 rounded-full border border-white/50 ussd-simulator-tutorial-unselected"></div>
                                        <span>Ask anything</span>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Part 5 -->
    <div class="grid grid-cols-12 bg-black text-white pt-8">

        <div class="col-span-4">

            <div class="flex justify-center items-center space-x-4">
                <img class="w-20" src="{{ asset('/images/app-logo-black-transparent.png') }}">
                <div>
                    <h1 class="md:text-2xl text-xl font-semibold italic mb-2">Location</h1>
                    <p class="lg:text-xl text-md">Gaborone, Botswana</p>
                </div>
            </div>

        </div>

        <div class="col-span-4">

            <div class="flex flex-col items-center">
                <h1 class="md:text-2xl text-xl font-semibold italic mb-2">Email Addresses</h1>
                <p class="lg:text-lg text-md">pinkysesiane@gmail.com</p>
                <p class="lg:text-lg text-md">brandontabona@gmail.com</p>
            </div>

        </div>

        <div class="col-span-4">

            <div class="flex flex-col items-center">
                <h1 class="md:text-2xl text-xl font-semibold italic mb-2">Contacts</h1>
                <p class="lg:text-lg text-md">Bonolo @ +267 77479083</p>
                <p class="lg:text-lg text-md">Julian @ +267 72882239</p>
            </div>

        </div>

        <div class="col-span-12 border-t border-white/20 mt-8 pt-8 pb-8">

            <h1 class="md:text-lg text-md text-center mb-2">
                Copyright © {{ date('Y') }} Perfect Order
            </h1>

        </div>

    </div>

@endsection

@push('scripts')
<script>

    document.addEventListener('DOMContentLoaded', function() {

        var tutorials = [
            {
                'create account': [
                    {
                        'content': 'Welcome to Perfect Order! Get started by creating your account\n---\n\n1. Continue \n2. Exit',
                        'contentDelay': '4000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Enter your first name e.g Neo \n0.Back',
                        'contentDelay': '3000',
                        'replyDelay': '2000',
                        'reply': 'Bonolo',
                    },
                    {
                        'content': 'Enter your last name e.g Pule \n0.Back',
                        'contentDelay': '3000',
                        'replyDelay': '2000',
                        'reply': 'Tabona',
                    },
                    {
                        'content': 'Please take a moment to read and accept our terms and conditions https://perfectorderbotswana.com/terms \n\n1. Accept Terms and Conditions \n2. Exit',
                        'contentDelay': '4000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Hi Bonolo, your Perfect Order account was created successfully!\n---\n\n1. Continue',
                        'contentDelay': '4000',
                        'replyDelay': '1000',
                        'showConfetti': true,
                        'reply': '1',
                    }
                ]
            },
            {
                'create store': [
                    {
                        'content': 'Hi Bonolo, \n\n1. Buy \n2. Create store \n3. Ask AI \n4. Ts and Cs',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '2',
                    },
                    {
                        'content': 'Give your store a name e.g Heavenly Cakes',
                        'contentDelay': '3000',
                        'replyDelay': '3000',
                        'reply': 'BlissBites',
                    },
                    {
                        'content': 'Give your store a short description e.g Best cakes in Gabs city',
                        'contentDelay': '3000',
                        'replyDelay': '6000',
                        'reply': 'Delicious home made cakes',
                    },
                    {
                        'content': 'Hi Bonolo, BlissBites was created successfully!\n---\n\n1. Continue',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Subscribe to enable customer access to BlissBites \n\n1. P2 per day \n2. 5 days - P10 \n3. 15 days - P30 \n4. 30 days - P60 0 \n0. Main Menu',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '4',
                    },
                    {
                        'content': 'You are subscribing for access to BlissBites for 30 days priced at P60.00 \n\n1. confirm \n0. Back',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Hi Bonolo, your subscription was paid successfully! Enjoy :)',
                        'contentDelay': '4000',
                        'showConfetti': true,
                        'replyDelay': null,
                        'reply': null
                    }
                ]
            },
            {
                'add products': [
                    {
                        'content': 'Hi Bonolo, \n1. Buy \n2. BlissBites \n3. My stores (1) \n4. Ask AI 5. Ts and Cs',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '2',
                    },
                    {
                        'content': 'BlissBites (Manage) Delicious home made cakes\n---\n\n1. Add Product \n0. Back \n00. Main Menu',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Enter your product name e.g Fruit cake',
                        'contentDelay': '3000',
                        'replyDelay': '4000',
                        'reply': 'Strawberry cake',
                    },
                    {
                        'content': 'Enter your product price e.g 34 or 34.95',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '50',
                    },
                    {
                        'content': 'How much stock do you have? \n1. Unlimited \n2. Limited \n0. Back',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Hi Bonolo, Strawberry cake was created successfully!\n---\n\n1. Continue',
                        'contentDelay': '4000',
                        'showConfetti': true,
                        'replyDelay': '1000',
                        'reply': '1',
                    }
                ]
            },
            {
                'view product': [
                    {
                        'content': 'Hi Bonolo, \n1. Buy \n2. BlissBites \n3. My stores (1) \n4. Ask AI 5. Ts and Cs',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '2',
                    },
                    {
                        'content': 'BlissBites (Manage) Delicious home made cakes\n---\n\n1. Add Product \n0. Back \n00. Main Menu',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Products\n---\n\n1. Create product 2. Show products (1) \n0. Back \n00. Main Menu',
                        'contentDelay': '3000',
                        'replyDelay': '4000',
                        'reply': 'Strawberry cake',
                    },
                    {
                        'content': 'Products\n---\n\n1. Strawberry cake \n0. Back \n00. Main Menu',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '50',
                    },
                    {
                        'content': 'How much stock do you have? \n1. Unlimited \n2. Limited \n0. Back',
                        'contentDelay': '3000',
                        'replyDelay': '1000',
                        'reply': '1',
                    },
                    {
                        'content': 'Hi Bonolo, Strawberry cake was created successfully!\n---\n\n1. Continue',
                        'contentDelay': '4000',
                        'showConfetti': true,
                        'replyDelay': '1000',
                        'reply': '1',
                    }
                ]
            }
        ];

        const ussdSimulatorTutorialDisplayElement = document.querySelector('#ussd-simulator-tutorial-display');
        const firstUssdSimulatorTutorialElement = document.querySelector('[data-tutorial-name]');
        const ussdSimulatorTutorialElements = document.querySelectorAll('[data-tutorial-name]');

        //  Show tutorial of first element by default
        showTutorial(firstUssdSimulatorTutorialElement);

        // Add an event listener for the click event on each tutorial element
        ussdSimulatorTutorialElements.forEach(element => {

            element.addEventListener('click', function () {

                // Get the clicked element
                const clickedElement = this;

                //  Show tutorial of clicked element
                showTutorial(clickedElement);

            });
        });

        function showTutorial(clickedElement) {

            // Capture the value of the data-tutorial-name e.g create store
            const tutorialName = clickedElement.dataset.tutorialName;

            // Use the value of the data-tutorial-name to get the selected tutorial
            const tutorial = tutorials.find(tutorial => tutorial[tutorialName])[tutorialName];

            ussdSimulatorTutorialDisplayElement.dataset.content = tutorial.map(step => step['content']).join(' | ');
            ussdSimulatorTutorialDisplayElement.dataset.showConfetti = tutorial.map(step => step['showConfetti']).join(' | ');
            ussdSimulatorTutorialDisplayElement.dataset.contentDelay = tutorial.map(step => step['contentDelay']).join(' | ');
            ussdSimulatorTutorialDisplayElement.dataset.reply = tutorial.map(step => step['reply']).filter(reply => reply !== null).join(' | ');
            ussdSimulatorTutorialDisplayElement.dataset.replyDelay = tutorial.map(step => step['replyDelay']).filter(replyDelay => replyDelay !== null).join(' | ');

            ussdSimulatorTutorialDisplayElement.style.transition = `opacity 0.3s ease-in-out`;
            ussdSimulatorTutorialDisplayElement.style.opacity = `0`;

            let ussdSimulatorTutorialSelectedElement;
            let ussdSimulatorTutorialUnselectedElement;

            //  For every clickable ussd simulator tutorial element
            ussdSimulatorTutorialElements.forEach(element => {

                //  Remove the active gold text color
                element.classList.remove('text-gold-500')

                //  Add the inactive grey text color
                element.classList.add('text-white/50', 'hover:text-gold-500');

                //  Select the play icon
                ussdSimulatorTutorialSelectedElement = element.querySelector('.ussd-simulator-tutorial-selected');

                //  Select the circle icon
                ussdSimulatorTutorialUnselectedElement = element.querySelector('.ussd-simulator-tutorial-unselected');

                //  Hide the play icon
                ussdSimulatorTutorialSelectedElement.classList.add('hidden');

                //  Unhide the circle icon
                ussdSimulatorTutorialUnselectedElement.classList.remove('hidden');

            });

            //  Select the play icon of the current element we just clicked on
            ussdSimulatorTutorialSelectedElement = clickedElement.querySelector('.ussd-simulator-tutorial-selected');

            //  Select the circle icon of the current element we just clicked on
            ussdSimulatorTutorialUnselectedElement = clickedElement.querySelector('.ussd-simulator-tutorial-unselected');

            //  Show the play icon
            ussdSimulatorTutorialSelectedElement.classList.remove('hidden');

            //  Hide the circle icon
            ussdSimulatorTutorialUnselectedElement.classList.add('hidden');

            //  Add the active gold text color
            clickedElement.classList.add('text-gold-500')

            //  Remove the inactive grey text color
            clickedElement.classList.remove('text-white/50', 'hover:text-gold-500');

            setTimeout(() => {

                //  If this simulator has run at least once, then the restartUssdSimulation must be available
                if(ussdSimulatorTutorialDisplayElement.restartUssdSimulation != undefined) {

                    //  Restart the simulation incase the simulation is not starting from the begining
                    ussdSimulatorTutorialDisplayElement.restartUssdSimulation();

                }

                setTimeout(() => {
                    ussdSimulatorTutorialDisplayElement.style.opacity = `1`;
                }, 250);

            }, 300);

        }

    });


    document.addEventListener('DOMContentLoaded', function() {

        //  This method is used to create the type writting effect
        //  Reference: https://css-tricks.com/snippets/css/typewriter-effect
        function typeWritingEffect() {

            //  Start: The code below is used to create the typewriting effect
            //  Reference: https://css-tricks.com/snippets/css/typewriter-effect
            var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {

                    delta = this.period;
                    this.isDeleting = true;

                } else if (this.isDeleting && this.txt === '') {

                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;

                }

                setTimeout(function() {
                    that.tick();
                }, delta);
            };

            var elements = document.getElementsByClassName('typewrite');

            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');

                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }

            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff }";
            document.body.appendChild(css);

        }

        //  Start the type writing effect
        typeWritingEffect();

    });

    document.addEventListener('DOMContentLoaded', function() {

        const threshold = 0.05;
        const ussdSimulatorElements = document.querySelectorAll('.ussd-simulator');

        // Declare outside of the function to make it accessible globally
        let ussdSimulatorObserver;

        function setupIntersectionObserver() {
            ussdSimulatorObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {

                    const ussdSimulatorElement = entry.target;
                    const isIntersecting = entry.isIntersecting;
                    const hasPassedRoot = entry.boundingClientRect.top < 0;
                    const isRunningSimulation = ussdSimulatorElement.classList.contains('running-simulation');

                    if (isIntersecting || hasPassedRoot) {
                        if (!isRunningSimulation) {
                            startUssdSimulation(ussdSimulatorElement);
                        }
                    } else {
                        if (isRunningSimulation && ussdSimulatorElement.stopUssdSimulation != undefined) {
                            ussdSimulatorElement.stopUssdSimulation();
                        }
                    }
                });
            }, {
                threshold: threshold
            });

            ussdSimulatorElements.forEach(element => {
                ussdSimulatorObserver.observe(element);
            });
        }

        // Setup IntersectionObserver when the page loads
        setupIntersectionObserver();

        // Add an event listener for the visibilitychange event
        document.addEventListener('visibilitychange', function () {

            // Check if the page is hidden e.g., navigating to another webpage
            if (document.hidden) {

                // Page is hidden, clear intervals and timeouts
                ussdSimulatorElements.forEach(ussdSimulatorElement => {

                    const isRunningSimulation = ussdSimulatorElement.classList.contains('running-simulation');

                    if (isRunningSimulation && ussdSimulatorElement.stopUssdSimulation != undefined) {
                        ussdSimulatorElement.stopUssdSimulation();
                    }

                });

            } else {

                // Page is visible, setup IntersectionObserver and start the animation for visible elements
                setupIntersectionObserver();

            }
        });

        function startUssdSimulation(ussdSimulatorElement) {

            //  Indicate that we are starting the USSD Simulation
            ussdSimulatorElement.classList.add('running-simulation');

            //  Capture the elements of this USSD Menu
            const ussdLoader = ussdSimulatorElement.querySelector('.ussd-loader');
            const ussdSimulatorText = ussdSimulatorElement.querySelector('.ussd-simulator-text');
            const ussdSimulatorTypingCursor = ussdSimulatorElement.querySelector('.typing-cursor');
            const ussdSimulatorContent = ussdSimulatorElement.querySelector('.ussd-simulator-content');
            const ussdSimulatorReplyText = ussdSimulatorElement.querySelector('.ussd-simulator-reply-text');
            const ussdSimulatorReplySendAction = ussdSimulatorElement.querySelector('.ussd-simulator-send-action');

            //  Extract and parse the USSD menu data attributes
            const replyValues = ussdSimulatorElement.dataset.reply.split('|');
            const contentValues = ussdSimulatorElement.dataset.content.split('|');
            const replyDelayValues = ussdSimulatorElement.dataset.replyDelay.split('|');
            const contentDelayValues = ussdSimulatorElement.dataset.contentDelay.split('|');
            const showConfettiValues = (ussdSimulatorElement.dataset.showConfetti ?? '').split('|');

            let menuIndex = 0;

            // Keep track of the timeouts
            let timeouts = [];

            //  Add the progress bar dividers
            addProgressBarDividers(ussdSimulatorElement, contentValues);

            function showContentAndReplies() {

                var loaderDelay = 1000;
                var sendActionButtonOnPressDelay = 500;

                //  content: The USSD content e.g Hello World, how are you?
                var content = contentValues[menuIndex].trim();

                //  replyText: The USSD user reply e.g I'm fine
                var replyText = (replyValues[menuIndex] || '').trim();

                //  replyDelay: How long we should take showing the reply
                //  e.g 5000 means that the written reply text should be
                //  shown for 5 seconds since the time the first letter
                //  was written. Default is no delay.
                var replyDelay = replyDelayValues[menuIndex] ?? 0;

                //  contentDelay: How long should we show the content
                //  e.g 5000 means that the content text should be
                //  shown for 5 seconds. Default is 4 seconds.
                var contentDelay = contentDelayValues[menuIndex] ?? 4000;

                console.log('showConfettiValues');
                console.log(showConfettiValues);
                console.log('showConfettiValues[menuIndex]');
                console.log(showConfettiValues[menuIndex]);

                //  showConfetti: Whether we should trigger confetti after last content
                var showConfetti = (showConfettiValues[menuIndex] ?? 'false').trim() == 'true';

                console.log('showConfettiValues');
                console.log(showConfettiValues);

                // Show the ussd simulator (if hidden from previous iteration, then unhide)
                ussdSimulatorContent.classList.remove('hidden');

                // Set the ussd simulator content immediately (This is what the user sees)
                ussdSimulatorText.innerText = content;

                //  Show the confett
                if(showConfetti) {

                    confetti({spread: 90});

                }

                // Add reply delay e.g Wait 5 seconds
                const contentDelayTimeout = setTimeout(() => {

                    // Add the user reply (This is what the user is typing as a reply)
                    typeReplyLetters(replyText);

                    // Add reply delay e.g Wait 1 second
                    const replyDelayTimeout = setTimeout(() => {

                        // Add the class to simulate the send action button being pressed
                        ussdSimulatorReplySendAction.classList.add('ussd-simulator-reply-action-pressed');

                        // Add send action button on press delay
                        const sendActionDelayTimeout = setTimeout(() => {

                            // Remove the class to simulate the send action button being pressed
                            ussdSimulatorReplySendAction.classList.remove('ussd-simulator-reply-action-pressed');

                            // Remove the user reply
                            ussdSimulatorReplyText.innerText = '';

                            // Hide the ussd simulator for 1 second
                            ussdSimulatorContent.classList.add('hidden');

                            // Show the loader for 2 seconds
                            ussdLoader.classList.remove('hidden');

                            //  Update the completion progress bar
                            updateCompletionProgressBar(ussdSimulatorElement, menuIndex, contentValues, loaderDelay);

                            // Add loader delay
                            const loaderDelayTimeout = setTimeout(() => {

                                // Hide the loader
                                ussdLoader.classList.add('hidden');

                                // Move to the next menu
                                menuIndex++;

                                //  Check if we are about to show the last screen
                                if (menuIndex == contentValues.length - 1) {

                                    //  Set the action button text to "Done"
                                    ussdSimulatorReplySendAction.innerText = 'Done';

                                }else{

                                    //  Set the action button text to "Send"
                                    ussdSimulatorReplySendAction.innerText = 'Send';

                                }

                                // Check if we have shown all the content
                                if (menuIndex == contentValues.length) {

                                    //  Reset the menu index
                                    menuIndex = 0;

                                    //  Reset the completion progress bar
                                    resetCompletionProgressBar(ussdSimulatorElement);

                                }

                                // Repeat the process for the next menu
                                showContentAndReplies();

                            }, loaderDelay);

                            // Save the timeout to the timeouts array
                            timeouts.push(loaderDelayTimeout);

                        }, sendActionButtonOnPressDelay);

                        // Save the timeout to the timeouts array
                        timeouts.push(sendActionDelayTimeout);

                    }, replyDelay);

                    // Save the timeout to the timeouts array
                    timeouts.push(replyDelayTimeout);

                }, contentDelay);

                // Save the timeout to the timeouts array
                timeouts.push(contentDelayTimeout);
            }

            // Add the user reply one letter at a time
            function typeReplyLetters(replyText) {

                if(replyText.trim() != '') {

                    let index = 0;

                    //  Pause the cursor blinking effect
                    ussdSimulatorTypingCursor.classList.remove('blinking');

                    ussdSimulatorElement.typingInterval = setInterval(() => {

                        // Get the substring up to the current index
                        const currentText = replyText.slice(0, index + 1);

                        //  Update the USSD simulator reply text
                        ussdSimulatorReplyText.innerText = currentText;

                        index++;

                        // Check if we've typed all the letters
                        if (index === replyText.length) {

                            // Stop the typing interval when done
                            clearInterval(ussdSimulatorElement.typingInterval);

                            //  Resume the cursor blinking effect
                            ussdSimulatorTypingCursor.classList.add('blinking');

                        }

                    // Adjust the interval time as needed
                    }, 200);

                }

            }

            // Attach the stopUssdSimulation function to the ussdSimulatorElement
            ussdSimulatorElement.stopUssdSimulation = function () {

                // Reset the USSD simulator reply text
                ussdSimulatorReplyText.innerText = '';

                // Stop the typing interval
                clearInterval(ussdSimulatorElement.typingInterval);

                //  Resume the cursor blinking effect
                ussdSimulatorTypingCursor.classList.add('blinking');

                // Reset the action button text to "Send"
                ussdSimulatorReplySendAction.innerText = 'Send';

                // Reset the ussd simulator text to the first text
                ussdSimulatorText.innerText = contentValues[0].trim();

                // Clear all timeouts when the simulation is stopped
                timeouts.forEach(timeout => clearTimeout(timeout));

                // Clear the timeouts array
                ussdSimulatorElement.timeouts = [];

                // Reset completion progress bar
                resetCompletionProgressBar(ussdSimulatorElement);

                // Hide the loader (if visible)
                ussdLoader.classList.add('hidden');

                // Show the ussd simulator (if hidden)
                ussdSimulatorContent.classList.remove('hidden');

                //  Indicate that we are stopping the USSD Simulation
                ussdSimulatorElement.classList.remove('running-simulation');

                // Remove the class to simulate the send action button being pressed
                ussdSimulatorReplySendAction.classList.remove('ussd-simulator-reply-action-pressed');

            };

            // Attach the restartUssdSimulation function to the ussdSimulatorElement
            ussdSimulatorElement.restartUssdSimulation = function () {
                ussdSimulatorElement.stopUssdSimulation();
                startUssdSimulation(ussdSimulatorElement);
            };

            // Start the USSD simulation
            showContentAndReplies();

        }


        function addProgressBarDividers(ussdSimulatorElement, contentValues) {

            if (contentValues.length) {

                // Get the progress bar divider element
                const progressBarDivider = ussdSimulatorElement.querySelector('.ussd-simulator-progress-bar-divider');

                // Check if we have separators added
                const progressBarSeparators = progressBarDivider.querySelectorAll('.ussd-simulator-progress-bar-separator');

                // Append separators based on contentValues
                const separatorCount = contentValues.length - 2;

                if(separatorCount >= 1) {

                    progressBarDivider.innerHTML = Array(separatorCount).fill('<div class="ussd-simulator-progress-bar-separator">|</div>').join('');

                }

            }

        }

        function updateCompletionProgressBar(ussdSimulatorElement, menuIndex, contentValues, loaderDelay) {

            //  Get the progress bar element
            const progressBar = ussdSimulatorElement.querySelector('.ussd-simulator-inner-progress-bar');

            // Update completion percentage
            const completionPercentage = (menuIndex + 1) / (contentValues.length - 1) * 100;

            // Update progress bar with animation based on reply delay
            progressBar.style.transition = `width ${loaderDelay / 1000}s ease-in-out`;
            progressBar.style.width = `${completionPercentage}%`;

        }

        function resetCompletionProgressBar(ussdSimulatorElement) {

            //  Get the progress bar element
            const progressBar = ussdSimulatorElement.querySelector('.ussd-simulator-inner-progress-bar');
            progressBar.style.transition = `width 0s ease-in-out`;
            progressBar.style.width = '0%';

        }

    });

    document.addEventListener('DOMContentLoaded', function () {

        // Adjust threshold the as needed
        // If "threshold = 0.2": This means that if at least 20% of the target
        // element is visible, then the observer's callback will be triggered
        const threshold = 0.2;

        // Select all elements using the rise-up-animation class
        const riseUpAnimationElements = document.querySelectorAll('.rise-up-animation');

        // Wrap each "rise-up-animation" element with a div named "rise-up-animation-wrapper"
        riseUpAnimationElements.forEach(element => {
            const wrapperDiv = document.createElement('div');
            wrapperDiv.classList.add('rise-up-animation-wrapper');
            element.parentNode.insertBefore(wrapperDiv, element);
            wrapperDiv.appendChild(element);
        });

        // Select all elements using the rise-up-animation-wrapper class
        const riseUpAnimationWrapperElements = document.querySelectorAll('.rise-up-animation-wrapper');

        // Initialize IntersectionObserver
        const riseUpAnimationObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {

                const riseUpAnimationWrapperElement = entry.target;
                const riseUpAnimationElement = riseUpAnimationWrapperElement.querySelector('.rise-up-animation');
                const riseUpAnimationElementTagName = riseUpAnimationElement.tagName.toLowerCase();

                const animationDelay = riseUpAnimationElement.dataset.animationDelay || 0;
                const animationDuration = riseUpAnimationElement.dataset.animationDuration || 1;
                const animationScaleStop = riseUpAnimationElement.dataset.animationScaleStop || 1;
                const animationScaleStart = riseUpAnimationElement.dataset.animationScaleStart || 1;
                const animationRotateStop = riseUpAnimationElement.dataset.animationRotateStop || 0;
                const animationRotateStart = riseUpAnimationElement.dataset.animationRotateStart || 0;
                const animationTranslateXStop = riseUpAnimationElement.dataset.animationTranslateXStop || 0;
                const animationTranslateYStop = riseUpAnimationElement.dataset.animationTranslateYStop || 0;
                const animationTranslateXStart = riseUpAnimationElement.dataset.animationTranslateXStart || 0;
                const animationTranslateYStart = riseUpAnimationElement.dataset.animationTranslateYStart || 200;

                //  Check if we are intersecting this element
                const isIntersecting = entry.isIntersecting;
                const hasPassedRoot = entry.boundingClientRect.top < 0;

                //  Check if this element is a type of <a> and <span> element
                if(riseUpAnimationElementTagName == 'a' || riseUpAnimationElementTagName == 'span') {

                    //  The <a> and <span> elementS cannot be transformed unless we add the inline-block property
                    riseUpAnimationElement.style.display = 'inline-block';

                }

                if (isIntersecting || hasPassedRoot) {

                    riseUpAnimationElement.style.transition = `transform ${animationDuration}s ease-out ${animationDelay}s`;
                    riseUpAnimationElement.style.transform = `scale(${animationScaleStop}) translate(${animationTranslateXStop}px, ${animationTranslateYStop}px) rotate(${animationRotateStop}deg)`;

                }else{

                    riseUpAnimationElement.style.transition = `transform ${animationDuration}s ease-in-out ${animationDelay}s`;
                    riseUpAnimationElement.style.transform = `scale(${animationScaleStart}) translate(${animationTranslateXStart}px, ${animationTranslateYStart}px) rotate(${animationRotateStart}deg)`;

                }

            });
        }, {
            threshold: threshold
        });

        // Observe each element
        riseUpAnimationWrapperElements.forEach(element => {
            riseUpAnimationObserver.observe(element);
        });

    });

</script>
@endpush
