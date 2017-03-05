{{-- Dashboard of the App --}}

@extends('template.main')

@section('content')
	{{-- Page Header --}}
	<section class="content-header">
      <h1 class="page-header">
        User Profile
      </h1>
  </section>
  <section class="row">
    <div class="col-md-12">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="{{ !(session()->has('tab')) || session('tab')=='personal_information'? ' active' : '' }}"><a href="#personal_information" data-toggle="tab">Personal Information</a></li>
        <li class="{{ session()->has('tab') && session('tab')=='account_information'? ' active' : '' }}"><a href="#account_information" data-toggle="tab">Account Information</a></li>
      </ul>
      <div class="tab-content">
        @if(Session::has("alert"))
          @include('includes.alert',['type'=>session('alert')['type'],'content'=>session('alert')['content']])
          @php

          @endphp
        @endif
        {{-- Personal information --}}
        <div class="{{ !(session()->has('tab')) || session('tab')=='personal_information'? ' active' : '' }} tab-pane" id="personal_information">
          <form method="POST" action="{{ action('UserController@personalInformation') }}" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="first_name">First Name</label>
              <div class=" col-sm-9 ">
                <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" id="first_name" placeholder="First Name">
                @if ($errors->has('first_name'))
                    @include('includes.help_block', ['content'=>$errors->first('first_name')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('middle_name') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="middle_name">Middle Name</label>
              <div class=" col-sm-9 ">
                <input type="text" name="middle_name" value="{{ $user["middle_name"] }}" class="form-control" id="middle_name" placeholder="Middle Name">
                @if ($errors->has('middle_name'))
                    @include('includes.help_block', ['content'=>$errors->first('middle_name')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="last_name">Last Name</label>
              <div class=" col-sm-9 ">
                <input type="text" name="last_name" value="{{ $user["last_name"] }}" class="form-control" id="last_name" placeholder="Last Name">
                @if ($errors->has('last_name'))
                    @include('includes.help_block', ['content'=>$errors->first('last_name')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="email">Email Address</label>
              <div class=" col-sm-9 ">
                <input type="text" name="email" value="{{ $user["email"] }}" class="form-control" id="email" placeholder="Email Address">
                @if ($errors->has('email'))
                    @include('includes.help_block', ['content'=>$errors->first('email')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('contact_no') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="contact_no">Contact No</label>
              <div class=" col-sm-9 ">
                <input type="text" name="contact_no" value="{{ $user["contact_no"] }}" class="form-control" id="contact_no" placeholder="Contact No">
                @if ($errors->has('contact_no'))
                    @include('includes.help_block', ['content'=>$errors->first('contact_no')])
                @endif
              </div>
            </div>
            <div class="form-group ">
              <div class="col-sm-offset-3 col-sm-9 text-center">
                <button type="submit" class="btn btn-flat btn-brand">Save Personal Information <span class='fa fa-save'></span></button>
              </div>
            </div>
          </form>
        </div>
        {{-- Account Information --}}
        <div class="{{ session()->has('tab') && session('tab')=='account_information'? ' active' : '' }} tab-pane" id="account_information">
          <form method="POST" action="{{ action('UserController@accountInformation') }}" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="username">Username*</label>
              <div class=" col-sm-9 ">
                <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="username" placeholder="Username">
                @if ($errors->has('username'))
                    @include('includes.help_block', ['content'=>$errors->first('username')])
                @endif
              </div>
            </div>
            <!-- <div class="form-group has-feedback {{ $errors->has('old_password') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="old_password">Old Password*</label>
              <div class=" col-sm-9 ">
                <input type="password" name="old_password" value="" class="form-control" id="old_password" placeholder="Password">
                @if ($errors->has('old_password'))
                    @include('includes.help_block', ['content'=>$errors->first('old_password')])
                @endif
              </div>
            </div> -->
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="password">Password</label>
              <div class=" col-sm-9 ">
                <input type="password" name="password" value="" class="form-control" id="password" placeholder="Password">
                @if ($errors->has('password'))
                    @include('includes.help_block', ['content'=>$errors->first('password')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="password_confirmation">Confirm Password</label>
              <div class=" col-sm-9 ">
                <input type="password" name="password_confirmation" value="" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                @if ($errors->has('password_confirmation'))
                    @include('includes.help_block', ['content'=>$errors->first('password_confirmation')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('security_question') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="security_question">Security Question</label>
              <div class=" col-sm-9 ">
                <input type="text" name="security_question" value="" class="form-control" id="security_question" placeholder="Security Question" maxlength="255">
                @if ($errors->has('security_question'))
                    @include('includes.help_block', ['content'=>$errors->first('security_question')])
                @endif
              </div>
            </div>
            <div class="form-group has-feedback {{ $errors->has('security_answer') ? ' has-error' : '' }}">
              <label class="col-sm-3 control-label" for="security_answer">Security Answer</label>
              <div class=" col-sm-9 ">
                <input type="text" name="security_answer" value="" class="form-control" id="security_answer" placeholder="Security Answer" maxlength="255">
                @if ($errors->has('security_answer'))
                    @include('includes.help_block', ['content'=>$errors->first('security_answer')])
                @endif
              </div>
            </div>
            <div class="form-group ">
              <div class="col-sm-offset-3 col-sm-9 text-center">
                <button type="submit" class="btn btn-flat btn-brand">Save Account Information <span class='fa fa-save'></span></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  {{ Session::forget('tab') }}
@endsection