    <div class="form-group">
            <label for="">{{$label}}</label>
            <input type="{{$type}}" name="{{$name}}" id="" class="form-control" >
          <span class="text-danger">
            @error("user_name")
            {{$message}}
            @enderror
          </span>
          </div>
