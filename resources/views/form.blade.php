{{csrf_field()}}
<label for="first_name">first name:</label>
@if($errors->has('first_name'))
    {{$errors->first('first_name')}}
@endif
<input type="text" name="first_name" value="{{old('first_name',isset($nationalCode)? $nationalCode->first_name: '')}}" class="form-control">
<label for="last_name">last name:</label>
@if($errors->has('last_name'))
    {{$errors->first('last_name')}}
@endif
<input type="text" name="last_name" value="{{old('last_name',isset($nationalCode)? $nationalCode->last_name: '')}}" class="form-control">
<label for="national_code">national code:</label>
@if($errors->has('national_code'))
    {{$errors->first('national_code')}}
@endif
<input type="text" name="national_code" value="{{old('national_code',isset($nationalCode)? $nationalCode->national_code: '')}}" class="form-control">
<label for="gender">gender:</label>
<input type="radio" name="gender" value="male"> male
<input type="radio" name="gender" value="female"> female
<br/>
<input type="submit" value="send" class="btn btn-block">