<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
</head>

<body>

    <h2>ALl users</h2>
    <p>

    </p>


    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    @vite('resources/js/app.js')
    <script>
        window.axios.get('/api/users')
            .then((response) => {
                let users = response.data;
                console.log(users);
                // let pEl = document.createElement("p");
                // pEl.setAttribute('id')
            })
    </script>

    <script>
        setTimeout(() => {
            // console.log("hi")
            window.Echo.channel('users')
              .listen('UserCreatedEvent', (e) => {
                console.log(e);
              })
        }, 1000);

    </script>
</body>

</html>
