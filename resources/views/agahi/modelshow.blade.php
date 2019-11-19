<option value="" class=" a2-1">انتخاب</option>
@foreach ($modelcar as $val)
    <option     value="{{$val->model}}">{{$val->model}}</option>
@endforeach
