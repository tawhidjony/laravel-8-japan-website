<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-center text-xl font-extrabold">会員登録</h1>
            <h3 class="my-5 text-sm font-light">以下の内容で会員登録を行います。
                よろしければ「送信」ボタンを選択してください。</h3>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                @method('post')
                <div>
                    <label for="Nickname">ニックネーム: {{$userData['name']}} </label>

                </div>
                <div class="mt-3">
                    <label for="email">メールアドレス: {{ $userData['email'] }}</label>

                </div>
                <div class="mt-3">
                    <label for="password">パスワード: <input type="password" class="border-0" value="{{$userData['password']}}" disabled> </label>
                </div>
                <div class="mt-3">
                   <button type="submit" class="bg-indigo-900 rounded p-2 text-white mt-1 w-full">Register</button>
                </div>
            </form>

        </div>
    </div>
</x-guest-layout>
