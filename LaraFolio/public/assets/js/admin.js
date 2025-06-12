document.addEventListener('DOMContentLoaded', function() {
    const navBtn = document.querySelector('.header__collapse--btn');
    const nav = document.querySelector('.nav');
    const navWrapper = document.querySelector('.navWrapper');
    const navClose = document.querySelector('.nav__close');

    // Start Toggle Header profile
    const toggleProfileNav = document.querySelector('.header-profile');
    const showProfileNav = document.querySelector('.header-profile-nav');
    if (toggleProfileNav && showProfileNav) {
        toggleProfileNav.addEventListener('click', () => {
            showProfileNav.classList.toggle('show');
        });
    }
    // End Toggle Header profile

    // Start Add/Edit modal button - services
    const showAddModal = document.querySelector('.modal');
    const toggleShowModal = document.querySelector('.open-modal');
    const closeShowModal = document.querySelectorAll('.close-modal');
    const editServiceModal = document.getElementById('edit-service-modal');
    const editServiceForm = document.getElementById('edit-service-form');
    const editServiceBtns = document.querySelectorAll('.edit-service-btn');

    // Handle "New Service" button
    if (toggleShowModal && showAddModal) {
        toggleShowModal.addEventListener('click', () => {
            showAddModal.classList.toggle('show');
        });
    }

    // Handle close modal buttons
    closeShowModal.forEach((btn) => {
        btn.addEventListener('click', () => {
            // Close create modal
            if (showAddModal) {
                showAddModal.classList.remove('show');
            }
            // Close edit modal
            if (editServiceModal) {
                editServiceModal.classList.remove('show');
            }
        });
    });

    // Handle edit service buttons
    if (editServiceBtns.length > 0) {
        editServiceBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const serviceId = btn.getAttribute('data-id');
                const serviceName = btn.getAttribute('data-name');
                const serviceIcon = btn.getAttribute('data-icon');
                const serviceDescription = btn.getAttribute('data-description');

                // Populate the edit form
                const nameInput = document.getElementById('edit-service-name');
                const iconInput = document.getElementById('edit-service-icon');
                const descriptionInput = document.getElementById('edit-service-description');

                if (nameInput) nameInput.value = serviceName;
                if (iconInput) iconInput.value = serviceIcon;
                if (descriptionInput) descriptionInput.value = serviceDescription;

                // Update form action URL
                if (editServiceForm) {
                    editServiceForm.action = `/admin/services/${serviceId}`;
                }

                // Show edit modal
                if (editServiceModal) {
                    editServiceModal.classList.add('show');
                }
            });
        });
    }

    // Skills modal elements
    const editSkillModal = document.getElementById('edit-skill-modal');
    const editSkillModalInner = editSkillModal ? editSkillModal.querySelector('.edit-skill-modal') : null;
    const editSkillForm = document.getElementById('edit-skill-form');
    const editSkillBtns = document.querySelectorAll('.edit-skill-btn');

    // Handle close modal buttons for skills
    closeShowModal.forEach((btn) => {
        btn.addEventListener('click', () => {
            // Close edit skill modal
            if (editSkillModal) {
                editSkillModal.style.display = 'none';
            }
            if (editSkillModalInner) {
                editSkillModalInner.classList.remove('show');
            }
        });
    });

    // Handle edit skill buttons
    if (editSkillBtns.length > 0) {
        editSkillBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                // Get skill data from button attributes
                const skillId = btn.getAttribute('data-skill-id');
                const skillName = btn.getAttribute('data-skill-name');
                const skillProficiency = btn.getAttribute('data-skill-proficiency');
                const skillServiceId = btn.getAttribute('data-skill-service-id');

                // Populate form fields
                const nameInput = document.getElementById('edit-skill-name');
                const proficiencyInput = document.getElementById('edit-skill-proficiency');
                const serviceSelect = document.getElementById('edit-skill-service');

                if (nameInput) nameInput.value = skillName;
                if (proficiencyInput) proficiencyInput.value = skillProficiency;
                if (serviceSelect) serviceSelect.value = skillServiceId;

                // Update form action URL
                if (editSkillForm) {
                    editSkillForm.action = `/admin/skills/${skillId}`;
                }

                // Show edit modal
                if (editSkillModal) {
                    editSkillModal.style.display = 'block';
                }
                if (editSkillModalInner) {
                    editSkillModalInner.classList.add('show');
                }
            });
        });
    }

    // Check for validation errors and keep modal open
    const validationErrors = document.getElementById('validation-errors');
    if (validationErrors) {
        const hasErrors = validationErrors.getAttribute('data-has-errors') === 'true';
        const isCreateForm = validationErrors.getAttribute('data-is-create') === 'true';

        if (hasErrors && isCreateForm && showAddModal) {
            showAddModal.classList.add('show');
        }
    }
});
