function hitungPythagoras() {
    var a = parseFloat(document.getElementById("inputA").value);
    var b = document.getElementById("inputB").value;
    var c;

    if (b.charAt(0) === '√') {
        var bValue = parseFloat(b.slice(1));
        c = Math.sqrt(a * a + bValue);
    } else {
        var bValue = parseFloat(b);
        c = Math.sqrt(a * a + bValue * bValue);
    }

    if (Number.isInteger(c)) {
        document.getElementById("output").innerHTML = "Hasil : " + c;
    } else {
        document.getElementById("output").innerHTML = "Hasil : " + c.toFixed(2);
    }
}