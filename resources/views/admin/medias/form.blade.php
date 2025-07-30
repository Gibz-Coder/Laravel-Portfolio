
<form method="POST" action="{{ route('admin.medias.store') }}">
    @csrf
    <div class="social_table-heading">
        <p>Link</p>
        <span style="color:#006fbb;">Find your icon class: (e.g. facebook-f, twitter, instagram, linkedin-alt, github-alt, facebook-messenger, telegram)</span>
        <p></p>
    </div>
    <p></p>
    <div class="social_table-items form-row">
        <div class="input-container">
            {!! $errors->first('link', '<p class="error">:message</p>') !!}
            <input type="text" name="link" placeholder="Link">
        </div>
        <div class="input-container">
            {!! $errors->first('icon', '<p class="error">:message</p>') !!}
            <input type="text" name="icon" placeholder="Icon">
        </div>
        <button class="secondary">
            Add Social Media
        </button>
    </div>
</form>