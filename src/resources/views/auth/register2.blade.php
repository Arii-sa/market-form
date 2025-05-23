@extends('layouts.register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register2.css')}}">
@endsection


@section('content')
<div class="register-form">
  <h2 class="register-form__heading content__heading">プロフィール設定</h2>
  <div class="register-form__inner">
    <form class="register-form__form" action="/register2" method="post">
      @csrf
      <div class="register-form__group">
        <!--<link rel="icon" href="img/favicon.ico">-->
      </div>

      <div class="register-form__group">
        <label class="register-form__label" for="name">ユーザー名</label>
        <input class="register-form__input" type="text" name="name" id="name" >
        <p class="register-form__error-message">
          @error('name')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="postcode">郵便番号</label>
        <input class="register-form__input" type="text" name="postcode" id="postcode" pattern="\d{3}-\d{4}">
        <p class="register-form__error-message">
          @error('email')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="address">住所</label>
        <input class="register-form__input" type="text" name="address" id="address" >
        <p class="register-form__error-message">
          @error('password')
          {{ $message }}
          @enderror
        </p>
      </div>
      <div class="register-form__group">
        <label class="register-form__label" for="building">建物名</label>
        <input class="register-form__input" type="text" name="building" id="building" >

      <div class="form__button">
        <button class="form__button-submit" type="submit">更新する</button>
      </div>

    </form>
  </div>
</div>
@endsection('content')