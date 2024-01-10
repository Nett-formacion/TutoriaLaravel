<x-layout.layout >
    @slot("slot_main")
        <div class= "relative flex flex-col justify-center p-10 overflow-hidden h-full max-h-max max-w-md w-full ">

            <div class="w-full p-6 m-auto bg-white rounded-md shadow-md lg:max-w-lg">
                <h1 class="text-3xl font-semibold text-center text-purple-700">Datos de registro</h1>
                <form class="space-y-4" action ="{{route("register")}}" method="post">
                    @csrf
                    <div>
                        <label class="label">
                            <span class="text-base label-text">Nombre</span>
                        </label>
                        <input type="text" placeholder="Nombre" name="name" class="w-full input input-bordered input-primary" />
                    </div>
                    <div>
                        <label class="label">
                            <span class="text-base label-text">Email</span>
                        </label>
                        <input type="text" name="email" placeholder="Email Address" class="w-full input input-bordered input-primary" />
                    </div>
                    <div>
                        <label class="label">
                            <span class="text-base label-text">Confirmar la password</span>
                        </label>
                        <input type="password" name="password_confirmation" placeholder="Confirmar la Password"
                               class="w-full input input-bordered input-primary" />
                    </div>
                    <div>
                        <label class="label">
                            <span class="text-base label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="Enter Password"
                               class="w-full input input-bordered input-primary" />
                    </div>
                    <a href="#" class="text-xs text-gray-600 hover:underline hover:text-blue-600">Forget Password?</a>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    @endslot
</x-layout.layout>
