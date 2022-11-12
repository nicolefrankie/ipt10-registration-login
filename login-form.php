<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    body{
        background: #D6E4E5;
    }
    .contact-form {
        background: #fff;
        margin-top: 10%;
        margin-bottom: 5%;
        width: 40%;
    }
    .contact-form .form-control {
        border-radius:1rem;
    }
    .contact-form .form-group {
        position: relative;
        left: 100px;
    }
    .contact-image {
        text-align: center;
    }
    .contact-form form {
        padding: 14%;
        text-align: center;
    }
    .contact-form form .row {
         margin-bottom: -7%;
    }   
    .contact-form h3{
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #497174;
    }
    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #497174;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }
    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
    }
</style>

<body>
    <div class="container contact-form">
        <form method="POST" action="login.php">
            <h3>Login Form</h3>
            <div class="row"> 
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="identifier" class="form-control" placeholder="Username or Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Login" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>