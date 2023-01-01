// import model student
const Student = require("../models/Student");


// Membuat Class StudentController
class StudentController {
  // menambah keyword async
        async index(req, res) {

          // Memanggil method static all dengan async await
          const students = await Student.all();

          // jika data array lebih dari 0
          if(students.lenght > 0){
            const data = {
              message: "Menampilkan semua students",
              data: students,
              };
              return res.status(200).json(data);
          }
          // else
          const data = {
            message: "Student is empyty",
            };
            return res.status(200).json(data);
        };

        async store(req, res) {
          // const {nama} = req.body;

          /**
           * Validasi sederhana
           * menghandle jika salah satu data tidak di kirim
           */

          // destructing object req.body
          const{nama, nim, email, jurusan} = req.body;

          // jika data undefined maka kirim response eror
          if(!nama || !nim || !email || !jurusan){
            const data = {
              message: "Semua data harus dikirim",
            };
  
            return res.status(422).json(data);
          }
          // else
          // Memanggil method static create dengan async await
          const students = await Student.create(req.body);
          
          const data = {
            message: `Menambahkan data student`,
            data: students,
          };

          return res.status(201).json(data);
        };

        async update(req, res) {
          const { id } = req.params;
          // const { nama } = req.body;
          // students[id] = nama;
          // mencari id student yang ingin di update
          const student = await Student.find(id);

          if(student){
            // melakukan update data
            const student = await Student.update(id, req.body);
            const data = {
              message: `Mengedit data students`,
              data: student,
            };
            res.status(200).json(data);
          }
          else{
            const data = {
              message:`Student not found`,
            };
            res.status(404).json(data);
          }
        }
        
        async destroy(req, res) {
          const { id } = req.params;
          const student = await Student.find(id);

          if(student){
            // melakukan hapus data
            await Student.delete(id);
            const data = {
              message: `Menghapus data students`,
            };
            res.status(200).json(data);
          }
          else{
            const data = {
              message:`Student not found`,
            };
            res.status(404).json(data);
          }
        }

        async show(req, res) {
          const { id } = req.params;
          // mencari id student yang ingin di update
          const student = await Student.find(id);

          if(student){
            const data = {
              message: `Menampilkan data students`,
              data: student,
            };
            res.status(200).json(data);
          }
          else{
            const data = {
              message:`Student not found`,
            };
            res.status(404).json(data);
          }
        }
}
// Membuat object StudentController
const object = new StudentController();

// Export object StudentController
module.exports = object;