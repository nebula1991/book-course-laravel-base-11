@csrf

    <label for="title">Title</label>
    <input class="form-control"  type="text" name="title" value="{{ old('title', $post->title  ) }}">

    <label for="slug">Slug</label>
    <input class="form-control"  type="text" name="slug" value="{{ old('slug',$post->slug)}}">

    <label for="content">Content</label>
    <textarea class="form-control"  name="content">{{old('content',$post->content )}}</textarea>

    <label for="category_id">Category</label>
    <select class="form-control"  name="category_id" >
        @foreach ($categories as $title => $id )
            <option {{old('category_id',$post->category_id) == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>

    <label for="description">Description</label>
    <textarea class="form-control"  name="description">{{old('description',$post->description)}}</textarea>


    <label for="posted">Posted</label>
    <select name="posted" class="form-control"  >
        <option {{old('posted', $post->posted) == 'not' ? 'selected' : ''}} value="not">NOT</option>
        <option {{old('posted',$post->posted )== 'yes' ? 'selected' : ''}} value="yes">YES</option>
    </select>

    @if (isset($task) && $task == 'edit')
    <label for="image">Image</label>
    <input class="form-control"  type="file" name="image">
    @endif
   


    <button class="btn btn-success mt-2" type="submit">Send</button>