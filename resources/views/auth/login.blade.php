<x-auth-layout>
    <x-slot name="title">
        Login
    </x-slot>
    <div class="login-content-section d-flex align-items-center justify-content-center flex-sm-column flex-md-column flex-lg-row gap-lg-4">
        <div class="form-section col-sm-12 mt-sm-3 order-sm-1 order-lg-1 text-sm-center col-lg-6">
            <h1>Welcome Back! Ready to continue your</h1>
            <h1>reading journey</h1>
            <p>Signing to our website now and start reading</p>
            <livewire:partials.login-form/>
        </div>
        <div class="photo-section col-sm-12 mt-sm-3 col-lg-6">
            <img class="img-fluid" src="{{ Vite::asset("resources/images/Login_form.png") }}" alt="login_form_illustration">
        </div>
    </div>

</x-auth-layout>
