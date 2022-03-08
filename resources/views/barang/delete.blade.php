<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Delete Data Barang</div>
  </div>
  <form action="{{ route('barang.delete') }}" method="POST">
    {{csrf_field()}}
    <input type="hidden" class="form-control" id="id" name="id" @if(!empty($delete)) value="{{$delete->id}}" @endif required readonly>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" @if(!empty($delete)) value="{{$delete->name}}" @endif required readonly>
    </div>
    <div class="form-group">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" placeholder="Type" @if(!empty($delete)) value="{{$delete->type}}" @endif required readonly>
    </div>

    <div class="row justify-content-end p-2">
      <button type="submit" class="btn btn-danger btn-sm" @if(!empty($delete)) @else disabled @endif>Delete</button>
    </div>
  </form>
</div>