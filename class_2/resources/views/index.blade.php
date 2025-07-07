<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3 class = "text-center">Welcome to my website</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <h2>fill this form</h2>
                <form method = "post" action = "{{Route('formSubmit')}}">
                   <!-- action = "{{Route('formSubmit')}}" Form submit hone par formSubmit named route ko request bhejta hai. -->
                   @csrf 
                         <!--@csrf ek Blade directive hai jo form ke andar CSRF token add karta hai, jo security ke liye hota hai. -->

                    <input type="text" name="name" class = "form-control mb-3" placeholder = "enter name">
                     <input type="text" name="email" class = "form-control mb-3" placeholder = "enter email">
                    <input type="text" name="number" class = "form-control mb-3" placeholder = "enter number">
                    <input type="text" name="address" class = "form-control mb-3" placeholder = "enter address">
                   <button class = "btn btn-dark w-100">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>