    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{old('title', $category->title)}}">


    </div>
    
    <div class="form-group">
        <label for="url_clean">Url clean</label>
        <input class="form-control" type="text" name="url_clean" id="url_clean" value="{{old('url_clean', $category->url_clean)}}">
    </div>

   

    <input type="submit" value="Send"  class="btn btn-primary">


