function cek() {
  var x = document.getElementById("cek").value;
  var hasil = document.getElementById("hasil");
  hasil.innerHTML = " ";
  if (x <= 0 || x >= 21) {
    hasil.innerText = "Pilih bilangan bulat antara 1 sampai 20! ";
  } else if (x % 2 == 0) {
    var y = x / 2;
    for (i = y - 1; i > 1; i--) {
      y = y * i;
    }
    hasil.innerText = "Hasil faktorial dari " + x + " adalah " + y;
  } else if (x % 2 == 1) {
    var firstNum = 0,
      secondNum = 1;
    var next;
    for (var i = 0; i < x; i++) {
      next = firstNum + secondNum;
      firstNum = secondNum;
      secondNum = next;

      if (firstNum >= x * 10) {
        break;
      }
      hasil.innerHTML += " " + firstNum;
    }
  }
}
