<x-guest-layout>
    <div class="min-h-screen flex  flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                <h1 class="my-5 text-center text-xl font-extrabold">メールを送信しました</h1>
                <p>（入力されたメールアドレス）に送信されたメールの内容をご確認ください。</p>
            </div>

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="text-center">
                    <a class="text-blue-500 text-center font-bold underline">メールを再送信</a>
                </div>
            </form>
            <div>
                <h2 class="my-6">noreply@imuraya-cp.jp(仮)からお送りしています。</h2>
            </div>
            <div class="mt-3">
                <a href={{url('/')}} class="w-full block text-center bg-gray-300 rounded-full p-2 text-black mt-1">戻る</a>
             </div>
        </div>
    </div>
</x-guest-layout>
