<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
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
    <section class="h-screen w-full flex items-center justify-center">
        <div class="absolute max-w-[430px] w-full p-[30px] rounded-[10px] bg-white shadow-[0_10px_20px_rgba(0,0,0,0.1)] sm:p-[30px] max-[400px]:p-[20px_10px]">
            <header class="text-[28px] font-semibold text-[#232836] text-center">Login Page</header>
            <form id="FormLogin">
                <div class="h-[50px] w-full mt-[40px]">
                    <label for="username">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        placeholder="Enter your username" 
                        class="h-full w-full border-none text-base font-normal rounded-[6px] outline-none px-[15px] border-2 border-[#969595]"
                    >
                </div>  

                <div class="h-[50px] w-full mt-[40px]">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="Enter your password" 
                        class="h-full w-full border-none text-base font-normal rounded-[6px] outline-none px-[15px] border-2 border-[#969595]"
                    >
                </div>

                <div class="h-[50px] w-full mt-[40px]">
                    <button 
                        type="submit" 
                        class="h-full w-full border-none text-base font-normal rounded-[6px] text-white bg-black transition-all duration-300 cursor-pointer hover:bg-[rgb(95,95,95)]"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('FormLogin').addEventListener('submit', function(event){
            event.preventDefault();

            const correctUsername = 'farhan';
            const correctPassword = '123';

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if(username === correctUsername && password === correctPassword){
                alert('Login Berhasil');
                window.location.href = 'homepage';
            }else{
                alert('Login gagal');
            }
        });
    </script>
</body>
</html>