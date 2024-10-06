<x-layout>
    <h1>
        {{$product->name}}
    </h1>
    <p>{{$product->description}}</p>
    <p>{{$product->price}}</p>
    <a href="{{route('products.edit',$product->id)}}">Edit</a>
    <form method="POST" action="{{route('products.destroy',$product)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

</x-layout>
