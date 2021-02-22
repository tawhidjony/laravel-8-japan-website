<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h3 class="text-center mt-3 text-2xl font-semibold"> ハレの日セットの お届け内容をご確認ください</h3>
            <p class="text-sm mt-2">内容をご確認の上、よろしければ「応募する」を選択してください。</p>
                <form action="">
                    <div class="mt-5">
                        <p>お祝いしたい日</p>
                        <p>2021年11月1日</p>
                    </div>
                    <div class="mt-5">
                        <p>お名前</p>
                        <p>山田　太郎</p>
                        <p>ヤマダ　タロウ</p>
                    </div>
                    <div class="mt-5">
                        <p>お届け先</p>
                        <p>000-0000</p>
                        <p>東京都</p>
                        <p>新宿区西新宿</p>
                    </div>
                    <div class="mt-5">
                        <p>新宿マンション202</p>
                    </div>
                    <div class="mt-5">
                        <p>電話番号</p>
                        <p>09000000000</p>
                    </div>
                    <div class="my-8 text-center">
                       <a href="{{route('product.google.sheet')}}" class="px-5 bg-gray-300 py-2 text-black rounded-full">修正する</a>
                    </div>
                    <div>
                       <button type="submit" class="bg-gray-300 p-2 w-full text-center text-black rounded-full my-5">申し込む</button>
                    </div>
                </form>

        </div>
    </div>
</x-guest-layout>
