<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3">Edit Data Barang</div>
  </div>
  <form action="{{ route('barang.update') }}" method="POST">
    {{csrf_field()}}
    <input type="hidden" class="form-control" id="id" name="id" @if(!empty($find)) value="{{$find->id}}" @endif required>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" @if(!empty($find)) value="{{$find->name}}" @endif required>
    </div>
    <div class="form-group">
        <label for="type" class="form-label">Type</label>
        <select name="type" class="form-control" aria-label="Default select example" required>
            <option disabled selected>Type</option>
            <option value="Laptop" @if(!empty($find) && $find->type == "Laptop") selected @endif >Laptop</option>
            <option value="Handphone" @if(!empty($find) && $find->type == "Handphone") selected @endif >Handphone</option>
        </select>
    </div>

    <div class="row justify-content-end p-2">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>