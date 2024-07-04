<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create Account</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        input{
            width: 100%;
            outline: none;
        }
    </style>
</head>
<body>
    <main class="my-10 flex flex-row">
        <section>
            <img src="assets/img/register.svg" alt="">
        </section>
        <section class="mx-auto">
            <div>
                <form action="">
                    <div class="flex flex-col gap-5">
                        <h2 class="text-5xl font-sans font-semibold">Create an Account</h2>
                        <span class="font-semibold font-sans">Enter your details below</span>
                    </div>
                    <div class="flex flex-col mt-8 gap-8">
                        <div class="border-b-2 border-gray-300 pb-1">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="border-b-2 border-gray-300 pb-1">
                            <input type="text" placeholder="Email or Phone Number">
                        </div>
                        <div class="border-b-2 border-gray-300 pb-1">
                            <input type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="my-10 w-full flex flex-col gap-4 items-center justify-center">
                        <button type="submit" class="bg-red-500 py-3 px-20 font-sans font-medium rounded-sm text-white hover:bg-red-600">Create Account</button>
                        <button type="submit" class="border-2 border-gray-400 py-3 px-10 font-sans font-medium rounded-sm flex flex-row gap-3 items-center justify-center text-gray-500 text-base hover:text-black hover:border-gray-700"><img class="w-6" src="assets/img/google.png" alt="">Sign Up with Google</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>