<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
    <header class="fixed w-full p-5 z-10">
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
                    <a href="#" class="text-white no-underline relative py-[5px] text-[70%] hover:shadow-[0_0_10px_rgba(255,255,255,0.8),0_0_20px_rgba(255,255,255,0.6),0_0_30px_rgba(255,255,255,0.4)] transition-all duration-500 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[3px] after:bg-white after:transition-[width] after:duration-500">About us</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="min-h-screen bg-[url('/assets/img/aboutbg.jpg')] bg-center bg-cover bg-no-repeat">
        <!-- Overlay untuk membuat konten lebih mudah dibaca -->
        <div class="min-h-screen bg-black bg-opacity-70">
            <!-- Content Container -->
            <div class="max-w-4xl mx-auto px-4 pt-28 pb-8 text-white">
                <div class="space-y-8">
                    <!-- Company Section -->
                    <section class="text-center mb-12">
                        <h1 class="text-5xl font-bold">About Us</h1>
                        <p class="text-[#e7e7e7] mt-4 text-lg">Your Ultimate Cycling Partner Since 2008</p>
                    </section>

                    <!-- Main Content -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Company Description -->
                        <section class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm">
                            <h3 class="text-2xl font-semibold mb-4">Who We Are</h3>
                            <p class="text-[#e7e7e7]">
                                BikeVenture is a premium bicycle retailer dedicated to providing high-quality bikes, accessories, and exceptional service to cycling enthusiasts. With over a decade of experience, we've become the trusted destination for both professional cyclists and hobbyists.
                            </p>
                        </section>

                        <!-- Our Values -->
                        <section class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-blur-sm">
                            <h3 class="text-2xl font-semibold mb-4">Our Values</h3>
                            <ul class="text-[#e7e7e7] space-y-2">
                                <li class="flex items-center space-x-2">
                                    <span class="w-2 h-2 bg-white rounded-full"></span>
                                    <span>Quality and durability in every product</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="w-2 h-2 bg-white rounded-full"></span>
                                    <span>Expert guidance and customer service</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="w-2 h-2 bg-white rounded-full"></span>
                                    <span>Promoting sustainable transportation</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="w-2 h-2 bg-white rounded-full"></span>
                                    <span>Building cycling communities</span>
                                </li>
                            </ul>
                        </section>
                    </div>

                    <!-- Additional Information -->
                    <section class="bg-white bg-opacity-10 p-6 rounded-lg mt-8 backdrop-blur-sm">
                        <h3 class="text-2xl font-semibold mb-4">What We Offer</h3>
                        <div class="grid md:grid-cols-3 gap-4 text-center">
                            <div class="p-4">
                                <h4 class="font-semibold mb-2">Premium Bikes</h4>
                                <p class="text-[#e7e7e7]">Mountain, Road, and Urban bikes from top brands</p>
                            </div>
                            <div class="p-4">
                                <h4 class="font-semibold mb-2">Expert Service</h4>
                                <p class="text-[#e7e7e7]">Professional maintenance and repair services</p>
                            </div>
                            <div class="p-4">
                                <h4 class="font-semibold mb-2">Accessories</h4>
                                <p class="text-[#e7e7e7]">Complete range of cycling gear and accessories</p>
                            </div>
                        </div>
                    </section>

                    <!-- Back to Login Button -->
                    <div class="flex justify-center mt-12">
                        <a href="login" class="bg-white text-black px-10 py-4 border-none text-base rounded-md font-medium transition-all duration-300 hover:shadow-[0_0_10px_rgba(0,0,0,0.8),0_0_20px_rgba(0,0,0,0.6),0_0_30px_rgba(255,255,255,0.4)] hover:scale-105">
                            Back to Login
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>