<x-guest-layout>
    <x-auth-card>

        <div class="mt-8">
            <h1 class="text-center font-extrabold">パスワード再設定</h1>
            <p>新しいパスワードを設定してください。</p>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full rounded-full mt-5" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">

                <x-input id="password" class="block mt-1 w-full rounded-full" type="password" name="password" placeholder="パスワード" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" class="block mt-1 w-full rounded-full"
                                    type="password"
                                    name="password_confirmation" placeholder="パスワード（確認）" required />
            </div>

            <div class="text-center">
                <button type="submit" class="bg-gray-300 text-black text-center font-bold w-full rounded-full mt-8 py-2">次へ</Button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
