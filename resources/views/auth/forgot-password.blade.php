<x-auth-layout>
    <x-slot name="title">
        forget password
    </x-slot>
    <div class="forget-password-section d-flex flex-column justify-content-center align-items-center border border-dark rounded-2">
        <div class="col-6">
            <h1>
                Forgot Your Password?
            </h1>
            <p>
                No worries! Just enter the email associated with your account, and we’ll send you a link to reset your password. Follow the instructions in the email, and you’ll be back in no time!
            </p>
        </div>
        <div class="col-6">
            <form method="POST">
                <div class="form-floating mb-3">
                    <x-text-input id="email" name="email"/>
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
            </form>
        </div>
    </div>

</x-auth-layout>
