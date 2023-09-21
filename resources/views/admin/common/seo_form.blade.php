<div>
    <hr>
    <h3>Seo Section</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">SEO Title</label>
        <input name="seotitle" id="seotitle" class="form-control" value="{{ $data->seo[0]->seo_title ?? ''}}"/>
        @error('seotitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">OG Title</label>
        <input name="ogtitle" id="ogtitle" class="form-control" value="{{ $data->seo[0]->og_title ?? ''}}"/>
        @error('ogtitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Twitter Title</label>
        <input name="twtitle" id="twtitle" class="form-control"  value="{{ $data->seo[0]->twitter_title ?? ''}}"/>
        @error('twtitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">SEO Description</label>
        <textarea  name="seodescription" id="seodescription" cols="30" rows="3" class="form-control">{{ $data->seo[0]->seo_description ?? ''}}</textarea>
        @error('seodescription')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">OG Description</label>
        <textarea name="og_description" id="og_description" cols="30" rows="3" class="form-control">{{ $data->seo[0]->og_description ?? ''}}</textarea>
        @error('og_description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Twitter Description</label>
        <textarea name="twitter_description" id="twitter_description" cols="30" rows="3" class="form-control">{{ $data->seo[0]->twitter_description ?? '' }}</textarea>
        @error('twitter_description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Keywords</label>
        <input name="seokeywords" id="seokeywords" class="form-control"  value="{{ $data->seo[0]->keywords ?? ''}}"/>
        @error('seokeywords')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

</div>
