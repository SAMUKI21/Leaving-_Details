<!DOCTYPE html>
@extends('layouts.mainlayout')
@section('title', 'leaving details')
@section('content')
<div class="container">
    <div class="row">
        <div class="container" id="faccontainer">
            <h1> Leaving Details</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/details')}}" method="POST">
                        {{ csrf_field() }}
                        </br></br>
                        <div class="form-group form-row">
                            <label class="col-sm-3" for="input-upf">Leaving Type</label>
                            <div class="col-sm-9 text-left">
                                <input type="text" class="form-control" id="Leave" name="Leave" placeholder="Enter the leave type here">
                            </div>
                        </div>
                        
                  
                    
                        </br>
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                       
                        </br>
                    </form>
                    <br>
                    <table class="table table-dark" style="width:100%;">
                        <th>Leave Type</th>

                        <th>Date</th>
                        

                        
                        @foreach ($leave as $leave_n)
                        <tr>
                            <td> {{ $leave_n->leavetype}} </td>
                            <td> {{ $leave_n->date}} </td>
                        
                           
                            <td>
                                {{ csrf_field() }}
                                <a href="{{ url('/detailsdelete/'.$leave_n->id) }}" class="btn btn-danger">Delete</a>
                                <a href="{{ url('/detailsupdate/'.$leave_n->id) }}" class="btn btn-warning">Update</a>
                            </td>
                        </tr>
                        @endforeach
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection