document.addEventListener("DOMContentLoaded", function () {
    const navBtn = document.querySelector(".header__collapse--btn");
    const nav = document.querySelector(".nav");
    const navWrapper = document.querySelector(".navWrapper");
    const navClose = document.querySelector(".nav__close");

    // Start Toggle Header profile
    const toggleProfileNav = document.querySelector(".header-profile");
    const showProfileNav = document.querySelector(".header-profile-nav");
    if (toggleProfileNav && showProfileNav) {
        toggleProfileNav.addEventListener("click", () => {
            showProfileNav.classList.toggle("show");
        });
    }
    // End Toggle Header profile

    // Start Add/Edit modal button - services
    const showAddModal = document.querySelector(".modal");
    const toggleShowModal = document.querySelector(".open-modal");
    const closeShowModal = document.querySelectorAll(".close-modal");
    const editServiceModal = document.getElementById("edit-service-modal");
    const editServiceForm = document.getElementById("edit-service-form");
    const editServiceBtns = document.querySelectorAll(".edit-service-btn");

    // Handle "New Service" button
    if (toggleShowModal && showAddModal) {
        toggleShowModal.addEventListener("click", () => {
            showAddModal.classList.toggle("show");
        });
    }

    // Auto-open create modal if there are validation errors
    const hasCreateErrors = document.getElementById("has-create-errors");
    if (hasCreateErrors && showAddModal) {
        showAddModal.classList.add("show");
    }

    // Handle close modal buttons
    closeShowModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Close create modal
            if (showAddModal) {
                showAddModal.classList.remove("show");
            }
            // Close edit modal
            if (editServiceModal) {
                editServiceModal.classList.remove("show");
            }
        });
    });

    // Handle edit service buttons
    if (editServiceBtns.length > 0) {
        editServiceBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                const serviceId = btn.getAttribute("data-id");
                const serviceName = btn.getAttribute("data-name");
                const serviceIcon = btn.getAttribute("data-icon");
                const serviceDescription = btn.getAttribute("data-description");

                // Populate the edit form
                const nameInput = document.getElementById("edit-service-name");
                const iconInput = document.getElementById("edit-service-icon");
                const descriptionInput = document.getElementById(
                    "edit-service-description"
                );

                if (nameInput) nameInput.value = serviceName;
                if (iconInput) iconInput.value = serviceIcon;
                if (descriptionInput)
                    descriptionInput.value = serviceDescription;

                // Update form action URL
                if (editServiceForm) {
                    editServiceForm.action = `/admin/services/${serviceId}`;
                }

                // Show edit modal
                if (editServiceModal) {
                    editServiceModal.classList.add("show");
                }
            });
        });
    }

    // Skills modal elements
    const editSkillModal = document.getElementById("edit-skill-modal");
    const editSkillModalInner = editSkillModal
        ? editSkillModal.querySelector(".edit-skill-modal")
        : null;
    const editSkillForm = document.getElementById("edit-skill-form");
    const editSkillBtns = document.querySelectorAll(".edit-skill-btn");

    // Handle close modal buttons for skills
    closeShowModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Close edit skill modal
            if (editSkillModal) {
                editSkillModal.style.display = "none";
            }
            if (editSkillModalInner) {
                editSkillModalInner.classList.remove("show");
            }
        });
    });

    // Handle edit skill buttons
    if (editSkillBtns.length > 0) {
        editSkillBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Get skill data from button attributes
                const skillId = btn.getAttribute("data-skill-id");
                const skillName = btn.getAttribute("data-skill-name");
                const skillProficiency = btn.getAttribute(
                    "data-skill-proficiency"
                );
                const skillServiceId = btn.getAttribute(
                    "data-skill-service-id"
                );

                // Populate form fields
                const nameInput = document.getElementById("edit-skill-name");
                const proficiencyInput = document.getElementById(
                    "edit-skill-proficiency"
                );
                const serviceSelect =
                    document.getElementById("edit-skill-service");

                if (nameInput) nameInput.value = skillName;
                if (proficiencyInput) proficiencyInput.value = skillProficiency;
                if (serviceSelect) serviceSelect.value = skillServiceId;

                // Update form action URL
                if (editSkillForm) {
                    editSkillForm.action = `/admin/skills/${skillId}`;
                }

                // Show edit modal
                if (editSkillModal) {
                    editSkillModal.style.display = "block";
                }
                if (editSkillModalInner) {
                    editSkillModalInner.classList.add("show");
                }
            });
        });
    }

    // Education modal elements
    const editEducationModal = document.getElementById("edit-education-modal");
    const editEducationForm = document.getElementById("edit-education-form");
    const editEducationBtns = document.querySelectorAll(".edit-education-btn");

    // Handle close modal buttons for educations
    closeShowModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Close edit education modal
            if (editEducationModal) {
                editEducationModal.classList.remove("show");
            }
        });
    });

    // Handle edit education buttons
    if (editEducationBtns.length > 0) {
        editEducationBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Get education data from button attributes
                const educationId = btn.getAttribute("data-id");
                const institution = btn.getAttribute("data-institution");
                const period = btn.getAttribute("data-period");
                const degree = btn.getAttribute("data-degree");
                const department = btn.getAttribute("data-department");

                // Populate form fields
                const institutionInput = document.getElementById(
                    "edit-education-institution"
                );
                const periodInput = document.getElementById(
                    "edit-education-period"
                );
                const degreeInput = document.getElementById(
                    "edit-education-degree"
                );
                const departmentInput = document.getElementById(
                    "edit-education-department"
                );

                if (institutionInput) institutionInput.value = institution;
                if (periodInput) periodInput.value = period;
                if (degreeInput) degreeInput.value = degree;
                if (departmentInput) departmentInput.value = department;

                // Update form action URL
                if (editEducationForm) {
                    editEducationForm.action = `/admin/educations/${educationId}`;
                }

                // Show edit modal
                if (editEducationModal) {
                    editEducationModal.classList.add("show");
                }
            });
        });
    }

    // Experience modal elements
    const editExperienceModal = document.getElementById(
        "edit-experience-modal"
    );
    const editExperienceModalInner = editExperienceModal
        ? editExperienceModal.querySelector(".modal")
        : null;
    const editExperienceForm = document.getElementById("edit-experience-form");
    const editExperienceBtns = document.querySelectorAll(
        ".edit-experience-btn"
    );

    // Handle close modal buttons for experiences
    closeShowModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Close edit experience modal
            if (editExperienceModal) {
                editExperienceModal.style.display = "none";
            }
            if (editExperienceModalInner) {
                editExperienceModalInner.classList.remove("show");
            }
        });
    });

    // Handle edit experience buttons
    if (editExperienceBtns.length > 0) {
        editExperienceBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Get experience data from button attributes
                const experienceId = btn.getAttribute("data-id");
                const company = btn.getAttribute("data-company");
                const period = btn.getAttribute("data-period");
                const position = btn.getAttribute("data-position");

                // Populate form fields
                const companyInput = document.getElementById(
                    "edit-experience-company"
                );
                const periodInput = document.getElementById(
                    "edit-experience-period"
                );
                const positionInput = document.getElementById(
                    "edit-experience-position"
                );

                if (companyInput) companyInput.value = company;
                if (periodInput) periodInput.value = period;
                if (positionInput) positionInput.value = position;

                // Update form action URL
                if (editExperienceForm) {
                    editExperienceForm.action = `/admin/experiences/${experienceId}`;
                }

                // Show edit modal
                if (editExperienceModal) {
                    editExperienceModal.style.display = "block";
                }
                if (editExperienceModalInner) {
                    editExperienceModalInner.classList.add("show");
                }
            });
        });
    }

    // User modal elements
    const editUserModal = document.getElementById("edit-user-modal");
    const editUserForm = document.getElementById("edit-user-form");
    const editUserBtns = document.querySelectorAll(".edit-user-btn");

    // Handle close modal buttons for users
    closeShowModal.forEach((btn) => {
        btn.addEventListener("click", () => {
            // Close edit user modal
            if (editUserModal) {
                editUserModal.classList.remove("show");
            }
        });
    });

    // Handle edit user buttons
    if (editUserBtns.length > 0) {
        editUserBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                // Get user data from button attributes
                const userId = btn.getAttribute("data-id");
                const userName = btn.getAttribute("data-name");
                const userEmail = btn.getAttribute("data-email");
                const userBio = btn.getAttribute("data-bio");
                const userRole = btn.getAttribute("data-role");

                // Populate form fields
                const nameInput = document.getElementById("edit-user-name");
                const emailInput = document.getElementById("edit-user-email");
                const bioInput = document.getElementById("edit-user-bio");
                const roleSelect = document.getElementById("edit-user-role");
                const passwordInput = document.getElementById("edit-user-password");

                if (nameInput) nameInput.value = userName || '';
                if (emailInput) emailInput.value = userEmail || '';
                if (bioInput) bioInput.value = userBio || '';
                if (roleSelect) roleSelect.value = userRole || '';
                if (passwordInput) passwordInput.value = ''; // Clear password field

                // Update form action URL
                if (editUserForm) {
                    editUserForm.action = `/admin/users/${userId}`;
                }

                // Show edit modal
                if (editUserModal) {
                    editUserModal.classList.add("show");
                }
            });
        });
    }

    // Handle delete confirmations with SweetAlert
    const deleteButtons = document.querySelectorAll(".delete-btn");
    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const form = this.closest(".delete-form");
            const educationName = this.getAttribute("data-education-name");
            const experienceName = this.getAttribute("data-experience-name");
            const userName = this.getAttribute("data-user-name");

            // Determine what we're deleting
            const itemName = educationName || experienceName || userName || "this item";

            Swal.fire({
                title: "Are you sure?",
                text: `You are about to delete "${itemName}". This action cannot be undone!`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
