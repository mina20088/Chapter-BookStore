<x-auth-layout>
    <x-slot name="title">
        Login
    </x-slot>
        <div class="col-6">
            <h1>Welcome Back! Ready to continue your</h1>
            <h1>reading journey</h1>
            <p>Signing to our website now and start reading</p>
            <livewire:partials.login-form/>
{{--            <from action="/login" method="Post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control border-top-0 border-end-0 border-start-0" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control border-top-0 border-end-0 border-start-0" id="floatingInput" placeholder="password">
                    <label for="floatingInput">password</label>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            remember me
                        </label>
                    </div>
                    <div>
                        <a href="">Forget Password</a>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-dark mt-sm-5">
                        Login
                    </button>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <p>If you don`t have an account <a href="">Register</a></p>
                </div>
            </from>--}}
        </div>
        <div class="col-6">
            <img class="img-fluid" src="{{ Vite::asset("resources/images/Login_form.png") }}" alt="login_form_illustration">
        </div>
</x-auth-layout>
