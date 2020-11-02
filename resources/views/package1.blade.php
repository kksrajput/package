<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    <body>

      
<form method="post" action="\x">
    
    @csrf
    <label >Package Name</label><br />
<input type="text" name="pkg_name[]"><br />
<br />
<label for="Genre">Genre</label><br />
@foreach($p_genres as $a)
<input type="checkbox" name="genre[]" value="{{$a->genre_name}}">{{$a->genre_name}}<br /> 
@endforeach
<br />
<label for="Service Type">Service Type</label><br />
@foreach($service_type as $b)
<input type="checkbox" name="service_type[]" value="{{$b->component_element}}">{{$b->component_element}}<br /> 
@endforeach
<br />
<label for="deliverable">Deliverable</label><br />
@foreach($deliverable as $c)
<input type="checkbox" name="deliverable[]" value="{{$c->component_element}}">{{$c->component_element}}<br /> 
@endforeach
<br /><label for="shoot_duration">shoot_duration</label><br />
@foreach($shoot_duration as $d)
<input type="checkbox" name="shoot_duration[]" value="{{$d->component_element}}">{{$d->component_element}}<br /> 
@endforeach

<br /><label for="timeline">timeline</label><br />
@foreach($timeline as $e)
<input type="checkbox" name="timeline[]" value="{{$e->component_element}}">{{$e->component_element}}<br /> 
@endforeach
<label >Description</label><br />
<input type="text" name="description[]"><br />
<br />
<label >Base Price</label><br />
<input type="text" name="base_price[]"><br />
<br />
{{-- <input type="text" name="price_negotiatable"><br /> --}}
<br />
<div id="dynamic_field">
</div>
<input type="submit" value="submit">
</form>
                       


   



<button type="button" name="add" id="add" class="">Add More canon model</button>


<script>  
$(document).ready(function () {
    var i = 1;
    $('#add').click(function () {
        i++;
        let div=`<br><br><div id="div${i}">
    <h1>New Package ${i}</h1>
    <label >Package Name</label><br />
<input type="text" name="pkg_name[]"><br />
<br />
<label for="Genre">Genre</label><br />
@foreach($p_genres as $a)
<input type="checkbox" name="genre[]" value="{{$a->genre_name}}">{{$a->genre_name}}<br /> 
@endforeach
<br />
<label for="Service Type">Service Type</label><br />
@foreach($service_type as $b)
<input type="checkbox" name="service_type[]" value="{{$b->component_element}}">{{$b->component_element}}<br /> 
@endforeach
<br />
<label for="deliverable">Deliverable</label><br />
@foreach($deliverable as $c)
<input type="checkbox" name="deliverable[]" value="{{$c->component_element}}">{{$c->component_element}}<br /> 
@endforeach
<br /><label for="shoot_duration">shoot_duration</label><br />
@foreach($shoot_duration as $d)
<input type="checkbox" name="shoot_duration[]" value="{{$d->component_element}}">{{$d->component_element}}<br /> 
@endforeach

<br /><label for="timeline">timeline</label><br />
@foreach($timeline as $e)
<input type="checkbox" name="timeline[]" value="{{$e->component_element}}">{{$e->component_element}}<br /> 
@endforeach
<label >Description</label><br />
<input type="text" name="description[]"><br />
<br />
<label >Base Price</label><br />
<input type="text" name="base_price[]"><br />
<br />
{{-- <input type="text" name="price_negotiatable"><br /> --}}
<br />

    <button type="button" name="remove" id="${i}" class=" btn_remove">X</button>
</div><br><br>`
        $('#dynamic_field').append(div);
    });
    $(document).on('click', '.btn_remove', function () {
        var button_id = $(this).attr("id");
        $('#div' + button_id + '').remove();
    });

}); 
</script>

</body>
</html>
