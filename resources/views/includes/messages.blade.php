@if($errors->any()) 
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error) 
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif