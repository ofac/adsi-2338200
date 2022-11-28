const express = require("express")
const mongoose = require("mongoose")
const bodyParser = require("body-parser")
const cors = require("cors")
// create our express app
const app = express()

// database
const uri = "mongodb://localhost:27017/mongoadsi";

mongoose.connect(uri, {
    useNewUrlParser: true,
    useUnifiedTopology: true
  })
  .then(() => {
    console.log('MongoDB Connected…')
  })
  .catch(err => console.log(err))

// middleware
app.use(cors())
app.use(bodyParser.json())

// routes
app.get("/", (req,res)=>{
    res.send("my home page dey show sha")
})

const UsersRoute = require('./routes/Users')
app.use('/users', UsersRoute)

//start server
app.listen(3001, ()=>{
    console.log("listening at port:3001")
})   