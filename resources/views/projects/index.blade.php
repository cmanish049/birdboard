@foreach($projects as $project)
    <p><a href="{{ $project->path() }}">{{ $project->title }}</a></p>
@endforeach
