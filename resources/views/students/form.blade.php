<h2>Add Student</h2>
<hr>    
<label class="mt-4"for="name">Name</label>
<div class="form-group">
    <input class="form-control" type="text" name="name" value="{{old('name') ?? $student->name }}">
</div>
<div>{{$errors->First('name')}}</div>
<label for="email">Email</label>
<div class="form-group">
<input type="text" class="form-control" name="email" value="{{old('email') ?? $student->email}}">
</div>
<div>{{$errors->First('email')}}</div>
<label for="address">Address</label>
<div class="form-group">
    <input type="text" class="form-control" name="address" value="{{old('address') ?? $student->address}}">
</div>
<div>{{$errors->First('address')}}</div>
<div class="form-group">
    <label for="program">Program</label>
    <select name="program" id="program" class="form-control">
    <option value="" disabled>Select Program</option>
    <option value="0" >Computer Science</option>
    <option value="1" >Management Science</option>
    <option value="2" >Electrical Engieenering</option>
    </select>
    
</div>
@csrf