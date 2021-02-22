<x-guest-layout>
    <div class="min-h-screen flex  flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-sm text-gray-600">
                <h1 class="my-5 text-center text-xl font-extrabold">登録が完了いたしました</h1>
                <p>お赤飯友の会への会員登録が完了いたしました。</p>
            </div>
            <div>
                <h4>あなたの会員ナンバーは</h4>
                <h4 class="my-2 font-extrabold">{{auth()->user()->osh_code}}</h4>

            </div>

            <div class="my-8">
                <p>ぜひ「ハレの日セット」にご応募ください。</p>
            </div>

            <div class="mt-6">
                <a href="{{route('product.index')}}" class="bg-gray-200 rounded-full p-3 text-center text-black block">ハレの日セットに申し込む</a>
            </div>
            <div class="mt-6 text-center">
                <a href="{{route('user.home')}}" class="text-blue-500 underline text-center text-black ">ハレの日セットに申し込まない</a>
            </div>
    </div>
</x-guest-layout>
