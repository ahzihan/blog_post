<h3>Post List</h3>
<table class="table">
  <thead class="table-dark">
    <tr>
        <th>SL</th>
        <th>Title</th>
        <th>Details</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php
        $sl=1;
    @endphp
    @forelse($posts as $n)
    <tr>
        <td>{{ $sl++ }}</td>
        <td>{{ $n->title }}</td>
        <td>{{ $n->details }}</td>
        <td>
            <a class="btn btn-sm btn-primary" href="{{url('/details/'.$n->id)}}">Read More</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
