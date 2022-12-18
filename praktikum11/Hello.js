const express = require("express");
const app = express();

app.get("/",(req, res)=>{
    res.send("hello Express");
});

app.listen(3000);