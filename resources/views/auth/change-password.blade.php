@section('styles')
<link rel="stylesheet" href="{{URL::asset('css')}}/account.css">
@endsection
<x-layout>
    <x-slot:title>
        Profile
    </x-slot:title>
    <div class="breadcrumb_bg">
        <div class="breadcrumb-box-img">
            <img src="{{URL::asset('img') }}/bg_breadcrumb (1).png" alt="" />
        </div>
        <div class="title-full">
            <div class="container">
                <p class="title-page">Đổi mật khẩu</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @if($errors=Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{$errors}}
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="login-main">
        <div class="login-container my-5">
            <div class="container-form">
                <form method="POST" action="{{route('password.change')}}" class="form-account">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Mật khẩu cũ:</label>
                        <input require name="old_password" type="password" placeholder="Mật khẩu cũ...">
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu mới:</label>
                        <input require type="password" id="pwd" name="new_password" placeholder="Mật khẩu mới..." minlength="6">
                    </div>
                    <div class="form-group" onkeyup="validateForm()">
                        <label for="">Nhập lại mật khẩu:</label>
                        <input require type="password" id="confirmation_pwd" placeholder="Nhập lại mật khẩu...">
                        <label for="" style="color: red; display:none;" class="warning_pwd">Mật khẩu không khớp</label>
                    </div>
                    <div class="group-btn">
                        <button type="submit" class="btn-account">Đổi mật khẩu </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>