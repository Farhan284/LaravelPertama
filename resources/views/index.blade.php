<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>

<body class="font-poppins">
    <header class="fixed w-full p-5">
        <nav class="flex items-center justify-between mx-auto">
            <a href="homepage" class="inline-flex h-[60px] w-[60px] hover:drop-shadow-[0_0_10px_rgba(255,255,255,0.8)] hover:drop-shadow-[0_0_20px_rgba(255,255,255,0.6)] hover:drop-shadow-[0_0_30px_rgba(255,255,255,0.4)] transition-all duration-500">
                <img src="/assets/img/logo farhan.png" alt="Logo">
            </a>
            <ul class="flex gap-10 text-2xl">
                <li>
                    <a href="#" class="text-[#e7e7e7] no-underline relative py-[5px] text-[70%] hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.8),0_0_20px_rgba(255,255,255,0.6),0_0_30px_rgba(255,255,255,0.4)] transition-all duration-500 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-white after:transition-[width] after:duration-500 hover:after:w-full">Home</a>
                </li>
                <li>
                    <a href="#" class="text-[#e7e7e7] no-underline relative py-[5px] text-[70%] hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.8),0_0_20px_rgba(255,255,255,0.6),0_0_30px_rgba(255,255,255,0.4)] transition-all duration-500 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-white after:transition-[width] after:duration-500 hover:after:w-full">Products</a>
                </li>
                <li>
                    <a href="about" class="text-[#e7e7e7] no-underline relative py-[5px] text-[70%] hover:text-white hover:shadow-[0_0_10px_rgba(255,255,255,0.8),0_0_20px_rgba(255,255,255,0.6),0_0_30px_rgba(255,255,255,0.4)] transition-all duration-500 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[3px] after:bg-white after:transition-[width] after:duration-500 hover:after:w-full">About us</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="min-h-screen bg-[url('/assets/img/sepeda.jpg')] bg-center bg-cover bg-no-repeat flex items-center px-5">
        <div class="max-w-[1500px] mx-auto w-full text-white">
            <h2 class="text-6xl leading-[65px]">Selamat Datang!</h2>
            <p class="font-normal mt-[10px] text-lg">
                Menyediakan sepeda dengan kualitas terbaik
            </p>
            <button onclick="window.location.href=''" class="bg-white text-black px-10 py-4 border-none text-base rounded-md mt-[30px] font-medium transition-all duration-300 hover:shadow-[0_0_10px_rgba(0,0,0,0.8),0_0_20px_rgba(0,0,0,0.6),0_0_30px_rgba(255,255,255,0.4)] hover:scale-105">
                Mulai
            </button>
        </div>
    </section>
</body>
</html>