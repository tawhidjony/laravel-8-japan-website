<x-guest-layout>
    @php

        $output = [];
        for ($day = 0; $day < 30; $day++) {
            $output[] = date('d', strtotime(sprintf('+%d days', $day)));
        }
    @endphp
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div>
                <h2 class="text-xm py-10 font-bold text-center">ハレの日セットは、
                    お祝いしたい日がある
                    ご希望の月にお届けいたします</h2>
            </div>
            <div>
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                        <div class="text-center">
                            <input type="text" name="delivery_year_month" placeholder="年/月" onfocus="(this.type='month')" />
                            <select name="delivery_day" id="">
                                <option value="">日</option>
                                @foreach ($output as $days)
                                <option value="{{$days}}">{{$days}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-3 w-full text-center">
                            <textarea name="" id="" cols="30" rows="5"></textarea>
                        </div>
                        <div class="text-center">
                           <button type="button" class="bg-gray-300 rounded-full text-xs text-black p-2 text-center">こんなエピソードを
                            いただいています</button>
                        </div>
                        <div class="my-5">
                           <input type="checkbox" name="" value="">
                           <label for=""> 応募規約・プライバシーポリシーに同意する。</label>
                        </div>
                        <div>
                            <a href="{{url('/google/sheet')}}" class="bg-gray-300 rounded-full text-black p-2 w-full block text-center">次へ</a>
                            {{-- <button class="bg-gray-300 rounded-full text-black p-2 w-full">次へ</button> --}}
                        </div>
                        <div class="my-3 text-center">

                            <a href="{{route('home.index')}}" class="text-blue-500 text-center underline">応募規約・プライバシーポリシー</a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-guest-layout>
