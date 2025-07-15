# Design Document

## Overview

The user edit modal functionality will be implemented by extending the existing modal system in the admin interface. The solution involves adding JavaScript event handlers for user edit buttons, creating a proper form structure for the edit modal, and implementing the backend update functionality that is currently missing.

## Architecture

The implementation follows the existing modal pattern used throughout the admin interface:

1. **Frontend Modal System**: Extends the existing admin.js modal handling to include user edit functionality
2. **Backend Controller**: Adds the missing `update` method to the UserController
3. **Route Definition**: Adds the missing PUT/PATCH route for user updates
4. **Form Structure**: Modifies the existing form.blade.php to work properly with both create and edit modes

## Components and Interfaces

### 1. JavaScript Modal Handler

**Location**: `public/assets/js/admin.js`

**Functionality**:
- Event listener for `.edit-user-btn` buttons
- Data extraction from button attributes (`data-id`, `data-name`, `data-email`, `data-bio`, `data-role`)
- Form population with user data
- Dynamic form action URL setting
- Modal show/hide functionality

**Integration**: Follows the same pattern as existing modal handlers (services, skills, education, experience)

### 2. Backend Controller Method

**Location**: `app/Http/Controllers/Admin/UserController.php`

**New Method**: `update(Request $request, $id)`

**Functionality**:
- Request validation (similar to store method but with unique email exception for current user)
- User model retrieval and update
- Password handling (only update if provided)
- Success/error response handling

### 3. Route Definition

**Location**: `routes/web.php`

**New Route**: `Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');`

### 4. Form Structure Enhancement

**Location**: `resources/views/admin/users/edit.blade.php`

**Enhancements**:
- Create a proper form wrapper similar to create.blade.php
- Use the existing form.blade.php with `formMode = 'edit'`
- Add unique modal ID (`edit-user-modal`) to distinguish from create modal
- Include proper form action, CSRF token, and method spoofing for PUT requests

**Location**: `resources/views/admin/users/form.blade.php`

**Minor Enhancements**:
- Ensure the form works properly with both create and edit modes
- The existing conditional logic for form fields is already correct

## Data Models

### User Model
The existing User model will be used without modifications. The update operation will handle:

- `name`: String, required, max 255 characters
- `email`: String, required, email format, unique (except for current user)
- `bio`: Text, optional
- `role`: String, required (admin/user)
- `password`: String, optional for updates (only update if provided)

### Form Data Structure
```php
[
    'name' => 'string|required|max:255',
    'email' => 'string|required|email|unique:users,email,{user_id}',
    'bio' => 'string|nullable',
    'role' => 'string|required|in:admin,user',
    'password' => 'string|nullable|min:8'
]
```

## Error Handling

### Frontend Error Handling
- Modal remains open if validation errors occur
- Error messages displayed within the modal form
- Form data preserved on validation failure

### Backend Error Handling
- Validation errors returned with proper error messages
- Database errors handled gracefully
- User not found errors (404) handled appropriately

### JavaScript Error Handling
- Check for element existence before manipulation
- Graceful degradation if modal elements are missing
- Console logging for debugging purposes

## Testing Strategy

### Unit Tests
- UserController update method validation
- User model update functionality
- Form validation rules

### Integration Tests
- Complete user update flow
- Modal form submission
- Error handling scenarios

### Frontend Tests
- Modal open/close functionality
- Form population with user data
- Event handler attachment

### Manual Testing Scenarios
1. Click edit button and verify modal opens with correct data
2. Submit form with valid data and verify update
3. Submit form with invalid data and verify error handling
4. Test modal close functionality
5. Test multiple user edits in sequence
6. Test password update (optional field)
7. Test email uniqueness validation

## Implementation Notes

### Consistency with Existing Code
- Follow the same naming conventions as other modal handlers
- Use the same CSS classes and structure as existing modals
- Maintain the same error handling patterns

### Security Considerations
- CSRF protection for form submissions
- Proper validation of all input fields
- Password hashing when password is updated
- Authorization checks (admin-only access)

### Performance Considerations
- Minimal DOM manipulation
- Efficient event delegation
- Proper cleanup of event listeners

### Browser Compatibility
- Use vanilla JavaScript (consistent with existing code)
- Ensure compatibility with modern browsers
- Graceful degradation for older browsers