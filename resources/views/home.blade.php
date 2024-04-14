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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Michael Agharaye Tribute</title>
    <style>
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
    <header class="w-full flex items-center justify-center gap-6 fixed bg-[#1D1E26] z-20" id="header">
        <a class="px-8 py-4 font-semibold text-xl hover:bg-[#00408A] tab" href="#biography">Biography</a>
        <a class="px-8 py-4 font-semibold text-xl hover:bg-[#00408A] tab" href="#donate">Donate</a>
        <a class="px-8 py-4 font-semibold text-xl hover:bg-[#00408A] tab" href="#tribute">Tribute</a>
    </header>
    {{-- HEADER SECTION END --}}

    {{-- HERO SECTION START --}}
    <section class="w-full max-w-[100vw] max-h-[85vh] lg:max-h-[85vh] relative" id="hero">
        <div class="bg-black opacity-60 w-full h-full absolute"></div>
        <div class="absolute w-full h-full flex flex-col items-center justify-center gap-8">
            <h1 class="font-bold lg:text-[100px] text-6xl roboto-bold">Michael Agharaye</h1>
            <p class="lg:w-[42%] font-bold text-wrap lg:text-[25px]">You left us so soon but God loves you the most
                thats
                why
                he
                <br>
                called you to come and rest. We still love
                you and you will <br> continue to reside in our hearts.
            </p>
        </div>
        <div class="flex items-center justify-center max-w-full h-max">
            <img src="/images/daddy_2.png" class="h-[85vh] hidden lg:block" alt="">
            <img src="/images/daddy_3.png" class="max-h-[85vh]" alt="">
        </div>
    </section>
    {{-- HERO SECTION END --}}

    {{-- BIOGRAPHY SECTION START --}}
    <section
        class="flex flex-col lg:flex-row items-center lg:items-center justify-center px-12 w-full h-[100vh] gap-6 py-8"
        id="biography">
        <div class="lg:basis-1/2 flex flex-col gap-6">
            <h1 class="font-bold text-6xl roboto-bold">Biography</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita, exercitationem harum sed sint
                dolore aspernatur animi, cupiditate vero ut rem temporibus illum porro. Similique harum, vero nemo quae
                at deleniti repudiandae quidem recusandae ad.</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita, exercitationem harum sed sint
                dolore aspernatur animi, cupiditate vero ut rem temporibus illum porro. Similique harum, vero nemo quae
                at deleniti repudiandae quidem recusandae ad.</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio expedita, exercitationem harum sed sint
                dolore aspernatur animi, cupiditate vero ut rem temporibus illum porro. Similique harum, vero nemo quae
                at deleniti repudiandae quidem recusandae ad.</p>
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
            <h1 class="font-bold text-4xl roboto-bold">Show your support</h1>
            <a class="bg-[#00408A] px-4 py-2 font-bold rounded-md text-2xl" href="#">Donate</a>
        </div>
    </section>
    {{-- DONATE SECTION END --}}

    {{-- TRIBUTE SECTION START --}}
    <section class="w-full h-full my-5 px-12" id="tribute">
        <div class="flex justify-between items-center">
            <h1 class="font-bold text-3xl roboto-bold">Tributes</h1>
            <a href="#add-tribute"
                class="flex gap-6 items-center justify-between border rounded-sm border-white px-4 py-2">
                <img src="/images/edit_pen.svg" alt="edit-icons" class="h-[40px] w-[40px]">
                <p class="font-bold self-center">Leave a tribute</p>
            </a>
        </div>
        <div class="flex flex-col gap-4 my-5 w-full">
            @foreach ($tributes as $tribute)
                <div class="border border-white flex px-4 py-5">
                    <img src="{{ $tribute->artifact == '1' ? '/images/red_rose.png' : ($tribute->artifact == 2 ? '/images/pink_rose.png' : '/images/white_rose.png') }}"
                        alt="roses" class="h-20 w-20 lg:h-40 lg:w-40 mr-6 lg:mr-12">
                    <div class="flex flex-col">
                        <h3 class="font-semibold">{{ $tribute->name }}</h3>
                        <p class="font-medium">{{ $tribute->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- TRIBUTE SECTION END --}}

    {{-- ADD TRIBUTE SECTION START --}}
    <section class="h-full w-full px-12 my-40" id="add-tribute">
        <form class="flex flex-col gap-6" action="/" method="POST">
            {{ csrf_field() }}
            <h1 class="font-bold text-4xl roboto-bold">Leave a tribute</h1>

            <input type="text" name="name" id="name"
                class="rounded-none bg-white text-black px-4 py-3 font-bold" placeholder="Enter your name">

            <textarea name="content" id="content" cols="30" rows="5"
                class="rounded-none bg-white text-black px-4 py-2 font-bold" placeholder="Add your tribute text"></textarea>


            <input type="hidden" name="artifact" id="artifact">
            <!-- Add a hidden input field for the artifact -->

            <div class="flex items-center justify-start gap-2 flex-shrink">
                <img src="/images/red_rose.png" alt="Red Rose" class="w-40 h-40 border border-white cursor-pointer"
                    onclick="updateArtifact(1)" id="redRose">
                <img src="/images/pink_rose.png" alt="Pink Rose" class="w-40 h-40 border border-white cursor-pointer"
                    onclick="updateArtifact(2)" id="pinkRose">
                <img src="/images/white_rose.png" alt="White Rose" class="w-40 h-40 border border-white cursor-pointer"
                    onclick="updateArtifact(3)" id="whiteRose">
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
