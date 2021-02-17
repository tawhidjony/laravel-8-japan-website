<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <a  href="{{route('register.form')}}" class="bg-red-600 mb-3 text-white text-center p-2 rounded block" > メンバー登録する(無料) </a>
            <a  href="{{route('user.login')}}" class="bg-blue-500 text-white text-center p-2 rounded block" > ログイン </a>
        </div>
    </div>
</x-guest-layout>
