@extends('products.layout')
<style>
body {margin:25px;}

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.containers {
  /* text-align: center; */
  padding: 10px 20px;
}
</style>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"> <br> <br>
                <h2>Product Detail </h2>
            </div>
            <div class="pull-right"> <br> <br> <br> <br> <br>
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="polaroid">
        <img src="/image/{{ $product->image }}" alt="5 Terre" style="width:100%">
        <div class="containers">
            <h2><strong>Name: {{ $product->name }}</strong> <br>
            <h2><strong>Detail:  {{ $product->detail }}</strong>
        </div>
     </div>
@endsection