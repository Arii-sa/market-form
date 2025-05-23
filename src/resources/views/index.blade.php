@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
  // メッセージ機能
</div>

<div class="attendance__content">
<form class="mypage" action="/mypage" method="get">
    @csrf
    <p class="message">{{session('message')}}</p>
        <div class="product-contents">
            <!--あとで追加する　フォーチ-->
            <div class="product-content">
                <a href="/item/:item_id" class="product-link"></a>
                <img src="https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg" alt="商品画像" class="img-content" />
                <div class="detail-content">
                    <p>name</p>
                </div>
            </div>
            <!-- あとでエンドフォーチする-->
        </div>
    
</div>
@endsection
