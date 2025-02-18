<style>
  /* Add this CSS to your existing CSS file or within a <style> tag */
  .navbar {
    display: flex;
    justify-content: space-between; /* Space between left and right items */
    align-items: center; /* Center items vertically */
  }

  .navbar-brand {
    flex-grow: 1; /* Allow the brand to take up available space */
    text-align: center; /* Center the brand text */
    font-weight: bold; /* Make the brand text bold */
  }

  .nav-link {
    font-weight: bold; /* Make the nav link text bold */
  }

  .social-icons {
    display: inline-block; /* Aligns icons next to the text */
    margin-left: 10px; /* Space between text and icons */
  }

  .social-icons img {
    width: 32px; /* Set the width of the icons */
    height: 32px; /* Set the height of the icons */
    margin-left: 5px; /* Space between icons */
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <div class="navbar-nav">
      <a class="nav-link" href="\dashboard">About Me</a>
    </div>
    <a class="navbar-brand" href="#">My List</a>
    <div class="social-icons">
      <a href="https://github.com/knny1710" target="_blank">
        <img src="assets/img/github.png" alt="Github" />
      </a>
      <a href="https://instagram.com/padukasannn" target="_blank">
        <img src="assets/img/ins.png" alt="Instagram" />
      </a>
    </div>
  </div>
</nav>