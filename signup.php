hello
<html>
  <head>
    <meta charset="utf-8">
    <html>
      <head>
         <title>Inscription</title>
         <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
        <form action="register.php" method="post">
          <div class="container">
            <table>
              <tr>
                <td>
                  <label>pseudo</label>
                  <input  name="pseudo" required/>
                </td>
              </tr>
              <tr>
                <td>
                  <label>first name</label>
                  <input type="text" name="first_name" />
                </td>
              </tr>
              <tr>
                <td>
                  <label>last name</label>
                  <input  name="last_name" />
                </td>
              </tr>
              <tr>
                <td>
                  <label>birthday</label>
                  <input type="date" name="birthday" />
                </td>
              </tr>
              <tr>
                <td>
                  <label>position</label>
                  <input  name="position" />
                </td>
              </tr>
              <tr>
                <td>
                  <label>number</label>
                  <input  name="number" />
                </td>
              </tr>
              <tr>
                <td>
                  <label><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required><br/>
                </td>
              </tr>
              <tr>
                <td>
                  <!--label>id</label-->
                  <input type="hidden" /><br/>
                </td>
              </tr>
            </table>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
              <button type="button"  class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>

</body>
</html>
