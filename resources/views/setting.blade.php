@extends('layout')

@section('title', 'Setting')

@section('main')
  <h1>Setting</h1>
  <form method="post">
    @csrf
    <div class="form-group">
      <label for="maint">Maintenance</label>
      @if ($maintenance === 'on')
      	<input type="checkbox" id="maint" name="maint" value="maint" class="form-control" checked>Maintenance on/off
      @else
      	<input type="checkbox" id="maint" name="maint" value="maint" class="form-control">Maintenance on/off
      @endif
    </div>
    <input type="submit" value="Change" class="btn btn-primary">
  </form>
@endsection
