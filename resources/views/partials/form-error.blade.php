@if ($errors->any())
    <div class="card-alert alert alert-warning mb-0">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li class="">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
