{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="min-h-screen flex  flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <div class="mb-4 text-sm text-gray-600">
                <h1 class="my-5 text-center text-xl font-extrabold">メールを送信しました</h1>
                <p>（入力されたメールアドレス）に送信されたメールの内容をご確認ください。</p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="text-center">
                    <button type="submit" class="text-blue-500 text-center font-bold underline">メールを再送信</Button>
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
