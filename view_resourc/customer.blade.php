
@if (count($customer)>0)
@foreach ($customer as $customerName)
{{$customerName}};
@endforeach
@else
    No customer!!!
@endif