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
            <div class="row justify-content-center">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @CSRF
                        @method('POST')
                        <div class="form-group">
                            <h4>Titolo</h4>
                            <label for="name">Titolo</label>
                            <input type="text" placeholder="Inserisci il nome" name="name" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            <h4>Descrizione</h4>
                            <textarea name="description" cols="30" rows="10" placeholder="Inserisci una descrizione">{{ old('description') }}</textarea>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            <label for="price">Prezzo</label>
                            <input type="number" name="price" class="form-control" value="{{old('price')}}">
                        </div>
                        @error('sqmt')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <div class="form-group">
                            <label id="gv-image" for="img">Image</label>
                            <input id="gv-input-image" type="file" name="img" class="form-control btn" value="{{old('img')}}">
                        </div>
                        @error('img')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror

                        <div>
                            <h4>Publica</h4>
                            <label for="pub">Pubblico</label>
                            <input type="radio" id="published" name="published" value="1" {{(old('published') == 1) ? 'checked' : ''}}>
                            <label for="not-pub">Non Pubblico</label>
                            <input type="radio" id="not-published" name="published" value="0" {{(old('published') == 0) ? 'checked' : ''}}>
                        </div>
                        <div>
                            <input type="submit" value="Salva" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
