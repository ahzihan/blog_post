
<div class="card mb-3 w-100">
  {{-- <img src="{{ asset('uploads/'.$list->photo) }}" class="card-img-top" alt="Image"> --}}
  <div class="card-body">
    <h5 class="card-title">{{ $list->title }}</h5>
    <p>Posted at : <small>{{ $list->created_at }}</small></p>
    <p class="card-text">{{ $list->details }}</p>
  </div>
</div>

