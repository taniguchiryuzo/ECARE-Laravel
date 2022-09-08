@extends('layouts.default')
@section('title', 'トップページ')

@section('content')
<section class="bg-gray-100">
  <div class="container mx-auto py-40 relative">
    <h1 class="mt-2 text-4xl font-bold font-heading text-center">さぁ、みんなでご飯を楽しもう！！</h1>
   
    
  </div>
</section>

<section class="mt-16">
  <div class="container mx-auto">
    <p class="text-center text-2xl">食形態から探そう</p>
   
  <div class="flex flex-wrap -m-3 container mx-auto pt-8">
    <div class="w-full lg:w-1/3 p-3">
      <div class="bg-gray-100 rounded shadow">
        <div class="flex py-10 px-6">
          <img class="w-20 h-20 object-cover rounded-full" src="/images/index/foliage-plant.jpg" alt="">
          <div class="ml-4 w-56">
            <h3 class="mb-1 text-2xl font-heading text-left text-blue-500">ペースト食</h3>
         </div>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-1/3 p-3">
      <div class="bg-gray-100 rounded shadow">
        <div class="flex py-10 px-6">
          <img class="w-20 h-20 object-cover rounded-full" src="/images/index/sanitizer.jpg" alt="">
          <div class="ml-4 w-56">
            <h3 class="mb-1 text-2xl font-heading text-left text-blue-500">衛生管理</h3>
            <p class="text-left text-gray-500 text-sm">店員・ゲストの検温<br> マスクの常時着用<br> 1時間毎に全ての設備を消毒</p>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full lg:w-1/3 p-3">
      <div class="bg-gray-100 rounded shadow">
        <div class="flex py-10 px-6">
          <img class="w-20 h-20 object-cover rounded-full" src="/images/index/health-check.jpg" alt="">
          <div class="ml-4 w-56">
            <h3 class="mb-1 text-2xl font-heading text-left text-blue-500">ねこの体調管理</h3>
            <p class="text-left text-gray-500 text-sm">毎日の検温<br> ワクチン接種済み<br> 定期的な検診</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  </div>

  <div class="mb-6 py-4 bg-white rounded">
        <div class="flex px-6 pb-4 border-b justify-center">
            <h2 class="text-xl font-bold">レシピ一覧</h2>
        </div>
        <div class="pt-4 px-4 overflow-x-auto">
            <table class="table-auto w-full">
                <thead>
                <tr class="text-xs text-gray-500 text-left">
                    <th class="font-medium text-center">タイトル</th>
                    <th class="font-medium">カテゴリ</th>
                    <th class="font-medium">食形態</th>
                             
                </tr>
                </thead>
                <tbody>
                    @foreach ($recipis as $recipi )
                    <tr @class(['text-sm'.'bg-gray-50' => $loop->odd])>
                    <td class="flex px-4 py-3 recipis-center justify-center">
                        <img class="w-12 h-12 mr-4 object-cover rounded-md" src="{{ asset('storage/'.$recipi->image) }}" alt="">
                        <p class="font-medium"><a href="#">{{ $recipi->title }}</a></p>
                    </td>
                    <td class="font-medium">{{ $recipi->type }}</td>
                    <td class="font-medium">{{ $recipi->foodform }}</td>
                    {{-- <td>{{ $recipi->updated_at }}</td> --}}
                    <td>
                   </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
</section>
@endsection