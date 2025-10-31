<template>

    <div class="flex flex-col grow">

        <!-- Hero Section -->
        <section class="flex flex-col grow relative">

            <div class="grow items-center justify-center bg-linear-to-b from-black/75 to-indigo-700">
                <div class="flex flex-col items-center relative z-20">
                <!-- Text Content -->
                <div class="max-w-4xl text-center lg:pt-40">
                    <img class="mx-auto h-32 mb-6" :src="'/images/logo-black-transparent.png'" alt="Logo" />
                    <h1
                    class="font-extrabold mb-6 leading-tight bg-linear-to-t from-indigo-100 to-white inline-block text-transparent bg-clip-text"
                    >
                    <span class="text-4xl md:text-5xl lg:text-6xl block mb-2">Let's Sell Better.</span>
                    <span class="text-3xl md:text-4xl lg:text-4xl block">Customers, Orders & Payments In One Spot</span>
                    </h1>
                    <p class="text-lg md:text-xl lg:text-2xl text-indigo-100 mb-8">
                    Start selling in less than 5 minutes
                    </p>
                    <div class="flex justify-center">
                        <a href="https://perfectorder.shop"
                            class="flex items-center space-x-2 px-12 py-6 bg-linear-to-b from-blue-500 to-blue-600 text-white font-semibold rounded-4xl shadow-md hover:scale-110 active:scale-100 transition-all duration-500">
                            <span>Create Your Store</span>
                            <ArrowRight size="20"></ArrowRight>
                        </a>
                    </div>
                </div>
                </div>
            </div>

            <div class="wave-container absolute w-full">
                <div class="wave w-full h-full"></div>
                <div class="wave w-full h-full"></div>
                <div class="wave w-full h-full"></div>
                <div class="wave w-full h-full"></div>
            </div>

        </section>

        <div class="flex items-center justify-center space-x-8 bg-linear-to-r from-indigo-400 via-indigo-100 to-indigo-400 py-6">

            <span class="italic font-semibold">As Seen On ...</span>

            <a href="https://www.africanimpact.ca" target="_blank">
                <img class="h-20" :src="'/images/african-impact.webp'" alt="African Impact" />
            </a>

            <a href="https://www.cbnet.com" target="_blank">
                <img class="h-20" :src="'/images/creative-business-cup.svg'" alt="Creative Business Cup" />
            </a>

        </div>

        <div class="bg-linear-to-t from-indigo-500 to-indigo-400 py-1"></div>

    </div>

</template>

<script>
import { ArrowRight } from 'lucide-vue-next';

