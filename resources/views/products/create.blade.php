<x-layout>
    <h1>
        Create Product
    </h1>
   <x-errors/>
    <form method="POST" action="{{route('products.store')}}">
     <x-products.form/>
    </form>
</x-layout>
