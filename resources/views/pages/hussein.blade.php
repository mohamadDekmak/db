<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title>Hussein AL Mawla | CEO</title>
</head>
<body>

<img src="/images/img.png" alt="" class="object-cover max-h-[500px] w-full">
<section class="px-2">
    <h1 class="text-[#3C4592] text-[30px] font-bold text-center  my-5">Hussein Al Mawla <br> (Best CEO)</h1>
    <iframe class="w-full" height="315" src="https://www.youtube.com/embed/gOJdA-hYRFs?si=mHF03IweNPNKSrld"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <div class="swiper text-center my-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold">B3alemna</h1>
                <img class="h-[300px] w-full object-cover" src="/images/lkel4.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold">Bewajehna</h1>
                <img class="h-[300px] w-full object-cover" src="/images/lkel3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold">By3ml 7alo ma3ju2</h1>
                <img class="h-[300px] w-full object-cover" src="/images/hussein1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold">W Bnem</h1>
                <img class="h-[300px] w-full object-cover" src="/images/hussein2.jpg" alt="">
            </div>
        </div>
        <div class="swiper-pagination" style="position: relative;top: 5px"></div>
    </div>
    <div class="testimonial-swiper my-5" style="overflow: hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide max-height-testimonial" style="height: 100%">
                <div class="bg-[#D9D9D9] p-5 h-[170px] flex-col flex gap-4">
                    <img class="w-[25px]" src="/images/testimonial.svg" alt="">
                    <p class="px-3">Happy Birthday, my Love.</p>
                    <h2 class="text-[#3C4592] font-bold text-[20px]">Yumna Al Mawla</h2>
                </div>
            </div>
            <div class="swiper-slide max-height-testimonial" style="height: 100%">
                <div class="bg-[#D9D9D9] p-5 h-[170px] flex-col flex gap-4">
                    <img class="w-[25px]" src="/images/testimonial.svg" alt="">
                    <p class="px-3">بعد ما فكرت بالموضوع: !!123321 بحبك!</p>
                    <h2 class="text-[#3C4592] font-bold text-[20px]">Moe Haidar</h2>
                </div>
            </div>
            <div class="swiper-slide max-height-testimonial" style="height: 100%">
                <div class="bg-[#D9D9D9] p-5 h-[170px] flex-col flex gap-4">
                    <img class="w-[25px]" src="/images/testimonial.svg" alt="">
                    <p class="px-3">لعنة الله على الظالمين</p>
                    <h2 class="text-[#3C4592] font-bold text-[20px]">Maram</h2>
                </div>
            </div>
            <div class="swiper-slide max-height-testimonial" style="height: 100%">
                <div class="bg-[#D9D9D9] p-5 h-[170px] flex-col flex gap-4">
                    <img class="w-[25px]" src="/images/testimonial.svg" alt="">
                    <p class="px-3">Töte alle Schwarzen</p>
                    <h2 class="text-[#3C4592] font-bold text-[20px]">Mostafa Kalash</h2>
                </div>
            </div>
            <div class="swiper-slide max-height-testimonial" style="height: 100%">
                <div class="bg-[#D9D9D9] p-5 h-[170px] flex-col flex gap-4">
                    <img class="w-[25px]" src="/images/testimonial.svg" alt="">
                    <p class="px-3">Ratteb l figma please.. </p>
                    <h2 class="text-[#3C4592] font-bold text-[20px]">Maria Dayekh</h2>
                </div>
            </div>
        </div>
        <div class="swiper-pagination" style="position: relative;top: 5px"></div>
    </div>
    {{--    <div>--}}
    {{--        <h1 class="text-[#AD2F36] text-[30px] font-bold">Messages From The Team:</h1>--}}
    {{--        <div>--}}
    {{--            <h1></h1>--}}
    {{--            <p></p>--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <h1 class="text-[#3C4592] font-bold text-[20px]"></h1>--}}
    {{--            <p></p>--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <h1 class="text-[#3C4592] font-bold text-[20px]"></h1>--}}
    {{--            <p></p>--}}
    {{--        </div>--}}
    {{--        <div>--}}
    {{--            <h1 class="text-[#3C4592] font-bold text-[20px]"></h1>--}}
    {{--            <p></p>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</section>
<script>
    const Swipert = new Swiper('.swiper', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    const Swiperd = new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

</script>

</body>
</html>
