@extends ('administrate::layouts.main')

@section ('content')
    @include ('administrate::core.partials.collection', [
        'collection_presenter' => $page,
        'resources' => $resources,
    ])
@endsection
