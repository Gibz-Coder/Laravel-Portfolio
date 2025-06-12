<div class="modal {{ $formMode === 'edit' ? 'edit-skill-modal' : '' }}">
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? 'Edit Skill' : 'Create Skill' }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <p>Name</p>
            {!! $errors->first('name', '<p class="alert">:message</p>') !!}
            <input type="text" name="name" id="{{ $formMode === 'edit' ? 'edit-skill-name' : 'name' }}" value="{{ isset($skill->name) ? $skill->name : '' }}"/>

            <p>Proficiency</p>
            {!! $errors->first('proficiency', '<p class="alert">:message</p>') !!}
            <input type="text" name="proficiency" id="{{ $formMode === 'edit' ? 'edit-skill-proficiency' : 'proficiency' }}" value="{{ isset($skill->proficiency) ? $skill->proficiency : '' }}"/>

            <p>Service</p>
            <select name="service_id" id="{{ $formMode === 'edit' ? 'edit-skill-service' : 'service_id' }}">
                <option value="" style="display: none">Select Service</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}" {{(isset($skill->service_id) && $skill->service_id == $service->id) ? 'selected' : ''}}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <hr>
        <div class="modal-footer">
            <button type="button" class="close-modal">
                Cancel
            </button>
            <button type="submit" class="secondary">
                <span><i class="fa fa-spinner fa-spin"></i></span>
                {{ $formMode === 'edit' ? 'Update' : 'Save' }}
            </button>
        </div>
    </div>
</div>