<form action="/login" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="email" class="form-control border-top-0 border-end-0 border-start-0" name="email" wire:model.live="email" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
    </div>
    <div>
        @error('email')
        <p class="text-danger">*{{ $message }}</p>
        @enderror
    </div>

    <div class="form-floating mb-3">
        <input type="password" class="form-control border-top-0 border-end-0 border-start-0" name="password" id="floatingInput" wire:model.live="password" placeholder="password">
        <label for="floatingInput">password</label>
    </div>
    <div>
        @error('password')
        <p class="text-danger">*{{ $message }}</p>
        @enderror
    </div>
    <div class="d-flex justify-content-between">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberme" name="remember">
            <label class="form-check-label" for="remember">
                remember me
            </label>
        </div>
        <div>
            <a href="{{ route('password.request') }}">Forget Password</a>
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
</form>
