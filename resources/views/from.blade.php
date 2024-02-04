

<h1>This is From Page</h1>
<h3>It is Registration From Page.</h3>

<form action="{{route('student.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter your name"> <br>
    <input type="text" name="email" id="" placeholder="Enter your email"> <br>
    <button type="submit">Submit</button>
</form>

<h3>Back to the home page</h3><a href="{{'/'}}">Home</a>

