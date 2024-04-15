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
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2"
            href="/biography">Biography</a>
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2 bg-[#00408A]"
            href="https://flutterwave.com/donate/e6sdsxqnhjei">Donate</a>
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2" href="/">Home</a>
    </header>
    {{-- HEADER SECTION END --}}

    {{-- HERO SECTION START --}}
    <section class="w-full max-w-[100vw] max-h-[85vh] lg:max-h-[85vh] relative" id="hero">
        <div class="bg-black opacity-60 w-full h-full absolute"></div>
        <div class="absolute w-full h-full flex flex-col items-center justify-center gap-12">
            <h1 class="font-bold lg:text-[100px] text-6xl lora">Tributes</h1>
            {{-- <p class="lg:w-[42%] font-bold text-wrap text-center lg:text-[25px]">You left us so soon but God loves you
                the most
                thats
                why
                he
                <br>
                called you to come and rest. We still love
                you and you will <br> continue to reside in our hearts.
            </p> --}}
        </div>
        <div class="flex items-center justify-center max-w-full h-max">
            <img src="/images/main_daddy.jpeg" class="lg:h-auto h-[40vh] w-full lg:block hidden" alt="">
            {{-- <img src="/images/daddy_2.png" class="h-[85vh] hidden lg:block" alt=""> --}}
            <img src="/images/daddy_3.png" class="lg:hidden block max-h-[85vh]" alt="">
        </div>
    </section>
    {{-- HERO SECTION END --}}

    {{-- TRIBUTE SECTION START --}}
    <section class="w-full max-w-[100vw] lg:px-24 px-6 mb-10" id="tribute">
        <div class="flex flex-col gap-8 my-8  w-full">
            @foreach ($tributes as $tribute)
                <div class="border border-slate-600 flex px-4 py-5">
                    <img src="{{ $tribute->artifact == '1' ? '/images/red_rose.png' : ($tribute->artifact == 2 ? '/images/pink_rose.png' : '/images/white_rose.png') }}"
                        alt="roses" class="h-10 w-10 lg:h-40 lg:w-40 mr-6 lg:mr-12">
                    <div class="flex flex-col items-start justify-center">
                        <h3 class="font-semibold lg:text-2xl text-lg">{{ $tribute->name }}</h3>
                        <p class="font-normal lg:text-lg text-md mt-5">{{ $tribute->content }}</p>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $tributes->onEachSide(5)->links() }}
    </section>
    {{-- TRIBUTE SECTION END --}}

</body>

</html>
