<x-layout.layout>
    @slot("slot_main")
        <div class="flex flex-col justify-center items-center h-full p-4">
            <form action="{{route ('login')}}" method="post">
                <div class=" flex flex-col justify-around items-center space-y-3 bg-white p-5 rounded">
                    <h2 class="text-4xl px-4">Login</h2>
                    @csrf
                    <input
                        class="w-full input input-bordered input-primary"
                        type="text" name="email" value="{{old('email')}}">
                    <x-input-error :messages="$errors->get('email')"/>
                    <input
                        class="w-full input input-bordered input-primary"
                        type="text" name="password">
                    <x-input-error :messages="$errors->get('password')" />"
                    <input class="btn btn-primary bg-header glass " type="submit" value="Acceder">
                </div>
            </form>
        </div>
        </div>


        {{--        <div class="flex flex-row justify-center items-center h-full">--}}
        {{--        <div class="bg-white p-5 max-w-md mx-auto rounded shadow-sm">--}}
        {{--        <h2 class="text-4xl px-4 ">Log In</h2>--}}
        {{--        <form class="mt-10 space-y-8">--}}
        {{--            <input--}}
        {{--                class="w-full border rounded h-12 px-4 focus:outline-none"--}}
        {{--                placeholder="Email adress "--}}
        {{--                type="email"--}}
        {{--            />--}}

        {{--            <div class="flex items-center ">--}}
        {{--                <input--}}
        {{--                    class="w-full border rounded h-12 px-4 focus:outline-none -mr-7"--}}
        {{--                    placeholder="Password"--}}
        {{--                    type="password"--}}
        {{--                />--}}

        {{--            </div>--}}
        {{--            <div>--}}
        {{--                <div class="flex flex-col md:flex-row md:items-center justify-between ">--}}
        {{--                    <input--}}
        {{--                        class="bg-orange-500 text-sm active:bg-gray-700 cursor-pointer font-regular text-white px-4 py-2 rounded uppercase"--}}
        {{--                        type="submit"--}}
        {{--                        value="login now"--}}
        {{--                    />--}}
        {{--                    <p--}}
        {{--                        class="text-gray-400 text-sm--}}
        {{--            underline self-center--}}
        {{--            md:self-auto mt-4 md:mt-0"--}}
        {{--                    >--}}
        {{--                        Forgot your password?--}}
        {{--                    </p>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </form>--}}
        {{--        </div>--}}
        {{--        <div class="relative flex flex-col justify-center pt-10 overflow-hidden">--}}
        {{--            <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-lg">--}}
        {{--                <h1 class="text-3xl font-semibold text-center text-purple-700">Datos de acceso</h1>--}}
        {{--                <form class="space-y-4">--}}
        {{--                    <div>--}}
        {{--                        <label class="label">--}}
        {{--                            <span class="text-base label-text">Email</span>--}}
        {{--                        </label>--}}
        {{--                        <input type="text" name="name" placeholder="Email Address" class="w-full input input-bordered input-primary" />--}}
        {{--                    </div>--}}
        {{--                    <div>--}}
        {{--                        <label class="label">--}}
        {{--                            <span class="text-base label-text">Password</span>--}}
        {{--                        </label>--}}
        {{--                        <input type="password"  name="password" placeholder="Enter Password"--}}
        {{--                               class="w-full input input-bordered input-primary" />--}}
        {{--                    </div>--}}
        {{--                    <a href="#" class="text-xs text-gray-600 hover:underline hover:text-blue-600">Forget Password?</a>--}}
        {{--                    <div>--}}
        {{--                        <button class="btn btn-primary">Login</button>--}}
        {{--                    </div>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        </div>
    @endslot

</x-layout.layout>
