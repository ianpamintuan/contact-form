<?php include 'contact-form.php'; ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mark Ian Pamintuan">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>Contact Form</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Form</h1>
        </div>
    </header>

    <section id="contact-form">
        <div class="col-sm-6 col-sm-offset-3 form-wrapper">

            <form method="post">
                  <div id="errorMessage" tabindex="100"><?php echo $error; ?></div>

                  <div class="form-group">
                      <label for="lastName">Name</label>
                      <input type="text" name="name" id="name" class="form-control">
                  </div>

                  <div class="form-group required">
                      <label for="subject" class="control-label">Subject</label>
                      <input type="text" name="subject" id="subject" class="form-control">
                  </div>

                  <div class="form-group required">
                      <label for="email" class="control-label">Email</label>
                      <input type="email" name="email" id="email" class="form-control">
                  </div>

                  <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="tel" name="phone" id="phone" class="form-control">
                  </div>

                  <div class="form-group required">
                      <label for="message" class="control-label">Message</label>
                      <textarea name="message" id="message" class="form-control"></textarea>
                  </div>

                  <div class="row form-group">
                      <div class="col-xs-12">
                          <input type="submit" class="btn btn-primary col-xs-12" id="btnSubmit">
                      </div>
                  </div>

            </form>

        </div>
    </section>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
