<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{ asset('/resources/css/app.css') }}" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Michael Agharaye Tribute</title>
    <style>
        .lato-regular {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .lato-bold {
            font-family: "Lato", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .lato-black {
            font-family: "Lato", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .lora {
            font-family: "Lora", serif;
            font-optical-sizing: auto;
            font-weight: bold;
            font-style: normal;
        }

        .roboto-thin {
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .roboto-light {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .roboto-regular {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .roboto-bold {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .roboto-black {
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .roboto-thin-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .roboto-light-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .roboto-regular-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .roboto-medium-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .roboto-bold-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .roboto-black-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: italic;
        }
    </style>
</head>

<body class="bg-[#1D1E26] text-white max-w-[100vw] overflow-x-hidden roboto-regular">
    {{-- HEADER SECTION START --}}
    <header class="w-[100vw] flex items-center justify-center gap-6 fixed bg-[#1D1E26] z-20" id="header">
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2" href="/">Home</a>
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2 bg-[#00408A]"
            href="https://flutterwave.com/donate/e6sdsxqnhjei">Donate</a>
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2"
            href="/tributes">Tributes</a>
    </header>
    {{-- HEADER SECTION END --}}

    {{-- HERO SECTION START --}}
    <section class="w-full max-w-[100vw] max-h-[85vh] lg:max-h-[85vh] relative" id="hero">
        <div class="bg-black bg-opacity-30 w-full h-full absolute"></div>
        <div class="absolute w-full h-full flex flex-col items-center justify-center gap-12">
            <h1 class="font-bold lg:text-[100px] text-6xl lora">Biography</h1>
        </div>
        <div class="flex items-center justify-center max-w-full h-max">
            <img src="/images/new_daddy_3.jpg" class="lg:h-auto lg:max-h-[85vh] h-[40vh] w-full lg:block hidden"
                alt="">
            {{-- <img src="/images/main_daddy.jpeg" class="lg:h-auto lg:max-h-[85vh] h-[40vh] w-full lg:block hidden"
                alt=""> --}}
            <img src="/images/new_daddy_3.jpg" class="lg:hidden block max-h-[85vh] w-full" alt="">
        </div>
    </section>
    {{-- HERO SECTION END --}}


    {{-- BIOGRAPHY SECTION START --}}
    {{-- <section class="w-full max-w-[100vw] lg:px-24 px-6 my-8 space-x-2" id="biography">
        <p class="text-white my-14 leading-8">
        <p class="text-xl leading-8 font-normal mt-8">
            Agharaye Amejuma Michael was born on the June 15th, 1962, in Abeugborodo community of Delta State, to
            the family of late Mr & Mrs Akigbe AgharayeDudu of _______ community. He attended Umuegbe Primary School
            where he obtained his first school leaving certificate in the year 1978, after which he proceeded to Zik
            Grammar School where he obtained his secondary school leaving certificate in the year 1984.
            After finishing his secondary school, he pursued a career in the hospitality industry. His hospitality
            career started in Agura Hotel Abuja, where he worked as a Company Billing Clerk in the year1987. In 1989
            he was then promoted to a role of computer operator where he strived and fell in love with accounting
            while working with various accounting tools. Because of the love he had for the hospitality industry, he
            went for a hospitality training in the year 1988, where he obtained a certificate of attendance with
            Femi Ajijala Consultancy Hotel and Hotel Accounting. He also obtained another certificate in the
            industry with Potoma Hotel Management, where he was trained with sophisticated tools to understand how
            accounting and hotel management works.
            In the year 1991, he got married to the love of his life MRS Agharaye Bukola and God bless them with 4
            glorious children.
        </p>
        <p class="text-xl leading-8 font-normal mt-8">
            His love for accounting made him further his education and certifications. In the year 1993 he finished
            his ATS 1 exams and passed in flying colours. In the year 1995 he proceeded with ATS 2 and passed in
            flying colours. After which he got an employment with bolingo hotel and Towers in the year 1996, during
            his stay in bolingo hotel he worked as the company auditor. Where he flourished.
            In the year 2000, he decided to further his education, and obtained a bachelor’s degree Honors in
            Business Administration from the University of Abuja.
            After gaining valuable experience in the hospitality industry, He ventured into entrepreneurship,
            establishing his own business. He found success in the manufacturing sector and Food and Beverage
            Industry, leveraging his expertise and networks built over years of professional experience.
            In September 2016, Michael's devotion to his faith was recognized when he was ordained as an Evangelist
            within the Cherubim and Seraphim Movement Worldwide. It was a moment of profound significance, marking
            his commitment to spreading the message of love, compassion, and spiritual enlightenment. This sacred
            ordination reflected not only his deep connection to his faith but also his unwavering dedication to
            serving others with kindness and grace.
        </p>
        <p class="text-xl leading-8 font-normal mt-8">
            In November 2016, Michael's spiritual journey reached new heights as he was ordained as a Special
            Apostle within the esteemed Cherubim and Seraphim Movement Worldwide. This momentous occasion was a
            testament to his exceptional devotion and profound connection to his faith. With humility and grace, he
            embraced this sacred calling, embodying the virtues of compassion, wisdom, and unwavering love. His
            ordination as a Special Apostle was not only a recognition of his spiritual leadership but also a
            celebration of his remarkable commitment to spreading joy and enlightenment to all who crossed his path.
            Michael was an affectionate father, a devoted husband to his wife, and a caring patriarch to his
            children, siblings, and extended family. He extended his warmth and care not only to his immediate
            circle but also to friends and all who crossed his path. Despite having limited resources, he ensured
            that his family's essential needs were always met and that they found contentment in life's simple
            pleasures. He embraced his role as a father figure to many and was a cherished friend to all. Michael
            lived a life enriched by his faith in Christ.
        </p>
        <p class="text-xl leading-8 font-normal mt-8">
            Michael is survived by his adoring wife, cherished children, beloved daughter-in-law, dear brothers and
            sisters, respected uncles and aunties, treasured nieces and nephews, and many others whose lives he
            touched with his warmth and kindness. On the afternoon of April 7th, 2024, our beloved father peacefully
            entered eternal rest. Though he may have left this earthly realm, his love and legacy will continue to
            shine brightly in our hearts forever. We love you, Dad, and your memory will always be a source of
            comfort and inspiration to us all.
        </p>
        </p>
    </section> --}}
    {{-- BIOGRAPHY SECTION END --}}
    {{-- BIOGRAPHY SECTION START --}}
    <section class="w-full max-w-[100vw] lg:px-24 px-6 my-8 space-x-2" id="biography">
        <div class="text-white my-14 leading-8">
            <p class="text-xl leading-8 font-normal mt-8">
                Special Apostle Evangelist Michael Agharaye was born on the June 15th, 1962, in Abeugborodo Community of
                Delta State, to the family of late Mr & Mrs Akigbe Agharaye-Dudu of Obontegbhareda Community.
                He attended Umuegbe Primary School Abeugborodo, Warri North Local Government of Delta State, where he
                obtained his first school leaving certificate in the year 1978, after which he proceeded to Zik Grammar
                School where he obtained his WAEC certificate in the year 1984.
                After finishing his secondary school, he pursued a career in the hospitality industry. His hospitality
                career started in Agura Hotel Abuja, where he worked as a Company Billing Clerk in the year 1987. In
                1989 he was then promoted to a role of computer operator/Accountant where he strived and fell in love
                with accounting while working with various accounting tools. Because of the love he had for the
                hospitality industry, he went for a hospitality training in the year 1988, where he obtained a
                certificate with Femi Ajijala Consultancy Hotel and Hotel Accounting. He also obtained another
                certificate in the industry with Potoma Hotel Management, where he was trained with sophisticated tools
                to understand how accounting and hotel management works.
                In the year 1987, Michael jointly ignited the inception of the Warri Diamond Society, affectionately
                known as the Urenren Itsekiri Social Club, while assuming the prestigious position of Vice Chairman at
                that time.

            </p>
            <p class="text-xl leading-8 font-normal mt-8">
                In the year 1991, he got married to the love of his life MRS Agharaye Bukola and God bless them with 4
                glorious children.
                His love for accounting made him further his education and certifications. In the year 1993 he finished
                his ATS 1 (ICAN) exams and passed in flying colours. In the year 1995 he proceeded with ATS 2 (ICAN) and
                passed in flying colours. After which he got an employment with Bolingo hotel and Towers in the year
                1996, during his stay in Bolingo hotel he worked as the company auditor. Where he flourished.
                In the year 2000, he decided to further his education, and obtained a bachelor’s degree Honors in
                Business Administration from the University of Abuja.
                After gaining valuable experience in the hospitality industry, He ventured into entrepreneurship,
                establishing his own business. He found success in the manufacturing sector, Food and Beverage Industry,
                leveraging his expertise and networks built over years of professional experience.
                In September 2016, Michael's devotion to his faith was recognized when he was ordained as an Evangelist
                within the Cherubim and Seraphim Movement Worldwide. It was a moment of profound significance, marking
                his commitment to spreading the message of love, compassion, and spiritual enlightenment. This sacred
                ordination reflected not only his deep connection to his faith but also his unwavering dedication to
                serving others with kindness and grace.
            </p>
            <p class="text-xl leading-8 font-normal mt-8">
                In November 2016, Michael's spiritual journey reached new heights as he was ordained as a Special
                Apostle within the esteemed Cherubim and Seraphim Movement Worldwide. This momentous occasion was a
                testament to his exceptional devotion and profound connection to his faith. With humility and grace, he
                embraced this sacred calling, embodying the virtues of compassion, wisdom, and unwavering love. His
                ordination as a Special Apostle was not only a recognition of his spiritual leadership but also a
                celebration of his remarkable commitment to spreading joy and enlightenment to all who crossed his path.
                Michael was an affectionate father, a devoted husband to his wife, and a caring patriarch to his
                children, siblings, and extended family. He extended his warmth and care not only to his immediate
                circle but also to friends and all who crossed his path. Despite having limited resources, he ensured
                that his family's essential needs were always met and that they found contentment in life's simple
                pleasures. He embraced his role as a father figure to many and was a cherished friend to all. Michael
                lived a life enriched by his faith in Christ.
                Michael survived by his adoring wife, cherished children, beloved daughter-in-law, dear brothers and
                sisters, respected uncles and aunties, treasured nieces and nephews, and many others whose lives he
                touched with his warmth and kindness.
                On the afternoon of April 7th, 2024, our beloved father peacefully entered eternal rest. Though he may
                have left this earthly realm, his love and legacy will continue to shine brightly in our hearts forever.
                We love you, Dad, and your memory will always be a source of comfort and inspiration to us all.
            </p>
        </div>
    </section>
    {{-- BIOGRAPHY SECTION END --}}

</body>

</html>
