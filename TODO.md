# TODO: Implement Role-Based Redirection for Login/Register

## Steps to Complete:
- [ ] Update AuthenticatedSessionController::store to check user role and redirect accordingly
- [ ] Update RegisteredUserController::store to set default role 'user' and check role for redirection
- [ ] Modify the 'dashboard' route in web.php to return dashboard view for users
- [ ] Test the changes for both admin and user roles
