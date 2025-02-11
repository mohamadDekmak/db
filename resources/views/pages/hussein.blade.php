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
    <title>hussein AL Mawla</title>
</head>
<body>

<img src="/images/husseinbanner.jpg" alt="" class="object-cover max-h-[500px] w-full">
<section class="px-2">
    <h1 class="text-[#3C4592] text-[30px] font-bold text-center">Hussein Al Mawla <br> (Best CEO)</h1>
    <iframe class="w-full" height="315" src="https://www.youtube.com/embed/gOJdA-hYRFs?si=mHF03IweNPNKSrld"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <div class="swiper text-center">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold">B3alemna</h1>
                <img class="h-[300px] w-full object-cover" src="/images/lkel4.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold">bwajhena</h1>
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
    <div>
        <h1 class="text-[#AD2F36] text-[30px] font-bold">Messages From The Team:</h1>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Yumna</h1>
            <p>Happy Birthday my love.</p>
        </div>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Moe Haidar</h1>
            <p>بعد ما فكرت بالموضوع: !!123321 بحبك!</p>
        </div>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Maram</h1>
            <p>لعنة الله على الظالمين</p>
        </div>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Mostafa</h1>
            <p>Töte alle Schwarzen</p>
        </div>
    </div>
</section>
<script>
    const Swipert = new Swiper('.swiper', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

</script>

</body>
</html>
