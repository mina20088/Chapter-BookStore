<x-auth-layout>
    <x-slot name="title">
        forget password
    </x-slot>


    <x-slot name="back">
        <a class="btn btn-primary h-25" href="{{ route("login") }}">Back</a>
    </x-slot>

    <div class="forget-password-section col-4 offset-4">
        <div class="">
            <h1>
                Forgot Your Password?
            </h1>
            <p>
                No worries! Just enter the email associated with your account, and we’ll send you a link to reset your password. Follow the instructions in the email, and you’ll be back in no time!
            </p>
            <form method="POST">
                <div class="form-floating mb-3">
                    <x-text-input id="email"  name="email" />
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <x-text-input type="password" id="password" name="password"/>
                    <label for="password">password</label>
                </div>
                <div class="form-floating mb-3">
                    <x-text-input type="password" id="confirm-password" name="confirm-password"/>
                    <label for="confirm-password">confirm password</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark">Send Request</button>
                </div>
            </form>
        </div>
    </div>



</x-auth-layout>
