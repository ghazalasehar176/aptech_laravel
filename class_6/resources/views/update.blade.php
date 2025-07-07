   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
             <h3 class = "text-center">Edited Product</h3>

               @if(session()->has('message'))
                <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif

        <form action="{{route('updateData' , $product->id)}}" method = "POST">
                                @csrf
                                @method("PUT")
                    
 <input type="text" name="name" placeholder="enter name" class="form-control mb-3" value="{{ old('name', $product->name) }}">
<input type="number" name="price" placeholder="enter price" class="form-control mb-3" value="{{ old('price', $product->price) }}">
<input type="number" name="stock" placeholder="enter stock" class="form-control mb-3" value="{{ old('stock', $product->stock) }}">
<textarea name="description" placeholder="description" class="form-control mb-3">{{ old('description', $product->description) }}</textarea>
<button class="btn btn-secondary">Edit</button>

        </form>
        </div>
    </div>
  </div>


   

          

             