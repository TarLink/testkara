<table>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Producer</th>
      <th>Date</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->producer->name}}</td>
            <td>{{$product->created_at}}</td>
        </tr>
    @endforeach
  </table>