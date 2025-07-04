<div class="modal " >
    <div class="modal-content">
        <h2>Create User</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ isset($user->name) ? $user->name : '' }}"/>
            {!! $errors->first('name', '<p class="error">:message</p>') !!}

            <label>Email</label>
            <input type="text" name="email" value="{{ isset($user->email) ? $user->email : '' }}"/>
            {!! $errors->first('email', '<p class="error">:message</p>') !!}
            
            <label>Bio</label>
            <textarea cols="20" rows="3" name="bio">{{ isset($user->bio) ? $user->bio : '' }}</textarea>
            
            <p>Type</p>
            <select name="role" id="">
                <option disabled selected>Select Role</option>
                <option value="admin" {{ isset($user->role) && $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ isset($user->role) && $user->role == 'user' ? 'selected' : '' }}>Standard User</option>
            </select>

            <label>Password</label>
            <input  type="password" id="password" name="password" >
            {!! $errors->first('password', '<p class="error">:message</p>') !!}
        </div>
        <hr>
        <div class="modal-footer">
            <button class="close-modal">
                Cancel
            </button>
            <button class="secondary close-modal">
                <span><i class="fa fa-spinner fa-spin"></i></span>
                Save
            </button>
        </div>
    </div>
</div>