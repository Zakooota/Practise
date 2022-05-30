<label for="name">Name</label>    
           <div class="form-group">
                 <input  class="form-control" type="text" name="name" value="{{old('name') ?? $customer->name}} ">
                 
            </div>
            <div>{{$errors->first('name')}}   </div>
           <label for="email">Email</label>    
           <div class="form-group">
                 <input class="form-control" type="text" name="email" value="{{old('email') ?? $customer->email}}">
                 
            </div>
            <div>{{$errors->first('email')}}   </div>

            <div class="form-group">   
                <label for="active">Status</label>
              <select name="active" id="active" class="form-control">
                  <option value="" disabled >Select Customer Status</option>
                  @foreach($customer->activeOptions() as $activeOptionKey=>$activeOptionValue)
                  <option value="{{$activeOptionKey}}" {{$customer->active=='$activeOptionValue' ? 'selected' : ''}}>{{$activeOptionValue}}</option>
                  @endforeach
                   </select>

            </div>

            <div class="form-group">   
                <label for="company">Company</label>
              <select name="company_id" id="company_id" class="form-control">
               @foreach($companies as $company)
                <option value="{{$company->id}}" {{ $company->id == $customer->company_id ? 'selected' : ' ' }} >{{$company->name}}</option>
               @endforeach

              </select>

            </div>
            
            
        @csrf