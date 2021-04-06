<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
        <Form action="/welcome" method="POST">
        @csrf
            <p>First name:</p>
            <input type="text" name="firstname"/>
            <p>Last name:</p>
            <input type="text" name="lastname"/>
            <p>Gender:</p>
                <input type="radio"/> Male<br/>
                <input type="radio"/> Female<br/>
                <input type="radio"/> Other<br/>
            <p>Nationality:</p>
            <select>
                <option>Indonesian</option>
                <option>Malaysian</option>
                <option>Singaporean</option>
                <option>American</option>
            </select>
            <p>Language Spoken:</p>
            <input type="checkbox"/>Bahasa Indonesia<br/>
            <input type="checkbox"/>English<br/>
            <input type="checkbox"/>Other<br/>
            <p>Bio:</p>
            <textarea rows="8" cols="25"></textarea><br/>
            <input type="submit" value="Sign Up"/>

        </Form>
    
    
</body>
</html>