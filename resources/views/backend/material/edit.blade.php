@extends('layouts.backend') 
@section('content')
<div class="row">
    <div class="card">
        <div class="card-body" <div class="col-lg-8 col-lg-offset-2">
            <form action="{{ route('material.update', $material->id) }}" method="post">
                @csrf @method('PATCH')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" value="{{$material->name}}">
                            <label for="name">Name</label> @if ($errors->has('name'))
                            <span class="help-block">{{$errors->first('name')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-block btn-success ink-reaction">Update</button>
                    </div>
                </div>
            </form>
            <!--end .table-responsive -->
        </div>
        <!--end .col -->
    </div>
</div>
</div>
@stop