// Navigation functionality
document.addEventListener('alpine:init', () => {
    Alpine.data('navigation', () => ({
        isOpen: false,
        userDropdownOpen: false,
        
        toggleMenu() {
            this.isOpen = !this.isOpen
        },

        toggleUserDropdown() {
            this.userDropdownOpen = !this.userDropdownOpen 
        },

        closeAll() {
            this.isOpen = false
            this.userDropdownOpen = false
        }
    }))
})
