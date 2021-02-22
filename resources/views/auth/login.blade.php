{{-- <x-guest-layout>
    <x-auth-card>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-center ">ログイン</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-6">
                    <input id="email" class="@error('email') border-red-500 @enderror rounded-full block mt-1 w-full rounded" type="email" name="email" placeholder="メールアドレス" />
                    @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
                </div>
                <div class="mt-6">
                    <input id="password" class="@error('password') border-red-500 @enderror rounded-full block mt-1 w-full rounded" type="password" name="password" placeholder="パスワード" />
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                     @enderror
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-gray-200 rounded-full p-3 w-full text-center text-black block">次へ</button>
                </div>
                <div class="mt-3 text-center">
                    @if (Route::has('password.request'))
                    <a class="text-center text-blue-500 underline hover:text-gray-900" href="{{ route('password.request') }}">
                        パスワードを再設定する
                    </a>
                @endif
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>
