<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Submit Idea</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<!-- contact1 -->
<section class="w3l-simple-contact-form1">
    <div class="contact-form section-gap">
        <div class="wrapper">
            <div class="contact-form" style="max-width: 450px; margin: 0 auto;">
                <?php if (isset($_POST['submit'])):
                    require "config/MainClass.php";
                    if (empty($_POST['name'])) {
                        $use->storeForm(null, $_POST['email'], $_POST['idea']);
                    } else {
                        $use->storeForm($_POST['name'], $_POST['email'], $_POST['idea']);
                    }
                    ?>
                    <div class="alert">
                        Thanks for giving an Idea
                    </div>
                <?php endif; ?>
                <div class="form-mid">
                    <h3 class="title">Submit Idea</h3>
                    <form action="#" method="post">
                        <div class="field">
                            <input type="text" class="form-control" name="name" id="w3lName"
                                   placeholder="Name *optional"
                            >
                        </div>
                        <div class="field">
                            <input type="email" class="form-control" name="email" id="w3lSender" placeholder="Email"
                                   required="">
                        </div>
                        <textarea name="idea" class="form-control" id="w3lMessage" placeholder="Idea"
                                  required=""></textarea>
                        <button name="submit" type="submit" class="btn btn-contact">Send Idea</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->
</body>

</html>