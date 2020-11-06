@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
        <table class="table">
                <thead>
                    <tr>
                        <th>ID
                        <th>Color</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->color }}</td>
                        <td></td>
                        <td></td>
                    </tr>    
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection