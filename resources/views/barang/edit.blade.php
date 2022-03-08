<div class="col">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">Edit Data Barang</div>
  </div>
  <form name="dForm" action="{{ route('barang.update') }}" method="POST">
    {{csrf_field()}}
    <input type="hidden" class="form-control" id="id" name="id" @if(!empty($edit)) value="{{$edit->id}}" @else readonly @endif required onchange="validate()">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" @if(!empty($edit)) value="{{$edit->name}}"  @else readonly @endif required onchange="validate()">
    </div>
    <div class="form-group">
        <label for="type" class="form-label">Type</label>
        <select name="type" class="form-control" aria-label="Default select example" required @if(!empty($edit))  @else readonly @endif onchange="validate()">
            <option disabled selected>Type</option>
            <option value="Laptop" @if(!empty($edit) && $edit->type == "Laptop") selected @endif >Laptop</option>
            <option value="Handphone" @if(!empty($edit) && $edit->type == "Handphone") selected @endif >Handphone</option>
        </select>
    </div>

    <div class="row justify-content-end p-2">
      <button type="submit" name="submit" class="btn btn-warning btn-sm" @if(!empty($edit)) @else disabled @endif>Edit</button>
    </div>
  </form>
</div>

<script>
    function validate() {
        let form = document.dForm;
        let resultValidate =
            form.id.value != '' &&
            form.name.value != '' &&
            form.type.value != '';;

        if (resultValidate)
            form.submit.disabled = false
        else
            form.submit.disabled = true
    }
</script>