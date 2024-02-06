<table>
<thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
</thead>

<tbody>

    @foreach ($products as $key => $item)
        
   
    <tr>

        <th>{{ $key + 1}}</th>
        <td><img src="{{ $item->img }}"></td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->price }}</td>

    </tr>
    @endforeach
</tbody>
</table>