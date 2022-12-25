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

    static create(req){
        return new Promise((resolve, reject)=>{
            const sql = `INSERT INTO students set?`;

            db.query(sql,req,(err,results)=>{
                const sql = `SELECT * FROM students WHERE id = ${results.insertId}`;
                db.query(sql,(err,results)=>{
                    resolve(results);
                });
            });
        });
    }

}

// export class student
module.exports = Student;