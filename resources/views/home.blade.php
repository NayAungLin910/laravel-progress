<h1>This is the home page for authenticated user.</h1>
{{$user->first_name." ".$user->last_name}}
<br/>
<a href="{{url('/logout')}}">Logout</a>