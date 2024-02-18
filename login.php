<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    body {
        padding: 0;
        margin: 0;
        background:url(image.jpeg) no-repeat ;
        background-size: cover;
    }
    
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: rgb(40, 197, 40);
        box-shadow: 2px 2px 10px rgb(220, 118, 118);
        
    }
    
    .main form {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: transparent;
        border: 1px solid white;
        padding: 20px;
        border-radius: 8px;
        backdrop-filter: blur(3px);
        transition: box-shadow 0.3s ease-in-out
    
    }
    
    .email,.password {
        margin-bottom: 15px;
    }
    
    button {    
        background: rgb(207, 202, 202);
        color: white;
        padding: 10px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 20px;
    }
    h1{
        font-size: 50px;
    }
    form{
        border: none;
        border-radius: 10;
    }
    input{
        width: 300px;
        height: 25px;
        border:none;
        border-radius: 20px;
        padding: 10px;
        outline: none;
        font-size: 15px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    #icon{
        font-size: 20px;
        margin-bottom: 0.01px;
    }
</style>    
</head>
<body>
    <div class="main">
        <form action="email">
            <h1>Login Page</h1>
            <div class="email">
                <p id="icon"><box-icon name='envelope' color='#f3f3f3'></box-icon></p> 
                <input type="email" placeholder="Email">
            </div>
            <div class="password">
                <p id="icon"><box-icon name='lock-alt' color='#f3f3f3' ></box-icon></p>
                <input type="password" placeholder="Password">
            </div>
            <div class="btn">
            </div>
            <button>Login</button>  
        </form>
    </div>
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>
</html>
