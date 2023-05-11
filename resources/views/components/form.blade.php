@props([
    'action',
    'post' => null,
    'put' => null,
    'delete' => null,
])

<form method="post" action="{{$action}}">
    @csrf
    @if($put)
        @method('PUT')
    @endif
    @if($delete)
        @method('DELETE')
    @endif
    {{$slot}}
</form>
