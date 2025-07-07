<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <table class = "table table-info">
                <a  href="{{route('trash')}}" class="btn btn-danger col-2">Trash</a>
                <thead>
                    <tr>
                        <th>S_no</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class= "table table-secondary">
                
               <!-- $product controller se aayi puri list or variable
               as Loop ke andar ek ek item ko naam dena.
               $products apni marzi ka name dena  -->

                    @foreach($product as $products)

                    <tr>
                        <td>{{$products->id}}</td>
                        <td>{{$products->name}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->stock}}</td>
                        <td>{{$products->description}}</td>
                        <td>

                            <!-- product update,edit -->
                             <a href="{{ route('editForm', $products->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>

                             <!-- product delete -->
                        <form action="{{ route('deleteData', $products->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger">Delete</button>
                        </form>

                        </td> 
                    </tr>
                    @endforeach
                </tbody>

            </table>
            
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>

        @endif
        </div>
    </div>
</div>

