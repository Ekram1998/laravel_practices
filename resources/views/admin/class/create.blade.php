<h1>this is create page</h1>

<a href="{{route('showall.class')}}" class="btn btn-sm btn-primary" style="float: left">All Class</a> <br>

<form action="{{ route('store.class') }}" method="post">
    @csrf
    <div class="md-3">
        @if(session()->has('success'))
            <strong class="text-success">{{ session()->get('success') }}</strong>
        @endif
        <br>
        <label class="form-label">Class Name: </label>
        <input type="text" name="class_name" class="form-control @error('class_name') is-invalid @enderror" placeholder="Enter Class Name">
        @error('class_name')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
