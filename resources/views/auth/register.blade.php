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
            transition: ease-in-out 400ms;
        }

        input:focus{
            border-bottom: 2px solid #292929;
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
                        <input class="border-b-2 border-gray-300 pb-2" type="text" placeholder="Name">
                        <input class="border-b-2 border-gray-300 pb-2" type="text" placeholder="Email or Phone Number">
                        <input class="border-b-2 border-gray-300 pb-2" type="password" placeholder="Password">
                    </div>
                    <div class="my-10 w-full flex flex-col gap-4 items-center justify-center">
                        <button type="submit" class="bg-red-500 py-3 px-20 font-sans font-medium rounded-sm text-white hover:bg-red-600">Create Account</button>
                        <button type="submit" class="border-2 border-gray-400 py-3 px-10 font-sans font-medium rounded-sm flex flex-row gap-3 items-center justify-center text-gray-500 text-base hover:text-black hover:border-gray-700"><img class="w-6" src="assets/img/google.png" alt="">Sign Up with Google</button>
                        <span class="text-sm font-sans font-semibold text-gray-500">Already have account? <a class="hover:text-black hover:border-b-2 hover:border-black hover:pb-1" href="">Log in</a></span>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>