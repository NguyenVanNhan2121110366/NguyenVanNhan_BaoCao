@extends('layouts.site')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập vào tài khoản của bạn</h2>
                        <form action="{{ URL::to('/login-user') }}" method="POST">
                            @csrf <!-- Thêm token csrf để bảo vệ form -->
                            <input type="email" name="email" placeholder="Email" />
                            <input type="password" name="password" placeholder="Mật khẩu" />
                            <span>
                                <input type="checkbox" class="checkbox">
                                Ghi nhớ đăng nhập
                            </span>
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">Hoặc</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký!</h2>
                        <form action="{{ URL::to('/add-user') }}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Thêm token csrf để bảo vệ form -->

                            <input type="text" name="name" placeholder="Họ và Tên" />
                            <input type="text" name="username" placeholder="Tên người dùng" />
                            <input type="password" name="password" placeholder="Mật khẩu" />
                            <input type="text" name="gender" placeholder="Giới tính" />
                            <input type="email" name="email" placeholder="Địa chỉ email" />
                            <input type="text" name="phone" placeholder="Số điện thoại" />
                            <input type="text" name="address" placeholder="Địa chỉ" />
                            <input type="file" name="image" /> <!-- Để tải lên hình ảnh -->
                            <input type="hidden" name="roles" value="0" /> <!-- Giá trị mặc định cho roles -->
                            <input type="hidden" name="created_by" value="1" />
                            <!-- Giá trị mặc định cho created_by -->
                            <input type="hidden" name="update_by" value="" /> <!-- Giá trị mặc định cho update_by -->
                            <input type="hidden" name="status" value="1" /> <!-- Giá trị mặc định cho status -->
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection
