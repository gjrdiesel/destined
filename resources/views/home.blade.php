@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Your Account</div>

                <div class="panel-body">
                    <account-settings></account-settings>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
