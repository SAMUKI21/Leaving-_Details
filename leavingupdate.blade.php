<!DOCTYPE html>
@extends('layouts.mainlayout')
@section('title', 'leavingupdate')
@section('content')
<div class="container">
    <div class="row">
        <div class="container" id="faccontainer">
            <h1> Leaving Details</h1>
            <div class="row text-left">
                <div class="col-md-12">
                    <form action="{{ url('/detailsnew') }}" method="POST">
                        {{ csrf_field() }}
                        </br></br>
                        <div class="form-group form-row">
                            <label class="col-sm-3" for="input-title">ID</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$leavingup->id }}" class="form-control" id="upid" name="upid" readonly>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-sm-3" for="input-title">Leave Type</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{ $leavingup->leavetype }}" class="form-control" id="new" name="new" placeholder="Enter the type">
                            </div>
                        </div>

                       
                        
                        <div class="form-group form-row">
                            <label class="col-sm-3" for="input-title">Date</label>
                            <div class="col-sm-9 text-left">
                                <input type="text" value="{{ $leavingup->date }}" class="form-control" id="date" name="date" placeholder="Enter the Employee date">
                            </div>
                        </div>
                        </br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection