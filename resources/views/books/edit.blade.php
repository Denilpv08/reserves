@extends('layouts/app')

@section('title', 'Add Reserves')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-sm-12">
                            <form action="{{ route('books.store', $book->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                        <p><b>Book title: </b>{{ $book->title }}</p>
                                        <p><b>Author: </b>{{ $book->author }}</p>
                                        <hr>
                                        <p>{{ $book->description }}</p>                        
                                        <hr>
                                <br>
                                <label for="days"><b>Days: </b></label> 
                                <input type="date" name="days" id="days">
                                <button class="btn btn-dark">
                                    reserve
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection