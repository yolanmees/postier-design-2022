# postier-design-2022
A Tailwindcss 3 + AlpineJS template for Laravel 9


# Usage

Import the layout.app file and add the correct parameters for your page. 

```
@extends('layout.app', [
  'pagetitle'=> 'The Postier - UiKit',
  'title'=> 'UiKit',
  'sidebar' => false,
  'sideover' => false,
  'newButton' => false,
  'saveButton' => false,
  'cancelButton' => false
])

@section('sidebar')

@endsection


@section('content')
    
@endsection

```


##Testing

Just import the files into your views folder and add a route to uikit.blade.php
```
  Route::get('/uikit', function () {
      return view('uikit');
  });
```



