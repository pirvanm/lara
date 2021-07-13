{{-- {{$users}} --}}
{{-- @foreach ( $users as $u)
{
    {{ $u}}
}

@endforeach  --}}

@foreach ($users as $user)
    <p>This is user {{ $user->orderNumber }}</p>
@endforeach