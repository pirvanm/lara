{{-- {{$users}} --}}
{{-- @foreach ( $users as $u)
{
    {{ $u}}
}

@endforeach  --}}

@foreach ($users as $user)
    <p>This is user {{ $user->orderNumber }} {{$user->orderDate }} 
         {{$user->requiredDate}}  {{$user->shippedDate}} 
         {{$user->status}} 
          {{$user->comments}}  
         {{$user->customerNumber}}</p>
@endforeach