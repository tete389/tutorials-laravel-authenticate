<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1>Login page test22</h1>
        <div class="mt-5">
            <button type="button" class="btn btn-primary" onclick="onLogin()">Login-Web</button>
            <button type="button" class="btn btn-primary" onclick="onRegister()">Register-Web</button>
            <button type="button" class="btn btn-primary" onclick="onLogout()">Logout-Web</button>
        </div>

        <div class="mt-5">
            <button type="button" class="btn btn-success" onclick="onLoginMember()">Login-Member</button>
            <button type="button" class="btn btn-success" onclick="onRegisterMember()">Register-Member</button>
            <button type="button" class="btn btn-success" onclick="onLogoutMember()">Logout-Member</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        async function onLogin() {
            const response = await fetch(`/api/auth/signin`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("[name='csrf-token']").content
                },
            })
            const result = await response.json()
            if (response.ok) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                }).then(e => {
                    location.href = "/"
                })
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }

        async function onLogout() {
            const response = await fetch(`/api/auth/signout`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("[name='csrf-token']").content
                },
            })
            const result = await response.json()
            if (response.ok) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }

        async function onRegister() {
            const response = await fetch(`/api/auth/register`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("[name='csrf-token']").content
                },
            })
            const result = await response.json()
            if (response.ok) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }

        async function onLoginMember() {
            const response = await fetch(`/api/auth/signinmember`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("[name='csrf-token']").content
                },
            })
            const result = await response.json()
            if (response.ok) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                }).then(e => {
                    location.href = "/"
                })
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }

        async function onLogoutMember() {
            const response = await fetch(`/api/auth/signoutmember`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("[name='csrf-token']").content
                },
            })
            const result = await response.json()
            if (response.ok) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }

        async function onRegisterMember() {
            const response = await fetch(`/api/auth/registermember`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("[name='csrf-token']").content
                },
            })
            const result = await response.json()
            if (response.ok) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            } else {
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: result.description,
                    showConfirmButton: false,
                    timer: 1000
                })
            }
        }
    </script>
</body>

</html>
