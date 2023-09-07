@extends('Lvcrud::layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($product as $val)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $val->name }}</td>
            <td>{{ $val->detail }}</td>
            <td>
                <form action="{{ route('product.destroy',$val->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('product.show',$val->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('product.edit',$val->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   {!! $product->links() !!}
      
@endsection