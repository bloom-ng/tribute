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
        html,
        body {
            min-width: 100%;
            max-width: 100%;
        }

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

<body class="bg-[#1D1E26] text-white  overflow-x-hidden roboto-regular">
    {{-- HEADER SECTION START --}}
    <header class="min-w-[100vw] flex items-center justify-center gap-6 fixed bg-[#1D1E26] z-20" id="header">
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2"
            href="#biography">Biography</a>
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2 bg-[#00408A]"
            href="https://flutterwave.com/donate/e6sdsxqnhjei">Donate</a>
        <a class="lg:px-8 lg:py-4 lg:font-semibold lg:text-xl text-xl font-semibold py-2 px-2"
            href="#tribute">Tribute</a>
    </header>
    {{-- HEADER SECTION END --}}

    {{-- HERO SECTION START --}}
    <section class="w-full  max-h-[85vh] lg:max-h-[85vh] relative" id="hero">
        <div class="bg-black opacity-60 w-full h-full absolute"></div>
        <div class="absolute w-full h-full flex flex-col items-center justify-center gap-12">
            <h1 class="font-bold lg:text-[100px] text-4xl lora">Michael Agharaye</h1>
            <p
                class="xl:w-[42%] lg:w-[60%] px-8 sm:w-full font-bold text-wrap text-center lg:text-[25px] text-sm lg:leading-8 leading-5">
                You
                left us so soon but
                God
                loves you
                the most
                thats
                why
                he
                called you to come and rest. We still love
                you and you will continue to reside in our hearts.
            </p>
        </div>
        <div class="flex items-center justify-center max-w-full h-max">
            <img src="/images/main_daddy.jpeg" class="lg:h-auto h-[40vh] w-full" alt="">
            {{-- <img src="/images/daddy_3.png" class="max-h-[85vh]" alt=""> --}}
        </div>
    </section>
    {{-- HERO SECTION END --}}

    {{-- BIOGRAPHY SECTION START --}}
    <section
        class="flex flex-col lg:flex-row items-center justify-center lg:px-12 px-6 lg:mt-16 w-full gap-6 py-8 my-24"
        id="biography">
        <div
            class="lg:basis-1/2 flex flex-col gap-4 xl:px-24 lg:px:12 self-start lato-regular lg:text-[16px] text-[12px]">
            <h1 class="font-bold lg:text-6xl text-4xl roboto-bold">Biography</h1>
            <p class="leading-8">
                Agharaye Amejuma Michael was born on the June 15th, 1962, in Abeugborodo community of Delta State, to
                the family of late Mr & Mrs Akigbe AgharayeDudu of _______ community. He attended Umuegbe Primary School
                where he obtained his first school leaving certificate in the year 1978, after which he proceeded to Zik
                Grammar School where he obtained his secondary school leaving certificate in the year 1984.
                After finishing his secondary school, he pursued a career in the hospitality industry. His hospitality
                career started in Agura Hotel Abuja, where he worked as a Company Billing Clerk in the year1987. In 1989
                he was then promoted to a role of computer operator where he strived and fell in love with accounting
                while working with various accounting tools...
            </p>
            <a href="/biography" class="px-4 py-2 border border-white self-start font-bold text-lg">Read More...</a>
        </div>
        <div class="lg:basis-1/2">
            <img src="/images/daddy_1.png" alt="">
        </div>
    </section>
    {{-- BIOGRAPHY SECTION END --}}

    {{-- DONATE SECTION START --}}
    <section class="w-full h-full" id="donate">
        <div
            class="flex flex-col lg:flex-row justify-center lg:justify-between items-center px-8 py-12 lg:px-16 bg-[#00408A] bg-opacity-25 gap-6">
            <h1 class="font-bold lg:text-4xl text-2xl  roboto-bold">Show your support</h1>
            <a class="bg-[#00408A] px-4 py-2 font-bold rounded-md text-2xl"
                href="https://flutterwave.com/donate/e6sdsxqnhjei">Donate</a>
        </div>
    </section>
    {{-- DONATE SECTION END --}}

    {{-- TRIBUTE SECTION START --}}
    <section class="w-full h-full my-24 lg:px-12 px-6" id="tribute">
        <div class="flex justify-between items-center">
            <h1 class="font-bold lg:text-3xl roboto-bold text-xl">Tributes</h1>
            <a href="#add-tribute"
                class="flex lg:gap-6 gap-2 items-center justify-between border rounded-sm border-white px-4 py-2">
                <img src="/images/edit_pen.svg" alt="edit-icons" class="lg:h-[40px] lg:w-[40px] h-[20px] w-[20px]">
                <p class="font-bold self-center">Leave a tribute</p>
            </a>
        </div>
        <div class="flex flex-col gap-8 my-5 w-full">
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
            <a href="/tributes" class="px-4 py-2 border border-white self-start font-bold text-lg">See More...</a>
        </div>
    </section>
    {{-- TRIBUTE SECTION END --}}

    {{-- ADD TRIBUTE SECTION START --}}
    <section class="h-full w-full lg:px-12 px-6 my-40" id="add-tribute">
        <form class="flex flex-col gap-6" action="/create" method="POST">
            {{ csrf_field() }}
            <h1 class="font-bold text-4xl roboto-bold">Leave a tribute</h1>

            <input type="text" name="name" id="name"
                class="rounded-none bg-white text-black px-4 py-3 font-bold" placeholder="Enter your name">

            <textarea name="content" id="content" cols="30" rows="5"
                class="rounded-none bg-white text-black px-4 py-2 font-bold" placeholder="Add your tribute text"></textarea>


            <input type="hidden" name="artifact" id="artifact">
            <!-- Add a hidden input field for the artifact -->

            <p class="font-semibold text-lg">Select a Bouquet</p>
            <div class="flex items-center justify-start gap-2 flex-wrap">
                <img src="/images/red_rose.png" alt="Red Rose"
                    class="lg:w-40 lg:h-40 w-20 h-20 border border-white cursor-pointer" onclick="updateArtifact(1)"
                    id="redRose">
                <img src="/images/pink_rose.png" alt="Pink Rose"
                    class="lg:w-40 lg:h-40 w-20 h-20 border border-white cursor-pointer" onclick="updateArtifact(2)"
                    id="pinkRose">
                <img src="/images/white_rose.png" alt="White Rose"
                    class="lg:w-40 lg:h-40 w-20 h-20 border border-white cursor-pointer" onclick="updateArtifact(3)"
                    id="whiteRose">
            </div>


            <button type="submit" class="px-4 py-2 border border-white self-end font-bold text-lg">Publish</button>
        </form>
    </section>
    {{-- ADD TRIBUTE SECTION END --}}

    <script>
        function updateArtifact(artifact) {
            // Reset border color for all images
            document.getElementById('redRose').classList.remove('bg-white');
            document.getElementById('pinkRose').classList.remove('bg-white');
            document.getElementById('whiteRose').classList.remove('bg-white');

            document.getElementById('artifact').value = artifact;

            // Add selected class to the clicked image
            document.getElementById(artifact === 1 ? 'redRose' : (artifact === 2 ? 'pinkRose' : 'whiteRose')).classList.add(
                'bg-white');
        }

        const tabs = document.querySelectorAll('.tab');

        // Add event listener to each tab
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                tabs.forEach(t => t.classList.remove('bg-[#00408A]'));

                // Add active class to the clicked tab
                tab.classList.add('bg-[#00408A]');
            });
        });
    </script>
</body>

</html>
