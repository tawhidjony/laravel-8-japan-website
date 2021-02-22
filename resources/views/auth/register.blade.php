<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <h1 class="text-center text-xl font-extrabold">Register</h1>
            <form action="{{ route('register.next') }}" method="POST">
                @csrf
                <div>
                    <label for="Nickname">ニックネームを教えてください。</label>
                    <input id="Nickname" class="@error('name') border-red-500 @enderror block mt-1 w-full rounded-full" type="text" name="name" value="{{old('name')}}" placeholder="ニックネーム" />
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="email">メールアドレスを教えてください。</label>
                    <input id="email" class="@error('email') border-red-500 @enderror block mt-1 w-full rounded-full" type="email" name="email" value="{{old('email')}}" placeholder="メールアドレス" />
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password">パスワードを設定してください。</label>
                    <input id="password" class="@error('password') border-red-500 @enderror block mt-1 w-full rounded-full" type="password" name="password" placeholder="パスワード" />
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password_confirmation">パスワードを設定してください。</label>
                    <input id="password_confirmation" class="@error('password_confirmation') border-red-500 @enderror block mt-1 w-full rounded-full" type="password" name="password_confirmation" placeholder="パスワード（確認）" />
                    @error('password_confirmation')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <input id="checkboxAgree" class="appearance-none checked:bg-blue-600 checked:border-transparen" type="checkbox" value="false"/>
                    <label for="checkbox" class="text-sm">利用規約・プライバシーポリシーに同意する。</label>
                </div>
                <div class="mt-3">
                   <button id="registerNext" type="submit" disabled class="bg-gray-300 text-black disabled:opacity-50 rounded-full p-2 mt-1 w-full">次へ</button>
                </div>

                <div class="mt-3 text-center my-5">
                   <a href="{{route('privacy-policy')}}" class="text-blue-500 underline ">利用規約・プライバシーポリシー</a>
                </div>

            </form>
        </div>
    </div>
    @push('js')
    <script>
        $(document).on('change','#checkboxAgree', function(){
            $(this).val(this.checked ? "true" : "false");

            if ( $(this).val() == 'false') {
                $('#registerNext').attr('disabled', 'disabled')
            }else{
                $('#registerNext').removeAttr("disabled");
            }
        });
    </script>
    @endpush
</x-guest-layout>
