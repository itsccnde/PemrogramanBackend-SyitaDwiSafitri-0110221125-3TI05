// Import studentController
const StudentController = require("../controllers/StudentController");

// Import express
const express = require("express");

// Membuat object express
const router = express.Router();

/**
 * Membuat routing
 */
router.get("/",(req,res) => {
    res.send("Hello Express JS");
});

router.get("/students", StudentController.index);

router.post("/students", StudentController.store);

router.put("/students/:id", StudentController.update);

router.delete("/students/:id", StudentController.destroy);

// route untuk get detail resource
router.get("/students/:id", StudentController.show);

// Export router
module.exports = router;