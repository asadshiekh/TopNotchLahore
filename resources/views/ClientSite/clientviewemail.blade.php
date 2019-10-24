@component('mail::message')
# Welcome {{$UserName}}

@component('mail::panel')
Your Resveration Was Successfully Created! 

@component('mail::button', ['url' => 'http://www.topnotchlahore.com/'])
Click Here To Go Back to Website
@endcomponent 
@endcomponent

@endcomponent

Thanks for Resveration,
Top Notch Management
