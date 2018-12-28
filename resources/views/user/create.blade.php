@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside>
                       @include('user.partial.navbar')
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="card card-default">
                        <div class="card-header">
                            {{__('Add New User')}}
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ url('users') }}" method="post">
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('First Name')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="firstName" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('Last Name')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="lastName" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('E-mail')}}</label>
                                    <div class="col-md-6">
                                        <input type="email" name="email" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{__('Phone Number')}}</label>
                                    <div class="col-md-6">
                                        <input type="text" name="phoneNumber" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="offset-md-4 col-md-6">
                                        <button type="submit" class="btn btn-success">{{__('Save')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
