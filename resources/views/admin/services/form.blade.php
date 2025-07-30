<div class="modal ">
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? 'Edit Service' : 'Create Service' }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Service Name</label>
            {!! $errors->first('name', '<p class="alert">:message</p>') !!}
            <input type="text" name='name' value="{{ isset($service->name) ? $service->name : '' }}"/>

            <label>Icon Class <span style="color:#006fbb;">(Find your suitable icon: <a href="https://iconscout.com/unicons" target="_blank">Unicons</a>)</span></label>
            <small style="color:#666;">Examples: code-alt, server, laptop, brush-alt, mobile-android (without uil- prefix)</small>
            {!! $errors->first('icon', '<p class="alert">:message</p>') !!}
            <input type="text" name='icon' value="{{ isset($service->icon) ? $service->icon : '' }}" placeholder="code-alt"/>
            
            <label>Description</label>
            {!! $errors->first('description', '<p class="alert">:message</p>') !!}
            <textarea cols="10" rows="5" name='description'>{{ isset($service->description) ? $service->description : '' }}</textarea>
        </div>
        <hr>
        <div class="modal-footer">
            <button type="button" class="close-modal">
                Cancel
            </button>
            <button type="submit" class="secondary">
                <span><i class="uil uil-spinner-alt"></i></span>
                {{ $formMode === 'edit' ? 'Update' : 'Save' }}
            </button>
        </div>
    </div>
</div>
