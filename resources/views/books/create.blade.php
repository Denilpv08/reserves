@extends('layouts/app')

@section('title', 'Booking')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12 text-center">
                          <h2 style="font-family: 'Fredoka One', cursive; font-size: 25px;">
                            My reserves 
                        </h2>
                        <br>
                        @if ($messeger = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $messeger }}
                            </div>                            
                        @endif
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <table class="table table-sm table-bordered" id="table_categoria">
                                <thead>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($book as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->author }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('books.edit', $item->id) }}" class="btn btn-warning btn-sm">    
                                                    Rerseve
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                      </div>
                  </div>
                </div>
            </div>
        </div> 
    </div>
@endsection

@section('datatable')
    <script>
        $(document).ready(function(){
            $('#table_categoria').DataTable();
        });
    </script>
@endsection