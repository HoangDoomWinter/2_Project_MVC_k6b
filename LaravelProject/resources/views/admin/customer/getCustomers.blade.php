@extends('layout.master');
@section('Content')
    <table>
        <tbody>
            <thead>
                <tr>
                    <th class=\"text-center\">CID</th>
                    <th class=\"text-center\">Cname</th>
                    <th class=\"text-center\">Email</th>
                    <th class=\"text-center\">Address</th>
                    <th class=\"text-center\">Phone</th>
                    <th class=\"text-center\">Edit</th>
                    <th class=\"text-center\">Delete</th>
                </tr>
            </thead>
            @foreach ($customers as $customer)
            <tr>
                <td class= \"text-left\"> {{$customer-> cid}} </td>
                <td class= \"text-left\"> {{$customer -> cname}} </td>
                <td class= \"text-left\"> {{$customer -> email}} </td>
                <td class= \"text-left\"> {{$customer -> address}} </td>
                <td class= \"text-left\"> {{$customer -> phone}} </td>
                <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                <a href="admin/customer/deleteCustomer"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i>
                <a href="admin/customer/updateCustomer/{{$customer->pid}}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
