// Import express
const express = require("express");

// Import router
const router = require("./routes/api");

// Membuat object express
const app = express();

// menggunakan middle
app.use(express.json());
app.use(express.urlencoded());

// menggunakan routing (router)
app.use(router);


// Mendefinisikan port
app.listen(3000);