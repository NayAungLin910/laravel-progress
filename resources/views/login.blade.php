<form action="{{url('/login')}}" method="POST">
    @csrf
    <div>
        <input type="email" name="email" id=''>
    </div>
    <div>
        <input type="password" name="password" id="">
    </div>
        <input type="submit" value="Login" name="" id="">
</form>