const signupBtn = document.getElementById('signup-btn');
const formContainer = document.getElementById('form-container');

signupBtn.addEventListener('click', () => {
  formContainer.innerHTML = `
    <h2>Signup</h2>
    <form action="signup2.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required>
      <button type="submit">Signup</button>
    </form> <br>
    Already have an account:
    <a href="signin.html">signin</a>
  `;
});
