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
    <title>Mostafa | Rafikutu</title>
</head>
<body>
<img src="/images/mostafa-banner.jpg" alt="" class="object-cover max-h-[500px] w-full">
<div class="bg-orange-100">
    <h1 class="text-black text-4xl font-bold text-center">President of the Milk Club </h1>
</div>
<section class="px-2">
    <div class="swiper text-center">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold h-[140px] flex justify-center items-center ">ولد في 12\2 و اعلن حبه للبقر و كرهه للسود</h1>
                <img class="h-[400px] w-full object-cover" src="/images/mustafa14.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold h-[140px] flex justify-center items-center ">انضم الى عدة نوادي محاولا تحقيق هدفه ب انشاء نادي الحليب</h1>
                <img class="h-[400px] w-full object-cover" src="/images/mustafa15.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold h-[140px] flex justify-center items-center ">اخر صورة له قبل دخول عالم البرمجة و العمل على fiveStars</h1>
                <img class="h-[400px] w-full object-cover" src="/images/mustafa12.jpeg" alt="">
            </div>
            <div class="swiper-slide">
                <h1 class="text-[#AD2F36] text-[30px] font-bold h-[140px] flex justify-center items-center ">بعد العمل على FST</h1>
                <img class="h-[400px] w-full object-cover" src="/images/mustafa13.jpeg" alt="">
            </div>
        </div>
        <div class="swiper-pagination" style="position: relative;top: 5px"></div>
    </div>
    <div>
        <h1 class="text-[#AD2F36] text-[30px] font-bold">Messages From The Team:</h1>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Yumna</h1>
            <p>عقبال المية يا ضرّتي.</p>
        </div>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Moe Haidar</h1>
            <p>كل ما شربت الحليب تذكرتك</p>
        </div>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Maram</h1>
            <p> انت شريكنا بتطهير الأرض من نسل ام الجمل</p>
        </div>
        <div>
            <h1 class="text-[#3C4592] font-bold text-[20px]">Hussein</h1>
            <p>Happy Birthday Son!</p>
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
