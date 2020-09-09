@section('google')
    @if ($company->g_analytics)
        {!! $company->g_analytics !!}
    @endif
@endsection

@section('facebook')
    @if ($company->fb_advertising)
        {!! $company->fb_advertising !!}
    @endif
@endsection

@section('meta')
    <meta name="title"
          content="{{ $page->meta_title }}"/>
    <meta name="description"
          content="{{ $page->meta_description }}"/>
@endsection

@section('no-index')
    @if(!$page->is_public)
        <meta name="robots" content="noindex">
    @endif
@endsection
