@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <form method="POST"
                              action="{{ route('result.store') }}">
                            @csrf

                            @if(isset($result))
                                <input type="hidden" name="id" class="form-control" value="{{$result->id}}">
                            @endif
                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" autofocus value="{{$result->name?? ''}}">
                                    @error('crime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('Roll') }}</label>

                                <div class="col-md-6">
                                    <input name="roll" type="number" minlength="6" maxlength="6" class="form-control" autofocus value="{{$result->roll?? ''}}">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('CSE 511') }}</label>

                                <div class="col-md-6">
                                    <input type="number"  name="sub1" class="form-control" autofocus value="{{$result->sub1?? 0}}">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('CSE 513') }}</label>

                                <div class="col-md-6">
                                    <input type="number" name="sub2" class="form-control" autofocus value="{{$result->sub2?? 0}}">
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('CSE 515') }}</label>

                                <div class="col-md-6">
                                    <input type="number" name="sub3" class="form-control" autofocus value="{{$result->sub3?? 0}}">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('CSE 517') }}</label>

                                <div class="col-md-6">
                                    <input type="number" name="sub4" class="form-control" autofocus value="{{$result->sub4?? 0}}">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('CSE 519') }}</label>

                                <div class="col-md-6">
                                    <input type="number" name="sub5" class="form-control" autofocus value="{{$result->sub5?? 0}}">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label class="col-md-4 col-form-label ">{{ __('ACC 591') }}</label>

                                <div class="col-md-6">
                                    <input type="number" name="sub6" class="form-control" autofocus value="{{$result->sub6?? 0}}">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Entry') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
