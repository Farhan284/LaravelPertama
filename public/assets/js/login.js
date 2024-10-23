document.getElementById('FormLogin').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'farhan';
    const correctPassword = '123';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctUsername && password === correctPassword){
        alert('Login Berhasil');
        window.location.href = 'homepage';
    }else{
        alert('Login gagal');
    }
});
