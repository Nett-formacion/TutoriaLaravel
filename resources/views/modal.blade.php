<!-- Modal Container -->
<div id="modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">

        <!-- Tabs para Login y Registro -->
        <ul class="tab tab-block">
            <li class="tab-item active">
                <a href="#login">Login</a>
            </li>
            <li class="tab-item">
                <a href="#register">Register</a>
            </li>
        </ul>

        <!-- Contenido del Tab de Login -->
        <div id="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-control">
                    <label class="label" for="login-username">
                        <span class="label-text">Username</span>
                    </label>
                    <input type="text" id="login-username" name="username" class="input input-bordered" required>
                </div>

                <div class="form-control">
                    <label class="label" for="login-password">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" id="login-password" name="password" class="input input-bordered" required>
                </div>

                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>

        <!-- Contenido del Tab de Registro -->
        <div id="register" class="hidden">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Campos adicionales para el registro -->
                <div class="form-control">
                    <label class="label" for="register-username">
                        <span class="label-text">Username</span>
                    </label>
                    <input type="text" id="register-username" name="username" class="input input-bordered" required>
                </div>
                <!-- ... otros campos de registro ... -->
                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-item a');
        tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();
                tabs.forEach(t => t.parentElement.classList.remove('active'));
                this.parentElement.classList.add('active');
                const target = document.querySelector(this.getAttribute('href'));
                document.querySelectorAll('.modal-box > div').forEach(d => d.classList.add('hidden'));
                target.classList.remove('hidden');
            });
        });
    });
</script>

