@extends('layouts.app')

@section('content')

    <!-- Part 1 -->
    <div class="overflow-hidden">

        <div class="relative w-screen h-full">

            <div class="absolute z-10 w-screen h-full cover-image"></div>
            <div class="absolute z-20 w-screen h-full bg-black opacity-80"></div>
            <div class="absolute z-30 w-screen h-full bg-gradient-to-b from-transparent from-95% to-black/85"></div>

            <div class="absolute w-screen z-30 grid grid-cols-12">

                <div class="md:col-start-3 md:col-span-8 col-start-2 col-span-10">

                    <div class="relative w-40 h-40 mt-20 scale-125">
                        <img class="absolute w-36 z-10 top-2 right-2 logo-rotate-animation" src="{{ asset('/images/app-logo-black-transparent.png') }}">
                        <img class="absolute z-20" src="{{ asset('/images/magic-spinning-particles-compressed.gif') }}" loading="lazy">
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

                        <a href="https://play.google.com" target="_blank" class="flex justify-center items-center w-60 text-white bg-blue-500 hover:bg-blue-400 active:bg-blue-300 rounded p-4 lg:mb-0 mb-6 button-animation">
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
                            <a href="https://www.facebook.com/profile.php?id=61552503999976" class="social-icon-animation-2" target="_blank">
                                <img class="w-12" src="{{ asset('/images/facebook-icon.png') }}">
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61552503999976" class="social-icon-animation-1" target="_blank">
                                <img class="w-12" src="{{ asset('/images/twitter-icon.png') }}">
                            </a>
                            <a href="https://www.youtube.com/channel/UCK26mdv76tr3Aa28P_s97sg" class="social-icon-animation-1" target="_blank">
                                <img class="w-14" src="{{ asset('/images/tik-tok-icon.png') }}">
                            </a>
                            <a href="https://www.instagram.com/perfect_order_botswana?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="social-icon-animation-3" target="_blank">
                                <img class="w-12" src="{{ asset('/images/instagram-icon.png') }}">
                            </a>
                            <a href="https://www.youtube.com/channel/UCK26mdv76tr3Aa28P_s97sg" class="social-icon-animation-2" target="_blank">
                                <img class="w-14" src="{{ asset('/images/youtube-icon.png') }}">
                            </a>
                        </div>

                        <span class="lg:inline-block lg:mb-0 lg:text-sm block mb-4 text-xs text-white">And Join The Movement</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Part 2 -->
    <div class="grid grid-cols-12 bg-black ">

    </div>

    <!-- Part 2 -->
    <div class="grid grid-cols-12 bg-black pt-12">

        <div class="col-start-2 col-span-10">

            <h1 class="lg:text-6xl md:text-4xl text-3xl font-semibold italic text-gold-500 mb-6">PROBLEM</h1>
            <h2 class="lg:text-xl text-md text-white italic mb-6">Westernised E-commerce Is Not Tailored For the avarage motswana</h2>
            <p class="lg:text-4xl text-2xl text-white text-justify mb-8">The primary reason for low e-commerce adoption is that Western solutions don't fit the <span class="font-semibold">needs</span>, <span class="font-semibold">behaviours</span>, and <span class="font-semibold">local culture</span> of Botswana and Africa</p>

            <div class="grid grid-cols-12">

                <div class="lg:col-span-6 col-span-12">
                    <p class="text-white">Image</p>
                </div>

                <div class="lg:col-span-6 col-span-12">

                    <div class="flex mb-8">
                        <span class="lg:text-5xl text-3xl mr-4">🙁</span>
                        <span class="lg:text-2xl text-md text-white">Websites are typically too complex for non-tech savvy people to setup</span>
                    </div>

                    <div class="flex mb-8">
                        <span class="lg:text-5xl text-3xl mr-4">😔</span>
                        <span class="lg:text-2xl text-md text-white">Constant need for data and Wi-Fi is cutting off most rural communities</span>
                    </div>

                    <div class="flex mb-8">
                        <span class="lg:text-5xl text-3xl mr-4">😭</span>
                        <span class="lg:text-2xl text-md text-white">Mobile money payments which are more popular in developing countries are less supported by international e-commerce sites</span>
                    </div>

                </div>



            </div>

        </div>

    </div>

    <!-- Part 3 -->
    <div class="grid grid-cols-12 bg-black pt-20">

        <div class="col-start-2 col-span-10">

            <div class="grid grid-cols-12 gap-6">

                <div class="col-span-6 border-r border-gold-500">

                    <h1 class="text-6xl font-semibold italic text-gold-500 mb-6">SO WHAT WORKS?</h1>
                    <p class="text-xl text-white mb-6">The day to day motswana is used to using mobile services to buy airtime, mobile data, purchase electricity, pay for DSTV, access banking services and send money</p>
                    <p class="text-xl italic text-gold-500 mb-6">~ because it works!</p>

                    <div class="grid grid-cols-12 gap-4">

                        <div class="col-span-6">
                            <p class="text-white">Image 1</p>
                        </div>

                        <div class="col-span-6">
                            <p class="text-white">Image 2</p>
                        </div>

                    </div>

                </div>

                <div class="col-span-6">

                    <h1 class="text-4xl font-semibold italic text-gold-500 mt-6 mb-4">MOBILE COMMERCE FOR ALL</h1>
                    <p class="text-xl text-white mb-6">We've therefore transformed this simple, inclusive technology into a powerful e-commerce ecosystem to empower batswana to sell conveniently, like selling event tickets as easy as airtime</p>

                    <div class="grid grid-cols-12 gap-4">

                        <div class="col-span-6">
                            <p class="text-white">Image 1</p>
                        </div>

                        <div class="col-span-6">
                            <div class="flex items-center space-x-4">
                                <img class="w-24" src="{{ asset('/images/app-logo-black-transparent.png') }}">
                                <p class="text-xl text-white italic">Get your tickets!</p>
                            </div>
                            <p class="text-white">Image 2</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Part 4 -->
    <div class="grid grid-cols-12 bg-black pt-20">

        <div class="col-start-2 col-span-10">

            <div class="grid grid-cols-12 gap-6">

                <div class="col-span-9">

                    <div class="flex justify-between items-center space-x-4">
                        <h1 class="text-5xl font-semibold italic text-gold-500">HOW DOES IT WORK?</h1>
                        <h1 class="text-5xl font-semibold text-white">DIAL *250#</h1>
                        <img class="w-20" src="{{ asset('/images/orange-logo.png') }}">
                    </div>

                </div>

                <div class="col-span-3">

                    <p class="text-white text-center">Sellers receive orders via SMS, Whatsapp, Email or our Mobile App</p>

                </div>

            </div>

        </div>

    </div>

    <!-- Part 5 -->
    <div class="grid grid-cols-12 bg-gold-500 py-8">

        <div class="col-span-4">

            <div class="flex justify-center space-x-4">
                <img class="w-24" src="{{ asset('/images/app-logo-black-transparent.png') }}">
                <div>
                    <h1 class="lg:text-4xl md:text-4xl text-3xl font-semibold italic mb-2">Location</h1>
                    <p class="lg:text-xl text-md">Gaborone, Botswana</p>
                </div>
            </div>

        </div>

        <div class="col-span-4">

            <div>
                <h1 class="lg:text-4xl md:text-4xl text-3xl font-semibold italic mb-2">Email Addresses</h1>
                <p class="lg:text-xl text-md">pinkysesiane@gmail.com</p>
                <p class="lg:text-xl text-md">brandontabona@gmail.com</p>
            </div>

        </div>

        <div class="col-span-4">

            <div>
                <h1 class="lg:text-4xl md:text-4xl text-3xl font-semibold italic mb-2">Phone Numbers</h1>
                <p class="lg:text-xl text-md">(267) 77479083</p>
                <p class="lg:text-xl text-md">(267) 72882239</p>
            </div>

        </div>

    </div>

@endsection

<script>
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

    window.onload = function() {
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
    };
    //  End: The code above is used to create the typewriting effect
</script>
