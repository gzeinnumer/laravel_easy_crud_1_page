<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Tambah Data Barang</div>
  </div>
  <form action="{{ route('barang.create') }}" method="POST">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label for="type" class="form-label">Type</label>
        <select name="type" class="form-control" aria-label="Default select example" required>
            <option disabled selected value="">Type</option>
            <option value="Laptop">Laptop</option>
            <option value="Handphone">Handphone</option>
        </select>
    </div>
    <div class="row justify-content-end p-2">
      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </div>
  </form>
</div>