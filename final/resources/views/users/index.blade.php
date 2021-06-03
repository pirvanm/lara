{{-- {{$users}} --}}
{{-- @foreach ( $users as $u)
{
    {{ $u}}
}

@endforeach  --}}
<table class="table">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
@foreach ($users as $user)
<tr>
    <th scope="row"> {{ $user->orderNumber }} </th>
    <td>  {{$user->orderDate }} </td>
    <td>   {{$user->requiredDate}}  </td>
    <td> {{$user->shippedDate}} </td>
    <td>     {{$user->status}} </td>
    <td>   {{$user->comments}}  </td>
    <td>   {{$user->customerNumber}}</td>
  </tr>
      
@endforeach


 
     

    </tbody>
  </table>

{{-- @foreach ($users as $user)
    <p>This is user {{ $user->orderNumber }} {{$user->orderDate }} 
         {{$user->requiredDate}}  {{$user->shippedDate}} 
         {{$user->status}} 
          {{$user->comments}}  
         {{$user->customerNumber}}</p>
@endforeach --}}