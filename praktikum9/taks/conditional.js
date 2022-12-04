const nilai = 90;
let grade = "";

if(nilai > 90) {
    grade = "A";
}
else if (nilai > 80) {
    grade = "B";
}
else {
    grade = "C";
}

console.log(`Nilai anda: ${grade}`);

const age = 22;

// if(age > 21) {
//    console.log("Sudah Dewasa");
// }
// else{
//   console.log("Belum Deawa");
// }

// Menggunakan short conditional (ternary operator)
age > 21 ? console.log("Sudah Deawa") : console.log("Belum Dewasa");