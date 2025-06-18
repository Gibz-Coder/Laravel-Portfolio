<section class="about" id="project">
    <div class="titlebar">
        <h1>{{ $formMode === 'edit' ? 'Edit Project' : 'Create Project' }}</h1>
        <button class="btn-icon success">{{ $formMode === 'edit' ? 'Update Project' : 'Save Project' }}</button>
    </div>
    @include('includes.flash_message')
    <div class="card-wrapper">
        <div class="wrapper_left">
            <div class="card">
                <label>Title</label>
                {!! $errors->first('title', '<p class="error">:message</p>') !!}
                <input type="text" name="title" value="{{ isset($project->title) ? $project->title : '' }}"/>

                <label>Description</label>
                {!! $errors->first('description', '<p class="error">:message</p>') !!}
                <textarea cols="10" rows="5" name="description" >{{ isset($project->description) ? $project->description : '' }}</textarea>

                <label>Link</label>
                {!! $errors->first('link', '<p class="error">:message</p>') !!}          
                <input type="text" name="link" value="{{ isset($project->link) ? $project->link : '' }}"/>
            </div>
        </div>
        
        <div class="wrapper_right">
            <div class="card">
                <img src="{{ isset($project->image) ? asset('assets/img/' . $project->image) : asset('assets/img/no-image.png') }}" alt="" class="project_img" id="projectImagePreview">
                <input type="file" name="image" accept="image/*" onChange="previewImage(event)">
            </div>    
        </div>
        
    </div>
    <div class="titlebar">
        <h1></h1>
        <button class="btn-icon success">{{ $formMode === 'edit' ? 'Update Project' : 'Save Project' }}</button>
    </div>
</section>

<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataUrl = reader.result;
            var output = document.getElementById('projectImagePreview');
            output.src = dataUrl;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>