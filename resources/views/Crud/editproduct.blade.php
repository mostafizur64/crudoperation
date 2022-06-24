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
          

            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-header ">Update Product  <a href="{{url('/')}} " class="btn btn-success m-auto">Back</a></div>

                    <div class="card-body">
                        
                        <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="product_id" value="{{$products->id }}">
                            @csrf
                            <div class="form-group">
                              
                                <label>Product Name
                                </label>
                               
                                    <input type="text" class="form-control" name="product_name"
                                        placeholder="Enter category Name" value="{{$products->product_name}}">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Description
                                </label>
                               
                                    <input type="text" class="form-control" name="product_description"
                                        placeholder="Enter category Name" value="{{$products->product_description}}">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Price
                                </label>
                               
                                    <input type="text" class="form-control" name="product_price"
                                        placeholder="Enter product price" value="{{$products->product_price}}">
                               
                            </div>
                            <div class="form-group">
                              
                                <label>Product Size
                                </label>
                               
                                    <input type="text" class="form-control" name="product_size"
                                        placeholder="Enter product size" value="{{$products->product_size}}">
                               
                            </div>
                            
                            <div class="form-group">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-success">Update Product</button>
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