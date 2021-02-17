<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-center ">ログイン</h1>
            <form method="POST" action="{{ route('user.login.store') }}">
                @csrf
                <div>
                    <input id="email" class="block mt-1 w-full rounded" type="email" name="email" placeholder="メールアドレス" />
                </div>
                <div class="mt-3">
                    <input id="password" class="block mt-1 w-full rounded" type="password" name="password" placeholder="パスワード" />
                </div>
                <div class="mt-3">
                   <button type="submit" class="bg-indigo-900 rounded p-2 text-white mt-1 w-full">Login</button>
                </div>

            </form>
        </div>
    </div>
</x-guest-layout>