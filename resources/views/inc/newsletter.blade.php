<html> 

<head> 
	<meta name="viewport"
	ontent="width=device-width, initial-scale=1, shrink-to-fit=no"> 

	<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> 

	<title>Aligning Buttons</title> 

	<style type="text/css"> 
		
		.newsletter {
        padding:0% 20% 3.5% 20%;
        background: #19beda;
    }

    .newsletter .content {
        max-width: 650px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 2; }
    .newsletter .content h4 {
        color: #243c4f;
        margin-bottom: 10px; }
    .newsletter .content .form-control {
        height:50px;
        border-color: #ffffff;
        border-radius left:40%;
    }
    .newsletter .content.form-control:focus {
        box-shadow: none;
        border: 2px solid #243c4f;
    }
    .newsletter .content .btn {
        min-height: 50px; 
        border-radius right:40%;
        background: #243c4f;
        color: #fff;
        font-weight:600;
        position: :right;
    }	
		 
	</style> 
</head> 

<body> 
        

<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">                
                <div class="content">
                
                    <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>

                    <div class="input-group">
                        <form method="POST">
                            {{ csrf_field()}}
                            <div class="row">
                                    <input type="email" name="email" required class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <input type="submit" value="Subscribe" class="btn" >
                                </span>
                            </div>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>
	
</body> 

</html>		