// import database
const db = require("../config/database");

// membuat class student
class Student{
    /**
     * Membuat method static all
     * 
     */

    // solution with promise + async await
    static all(){
        // return promise sebagai solusi asynchronous
        return new Promise((resolve, reject)=>{
            const sql = "SELECT * FROM students";
            /**
             * Melakukan query menggunakan method query
             * Menerima 2 params : query dan callback
             */
            db.query(sql,(err,results) =>{
                resolve (results);
            });
        });
    }

    static async create(data){
        // Promise 1 : Melakukan insert data ke database
        const id = await new Promise((resolve, reject) => {
            const sql = "INSERT INTO students SET ?";
            db.query(sql,data,(err,results)=>{
                resolve(results.insertId);
            });
        });
        // Refactor promise 2 : get data by id
        const student = this.find(id);
        return student;
    }

    static find(id){
        return new Promise((resolve,reject) => {
            const sql = "SELECT * FROM students WHERE id = ?";
            db.query(sql,id,(err,results) => {
                // destructing array
                const [student] = results;
                resolve(student);
            });
        });
    }

    static async update(id,data){
        // return promise sebagai solusi asynchronous
        await new Promise((resolve, reject)=>{
            const sql = "UPDATE students SET ? WHERE id = ?";
            db.query(sql,[data,id],(err,results) => {
                resolve(results);
            });
        });

        const student = await this.find(id);
        return student;
    }

    static delete(id){
        return new Promise((resolve,reject) => {
            const sql = "DELETE FROM students WHERE id = ?";
            db.query(sql, id, (err,results) => {
                resolve(results);
            });
        });
    }

}

// export class student
module.exports = Student;