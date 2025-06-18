<section class="about">
    <div class="titlebar">
        <h1>{{ $formMode === 'edit' ? 'Edit Testimonial' : 'Create Testimonial' }}</h1>
        <button class="btn-icon success">{{ $formMode === 'edit' ? 'Update Testimonial' : 'Save Testimonial' }}</button>
    </div>
    <div class="card-wrapper">
        <div class="wrapper_left">
            <div class="card">
                <label>Name</label>
                {!! $errors->first('name', '<p class="error">:message</p>') !!}
                <input type="text" name="name" value="{{ isset($testimonial->name) ? $testimonial->name : '' }}"/>
                
                <label>Function</label>
                {!! $errors->first('function', '<p class="error">:message</p>') !!}                
                <input type="text" name="function" value="{{ isset($testimonial->function) ? $testimonial->function : '' }}"/>

                <label>Testimony</label>
                {!! $errors->first('testimony', '<p class="error">:message</p>') !!}
                <textarea cols="10" rows="5" name="testimony" >{{ isset($testimonial->testimony) ? $testimonial->testimony : '' }}</textarea>

                <label>Rating</label>
                {!! $errors->first('rating', '<p class="error">:message</p>') !!}                  
                <input type="number" name="rating" value="{{ isset($testimonial->rating) ? $testimonial->rating : '' }}"/>
            </div>
        </div>
        
        <div class="wrapper_right">
            <div class="card">
                <img src="{{ isset($testimonial->image) ? asset('assets/img/' . $testimonial->image) : asset('assets/img/no-image1.png') }}" class="avatar_img" id="projectImagePreview">
                <input type="file" name="image" id="fileimg" accept="image/*" onChange="previewImage(event)">
            </div>  
        </div>
        
    </div>
    <div class="titlebar">
        <h1></h1>
        <button class="btn-icon success">{{ $formMode === 'edit' ? 'Update Testimonial' : 'Save Testimonial' }}</button>
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