@if ($errors->any())
    <div class="text-danger font-weight-bold">
        
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        
    </div>
    
@endif

@if (session('status'))
    <div class="h4 p-5 white-color">
        {{ session('status') }}
    </div>
@endif