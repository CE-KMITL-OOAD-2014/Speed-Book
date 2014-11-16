@extends("layouts.master")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>ล็อกอินเข้าสู่ระบบ</h1>
            <hr>
                {{ Form::open(array('url'=>'user/login','class'=>'form-signin')) }}
                @if($errors->all())
                <div class='alert alert-danger'>
                    <h3>แจ้งเตือน</h3>
                    @foreach($errors->all() as $error)
                    {{ $error }}
                    @endforeach
                </div>
                @endif
                <div class="form-group col-lg-8">
                  <label for="exampleInputEmail1">Username</label>
                  {{ Form::text('username','',array(
                    'class'=>'form-control','placeholder'=>'Username')) }}
                </div>
                <div class="form-group col-lg-8">
                  <label for="exampleInputPassword1">Password</label>
                  {{ Form::text('password','',array(
                    'class'=>'form-control','placeholder'=>'Password')) }}
                </div>
               <div class="form-actions col-lg-8">
                    <input type="submit" value="ล๊อกอิน" class="btn btn-primary">
               </div>
            {{ Form::close() }}
        </div>
    </div>
</div><hr />
@stop