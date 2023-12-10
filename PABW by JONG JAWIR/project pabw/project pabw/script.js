function login(username, password) {
    // Periksa apakah username dan password sesuai
    if (username === 'username' && password === 'password') {
      // Jika sesuai, tampilkan pesan berhasil login
      console.log('Login berhasil');
    } else {
      // Jika tidak sesuai, tampilkan pesan gagal login
      console.log('Username atau password salah');
    }
  }
  
  // Contoh penggunaan fungsi login
  login('username', 'password');

  document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah halaman refresh saat tombol "Sign Up" diklik
  
    // Ambil nilai input dari formulir
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
  
    // Lakukan validasi data yang diberikan
    if (username && password && email) {
      // Lakukan operasi pendaftaran di sini (misalnya, mengirim data ke server)
      console.log("Pendaftaran berhasil");
    } else {
      console.log("Mohon lengkapi semua data");
    }
  });

const closePopup = () => {
    popup.classList.remove("open.popup")
}

let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}
document.querySelectorAll('input[typr="nimber"]').forEach(inputNumber => {
    inputNumber.oninput = () =>{
        if(inputNumber.ariaValueMax.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
    };
})

document.addEventListener('DOMContentLoaded', function () {
  // Get the Contact Us button by ID
  const contactUsBtn = document.getElementById('contactUsBtn');

  // Add event listener for button click
  contactUsBtn.addEventListener('click', function () {
    // Redirect to contact.html
    window.location.href = 'contact.html';
  });
});