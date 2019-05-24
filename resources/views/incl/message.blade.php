@if ($errors->any())
    <div class="text-danger font-weight-bold">
        
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        
    </div>
    
@endif

@if (session('status'))
    <div class="text-success font-weight-bold">
        {{ session('status') }}
    </div>
@endif