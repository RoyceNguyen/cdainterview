@extends('layouts.app')

@section('content')
    <page-form-component :page-id="{{ $page }}"></page-form-component>
@endsection
