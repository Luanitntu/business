@extends('layout.master')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Event Registration Form</h2>
            </div>
            <div class="card-body">
                 <form method="POST" action="{{URL::to('/register')}}"><br>
                    {{ csrf_field() }}
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert-danger alert">{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="form-row">
                        <div class="name">Username</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Re-Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="re-password">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Phone</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="tel" name="phone">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