export default {
    name: 'LandingPage',
    components: { ArrowRight },
    data() {
        return {
            scale: 1, // Initial scale (no scaling)
            tiltAngle: 35, // Initial tilt angle (degrees)
            logos: [
                { src: '/images/channels/facebook.png', alt: 'Facebook' },
                { src: '/images/channels/whatsapp.png', alt: 'WhatsApp' },
                { src: '/images/channels/instagram.png', alt: 'Instagram' },
                { src: '/images/channels/messenger.png', alt: 'Messenger' },
                { src: '/images/channels/wechat.png', alt: 'WeChat' },
                { src: '/images/channels/telegram.png', alt: 'Telegram' },
                { src: '/images/channels/x.png', alt: 'X' },
                { src: '/images/channels/line.png', alt: 'Line' },
                { src: '/images/channels/sms.png', alt: 'SMS' },
                { src: '/images/channels/email.png', alt: 'Email' },
                { src: '/images/channels/phone3.png', alt: 'Phone' },
            ],
            logoWidth: 96, // Width of each logo (w-16 = 64px) + space-x-8 (32px) = 96px
            speed: 1, // Pixels per frame (adjustable for speed)
            animationFrameId: null,
        };
    },
    mounted() {
        const imageWrapper = this.$el.querySelector('.tilt-effect');
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    const ratio = entry.intersectionRatio;

                    // Tilt effect: only adjust tilt when the image is entering from below (scrolling down)
                    // or exiting at the bottom (scrolling up)
                    if (entry.boundingClientRect.top > 0) {
                        this.tiltAngle = 35 * (1 - ratio);
                    }

                    // Scale effect: adjust scale when the top of the image starts exiting the viewport (scrolling down)
                    if (entry.boundingClientRect.top < 0) {
                        // Calculate scale based on how much of the image has exited the viewport
                        // When ratio is 1 (fully in view), scale is 1
                        // When ratio is 0 (fully out of view), scale is 1.1
                        this.scale = 1 + (0.1 * (1 - ratio)); // Scale from 1 to 1.1
                    } else {
                        // Reset scale to 1 when the image is fully in view or entering from below
                        this.scale = 1;
                    }
                });
            },
            {
                threshold: Array.from({ length: 101 }, (_, i) => i / 100), // Array of thresholds [0, 0.01, 0.02, ..., 1] for smooth updates
            }
        );

        if (imageWrapper) {
            observer.observe(imageWrapper);
        }

        // Start the marquee animation
        this.startMarqueeAnimation();
    },
    beforeUnmount() {
        // Cancel the animation frame when the component is destroyed
        if (this.animationFrameId) {
            cancelAnimationFrame(this.animationFrameId);
        }
    },
    methods: {
        startMarqueeAnimation() {
            const marquee = this.$refs.marquee;
            if (!marquee) return;

            let position = 0;

            const animate = () => {
                // Move the marquee to the left
                position -= this.speed;
                marquee.style.transform = `translateX(${position}px)`;

                // Get the width of the container and the marquee
                const containerWidth = marquee.parentElement.offsetWidth;
                const marqueeWidth = marquee.scrollWidth;

                // When the first logo moves completely off-screen to the left
                if (Math.abs(position) >= this.logoWidth) {
                    // Move the first logo to the end
                    const firstLogo = marquee.children[0];
                    marquee.appendChild(firstLogo);
                    // Reset position to account for the moved logo
                    position += this.logoWidth;
                    marquee.style.transform = `translateX(${position}px)`;
                }

                // Continue the animation
                this.animationFrameId = requestAnimationFrame(animate);
            };

            // Start the animation
            this.animationFrameId = requestAnimationFrame(animate);
        },
    },
};
</script>

<style scoped>
.bubble-effect {
    animation: bubble 2s infinite ease-in-out;
}

@keyframes bubble {
    0%, 100% { transform: scale(1); opacity: 0.8; }
    50% { transform: scale(1.05); opacity: 1; }
}

/* Wave animation styles */
.wave-container {
    top: 290px;
    left: 50%;
    width: 500px;
    height: 500px;
    display: flex;
    position: absolute;
    align-items: center;
    justify-content: center;
    transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
}

.wave {
    opacity: 0;
    position: absolute;
    border-radius: 50%;
    animation: wave-ripple 5s ease-out infinite;
    border: 4px solid rgba(255, 255, 255, 0.073);
}

.wave:nth-child(1) {
    animation-delay: 0s;
}

.wave:nth-child(2) {
    animation-delay: 1s;
}

.wave:nth-child(3) {
    animation-delay: 2s;
}

@keyframes wave-ripple {
    0% {
        transform: scale(0);
        opacity: 0;
    }
    30% {
        opacity: 1;
    }
    100% {
        transform: scale(3);
        opacity: 0;
    }
}

/* Marquee styles */
.marquee {
    display: flex;
    white-space: nowrap;
}

/* Fading effect for marquee edges */
.marquee-mask {
    -webkit-mask-image: linear-gradient(
        to right,
        transparent 0%,
        black 20%,
        black 80%,
        transparent 100%
    );
    mask-image: linear-gradient(
        to right,
        transparent 0%,
        black 10%,
        black 90%,
        transparent 100%
    );
}
</style>
