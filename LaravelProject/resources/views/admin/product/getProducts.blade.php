@extends('layout.master');
@section('Content')
    <table>
        <tbody>
            <thead>
                <tr>
                    <th class=\"text-center\">PID</th>
                    <th class=\"text-center\">Name</th>
                    <th class=\"text-center\">Company</th>
                    <th class=\"text-center\">Year</th>
                    <th class=\"text-center\">Band</th>
                    <th class=\"text-center\">Image</th>
                    <th class=\"text-center\">Edit</th>
                    <th class=\"text-center\">Delete</th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tr>
                <td class= \"text-left\"> {{$product-> pid}} </td>
                <td class= \"text-left\"> {{$product -> pname}} </td>
                <td class= \"text-left\"> {{$product -> company}} </td>
                <td class= \"text-left\"> {{$product -> year}} </td>
                <td class= \"text-left\"> {{$product -> band}} </td>
                <td class= \"text-left\"> <img src=" {{$product -> pimage}} " alt="Image"></td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                <a href="admin/product/deleteProduct"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="admin/product/updateProduct/{{$product->pid}}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
