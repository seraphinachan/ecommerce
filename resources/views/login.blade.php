@extends('layouts.master')

@section('content')

<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2 class="mb-4">로그인</h2>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">이름</label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">이메일</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">비밀번호</label>
                        <input name="password" type="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">확인</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
