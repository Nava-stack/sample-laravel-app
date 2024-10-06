@csrf
<div>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{old('name',$product->name ?? '')}}">
    @error('name')
        <p >{{$message}}</p>
    @enderror
</div>
<div>
    <label for="description">Description</label>
    <textarea name="description" id="description">{{old('description',$product->description ?? '')}}</textarea>
    @error('description')
        <p >{{$message}}</p>
    @enderror
</div>
<div>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{old('price',$product->price ?? '')}}">
    @error('price')
        <p >{{$message}}</p>
    @enderror
</div>
<button type="submit">Submit</button>
