<x-guest-layout>
    <x-auth-card>

        <div class="mb-4 text-sm text-gray-600">
           <h2 class="text-center font-extrabold mt-5 mb-3">パスワードをお忘れの方へ</h2>
           <p>パスワードをお忘れの方はメールアドレスを入力してください。再設定用のメールをお送りいたします。</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <div>
                    <input id="email" class="@error('email') border-red-500 @enderror block my-10 w-full rounded-full" type="email" name="email" placeholder="メールアドレス" />

                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="bg-gray-300 rounded-full p-2 text-black my-10 w-full">次へ</button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
