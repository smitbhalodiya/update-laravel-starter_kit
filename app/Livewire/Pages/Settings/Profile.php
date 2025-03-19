<?php

namespace App\Livewire\Pages\Settings;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    #[Rule('required|string|max:255')]
    public $name = '';

    #[Rule('required|string|email|max:255|unique:users,email')]
    public $email = '';

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        $validated = $this->validate();

        $user = Auth::user();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();

        session()->flash('status', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.pages.settings.profile');
    }
}
