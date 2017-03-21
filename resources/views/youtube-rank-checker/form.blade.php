@extends('layouts.master')

@section('content')
    <h1>Youtube Rank Checker</h1>
    <form action="/youtube-rank-checker" method="post">
      <div class="form-group">
        <label for="keyword">Key Words</label>
        <input type="text" name="keyword" class="form-control" id="keyword">
      </div>
      <div class="form-group">
        <label for="url">Youtube Url</label>
        <input type="text" name="url" class="form-control" id="url">
      </div>
      {!! csrf_field() !!}
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection