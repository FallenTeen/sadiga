<?php

use App\Livewire\Forms\LoginForm;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();
        $this->syncLikesWithDatabase();
        sweetalert()->success('Selamat Datang.');

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    private function syncLikesWithDatabase()
    {
        // Retrieve liked items from session
        $likedItemsInSession = Session::get('liked_barangs', []);

        if (!empty($likedItemsInSession)) {
            $user = auth()->user();  // Get the currently authenticated user

            // Add liked items from session to the database if they are not already present
            foreach ($likedItemsInSession as $barangId) {
                if (!$user->likedBarangs()->where('barang_id', $barangId)->exists()) {
                    $user->likedBarangs()->attach($barangId);
                }
            }

            // After syncing, forget liked items in session
            Session::forget('liked_barangs');
        }
    }

}; ?>

<div class="flex mt-8">
    <div class="py-11 px-20 rounded-l-md bg-sky-300 drop-shadow-sm backdrop-blur-sm bg-opacity-15">
        <!-- Session Status -->
        <x-auth-session-status class="" :status="session('status')" />
        <h1 class="text-3xl font-bold font-poppins justify-center flex mb-6 text-white">Login</h1>
        <form wire:submit="login">
            <!-- Email Address -->
            <div class="">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember" class="inline-flex items-center">
                    <input wire:model="form.remember" id="remember" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-white dark:text-gray-400">{{ __('Ingat data login') }}</span>
                </label>
            </div>

            <div class="grid items-center text-center mt-2">
            <x-primary-button class="">
                    {{ __('Log in') }}
            </x-primary-button>
                <div class="flex justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white dark:text-gray-400 hover:text-blue-400 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" wire:navigate>
                        {{ __('Lupa kata sandi?') }}
                    </a>
                @endif
                <a class="text-sm text-white dark:text-gray-400 hover:text-blue-400 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="/register" wire:navigate>
                        {{ __('Buat Akun') }}
                </a>
                </div>
            </div>
        </form>
    </div>

    <div class="items-center bg-white rounded-r-md font-poppins text-maincolor hidden lg:flex">
        <div class="px-8">
            <h1 class="font-bold text-2xl text-center">Selamat Datang</h1>
            <h2 class="font-semibold text-md text-center mb-8">Di PT. Aneka Sarana Teknik E-Catalogue</h2>
            <a
                href="/"
                class="flex justify-center gap-2 items-center mx-auto text-lg bg-gray-50 lg:font-semibold isolation-auto border-maincolor before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-maincolor hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10 px-4 py-2 overflow-hidden border-2 rounded-full group">
                Telusuri Produk
                <svg
                    class="w-8 h-8 justify-end group-hover:rotate-90 group-hover:bg-gray-50 text-gray-50 ease-linear duration-300 rounded-full border border-maincolor group-hover:border-none p-2 rotate-45"
                    viewBox="0 0 16 19"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                        class="fill-maincolor group-hover:maincolor"
                    ></path>
                </svg>
            </a>

        </div>
    </div>
</div>