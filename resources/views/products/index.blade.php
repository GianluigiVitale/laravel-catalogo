<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th colspan="3">Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <img class="img-fluid" src="{{asset('storage/'. $product->img)}}" alt="{{$product->name}}">
                            <td><a href="{{route('products.edit', $product->id)}}">Modifica</a></td>
                            <td><a href="{{route('products.show', $product->slug)}}">Visualizza</a></td>
                            <td>
                                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit">Elimina</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
