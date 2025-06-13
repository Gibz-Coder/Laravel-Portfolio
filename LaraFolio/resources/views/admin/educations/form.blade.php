<div class="modal" id="{{ $formMode === 'edit' ? 'edit-education-modal' : '' }}">
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? "Edit Education" : "Create Education" }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Institution</label>
            {!! $errors->first('institution', '<p class="error">:message</p>') !!}
            <input type="text" name="institution" id="{{ $formMode === 'edit' ? 'edit-education-institution' : '' }}" value="{{ isset($education->institution) ? $education->institution : '' }}"/>

            <label>Period</label>
            {!! $errors->first('period', '<p class="error">:message</p>') !!}
            <input type="text" name="period" id="{{ $formMode === 'edit' ? 'edit-education-period' : '' }}" value="{{ isset($education->period) ? $education->period : '' }}"/>

            <label>Degree</label>
            {!! $errors->first('degree', '<p class="error">:message</p>') !!}
            <input type="text" name="degree" id="{{ $formMode === 'edit' ? 'edit-education-degree' : '' }}" value="{{ isset($education->degree) ? $education->degree : '' }}"/>

            <label>Department</label>
            {!! $errors->first('department', '<p class="error">:message</p>') !!}
            <input type="text" name="department" id="{{ $formMode === 'edit' ? 'edit-education-department' : '' }}" value="{{ isset($education->department) ? $education->department : '' }}"/>
        </div>
        <hr>
        <div class="modal-footer">
            <button type="button" class="close-modal">
                Cancel
            </button>
            <button type="submit" class="secondary">
                <span><i class="fa fa-spinner fa-spin"></i></span>
                {{ $formMode === 'edit' ? "Update" : "Save" }}
            </button>
        </div>
    </div>
</div>