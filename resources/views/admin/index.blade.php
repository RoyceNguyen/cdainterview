@extends('layouts.app')

@section('content')
    <company-setup-component :company-id="{{ $company }}"></company-setup-component>
@endsection
