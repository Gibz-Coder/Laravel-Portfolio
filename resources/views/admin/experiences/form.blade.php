<div class="modal" id="{{ $formMode === 'edit' ? 'edit-experience-modal' : '' }}">
        <div class="modal-content">
            <h2>{{ $formMode === 'edit' ? 'Edit Experience' : 'Create Experience' }}</h2>
            <span class="close-modal">×</span>
            <hr>
            <div>
                <label>Company</label>
                {!! $errors->first('company', '<p class="error">:message</p>') !!}
                <input type="text" name="company" id="{{ $formMode === 'edit' ? 'edit-experience-company' : '' }}" value="{{ isset($experience->company) ? $experience->company : '' }}"/>

                <label>Period</label>
                {!! $errors->first('period', '<p class="error">:message</p>') !!}
                <input type="text" name="period" id="{{ $formMode === 'edit' ? 'edit-experience-period' : '' }}" value="{{ isset($experience->period) ? $experience->period : '' }}"/>

                <label>Position</label>
                {!! $errors->first('position', '<p class="error">:message</p>') !!}
                <input type="text" name="position" id="{{ $formMode === 'edit' ? 'edit-experience-position' : '' }}" value="{{ isset($experience->position) ? $experience->position : '' }}"/>
            </div>
            <hr>
            <div class="modal-footer">
                <button type="button" class="close-modal">Cancel</button>
                <button type="submit" class="secondary">
                    <span><i class="fa fa-spinner fa-spin"></i></span>
                    {{ $formMode === 'edit' ? 'Update' : 'Save' }}
                </button>
            </div>
        </div>
    </div>