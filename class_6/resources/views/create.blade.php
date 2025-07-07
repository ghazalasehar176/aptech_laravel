<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h3 class="mb-4">Create Product</h3>
            <form action="{{Route('addData')}}" method="post">
                @csrf
                <input type="text" name="name" placeholder = "enter name" class = "form-control mb-3" >
             <input type="number" name="price" placeholder = "enter price" class = "form-control mb-3" >
              <input type="number" name="stock" placeholder = "enter stock" class = "form-control mb-3" >
               <textarea type="text" name="description" placeholder = "description" class = "form-control mb-3"></textarea>
               <button class ="btn btn-dark mb-4">Create Product</button>
            </form>
        </div>
    </div>
</div>



@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif


@if(session()->has('message'))
<p>{{session()->get('message')}}</p>
@endif
