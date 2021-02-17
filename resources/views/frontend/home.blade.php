<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h3 class="text-center mt-3">会員の皆さまへのお知らせ</h3>
            <div class="mt-3">
                <p>10/1 更新
                    「しあわせごはん川柳」の応募を、開始しました！
                </p>
            </div>
            <div class="text-center">
                <img src="{{asset('assets/image/food.png')}}" alt="" style="height:200px; width:100%">
            </div>
            <div class="mt-3">
                <p>優秀作品は「ハレごよみ」でもご紹介いたします。</p>
            </div>
            <div class="mt-6">
                <a href="">投稿方法や詳細はこちら</a>
            </div>
            <div class="mt-6">
                <a href="" class="bg-gray-200 rounded-full p-3 text-center text-black block">「ハレの日セット」に申し込む</a>
            </div>
            <div class="mt-6">
                <a href="" class="bg-gray-200 rounded-full p-3 text-center text-black block">お赤飯友の会について</a>
            </div>
            <div class="mt-6">
                <a href="" class="bg-gray-200 rounded-full p-3 text-center text-black block">会員メニュー</a>
            </div>
            <div class="mt-6">
                <a href="" class="bg-gray-200 rounded-full p-3 text-center text-black block">井村屋お問い合わせ窓口へ</a>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                    Logout
                </a>
            </form>

        </div>
    </div>
</x-guest-layout>
