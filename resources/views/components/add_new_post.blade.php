<form class="mb-5" action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Add New Post</h3>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
    @error('title')
        <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
  <label for="details" class="form-label">Description</label>
  <textarea class="form-control" name="details" id="details" rows="5"></textarea>
    @error('details')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
