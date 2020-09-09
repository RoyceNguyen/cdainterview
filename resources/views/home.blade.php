@extends('layouts.site')

@includeIf('layouts.headers', ['company' => $company, 'page' => $page])

@section('cover-image')
    <style type="text/css" media="all">
        #feature {
            background-image: url('/images/{{ $page->cover_image }}');
        }
    </style>
@endsection

@section('page')
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        @foreach ($contents as $content)
            {!! $content->title !!}
            <br>
            {!! $content->text_data  !!}
            <br>
        @endforeach
    </div>
@endsection
