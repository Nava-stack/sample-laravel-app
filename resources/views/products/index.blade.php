<x-layout>
    <h1>Products</h1>
    <a href="{{route('products.create')}}">Create Product</a>
    @foreach($products as $product)
        <h2><a href="{{route('products.show',$product->id)}}">{{$product->name}}</a></h2>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
    @endforeach
    {{$products->links('vendor.pagination.simple-tailwind')}}
</x-layout>

