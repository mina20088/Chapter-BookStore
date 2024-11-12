<x-auth-layout>
    <x-slot name="title">
        Login
    </x-slot>
        <div class="col-sm-12 mt-sm-3 order-sm-1 order-md-1 text-sm-center col-md-6">
            <h1>Welcome Back! Ready to continue your</h1>
            <h1>reading journey</h1>
            <p>Signing to our website now and start reading</p>
            <livewire:partials.login-form/>
        </div>
        <div class="col-sm-12 mt-sm-3 col-md-6">
            <img class="img-fluid" src="{{ Vite::asset("resources/images/Login_form.png") }}" alt="login_form_illustration">
        </div>
</x-auth-layout>
