    <style>
        h1{
        color: #954242;
        }
        body{
            background: linear-gradient(to right, rgb(67, 66, 66), #954242);
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .box{
            background-color: white;
            text-align: center;
            border-radius: 15px;
            padding: 20px;
            width: 500;
            border: 1px black;
            transition: transform 0.8s ease ;
        }
        .box:hover{
            transform: scale(1.2);
        }
    </style>
    <div class="box">
    <!--<img src="profile.jpg" class="pic" width="300" title="avril saliba graduation" alt="My Picture"> -->
    <h1>Welcome to My Car Store</h1>
    <form>
        <fieldset>
        <legend>Buy your Car</legend>
        <label for="Uname">Username:</label>
        <input type="text" id="Uname" placeholder="AvrilS">
        <br><br>
        <label>Password:</label>
        <input type="password">
        <br><br>
        <label >Birthday:</label>
        <input type="date">
        <br><br>
        <label for="">Select a car</label>
        <select id="cars">
            <option value="Civic">Civic</option>
            <option value="Lamborghini">Lamborghini</option>
            <option value="Vios">Vios</option>
            <option value="Jetour">Jetour</option>
        </select>
        <br><br>
        <input type="reset">
        <input type="submit">
        </fieldset>
    </form>
    </div>