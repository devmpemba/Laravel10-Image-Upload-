<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>Image</label>
    <input type="file" name="img" placeholder="Product Image">


    <br>


    <label>Name</label>
    <input type="text" name="name" placeholder="Product Name">
    
    <br>


    <label>Description</label>
    <input type="text" name="description" placeholder="Description">
    
    <br>


    <label>Price</label>
    <input type="text" name="price" placeholder="Price">

    <br>

    <button type="submit">Submit</button>
    



</form>