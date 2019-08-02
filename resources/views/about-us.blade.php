@extends('layouts.master')
@section('title','Blog List')
@section('main-content')
    <html>
    <head>

    </head>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <body>
    <div class="container">

    </div>
    <div>
        <table class = "table">
            <thead class ='thead-dark'>
            <tr>
                <th scope = "col">S.N</th>
                <th scope = "col">Title</th>
                <th scope = "col">Summary</th>
                <th scope = "col">Description</th>
                <th scope = "col">Image</th>
                <th scope = "col">Status</th>
                <th scope = "col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($blog_list))
                @foreach($blog_list as $key=>$value)
                    <tr>
                        <td> {{ $key+1 }}</td>
                        <td>{{ @$value['title'] }}</td>
                        <td>{{ $value['summary'] }}</td>
                        <td>{{ $value['description'] }}</td>
                        <td>
                            @if($value->image!=null)
                                <img src ="{{ asset('uploads/image/'.$value->image)  }}" style = 'max-width:100px;'>
                            @endif
                        </td>
                        <td>{{ $value['status'] }}</td>
                        <td>Edit/Delete/View</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

    </body>
    </html>
    @endsection

