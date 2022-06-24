<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
    <h2 class="text-center mt-4">This is Crud Operation </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header ">
                        <div>Product List</div>
                    </div>
                    <div class="card-body">
                       
                        <form action="" method="POST">
                            @csrf
                            <div class="table">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                                       <th>Sl No.</th>
                                        <th>Product Name</th>
                                        <th>Product Description</th>
                                        <th>Product Price</th>
                                        <th>Product photo</th>
                                        <th>Action</th>
                                        </tr>
                             
                                       
                                    </thead>
                                    <tbody>
                                        @foreach ($productsitems as $productsitem )
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$productsitem->product_name}}</td>
                                            <td>{{$productsitem->product_description}}</td>
                                            <td>{{$productsitem->product_price}}</td>
                                            <td><img height="50" width="50" class="img-fluid" src="{{ asset('uploads/product_photo') }}/{{ $productsitem->product_photo }}" alt=""></td>
                                            <td>
                                                <a href="{{route('product.edit',$productsitem->id)}}"
                                                    type="button" class="btn btn-info btn-sm">Edit</a>
                                                <a href="{{route('product.delete',$productsitem->id)}}"
                                                    type="button" class="btn btn-danger btn-sm">Delete</a>
                                                
                                                
                                                   

                                            </td>
                                                                                  
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </form>
                        </table>
                    </div>

                </div>

               
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header ">Add Product</div>

                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              
                                <label>Product Name
                                </label>
                               
                                    <input type="text" class="form-control" name="product_name"
                                        placeholder="Enter category Name">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Description
                                </label>
                               
                                    <input type="text" class="form-control" name="product_description"
                                        placeholder="Enter category Name">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Price
                                </label>
                               
                                    <input type="text" class="form-control" name="product_price"
                                        placeholder="Enter product price">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Size
                                </label>
                               
                                    <input type="text" class="form-control" name="product_size"
                                        placeholder="Enter product size">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Photo
                                </label>
                               
                                    <input type="file" class="form-control" name="product_photo"
                                       >
                               
                            </div>
                           
                            <div class="form-group">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-success">Add Product</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<</html>