<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-center font-extrabold my-8">パスワード再設定</h1>
            <p class="font-sm">パスワードの再設定が完了いたしました。
                ログイン画面よりログインしてください。</p>

                <div class="mt-6">
                    <a href="{{route('user.login')}}" class="bg-gray-200 rounded-full p-3 text-center text-black block">ログイン画面へ</a>
                </div>
        </div>
    </div>
</x-guest-layout>
