<h1>This is Home page</h1>

<h3>Back to the main page <a href="{{url('/')}}">Welcome</a></h3>


<form action="{{ route('pass.us') }}" method="post">
    @csrf
    <div>
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div> <br>
    <button type="submit" class="btn-btn-default">Submit</button>
</form>
