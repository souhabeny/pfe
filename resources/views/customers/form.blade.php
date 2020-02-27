<div class="input-group">
<div class="form-group">
<input type="text" placeholder="name" name="name" value="{{old('name') ?? $customer->name}}" class="form-control"/>
{{$errors->first('name')}}
</div>
<div class="form-group">
<input type="email" name="email" placeholder="email" value="{{old('email')}}" class="form-control"/>
{{$errors->first('email')}}
</div>
<div class="form-group">
<input type="text" name="random" placeholder="random" class="form-control"/>
{{$errors->first('random')}}
</div>
<div class="form-group">
<select name="active" id="active" class="form-control">
<option value="" disabled>select customer status</option>
<option value="1">active</option>
<option value="0">inactive</option>

</select>
</div>
<div class="form-group">
<select name="company_id" id="company_id" class="form-control">
@foreach($companies as $company)
<option value="{{$company->id}}">{{$company->name}}</option>
@endforeach

</select>
</div>
</div>


@csrf