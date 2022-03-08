<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Detail Data Barang</div>
  </div>
  <input type="hidden" class="form-control" id="id" name="id" @if(!empty($find)) value="{{$find->id}}" @endif required>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" @if(!empty($find)) value="{{$find->name}}" @endif required readonly>
  </div>
  <div class="form-group">
      <label for="type" class="form-label">Type</label>
      <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" placeholder="Type" @if(!empty($find)) value="{{$find->type}}" @endif required readonly>
  </div>

  <div class="row justify-content-end p-2">
    <a type="button" href="{{ route('barang.index') }}" class="btn btn-info btn-sm" @if(!empty($find)) @else style="pointer-events: none; display: inline-block;" @endif>Reset</a>
  </div>
</div>