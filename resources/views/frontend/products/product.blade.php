<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h3 class="text-center mt-3">（ニックネーム）さん</h3>
            <div class="mt-3">
                <p>お赤飯友の会へようこそ</p>
            </div>
            <div class="text-center">
                <img src="{{asset('assets/image/Image-2.jpg')}}" alt="" style="height:200px; width:100%">
            </div>
            <div class="mt-3">
                <p>入会のお礼に、ちょっと特別な日や記念日をお祝いするための特製セット「ハレの日セット」をプレゼントいたします。</p>
            </div>
            <div class="mt-6">
                <a href="{{route('product.create')}}" class="bg-gray-200 rounded-full p-3 text-center text-black block">ハレの日セットに申し込む</a>
            </div>
            <div class="mt-6 text-center">
                <a href="{{route('home.index')}}" class="text-blue-500 underline text-center text-black ">ハレの日セットに申し込まない</a>
            </div>



        </div>
    </div>
</x-guest-layout>
