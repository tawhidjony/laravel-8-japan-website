<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h3 class="text-center mt-3 text-2xl font-semibold"> お申し込みありがとうございます お届け内容をご確認ください</h3>

            <div class="mt-8">
                <p>あなたのお祝いしたい日は</p>
                <p>〇〇〇〇年〇〇月〇〇日</p>
                <p>です。</p>
            </div>
            <div class="mt-7">
                <p>ハレの日セットの到着は </p>
                <p>〇〇〇〇年〇〇月末まで</p>
                <p>を予定しております。</p>
            </div>
            <div class="my-8 text-center">
                <a href="{{route('home.index')}}" class="px-5 bg-gray-300 py-2 text-black rounded-full block">修正する</a>
             </div>
        </div>
    </div>
</x-guest-layout>
