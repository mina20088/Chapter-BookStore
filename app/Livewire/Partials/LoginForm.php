<?php

namespace App\Livewire\Partials;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginForm extends Component
{
    #[validate]
    public string $email;

    #[validate]
    public string $password;

    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function updating($property, $value): void {

        $this->validate();

    }
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {

        return view('partials.login-form');
    }
}
