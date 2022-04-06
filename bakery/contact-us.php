<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/header.php'; ?>

    <div class="contact-body">

        <!-- <p id="successText" style="color: blue; font-size: 30px; margin: 5px;"></p> -->

    <div class="contact-head">
        <img width="50px" height="50px"  src="./images/ssssssssssssssssss.png">
        <h1 class="contact">Contact US</h1>
        <p class="message" style="margin:30px 0">
            Do you have any questions? Please do not hesitate to
            contact us directly. <br>Our team will communicate with you within
            a matter of minutes to help you.
        </p>
    </div>

    <form class="row g-3 needs-validation"  style="justify-content:center" novalidate>
        <div class="col-md-7 m-3">
            <label for="validationCustom01" class="form-label" >First Name</label>
            <input placeholder="Enter your first name" type="text" class="form-control"
             id="validationCustom02"
                required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        <div class="col-md-7 m-3">
            <label for="validationCustom02" class="form-label">Last Name</label>
            <input placeholder="Enter your last name" type="text" class="form-control"
             id="validationCustom02"
                required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        <div class="col-md-7 m-3">
            <label for="validationCustom02" class="form-label">Subject</label>
            <input placeholder="Enter your message subject" type="text"
             class="form-control" id="validationCustom02"
                required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        <div class="col-md-7 m-3">
            <label for="validationTextarea" class="form-label">Your Message</label>
            <textarea type="text" class="form-control" id="validationCustom02" required
                placeholder="Required example textarea" required></textarea>
            <div class="valid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>

        <div class="button-send col-md-7 m-3">
            <button class="send-btn btn btn-primary"
             onclick="sentMail()" type="submit">Send</button>
        </div>

    </form>
</div>

<?php include 'includes/scripts.php' ?>
</body>
</html>
