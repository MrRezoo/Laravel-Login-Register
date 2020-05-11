@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <div class="large mb-2">
                <li class="text-danger">{{$error}}</li>
            </div>
        @endforeach
    </ul>
@endif
